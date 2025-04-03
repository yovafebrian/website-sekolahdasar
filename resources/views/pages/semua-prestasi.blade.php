<!-- resources/views/semua-prestasi.blade.php -->
@extends('app')

@section('content')
<section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Semua Prestasi Sekolah</h2>
            <div class="w-20 h-1 bg-blue-600 mx-auto"></div>
        </div>
        
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-8">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tahun</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Prestasi</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tingkat</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($prestasis as $prestasi)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap">{{ $prestasi->tahun }}</td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-900">{{ $prestasi->nama }}</div>
                                    @if($prestasi->deskripsi)
                                    <div class="text-sm text-gray-500 mt-1">{{ Str::limit($prestasi->deskripsi, 60) }}</div>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs rounded-full 
                                        {{ $prestasi->tingkat == 'Internasional' ? 'bg-purple-100 text-purple-800' : '' }}
                                        {{ $prestasi->tingkat == 'Nasional' ? 'bg-blue-100 text-blue-800' : '' }}
                                        {{ $prestasi->tingkat == 'Provinsi' ? 'bg-green-100 text-green-800' : '' }}
                                        {{ $prestasi->tingkat == 'Kabupaten' ? 'bg-yellow-100 text-yellow-800' : '' }}">
                                        {{ $prestasi->tingkat }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $prestasi->kategori }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <div class="px-6 py-4 border-t border-gray-200">
                    {{ $prestasis->links() }}
                </div>
            </div>
            
            <div class="text-center mt-4">
                <a href="{{ route('prestasi') }}" 
                   class="inline-flex items-center px-4 py-2 border border-gray-300 text-gray-700 rounded-md hover:bg-gray-50">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Kembali ke Halaman Prestasi
                </a>
            </div>
        </div>
    </div>
</section>
@endsection