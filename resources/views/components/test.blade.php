<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SD NEGERI BULUSTALAN</title>
    @vite('resources/css/app.css')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.querySelector('#menu-button');
            const menu = document.querySelector('#menu');
            
            // Mobile menu toggle
            menuButton.addEventListener('click', function() {
                const isExpanded = this.getAttribute('aria-expanded') === 'true';
                this.setAttribute('aria-expanded', !isExpanded);
                menu.classList.toggle('hidden');
                document.body.classList.toggle('overflow-hidden');
            });
            
            // Handle dropdowns on mobile
            document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
                toggle.addEventListener('click', function(e) {
                    if (window.innerWidth < 768) { // Only for mobile
                        e.preventDefault();
                        const dropdown = this.nextElementSibling;
                        const isExpanded = this.getAttribute('aria-expanded') === 'true';
                        
                        // Close other dropdowns first
                        document.querySelectorAll('.dropdown-menu').forEach(d => {
                            if (d !== dropdown) {
                                d.classList.add('hidden');
                                d.previousElementSibling.setAttribute('aria-expanded', 'false');
                            }
                        });
                        
                        // Toggle current dropdown
                        this.setAttribute('aria-expanded', !isExpanded);
                        dropdown.classList.toggle('hidden');
                    }
                });
            });
            
            // Close menu when clicking outside
            document.addEventListener('click', function(e) {
                if (!menu.contains(e.target) && e.target !== menuButton) {
                    if (window.innerWidth < 768) {
                        menu.classList.add('hidden');
                        menuButton.setAttribute('aria-expanded', 'false');
                        document.body.classList.remove('overflow-hidden');
                    }
                }
            });
            
            // Reset on window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 768) {
                    menu.classList.remove('hidden');
                    menuButton.setAttribute('aria-expanded', 'false');
                    document.body.classList.remove('overflow-hidden');
                    
                    // Reset all dropdowns
                    document.querySelectorAll('.dropdown-menu').forEach(d => {
                        d.classList.remove('hidden');
                        d.previousElementSibling.setAttribute('aria-expanded', 'false');
                    });
                }
            });
        });
    </script>
</head>
<body class="bg-gray-50">

    <!-- Navbar -->
    <nav class="fixed top-0 left-0 w-full bg-white/90 backdrop-blur-md shadow-sm z-50 border-b border-gray-100">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <a href="/" class="flex items-center text-2xl font-bold text-blue-600 transition-all duration-300 hover:scale-[1.02]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                    SDN BULUSTALAN
                </a>
                
                <!-- Mobile Menu Button -->
                <button id="menu-button" class="md:hidden p-2 rounded-md text-gray-700 hover:text-blue-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all" aria-expanded="false" aria-label="Toggle menu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>

                <!-- Desktop Menu -->
                <div id="menu" class="hidden md:flex items-center space-x-1">
                    <ul class="flex flex-col md:flex-row md:space-x-1">
                        <li>
                            <a href="/" class="flex items-center px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-lg transition-all duration-300 font-medium">
                                Beranda
                            </a>
                        </li>
                        <li>
                            <a href="/kegiatan" class="flex items-center px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-lg transition-all duration-300 font-medium">
                                Kegiatan
                            </a>
                        </li>

                        <!-- Profile Dropdown -->
                        <li class="relative group">
                            <button class="dropdown-toggle flex items-center px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-lg transition-all duration-300 font-medium group" aria-expanded="false">
                                Profile
                                <svg class="ml-1 w-4 h-4 transform group-hover:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <ul class="dropdown-menu absolute left-0 mt-2 w-48 bg-white shadow-xl rounded-lg py-1 z-10 hidden md:block md:opacity-0 md:group-hover:opacity-100 md:transition-opacity md:duration-300">
                                <li>
                                    <a href="/profile" class="block px-4 py-2 text-gray-700 hover:text-blue-600 hover:bg-gray-50 transition-all duration-200">
                                        Profile Sekolah
                                    </a>
                                </li>
                                <li>
                                    <a href="https://instagram.com" class="block px-4 py-2 text-gray-700 hover:text-blue-600 hover:bg-gray-50 transition-all duration-200">
                                        Instagram
                                    </a>
                                </li>
                                <li>
                                    <a href="/guru-karyawan" class="block px-4 py-2 text-gray-700 hover:text-blue-600 hover:bg-gray-50 transition-all duration-200">
                                        Guru & Karyawan
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Akademik Dropdown -->
                        <li class="relative group">
                            <button class="dropdown-toggle flex items-center px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-lg transition-all duration-300 font-medium group" aria-expanded="false">
                                Akademik
                                <svg class="ml-1 w-4 h-4 transform group-hover:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <ul class="dropdown-menu absolute left-0 mt-2 w-48 bg-white shadow-xl rounded-lg py-1 z-10 hidden md:block md:opacity-0 md:group-hover:opacity-100 md:transition-opacity md:duration-300">
                                <li>
                                    <a href="/tugas-daring" class="block px-4 py-2 text-gray-700 hover:text-blue-600 hover:bg-gray-50 transition-all duration-200">
                                        Tugas Daring
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="/kontak" class="flex items-center px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-lg transition-all duration-300 font-medium">
                                Kontak
                            </a>
                        </li>
                        <li>
                            <a href="/pengaduan" class="flex items-center px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-lg transition-all duration-300 font-medium">
                                Pengaduan
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

</body>
</html>