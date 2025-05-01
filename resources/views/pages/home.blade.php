@extends('app')
@section('content')

<div class="pt-35 px-6 dark:bg-gray-900">
    <!-- Jumbotron -->
    <section class=" mb-20 text-center opacity-0 transform translate-y-10 transition-all duration-1000 scroll-reveal dark:bg-gray-900 bg-white">
        @include('components.jumbotron')
    </section>

    <!-- Sambutan Kepala Sekolah dengan animasi Tailwind -->
        @php
            $sambutan = \App\Models\SambutanKepalaSekolah::latest()->first();
        @endphp

        @if($sambutan)
            <section id="tentang" class="py-16 md:py-24 bg-gray-100 dark:bg-gray-900 transition-colors duration-300">
                <div class="container mx-auto px-6">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="md:w-1/2 opacity-0 transform translate-y-10 transition-all duration-1000 scroll-reveal">
                            <img src="{{ asset('storage/' . $sambutan->image_path) }}" 
                                class="ml-0 md:ml-40 rounded-lg shadow-lg w-full max-w-xs md:max-w-md"
                                alt="Sambutan Kepala Sekolah">
                        </div>
                        <div class="md:w-1/2 opacity-0 transform translate-y-10 transition-all duration-1000 scroll-reveal">
                            <h2 class="text-3xl font-bold mb-6 text-blue-600 dark:text-white">Sambutan Kepala Sekolah</h2>
                            <div class="text-gray-700 dark:text-gray-300 prose dark:prose-invert">
                                {!! $sambutan->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif


    <!-- Foto Kegiatan Terbaru -->
    <section class="mb-10 text-center opacity-0 transform translate-y-10 transition-all duration-1000 scroll-reveal dark:bg-gray-900">
        @include('components.imageslider')
    </section>
</div>

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
        }, { 
            threshold: 0.1,
            rootMargin: "0px 0px -50px 0px"
        });

        elements.forEach(el => observer.observe(el));
    });
</script>
@endsection