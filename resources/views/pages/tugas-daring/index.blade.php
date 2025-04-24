@extends('app')

@section('content')
<div class="container mx-auto py-8 px-4">
    <h1 class="text-3xl font-bold text-center mb-8 dark:text-white">Pilih Kelas</h1>

    <div class="grid grid-cols-2 md:grid-cols-6 gap-4">
        @foreach(range(1, 6) as $kelas)
        <a href="{{ route('tugas-daring.kelas', $kelas) }}"
           class="bg-blue-100 dark:bg-blue-900 hover:bg-blue-200 dark:hover:bg-blue-800 text-center py-4 rounded-lg transition">
            <span class="text-xl font-bold dark:text-white">Kelas {{ $kelas }}</span>
        </a>
        @endforeach
    </div>
</div>
@endsection
