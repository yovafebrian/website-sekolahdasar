@extends('app')
@section('content')
<div class="container mx-auto px-4 py-12">
    <section class="py-16 md:py-24 bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
        <div class="max-w-4xl mx-auto bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg transition-colors duration-300">
            <h2 class="text-3xl font-bold text-center text-blue-600 dark:text-blue-400 mb-6">Form Pengaduan</h2>
            <p class="text-gray-600 dark:text-gray-300 text-center mb-8">Silakan isi formulir di bawah untuk menyampaikan pengaduan Anda.</p>

            @if(session('success'))
                <div class="bg-green-100 dark:bg-green-900 text-green-700 dark:text-green-200 p-4 rounded-lg mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('pengaduan.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-gray-600 dark:text-gray-300">Nama</label>
                    <input type="text" name="nama" class="w-full mt-1 px-4 py-2 border rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                </div>
                <div>
                    <label class="block text-gray-600 dark:text-gray-300">Email (Opsional)</label>
                    <input type="email" name="email" class="w-full mt-1 px-4 py-2 border rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                </div>
                <div>
                    <label class="block text-gray-600 dark:text-gray-300">Isi Pengaduan</label>
                    <textarea name="isi_pengaduan" class="w-full mt-1 px-4 py-2 border rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white" rows="4" required></textarea>
                </div>
                <div class="pt-4">
                    <button type="submit" 
                        class="w-full flex justify-center items-center py-4 px-6 border border-transparent rounded-lg shadow-sm text-lg font-medium text-white bg-blue-600 hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-300 transform hover:-translate-y-0.5">
                        <svg class="-ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                        </svg>
                        Kirim Pengaduan
                    </button>
                </div>
            </form>
        </div>
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
        
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    });
</script>
@endsection