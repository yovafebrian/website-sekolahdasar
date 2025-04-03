<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jumbotron</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>

@php
    $images = [
        asset('images/profile.jpeg'),
        asset('images/walkot.jpeg'),
        asset('images/walikota2.png'),
        asset('images/walikota.jpg'),
        asset('images/presiden.jpeg')
    ];
@endphp

<div class="mt-20">
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

</body>
</html>
