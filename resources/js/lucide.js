import { createIcons, icons } from 'lucide';

window.lucide = { createIcons, icons };

document.addEventListener('DOMContentLoaded', function() {
    createIcons({
        icons: icons
    });
});
