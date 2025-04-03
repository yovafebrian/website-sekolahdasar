@extends('app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-2xl shadow-lg">
        <h2 class="text-3xl font-bold text-center text-blue-600 mb-6">Hubungi Kami</h2>
        <p class="text-gray-600 text-center mb-8">Silakan hubungi kami melalui formulir di bawah ini atau melalui kontak yang tersedia.</p>
        
        <div class="grid md:grid-cols-2 gap-6">
            <!-- Informasi Kontak -->
            <div class="bg-blue-100 p-6 rounded-xl">
                <h3 class="text-xl font-semibold text-blue-700 mb-4">Informasi Sekolah</h3>
                <p class="text-gray-700"><strong>Alamat:</strong> Jl. Contoh No. 123, Kota Anda</p>
                <p class="text-gray-700"><strong>Email:</strong> info@sekolahdasar.ac.id</p>
                <p class="text-gray-700"><strong>Telepon:</strong> (021) 123-4567</p>
                <p class="text-gray-700"><strong>Jam Kerja:</strong> Senin - Jumat (08.00 - 15.00)</p>
            </div>

            <!-- Formulir Kontak -->
            <div class="bg-gray-100 p-6 rounded-xl">
                <h3 class="text-xl font-semibold text-gray-700 mb-4">Kirim Pesan</h3>
                <form action="/contact" method="POST">
                    @csrf
                    <div>
                        <label class="block text-gray-600">Nama</label>
                        <input type="text" name="name" class="w-full mt-1 px-4 py-2 border rounded-lg" required>
                    </div>
                    <div>
                        <label class="block text-gray-600">Email</label>
                        <input type="email" name="email" class="w-full mt-1 px-4 py-2 border rounded-lg" required>
                    </div>
                    <div>
                        <label class="block text-gray-600">Pesan</label>
                        <textarea name="message" class="w-full mt-1 px-4 py-2 border rounded-lg" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
