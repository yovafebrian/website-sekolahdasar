@extends('app')
@section('content')
<div class="pt-35 px-6">
    <!-- Jumbotron -->
    <section class="mb-10 text-center opacity-0 transform translate-y-10 transition-all duration-1000 scroll-reveal">
        @include('components.jumbotron')
    </section>

    <!-- Sambutan Kepala Sekolah dengan animasi Tailwind -->
    <section id="tentang" class="py-16 md:py-24 bg-gray-100">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 opacity-0 transform translate-y-10 transition-all duration-1000 scroll-reveal">
                    <img src="{{ asset('images/kegiatan1.png') }}" class="ml-0 md:ml-40 rounded-lg"
                         alt="Sambutan Kepala Sekolah" 
                         class="rounded-lg shadow-lg w-full max-w-xs md:max-w-md">
                </div>
                <div class="md:w-1/2 opacity-0 transform translate-y-10 transition-all duration-1000 scroll-reveal">
                    <h2 class="text-3xl font-bold mb-6">Sambutan Kepala Sekolah</h2>
                    <p class="mb-4">
                        Kehadiran website SDN Bulustalan diharapkan dapat memudahkan penyampaian informasi secara terbuka mengenai kegiatan sekolah yang meliputi kegiatan kurikulum, kegiatan kesiswaan, kegiatan sarana-prasarana, dan kegiatan humas serta kegiatan sekolah lainnya kepada seluruh warga sekolah, alumni, masyarakat, dan instansi-instansi lain yang terkait. Kehadiran website ini merupakan langkah awal untuk peningkatan dan pengembangan kegiatan sekolah yang senantiasa terus dipupuk dan didorong bagi kemajuan sekolah.
                    </p>
                    <p class="mb-4">
                        Dengan kurikulum yang komprehensif dan tenaga pengajar profesional, kami berkomitmen untuk memberikan
                        pendidikan terbaik bagi setiap siswa. Kami percaya bahwa setiap anak memiliki potensi unik yang perlu
                        dikembangkan melalui pendekatan pendidikan yang holistik.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum corrupti unde molestiae,
                         iusto pariatur autem modi repudiandae necessitatibus id asperiores quos voluptatum explicabo! Id quos est accusamus 
                         nihil optio itaque.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Foto Kegiatan Terbaru -->
    <section class="mb-10 text-center opacity-0 transform translate-y-10 transition-all duration-1000 scroll-reveal">
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
        }, { threshold: 0.1 });

        elements.forEach(el => observer.observe(el));
    });
</script>
@endsection
