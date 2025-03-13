<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <footer class="bg-blue-700 text-white py-6">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center px-10">
            <div class="text-center md:text-left">
                <h2 class="text-xl font-bold">BuluStalanWebSite</h2>
                <p class="text-sm text-gray-300">&copy; {{ date('Y') }} All Rights Reserved</p>
            </div>
            <nav class="mt-4 md:mt-0">
                <ul class="flex space-x-6">
                    <li>
                        <a href="#" class="text-gray-300 hover:text-white transition">
                            <i class="fa-brands fa-instagram text-2xl"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-300 hover:text-white transition">
                            <i class="fa-brands fa-facebook text-2xl"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-300 hover:text-white transition">
                            <i class="fa-brands fa-whatsapp text-2xl"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </footer>
</body>
</html>