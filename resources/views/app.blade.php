<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Tailwind atau CSS lainnya -->
    @vite('resources/css/app.css')
</head>
<body>
    @include('components.navbar')
    @yield('content')
    @include('components.footer')

</body>
</html>
