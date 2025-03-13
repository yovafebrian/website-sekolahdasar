<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SD NEGERI BULUSTALAN</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="fixed top-0 left-0 w-full bg-white shadow-md z-50">
        <div class="container mx-auto flex justify-between items-center p-4">
            <h1 class="text-xl font-bold text-blue-600">SD NEGERI BULUSTALAN</h1>
            
            <!-- Tombol Menu Mobile -->
            <button class="block md:hidden text-gray-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>

            <!-- Menu -->
            <ul class="hidden md:flex space-x-6">
                <li><a href="/" class="text-gray-700 hover:text-blue-500">Beranda</a></li>
                
                <!-- Dropdown Profile -->
                <li class="relative group">
                    <a href="#" class="text-gray-700 hover:text-blue-500">Profile ▾</a>
                    <ul class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:pointer-events-auto pointer-events-none transition-all duration-300">
                        <li><a href="/profile" class="block px-4 py-2 text-gray-700 hover:bg-blue-100">Profile Sekolah</a></li>
                        <li><a href="https://instagram.com" class="block px-4 py-2 text-gray-700 hover:bg-blue-100">Instagram</a></li>
                        <li><a href="/guru-karyawan" class="block px-4 py-2 text-gray-700 hover:bg-blue-100">Guru & Karyawan</a></li>
                    </ul>
                </li>

                <!-- Dropdown Akademik -->
                <li class="relative group">
                    <a href="/akademik" class="text-gray-700 hover:text-blue-500">Akademik ▾</a>
                    <ul class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:pointer-events-auto pointer-events-none transition-all duration-300">
                        <li><a href="tugas-daring" class="block px-4 py-2 text-gray-700 hover:bg-blue-100">Tugas Daring</a></li>
                    </ul>
                </li>

                <li><a href="/kontak" class="text-gray-700 hover:text-blue-500">Kontak</a></li>
            </ul>
        </div>
    </nav>

</body>
</html>
