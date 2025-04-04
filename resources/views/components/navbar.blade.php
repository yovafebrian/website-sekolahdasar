<nav class="fixed top-0 left-0 w-full bg-white/80 dark:bg-gray-900/90 backdrop-blur-md shadow-md z-50 transition-colors duration-300">
    <div class="container  flex justify-between items-center p-4">
        <!-- Logo -->
        <a href="/" class="flex items-center text-2xl font-bold text-blue-600 dark:text-blue-400 transition-all duration-300 hover:scale-[1.02]">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2 text-blue-500 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
            SDN PENRIKAN LOR 03
        </a>
        
        <!-- Right Side (Menu + Theme Toggle) -->
        <div class="flex items-center space-x-4">
            <!-- Theme Toggle -->
            <button onclick="toggleTheme()" class="theme-toggle p-2 rounded-full bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 transition-colors duration-300">
                
            </button>
            
            <!-- Mobile Menu Button -->
            <button id="menu-button" class="md:hidden text-gray-700 dark:text-gray-300 focus:outline-none" aria-expanded="false" aria-controls="menu">
                <svg id="menu-icon" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg id="close-icon" class="w-8 h-8 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Desktop Menu -->
        <div id="menu" class="hidden md:flex items-center">
            <ul class="flex flex-col md:flex-row md:space-x-6 absolute md:relative top-full left-0 w-full md:w-auto bg-white dark:bg-gray-800 md:bg-transparent shadow-lg md:shadow-none md:static transition-colors duration-300">
                <li><a href="/" class="block py-2 px-4 text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 transition-colors">Beranda</a></li>
                <li><a href="/kegiatan" class="block py-2 px-4 text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 transition-colors">Kegiatan</a></li>

                <!-- Profile Dropdown -->
                <li class="relative group">
                    <button class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 transition-colors">
                        Profile
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <ul class="absolute left-0 mt-2 w-48 bg-white dark:bg-gray-700 shadow-lg rounded-md py-1 z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 -translate-y-2">
                        <li><a href="/profile" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-gray-600 transition-colors">Profile Sekolah</a></li>
                        <li><a href="https://instagram.com" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-gray-600 transition-colors">Instagram</a></li>
                        <li><a href="/guru-karyawan" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-gray-600 transition-colors">Guru & Karyawan</a></li>
                    </ul>
                </li>

                <!-- Akademik Dropdown -->
                <li class="relative group">
                    <button class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 transition-colors">
                        Akademik
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <ul class="absolute left-0 mt-2 w-48 bg-white dark:bg-gray-700 shadow-lg rounded-md py-1 z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 -translate-y-2">
                        <li><a href="/tugas-daring" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-gray-600 transition-colors">Tugas Daring</a></li>
                    </ul>
                </li>

                <!-- PPDB Dropdown -->
                <li class="relative group">
                    <button class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 transition-colors">
                        PPDB
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <ul class="absolute left-0 mt-2 w-48 bg-white dark:bg-gray-700 shadow-lg rounded-md py-1 z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 -translate-y-2">
                        <li><a href="https://arsip.siap-ppdb.com/" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-gray-600 transition-colors">INFO PPDB</a></li>
                        <li><a href="https://ppd.semarangkota.go.id/sd" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-gray-600 transition-colors">LINK PENDAFTARAN</a></li>
                        <li><a href="https://sangjuara.semarangkota.go.id/kejuaraan_siswa" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-gray-600 transition-colors">SANG JUARA</a></li>
                    </ul>
                </li>

                <!-- Dropdown Kontak -->
                <li class="relative group">
                    <button class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 transition-colors">
                        Kontak Kami 
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <ul class="absolute left-0 mt-2 w-48 bg-white dark:bg-gray-700 shadow-lg rounded-md py-1 z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 -translate-y-2">
                        <li><a href="/kontak" class="block py-2 px-4 text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 transition-colors">Kontak</a></li>
                        <li><a href="/pengaduan" class="block py-2 px-4 text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 transition-colors">Pengaduan</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('/admin/login') }}" class="block py-2 px-4 text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 transition-colors">
                        Login Admin
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuButton = document.querySelector('#menu-button');
        const menu = document.querySelector('#menu');
        const menuIcon = document.querySelector('#menu-icon');
        const closeIcon = document.querySelector('#close-icon');

        // Toggle mobile menu
        menuButton.addEventListener('click', function() {
            const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
            menuButton.setAttribute('aria-expanded', !isExpanded);
            menu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });

        // Close menu when clicking outside on responsive design
        document.addEventListener('click', function(event) {
            if (window.innerWidth < 768) {
                const isClickInside = menu.contains(event.target) || menuButton.contains(event.target);
                if (!isClickInside && !menu.classList.contains('hidden')) {
                    menu.classList.add('hidden');
                    menuButton.setAttribute('aria-expanded', 'false');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            }
        });

        // Handle dropdowns on responsive design
        document.querySelectorAll('li.group').forEach(item => {
            const button = item.querySelector('button');
            const dropdown = item.querySelector('ul');

            if (window.innerWidth < 768) {
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    dropdown.classList.toggle('hidden');
                    dropdown.classList.toggle('block');
                });
            }
        });

        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 768) {
                menu.classList.remove('hidden');
                menuButton.setAttribute('aria-expanded', 'false');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
                
                // Hide all mobile dropdowns
                document.querySelectorAll('li.group ul').forEach(dropdown => {
                    dropdown.classList.add('hidden');
                    dropdown.classList.remove('block');
                });
            }
        });
    });
</script>