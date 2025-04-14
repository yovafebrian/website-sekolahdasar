@extends('app')

@section('content')
<div class="bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto px-4 py-12 mt-8">
        <!-- Judul Halaman -->
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl font-bold text-blue-800 dark:text-white mb-4">Hubungi Kami</h1>
            <div class="w-20 h-1 bg-blue-600 dark:bg-blue-500 mx-auto"></div>
            <p class="text-gray-600 dark:text-gray-300 mt-4 max-w-2xl mx-auto">
                Silakan hubungi kami melalui informasi kontak di bawah ini atau kunjungi langsung sekolah kami.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 lg:gap-12">
            <!-- Informasi Kontak -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 lg:p-8 transition-all duration-300">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">Informasi Kontak</h2>
                
                <!-- Alamat -->
                <div class="flex items-start mb-6">
                    <div class="bg-blue-100 dark:bg-blue-900/30 p-3 rounded-lg mr-4 text-blue-600 dark:text-blue-400">
                        <i class="fas fa-map-marker-alt text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800 dark:text-white mb-1">Alamat Sekolah</h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            Jl. Indraprasta No. 3 Kelurahan Pendrikan Lor<br>
                            Kecamatan Semarang Tengah<br>
                            Kota Semarang Prov. Jawa Tengah<br>
                            Indonesia, 50134
                        </p>
                    </div>
                </div>
                
                <!-- Telepon -->
                <div class="flex items-start mb-6">
                    <div class="bg-blue-100 dark:bg-blue-900/30 p-3 rounded-lg mr-4 text-blue-600 dark:text-blue-400">
                        <i class="fas fa-phone-alt text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800 dark:text-white mb-1">Telepon</h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            <span class="block">Kantor Sekolah: (024)-3514207</span>
                            <span class="block">Tata Usaha: </span>
                            <span class="block">Kepala Sekolah: </span>
                        </p>
                    </div>
                </div>
                
                <!-- Email -->
                <div class="flex items-start mb-6">
                    <div class="bg-blue-100 dark:bg-blue-900/30 p-3 rounded-lg mr-4 text-blue-600 dark:text-blue-400">
                        <i class="fas fa-envelope text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800 dark:text-white mb-1">Email</h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            <span class="block">Email Resmi:sdnpendrikanlor03@gmail.com</span>
                        </p>
                    </div>
                </div>
                
                <!-- Jam Operasional -->
                <div class="flex items-start">
                    <div class="bg-blue-100 dark:bg-blue-900/30 p-3 rounded-lg mr-4 text-blue-600 dark:text-blue-400">
                        <i class="fas fa-clock text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800 dark:text-white mb-1">Jam Operasional</h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            <span class="block">Senin - Kamis : Pukul 07.30 - 15.50 WIB</span>
                            <span class="block">Jumat : Pukul 07.30 - 11.30 WIB</span>
                            <span class="block">Minggu & Hari Libur: Tutup</span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Peta Lokasi -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden transition-all duration-300">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white p-6 lg:p-8">Lokasi Sekolah</h2>
                <div class="h-80 w-full">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.800714062149!2d110.4067743153736!3d-6.914377769425419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f4f1b1d3f3a5%3A0x1e3a1b1b1b1b1b1b!2sSDN%20Bulustalan!5e0!3m2!1sen!2sid!4v1620000000000!5m2!1sen!2sid" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy"
                        class="dark:filter dark:brightness-90 dark:contrast-110">
                    </iframe>
                </div>
                <div class="p-6 lg:p-8">
                    <a href="https://maps.app.goo.gl/HnNfP8mQh4PgeoNt7" 
                       target="_blank" 
                       class="inline-flex items-center px-4 py-2 bg-blue-600 dark:bg-blue-700 text-white rounded-lg hover:bg-blue-700 dark:hover:bg-blue-800 transition-colors duration-300">
                        <i class="fas fa-directions mr-2"></i>
                        Buka di Google Maps
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection