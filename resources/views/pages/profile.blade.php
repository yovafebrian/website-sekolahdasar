@extends('app')

@section('content')
<div class="bg-gradient-to-b from-blue-50 to-white">
    <!-- Tentang Sekolah -->
    <section id="tentang" class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2 scroll-reveal opacity-0 translate-y-10 transition-all duration-500 ease-out">
                    <div class="relative rounded-xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1588072432836-e10032774350" 
                             alt="Gedung Sekolah" 
                             class="w-full h-auto">
                        <div class="absolute -bottom-6 -right-6 bg-blue-600 text-white p-6 rounded-lg shadow-lg">
                            <div class="text-3xl font-bold">25+</div>
                            <div class="text-sm">Tahun Berpengalaman</div>
                        </div>
                    </div>
                </div>
                
                <div class="lg:w-1/2 scroll-reveal opacity-0 translate-y-10 transition-all duration-700 ease-out">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Tentang Sekolah Kami</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        SMAN 1 Contoh Kota telah berdiri sejak tahun 1998 dan terus berkomitmen untuk memberikan pendidikan terbaik. 
                        Dengan fasilitas modern dan tenaga pengajar berkualitas, kami membentuk generasi unggul yang siap menghadapi tantangan masa depan.
                    </p>
                    
                    <div class="grid sm:grid-cols-2 gap-6 mb-8">
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-3 rounded-lg mr-4">
                                <i class="fas fa-user-graduate text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-1">1.200+ Siswa</h4>
                                <p class="text-gray-600 text-sm">Aktif belajar</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-3 rounded-lg mr-4">
                                <i class="fas fa-chalkboard-teacher text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-1">50+ Guru</h4>
                                <p class="text-gray-600 text-sm">Berkualitas</p>
                            </div>
                        </div>
                    </div>
                    
                    <a href="kontak" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300 shadow-md">
                        Hubungi Kami
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Visi Misi -->
    <section class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 scroll-reveal opacity-0 translate-y-10 transition-all duration-500 ease-out">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Visi & Misi Sekolah</h2>
                <div class="w-20 h-1 bg-blue-600 mx-auto"></div>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Visi -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 scroll-reveal opacity-0 translate-y-10 transition-all duration-500 ease-out">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Visi Kami</h3>
                    <p class="text-gray-600 italic mb-4">
                        "Menjadi sekolah unggulan yang mencetak generasi berilmu, berkarakter, dan berdaya saing global pada tahun 2030."
                    </p>
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <p class="text-sm text-gray-700">
                            Visi ini menjadi panduan bagi seluruh warga sekolah untuk mencapai keunggulan dalam pendidikan.
                        </p>
                    </div>
                </div>
                
                <!-- Misi -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 scroll-reveal opacity-0 translate-y-10 transition-all duration-700 ease-out">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Misi Kami</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <span class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-1 flex-shrink-0">1</span>
                            <span class="text-gray-600">Menyelenggarakan pembelajaran inovatif berbasis teknologi</span>
                        </li>
                        <li class="flex items-start">
                            <span class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-1 flex-shrink-0">2</span>
                            <span class="text-gray-600">Mengembangkan potensi peserta didik secara holistik</span>
                        </li>
                        <li class="flex items-start">
                            <span class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-1 flex-shrink-0">3</span>
                            <span class="text-gray-600">Menanamkan nilai-nilai karakter bangsa dan religiusitas</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Fasilitas -->
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 scroll-reveal opacity-0 translate-y-10 transition-all duration-500 ease-out">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Fasilitas Unggulan</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Kami menyediakan fasilitas modern untuk mendukung proses belajar mengajar yang optimal</p>
                <div class="w-20 h-1 bg-blue-600 mx-auto mt-4"></div>
            </div>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border border-gray-100 scroll-reveal opacity-0 translate-y-10 transition-all duration-500 ease-out">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Lab Komputer</h3>
                    <p class="text-gray-600 text-sm">3 ruang lab dengan 120 komputer terbaru dan jaringan internet cepat</p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border border-gray-100 scroll-reveal opacity-0 translate-y-10 transition-all duration-600 ease-out">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Perpustakaan</h3>
                    <p class="text-gray-600 text-sm">Lebih dari 15.000 koleksi buku dengan ruang baca yang nyaman</p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border border-gray-100 scroll-reveal opacity-0 translate-y-10 transition-all duration-700 ease-out">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Lab Sains</h3>
                    <p class="text-gray-600 text-sm">Laboratorium Fisika, Kimia, dan Biologi dengan peralatan lengkap</p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border border-gray-100 scroll-reveal opacity-0 translate-y-10 transition-all duration-800 ease-out">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-futbol"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Lapangan Olahraga</h3>
                    <p class="text-gray-600 text-sm">Lapangan basket, futsal, voli, dan atletik dengan standar nasional</p>
                </div>
            </div>
            
            {{-- <div class="text-center mt-12 scroll-reveal opacity-0 translate-y-10 transition-all duration-500 ease-out">
                <a href="#" class="inline-flex items-center px-6 py-3 border border-blue-600 text-blue-600 rounded-lg hover:bg-blue-600 hover:text-white transition duration-300">
                    Lihat Semua Fasilitas
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div> --}}
        </div>
    </section>

    <!-- Prestasi -->
    <section class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 scroll-reveal">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Prestasi Sekolah</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Bukti nyata dedikasi kami dalam mencetak generasi berprestasi</p>
                <div class="w-20 h-1 bg-blue-600 mx-auto mt-4"></div>
            </div>
            
            <div class="max-w-4xl mx-auto">
                <!-- Statistik Prestasi -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden mb-8 scroll-reveal">
                    <div class="grid md:grid-cols-4 divide-y md:divide-y-0 md:divide-x divide-gray-200">
                        @foreach(['Internasional', 'Nasional', 'Provinsi', 'Kabupaten'] as $tingkat)
                        <div class="p-6 text-center">
                            <div class="text-4xl font-bold text-blue-600 mb-2">
                                {{ $countByTingkat[$tingkat] ?? 0 }}
                            </div>
                            <div class="text-gray-600">Prestasi {{ $tingkat }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <!-- Highlight Prestasi -->
                <h3 class="text-xl font-semibold text-gray-800 mb-6 scroll-reveal">Prestasi Terkini</h3>
                
                <div class="space-y-4">
                    @foreach($prestasiHighlight as $prestasi)
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 scroll-reveal">
                        <div class="flex flex-col sm:flex-row sm:items-center">
                            <div class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-medium mb-3 sm:mb-0 sm:mr-4 w-max">
                                {{ $prestasi->tahun }}
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">{{ $prestasi->nama }}</h4>
                                <div class="flex items-center mt-1 text-sm text-gray-500">
                                    <span class="mr-3">{{ $prestasi->tingkat }}</span>
                                    <span>{{ $prestasi->kategori }}</span>
                                </div>
                                @if($prestasi->deskripsi)
                                <p class="text-gray-600 text-sm mt-2">{{ $prestasi->deskripsi }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <div class="text-center mt-8 scroll-reveal">
                    <a href="{{ route('prestasi.semua') }}" 
                       class="inline-flex items-center px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300 shadow-md">
                        Lihat Semua Prestasi
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const elements = document.querySelectorAll(".scroll-reveal");
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove("opacity-0", "translate-y-10");
                    entry.target.classList.add("opacity-100", "translate-y-0");
                }
            });
        }, { 
            threshold: 0.1,
            rootMargin: "0px 0px -50px 0px"
        });
        
        elements.forEach(el => observer.observe(el));
        
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    });
</script>
@endsection