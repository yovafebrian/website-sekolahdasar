
@php
    $images = \App\Models\Slider::all()->pluck('image_path')->map(fn($path) => asset('storage/' . $path));
@endphp


<div class="relative mt-24 bg-gray-100 dark:bg-gray-900 overflow-hidden transition-colors duration-300">
    <div class="slider">
        @foreach($images as $index => $img)
            <div class="p-2">
                <img src="{{ $img }}" alt="Slide {{ $index + 1 }}" class="w-full h-[400px] object-cover rounded-xl shadow-lg">
            </div>
        @endforeach
    </div>
</div>

<!-- Slick Carousel CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css"/>

<!-- jQuery & Slick Carousel JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>

<script>
    $(document).ready(function(){
        $('.slider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true
        });
    });
</script>
