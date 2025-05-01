@extends('app')

@section('content')
<div class="container mx-auto py-8 px-4 mt-20 dark:bg-gray-900 transition-colors duration-300">
    <h2 class="text-2xl font-bold mb-4  dark:text-white">Kelas {{ $kelas }} - {{ $mapel }}</h2>

    <ul class="space-y-3">
        @forelse($videos as $video)
            <li class="bg-white dark:bg-gray-800 p-4 rounded shadow hover:bg-gray-100 dark:hover:bg-gray-700">
                <a href="{{ $video->youtube_link }}" target="_blank" class="text-blue-600 hover:underline font-medium">
                    ▶️ {{ $video->title }}
                </a>
            </li>
        @empty
            <li class="text-gray-600 dark:text-gray-300">Belum ada materi.</li>
        @endforelse
    </ul>

    <div class="mt-6">
        <a href="{{ route('tugas-daring.kelas', $kelas) }}" class="text-blue-600 hover:underline">← Kembali ke mata pelajaran</a>
    </div>
</div>
@endsection
