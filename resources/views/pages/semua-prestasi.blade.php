@extends('app')

@section('content')
<section class="py-16 md:py-24 bg-white dark:bg-gray-900 transition-colors duration-300">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-4">Semua Prestasi Sekolah</h2>
            <div class="w-20 h-1 bg-blue-600 dark:bg-blue-500 mx-auto"></div>
        </div>
        
        <div class="max-w-4xl mx-auto">
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm overflow-hidden mb-8 transition-colors duration-300">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Tahun</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Nama Prestasi</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Tingkat</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Kategori</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach($prestasis as $prestasi)
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200">
                                <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100">{{ $prestasi->tahun }}</td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-900 dark:text-white">{{ $prestasi->nama }}</div>
                                    @if($prestasi->deskripsi)
                                    <div class="text-sm text-gray-500 dark:text-gray-400 mt-1">{{ Str::limit($prestasi->deskripsi, 60) }}</div>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs rounded-full 
                                        {{ $prestasi->tingkat == 'Internasional' ? 'bg-purple-100 dark:bg-purple-900/30 text-purple-800 dark:text-purple-300' : '' }}
                                        {{ $prestasi->tingkat == 'Nasional' ? 'bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300' : '' }}
                                        {{ $prestasi->tingkat == 'Provinsi' ? 'bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300' : '' }}
                                        {{ $prestasi->tingkat == 'Kabupaten' ? 'bg-yellow-100 dark:bg-yellow-900/30 text-yellow-800 dark:text-yellow-300' : '' }}">
                                        {{ $prestasi->tingkat }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100">{{ $prestasi->kategori }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <div class="px-6 py-4 border-t border-gray-200 dark:border-gray-700">
                    {{ $prestasis->links() }}
                </div>
            </div>
            
            <div class="text-center mt-4">
                <a href="{{ route('prestasi') }}" 
                   class="inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-md hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-300">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Kembali ke Halaman Profile
                </a>
            </div>
        </div>
    </div>
</section>

<!-- script styling pagination dark mode -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Fungsi untuk update style pagination
        const updatePaginationStyles = () => {
            const isDark = document.documentElement.classList.contains('dark');
            const pagination = document.querySelector('.pagination');
            
            if (pagination) {
                const links = pagination.querySelectorAll('a');
                links.forEach(link => {
                    if (link.classList.contains('active')) {
                        link.classList.toggle('bg-blue-600', !isDark);
                        link.classList.toggle('bg-blue-700', isDark);
                        link.classList.toggle('text-white', true);
                    } else {
                        link.classList.toggle('text-gray-700', !isDark);
                        link.classList.toggle('text-gray-300', isDark);
                        link.classList.toggle('hover:bg-gray-100', !isDark);
                        link.classList.toggle('hover:bg-gray-700', isDark);
                    }
                });
            }
        };

        // menjalankan saat pertama kali load
        updatePaginationStyles();

        // Observasi perubahan tema
        const observer = new MutationObserver(updatePaginationStyles);
        observer.observe(document.documentElement, {
            attributes: true,
            attributeFilter: ['class']
        });
    });
</script>

<style>
    /* Custom styling untuk pagination di dark mode */
    .pagination a {
        @apply px-3 py-1 mx-1 rounded transition-colors duration-200;
    }
    .pagination .active {
        @apply bg-blue-600 dark:bg-blue-700 text-white;
    }
    .pagination a:not(.active) {
        @apply text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700;
    }
</style>
@endsection