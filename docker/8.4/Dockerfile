FROM ubuntu:24.04

# Build arguments for better caching
ARG WWWGROUP=1000
ARG NODE_VERSION=22
ARG PHP_VERSION=8.4

ENV DEBIAN_FRONTEND=noninteractive
ENV TZ=UTC
ENV SUPERVISOR_PHP_COMMAND="/usr/bin/php -d variables_order=EGPCS /var/www/html/artisan serve --host=0.0.0.0 --port=80"
ENV SUPERVISOR_PHP_USER="sail"
ENV PLAYWRIGHT_BROWSERS_PATH=0
ENV PUPPETEER_SKIP_CHROMIUM_DOWNLOAD=false
ENV PUPPETEER_CACHE_DIR=/opt/puppeteer-cache

# Set timezone (early layer for better caching)
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# Configure apt for better performance (rarely changes)
RUN echo "Acquire::http::Pipeline-Depth 0;" > /etc/apt/apt.conf.d/99custom && \
    echo "Acquire::http::No-Cache true;" >> /etc/apt/apt.conf.d/99custom && \
    echo "Acquire::BrokenProxy true;" >> /etc/apt/apt.conf.d/99custom

# Install base system packages (layer 1 - stable dependencies)
RUN apt-get update && \
    apt-get install -y --no-install-recommends \
        ca-certificates \
        curl \
        gnupg \
        lsb-release \
        software-properties-common \
        apt-transport-https && \
    rm -rf /var/lib/apt/lists/*

# Add repositories (layer 2 - repository setup)
RUN mkdir -p /etc/apt/keyrings && \
    # PHP repository
    curl -sS 'https://keyserver.ubuntu.com/pks/lookup?op=get&search=0xb8dc7e53946656efbce4c1dd71daeaab4ad4cab6' | gpg --dearmor | tee /etc/apt/keyrings/ppa_ondrej_php.gpg > /dev/null && \
    echo "deb [signed-by=/etc/apt/keyrings/ppa_ondrej_php.gpg] https://ppa.launchpadcontent.net/ondrej/php/ubuntu noble main" > /etc/apt/sources.list.d/ppa_ondrej_php.list && \
    # Node.js repository
    curl -fsSL https://deb.nodesource.com/gpgkey/nodesource-repo.gpg.key | gpg --dearmor -o /etc/apt/keyrings/nodesource.gpg && \
    echo "deb [signed-by=/etc/apt/keyrings/nodesource.gpg] https://deb.nodesource.com/node_${NODE_VERSION}.x nodistro main" > /etc/apt/sources.list.d/nodesource.list && \
    # PostgreSQL repository
    curl -sS https://www.postgresql.org/media/keys/ACCC4CF8.asc | gpg --dearmor | tee /etc/apt/keyrings/pgdg.gpg >/dev/null && \
    echo "deb [signed-by=/etc/apt/keyrings/pgdg.gpg] http://apt.postgresql.org/pub/repos/apt noble-pgdg main" > /etc/apt/sources.list.d/pgdg.list

# Update package lists after adding repositories
RUN apt-get update

# Install system utilities and media libraries (layer 3 - system tools)
RUN apt-get install -y --no-install-recommends \
        apache2 \
        libapache2-mod-php${PHP_VERSION} \
        gosu \
        zip \
        unzip \
        supervisor \
        libcap2-bin \
        dnsutils \
        fswatch \
        ffmpeg \
        librsvg2-bin && \
    rm -rf /var/lib/apt/lists/*

# Install PHP and extensions (layer 5 - PHP)
RUN apt-get update && \
    apt-get install -y --no-install-recommends \
        php${PHP_VERSION}-cli \
        php${PHP_VERSION}-dev \
        php${PHP_VERSION}-pgsql \
        php${PHP_VERSION}-sqlite3 \
        php${PHP_VERSION}-gd \
        php${PHP_VERSION}-curl \
        php${PHP_VERSION}-imap \
        php${PHP_VERSION}-mbstring \
        php${PHP_VERSION}-xml \
        php${PHP_VERSION}-zip \
        php${PHP_VERSION}-bcmath \
        php${PHP_VERSION}-soap \
        php${PHP_VERSION}-intl \
        php${PHP_VERSION}-readline \
        php${PHP_VERSION}-ldap \
        php${PHP_VERSION}-msgpack \
        php${PHP_VERSION}-igbinary \
        php${PHP_VERSION}-redis \
        php${PHP_VERSION}-swoole \
        php${PHP_VERSION}-memcached \
        php${PHP_VERSION}-pcov \
        php${PHP_VERSION}-imagick \
        php${PHP_VERSION}-xdebug \
        postgresql-client-17 && \
    rm -rf /var/lib/apt/lists/*

# Install Node.js and global packages (layer 6 - Node.js)
RUN apt-get update && \
    apt-get install -y --no-install-recommends nodejs && \
    npm i puppeteer && \
    npx puppeteer browsers install chrome && \
    npx puppeteer browsers install chrome-headless-shell && \
    rm -rf /var/lib/apt/lists/*

# Install Composer (layer 7 - Composer - cached if version doesn't change)
RUN curl -sLS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer

# Install global Node.js packages and Puppeteer (layer 8 - Node packages)
ENV PUPPETEER_SKIP_CHROMIUM_DOWNLOAD=true

RUN apt-get update && apt-get install gnupg wget -y && \
    wget --quiet --output-document=- https://dl-ssl.google.com/linux/linux_signing_key.pub | gpg --dearmor > /etc/apt/trusted.gpg.d/google-archive.gpg && \
    sh -c 'echo "deb [arch=amd64] http://dl.google.com/linux/chrome/deb/ stable main" >> /etc/apt/sources.list.d/google.list' && \
    apt-get update && \
    apt-get install -y --no-install-recommends \
        google-chrome-stable \
        libx11-xcb1 \
        libxcomposite1 \
        libasound2t64 \
        libatk1.0-0 \
        libatk-bridge2.0-0 \
        libcairo2 \
        libcups2 \
        libdbus-1-3 \
        libexpat1 \
        libfontconfig1 \
        libgbm1 \
        libgcc1 \
        libglib2.0-0 \
        libgtk-3-0 \
        libnspr4 \
        libpango-1.0-0 \
        libpangocairo-1.0-0 \
        libstdc++6 \
        libx11-6 \
        libx11-xcb1 \
        libxcb1 \
        libxcomposite1 \
        libxcursor1 \
        libxdamage1 \
        libxext6 \
        libxfixes3 \
        libxi6 \
        libxrandr2 \
        libxrender1 \
        libxss1 \
        libxtst6 && \
    rm -rf /var/lib/apt/lists/*

# Set PHP capabilities (layer 9 - PHP configuration)
RUN setcap "cap_net_bind_service=+ep" /usr/bin/php${PHP_VERSION}

# Create user and group (layer 10 - User setup)
RUN userdel -r ubuntu 2>/dev/null || true && \
    groupadd --force -g $WWWGROUP sail && \
    useradd -ms /bin/bash --no-user-group -g $WWWGROUP -u 1337 sail

# Configure Apache (layer 11 - Apache configuration)
RUN a2enmod rewrite && \
    a2enmod php${PHP_VERSION} && \
    sed -i 's/^\(User\|Group\).*/\1 sail/' /etc/apache2/apache2.conf && \
    sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf && \
    sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf && \
    echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Set working directory
WORKDIR /var/www/html

# Copy configuration files (layer 11 - Config files - change frequently)
COPY start-container /usr/local/bin/start-container
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY php.ini /etc/php/${PHP_VERSION}/apache2/conf.d/99-sail.ini
COPY php.ini /etc/php/${PHP_VERSION}/cli/conf.d/99-sail.ini

# Set permissions
RUN chmod +x /usr/local/bin/start-container && \
    chown -R sail:sail /var/www/html && \
        chmod -R 755 /var/www/html && \
        mkdir -p /var/www/html/storage /var/www/html/bootstrap/cache && \
        chown -R sail:sail /var/www/html/storage /var/www/html/bootstrap/cache && \
        chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Final cleanup
RUN apt-get autoremove -y && \
    apt-get autoclean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/* /usr/share/man/* /var/cache/debconf/*

EXPOSE 80/tcp

ENTRYPOINT ["start-container"]
