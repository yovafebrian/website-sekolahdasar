<div class="container mx-auto mt-10 p-4 dark:bg-gray-900 transition-colors duration-300">
    <h2 class="text-center text-3xl font-bold text-blue-600 dark:text-blue-400 mb-6">Foto Kegiatan Terbaru</h2>
    <div class="image-slider">
        @php
            use App\Models\Kegiatan;
            $kegiatan = Kegiatan::all();
        @endphp
        @foreach($kegiatan as $item)
            <div class="p-8">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl">
                    <img src="{{ asset('storage/' . $item->gambar) }}" 
                         alt="{{ $item->judul }}" 
                         class="w-full h-64 object-cover"
                         onerror="console.error('Error loading image: {{ asset('storage/' . $item->gambar) }}')">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">{{ $item->judul }}</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mt-2">{{ $item->deskripsi }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script>
    $(document).ready(function(){
        console.log("Document ready. Initializing Slick...");
        // Inisialisasi slider dengan pengaturan
        if ($('.image-slider').length) {
            $('.image-slider').slick({
                dots: true,
                infinite: true,
                speed: 500,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: true,
                responsive: [
                    { 
                        breakpoint: 1024, 
                        settings: { 
                            slidesToShow: 2,
                            arrows: false
                        }
                    },
                    { 
                        breakpoint: 768, 
                        settings: { 
                            slidesToShow: 1,
                            arrows: false
                        }
                    },
                ],
            });

            // Custom styling untuk dots dan arrows di dark mode
            const updateSliderStyles = () => {
                const isDark = document.documentElement.classList.contains('dark');
                const color = isDark ? '#fff' : '#000';
                
                $('.slick-dots li button:before').css('color', color);
                $('.slick-arrow').css('filter', isDark ? 'invert(1)' : 'none');
            };

            // Update saat pertama kali load
            updateSliderStyles();

            // Update saat tema berubah
            const observer = new MutationObserver(updateSliderStyles);
            observer.observe(document.documentElement, {
                attributes: true,
                attributeFilter: ['class']
            });

            console.log("Slick initialized successfully with dark mode support.");
        } else {
            console.log("Slick slider element not found.");
        }
    });
</script>