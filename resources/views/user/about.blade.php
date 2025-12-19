@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto mt-14 px-6">

    <h1 class="text-3xl font-bold mb-6">About Us</h1>

    <p class="text-gray-300 text-justify max-w-3xl mb-12 leading-relaxed">
        Library System adalah platform peminjaman buku berbasis web yang dikembangkan
        untuk memudahkan pengguna dalam mencari dan melakukan peminjaman secara modern. 
        Sistem ini dirancang sebagai solusi modern untuk mengatasi
        keterbatasan sistem perpustakaan konvensional yang masih bergantung pada proses
        manual.

        <br><br>

        Melalui website yang intuitif dan responsif, Library System memungkinkan
        pengguna untuk mengakses informasi buku secara cepat, melihat ketersediaan
        buku secara real-time, serta melakukan proses peminjaman dengan lebih efisien.
        Sistem ini juga membantu pengelola perpustakaan dalam mengatur data buku,
        peminjaman, dan pengembalian secara terstruktur dan terintegrasi. Tidak hanya itu,
        system ini memudahkan admin dalam mengelola koleksi buku dan melihat aktivitas peminjaman.
    </p>

    <!-- CONTENT GRID -->
    <div class="grid grid-cols-1 md:grid-cols-[220px_1fr] gap-6 items-start">

        <!-- LEFT : IMAGE -->
        <div>
            <img 
                src="{{ asset('images/Education.png') }}" 
                alt="SDG 4 - Quality Education"
                class="w-[200px] rounded-2xl shadow-xl"
            >
        </div>

        <!-- RIGHT : DESCRIPTION -->
        <div class="text-gray-300 text-justify leading-relaxed space-y-4 text-[15px]">

            <p>
                Library System dirancang untuk mendukung peningkatan literasi dan
                memperluas akses pendidikan yang inklusif dengan memanfaatkan perkembangan teknologi
                berbasis web. Dengan digitalisasi sistem peminjaman buku, pengguna
                dapat memperoleh sumber belajar secara lebih cepat dan praktis tanpa
                dibatasi oleh waktu dan lokasi.
            </p>

            <p>
                Sistem ini sejalan dengan tujuan
                <span class="font-semibold text-white">
                    Sustainable Development Goals (SDGs)
                </span>,
                khususnya pada poin
                <span class="font-semibold text-white">
                    Pendidikan Berkualitas (SDG 4)
                </span>,
                yang menekankan pentingnya akses pendidikan yang merata, berkualitas,
                dan berkelanjutan bagi semua lapisan masyarakat.
            </p>
        </div>
    </div>

</div>
@endsection