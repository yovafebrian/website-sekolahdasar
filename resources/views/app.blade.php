<!DOCTYPE html>
<html lang="id" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SD Negri Pendrikan Lor 03</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script>
        // Inisialisasi tema segera untuk menghindari flash
        (function() {
            const savedTheme = localStorage.getItem('theme') || 
                             (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
            document.documentElement.classList.add(savedTheme);
        })();
    </script>
</head>
<body class="flex flex-col min-h-screen bg-gray-100 dark:bg-gray-900 transition-colors duration-300">
    @include('components.navbar')

    <main class="flex-grow">
        @yield('content')
    </main>

    @include('components.footer')

    <script>
        // Fungsi global untuk toggle tema
        window.toggleTheme = function() {
            const html = document.documentElement;
            const isDark = html.classList.contains('dark');
            
            html.classList.toggle('dark', !isDark);
            localStorage.setItem('theme', isDark ? 'light' : 'dark');
            
            updateThemeIcons(!isDark);
        };

        // Fungsi untuk update ikon tema
        function updateThemeIcons(isDark) {
            const icon = isDark ? `
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            ` : `
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                </svg>
            `;
            
            document.querySelectorAll('.theme-toggle').forEach(btn => {
                btn.innerHTML = icon;
            });
        }

        // Inisialisasi saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            updateThemeIcons(document.documentElement.classList.contains('dark'));
        });
    </script>
</body>
</html>