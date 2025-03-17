@extends('app')

@section('content')
<section class="mb-10 text-center opacity-0 transform translate-y-10 transition-all duration-1000 scroll-reveal">
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-center text-2xl font-bold mb-20 text-blue-600 mt-12">Galeri Kegiatan</h2>
        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
            @foreach($kegiatans as $kegiatan)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:-translate-y-2 hover:shadow-2xl flex flex-col">
                    <img src="{{ asset('storage/' . $kegiatan->gambar) }}" alt="{{ $kegiatan->judul }}" class="w-full h-48 object-cover">
                    <div class="p-4 text-center flex flex-col flex-grow">
                        <h5 class="text-lg font-semibold text-gray-900">{{ $kegiatan->judul }}</h5>
                        <div class="mt-3 flex-grow flex items-end justify-center">
                            <button onclick="openModal('{{ asset('storage/' . $kegiatan->gambar) }}', '{{ $kegiatan->judul }}', '{{ $kegiatan->deskripsi }}')" 
                                    class="px-4 py-2 bg-blue-500 text-white rounded text-sm hover:bg-blue-600 w-full">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Modal -->
<div id="modal" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden px-4">
    <div class="bg-white p-6 rounded-lg max-w-lg w-full text-center max-h-screen overflow-auto">
        <h3 id="modal-title" class="text-xl font-bold"></h3>
        <img id="modal-img" src="" class="w-full my-4 rounded">
        <p id="modal-desc" class="text-gray-600"></p>
        <button onclick="closeModal()" class="mt-4 px-4 py-2 bg-red-500 text-white rounded w-full">Tutup</button>
    </div>
</div>

<script>
    function openModal(img, title, desc) {
        document.getElementById('modal-img').src = img;
        document.getElementById('modal-title').innerText = title;
        document.getElementById('modal-desc').innerText = desc;
        document.getElementById('modal').classList.remove('hidden');
    }
    function closeModal() {
        document.getElementById('modal').classList.add('hidden');
    }
</script>

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
