@extends('app')

@section('content')
<div class="container mx-auto py-8 px-4 mt-20 dark:bg-gray-900 transition-colors duration-300">
    <h2 class="text-2xl font-bold mb-6 dark:text-white">Mata Pelajaran Kelas {{ $kelas }}</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach($mapel as $m)
        <a href="{{ route('tugas-daring.mapel', [$kelas, $m]) }}"
           class="block p-4 bg-gray-100 dark:bg-gray-800 rounded-lg shadow hover:bg-gray-200 dark:hover:bg-gray-700 transition">
            <span class="text-lg font-semibold dark:text-white">{{ $m }}</span>
        </a>
        @endforeach
    </div>

    <div class="mt-6">
        <a href="{{ route('tugas-daring.index') }}" class="text-blue-600 hover:underline">← Kembali ke daftar kelas</a>
    </div>
</div>
@endsection
