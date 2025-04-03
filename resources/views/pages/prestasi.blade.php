<!-- resources/views/prestasi.blade.php -->
@extends('app')

@section('content')
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
@endsection