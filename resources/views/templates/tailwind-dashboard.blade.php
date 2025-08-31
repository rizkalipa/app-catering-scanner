<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nampan makanan discan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        teal: {
                            500: '#14b8a6',
                            600: '#0d9488'
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 min-h-screen">
<div class="container mx-auto p-4 max-w-7xl">
    <!-- Header -->
    <div class="bg-white rounded-lg shadow-sm p-4 mb-6">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Nampan makanan discan</h1>
                <div class="flex flex-col sm:flex-row gap-2 sm:gap-4 text-sm text-gray-500 mt-1">
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L10 9.586V6z" clip-rule="evenodd"/>
                            </svg>
                            09 Agustus 2025 18.01.35
                        </span>
                    <span class="flex items-center gap-1">
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                            Online
                        </span>
                </div>
            </div>
            <div class="flex flex-col items-end">
                <div class="flex items-center gap-2 text-green-600 text-sm">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    System Status
                </div>
                <span class="text-green-600 font-semibold">Optimal</span>
                <span class="text-xs text-gray-500">Total Queue: 111 pax</span>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Left Section - Line Stats -->
        <div class="lg:col-span-2">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                <!-- Line 1 -->
                <div class="bg-white rounded-lg shadow-sm p-6 border-l-4 border-teal-500">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-lg font-semibold text-gray-700">Line 1</h3>
                        <div class="flex items-center gap-2">
                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">active</span>
                            <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="text-4xl font-bold text-teal-600 mb-2">49</div>
                    <div class="text-sm text-gray-500 mb-4">pax</div>
                    <div class="space-y-2">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">Utilization</span>
                            <span class="font-medium">49.0%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-teal-500 h-2 rounded-full" style="width: 49%"></div>
                        </div>
                        <div class="text-xs text-gray-500">Max: 100</div>
                    </div>
                </div>

                <!-- Line 2 -->
                <div class="bg-white rounded-lg shadow-sm p-6 border-l-4 border-cyan-500">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-lg font-semibold text-gray-700">Line 2</h3>
                        <div class="flex items-center gap-2">
                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">active</span>
                            <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="text-4xl font-bold text-cyan-600 mb-2">40</div>
                    <div class="text-sm text-gray-500 mb-4">pax</div>
                    <div class="space-y-2">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">Utilization</span>
                            <span class="font-medium">40.0%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-cyan-500 h-2 rounded-full" style="width: 40%"></div>
                        </div>
                        <div class="text-xs text-gray-500">Max: 100</div>
                    </div>
                </div>

                <!-- Line 3 -->
                <div class="bg-white rounded-lg shadow-sm p-6 border-l-4 border-blue-500">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-lg font-semibold text-gray-700">Line 3</h3>
                        <div class="flex items-center gap-2">
                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">active</span>
                            <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 6a2 2 0 110-4 2 2 0 110 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="text-4xl font-bold text-blue-600 mb-2">22</div>
                    <div class="text-sm text-gray-500 mb-4">pax</div>
                    <div class="space-y-2">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">Utilization</span>
                            <span class="font-medium">22.0%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-500 h-2 rounded-full" style="width: 22%"></div>
                        </div>
                        <div class="text-xs text-gray-500">Max: 100</div>
                    </div>
                </div>
            </div>

            <!-- Menu Information -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold text-gray-700">Informasi Menu</h3>
                    <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.828-2.828z"/>
                    </svg>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <span class="text-gray-600">ID Menu:</span>
                        <span class="font-bold text-2xl">05</span>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <span class="text-gray-600">Menu:</span>
                        <span class="font-medium">Senin, 19 Mei 2025</span>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <span class="text-gray-600">Jumlah:</span>
                        <span class="font-medium">3.431 pax</span>
                    </div>
                </div>
                <div class="mt-4 flex justify-center">
                    <div class="bg-blue-100 p-4 rounded-lg flex items-center gap-3">
                        <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                            </svg>
                        </div>
                        <div class="text-green-600">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Section - Scanning and Activity -->
        <div class="space-y-6">
            <!-- Total Scan Card -->
            <div class="bg-gradient-to-br from-teal-500 to-teal-600 rounded-lg shadow-lg p-6 text-white">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-lg font-semibold">Total scan</h3>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"/>
                    </svg>
                </div>
                <div class="text-4xl font-bold mb-2">111</div>
                <div class="flex items-center gap-2 text-teal-100">
                    <span class="text-sm">pax</span>
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="text-xs text-teal-100 mt-2">Last updated: 18.01.33</div>
            </div>

            <!-- Scan Distribution -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <div class="grid grid-cols-2 gap-4">
                    <!-- Porsi A -->
                    <div class="text-center">
                        <h4 class="text-sm text-gray-600 mb-2">Total scan porsi A</h4>
                        <div class="text-3xl font-bold text-gray-400 mb-2">0</div>
                        <div class="text-xs text-gray-500 mb-3">pax</div>
                        <div class="text-xs text-gray-500">0.0%</div>
                    </div>

                    <!-- Porsi B -->
                    <div class="text-center">
                        <h4 class="text-sm text-gray-600 mb-2">Total scan porsi B</h4>
                        <div class="text-3xl font-bold text-teal-600 mb-2">111</div>
                        <div class="text-xs text-gray-500 mb-3">pax</div>
                        <div class="w-full bg-gray-200 rounded-full h-1 mb-2">
                            <div class="bg-teal-500 h-1 rounded-full w-full"></div>
                        </div>
                        <div class="text-xs text-gray-500">100.0%</div>
                    </div>
                </div>
            </div>

            <!-- Reset Button -->
            <button class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-200 flex items-center justify-center gap-2">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"/>
                </svg>
                Reset Data Scan
            </button>

            <!-- Activity Log -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <div class="flex items-center gap-3 mb-4">
                    <span><i data-lucide="activity"></i></span>
                    <h3 class="text-lg font-semibold text-gray-700">Activity Log</h3>
                </div>
                <div class="space-y-3">
                    <div class="flex items-start gap-3 p-3 bg-gray-50 rounded-lg">
                        <div class="w-2 h-2 bg-green-500 rounded-full mt-2"></div>
                        <div class="flex-1">
                            <div class="font-medium text-gray-800">Scan Completed</div>
                            <div class="text-sm text-gray-600">Portion B scanned for Line 2</div>
                            <div class="text-xs text-gray-500">17.56</div>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 p-3 bg-gray-50 rounded-lg">
                        <div class="w-2 h-2 bg-blue-500 rounded-full mt-2"></div>
                        <div class="flex-1">
                            <div class="font-medium text-gray-800">Queue Updated</div>
                            <div class="text-sm text-gray-600">Line 1 count increased to 49</div>
                            <div class="text-xs text-gray-500">17.51</div>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 p-3 bg-gray-50 rounded-lg">
                        <div class="w-2 h-2 bg-gray-500 rounded-full mt-2"></div>
                        <div class="flex-1">
                            <div class="font-medium text-gray-800">System Check</div>
                            <div class="text-sm text-gray-600">All systems operational</div>
                            <div class="text-xs text-gray-500">17.46</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    lucide.createIcons();

    // Simulate real-time updates
    function updateCounts() {
        const lines = [
            { element: document.querySelector('[data-line="1"]'), current: 49, max: 100 },
            { element: document.querySelector('[data-line="2"]'), current: 40, max: 100 },
            { element: document.querySelector('[data-line="3"]'), current: 22, max: 100 }
        ];

        // Small random updates every few seconds
        setInterval(() => {
            lines.forEach((line, index) => {
                const change = Math.floor(Math.random() * 3) - 1; // -1, 0, or 1
                const newValue = Math.max(0, Math.min(100, line.current + change));
                if (newValue !== line.current) {
                    line.current = newValue;
                    updateLineDisplay(index + 1, newValue);
                }
            });

            // Update total
            const total = lines.reduce((sum, line) => sum + line.current, 0);
            updateTotal(total);
        }, 5000);
    }

    function updateLineDisplay(lineNumber, value) {
        const lineCards = document.querySelectorAll('.grid > div');
        const lineCard = lineCards[lineNumber - 1];
        const countElement = lineCard.querySelector('.text-4xl');
        const progressBar = lineCard.querySelector('.h-2:not(.bg-gray-200)');
        const percentageElement = lineCard.querySelector('.font-medium');

        countElement.textContent = value;
        progressBar.style.width = value + '%';
        percentageElement.textContent = value + '.0%';
    }

    function updateTotal(total) {
        const totalElement = document.querySelector('.text-4xl.font-bold.mb-2');
        if (totalElement) {
            totalElement.textContent = total;
        }
    }

    // Initialize real-time updates
    // updateCounts();

    // Reset button functionality
    document.querySelector('button').addEventListener('click', function() {
        [1, 2, 3].forEach(lineNumber => {
            updateLineDisplay(lineNumber, 0);
        });
        updateTotal(0);

        // Add activity log entry
        const activityLog = document.querySelector('.space-y-3');
        const newActivity = document.createElement('div');
        newActivity.className = 'flex items-start gap-3 p-3 bg-red-50 rounded-lg';
        newActivity.innerHTML = `
                <div class="w-2 h-2 bg-red-500 rounded-full mt-2"></div>
                <div class="flex-1">
                    <div class="font-medium text-gray-800">Data Reset</div>
                    <div class="text-sm text-gray-600">All scan data has been reset</div>
                    <div class="text-xs text-gray-500">${new Date().toLocaleTimeString('en-GB', {hour12: false}).slice(0, 5)}</div>
                </div>
            `;
        activityLog.insertBefore(newActivity, activityLog.firstChild);
    });
</script>
</body>
</html>
