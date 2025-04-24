@extends('app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center mb-10 dark:text-white">Video Pembelajaran Daring</h1>

    @foreach ($materials as $grade => $subjects)
        <div class="mb-10 bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md">
            <h2 class="text-2xl font-bold mb-4 text-blue-700 dark:text-blue-300">Kelas {{ $grade }}</h2>

            @foreach ($subjects as $subject => $videos)
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mb-2">
                        📚 {{ $subject }}
                    </h3>
                    <ul class="space-y-2 ml-4">
                        @foreach ($videos as $video)
                            <li class="bg-gray-100 dark:bg-gray-700 p-3 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-600 transition">
                                <a href="{{ $video->youtube_link }}" 
                                   class="text-blue-600 dark:text-blue-400 font-medium hover:underline" 
                                   target="_blank">
                                    ▶️ {{ $video->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    @endforeach
</div>
@endsection
