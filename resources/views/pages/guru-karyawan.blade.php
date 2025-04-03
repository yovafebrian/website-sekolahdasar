@extends('app')

@section('content')
    <section class="mb-10 text-center opacity-0 transform translate-y-10 transition-all duration-1000 scroll-reveal">
        <div class="container mx-auto px-4 py-8">
            <h2 class="text-center text-2xl font-bold mb-20 text-gray-800 mt-12">Daftar Guru dan Karyawan</h2>
            <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @foreach($guruKaryawans as $guru)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:-translate-y-2 hover:shadow-2xl">
                        <img src="{{ asset('storage/' . $guru->foto) }}" alt="{{ $guru->nama }}" class="w-full h-48 object-cover">
                        <div class="p-4 text-center">
                            <h5 class="text-lg font-semibold text-gray-900">{{ $guru->nama }}</h5>
                            <p class="text-sm text-gray-600">{{ $guru->jabatan }}</p>
                            <div class="mt-3 space-y-1">
                                <p class="flex items-center justify-center text-sm text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-500 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 12.75v6.75a2.25 2.25 0 01-2.25 2.25H4.5a2.25 2.25 0 01-2.25-2.25v-6.75M12 3v12m-3.75-3.75L12 3m3.75 5.25L12 3" />
                                    </svg>
                                    <a href="mailto:{{ $guru->email }}" class="text-blue-500 hover:underline">{{ $guru->email }}</a>
                                </p>
                                <p class="flex items-center justify-center text-sm text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-green-500 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8.25h1.5a2.25 2.25 0 012.25 2.25v0a10.5 10.5 0 0010.5 10.5h0a2.25 2.25 0 002.25-2.25V17.25" />
                                    </svg>
                                    <a href="tel:{{ $guru->no_telfon }}" class="text-green-500 hover:underline">{{ $guru->no_telfon }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const elements = document.querySelectorAll(".scroll-reveal");
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove("opacity-0", "translate-y-10");
                    entry.target.classList.add("opacity-100", "translate-y-0");
                }
            });
        }, { threshold: 0.1 });
        elements.forEach(el => observer.observe(el));
    });
</script>
@endsection
