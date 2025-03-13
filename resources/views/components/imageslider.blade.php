<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Image Slider</title>

    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css"/>

    <!-- Tailwind CSS (Jika menggunakan Vite) -->
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    @php
        $images = [
            asset('images/kegiatan1.png'),
            asset('images/kegiatan2.png'),
            asset('images/kegiatan3.png'),
            asset('images/kegiatan4.png')
        ];
    @endphp

    <div class="container mx-auto mt-10 p-4">
        <h2 class="text-center text-3xl font-bold text-blue-600 mb-6">Foto Kegiatan Terbaru</h2>

        <div class="image-slider">
            @foreach($images as $index => $img)
                <div class="p-8">
                    <img src="{{ $img }}" alt="Slide {{ $index + 1 }}" class="w-full h-full object-cover rounded-lg shadow-lg">
                </div>
            @endforeach
        </div>
    </div>

    <!-- jQuery & Slick Carousel JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>

    <script>
        $(document).ready(function(){
            console.log("Document ready. Initializing Slick...");

            // Pastikan elemen slider ada sebelum inisialisasi
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
                        { breakpoint: 1024, settings: { slidesToShow: 2 }},
                        { breakpoint: 768, settings: { slidesToShow: 1 }},
                    ],
                });

                console.log("Slick initialized successfully.");
            } else {
                console.log("Slick slider element not found.");
            }
        });
    </script>

</body>
</html>
