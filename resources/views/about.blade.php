@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="container py-5">
    <div class="row align-items-center g-5">
        <div class="col-lg-6">
            <span class="category-badge">Tentang Kami</span>
            <h1 class="mt-3 mb-4">Mengenal Dapur Nusantara</h1>

            <p>
                Dapur Nusantara adalah website resep masakan
                Indonesia yang membantu pengunjung menemukan
                inspirasi hidangan tradisional dengan mudah.
            </p>

            <p>
                Kami menghadirkan beragam resep, mulai dari
                makanan utama, minuman, hingga camilan khas
                Indonesia yang cocok dinikmati bersama keluarga.
            </p>

            <a href="{{ route('recipes.index') }}" class="btn btn-green">
                Jelajahi Resep
            </a>
        </div>

        <div class="col-lg-6">
            <div class="content-box">
                <h3>🌿 Visi Kami</h3>
                <p>
                    Mengenalkan kekayaan kuliner Indonesia
                    dan menjaga warisan rasa Nusantara.
                </p>

                <h3 class="mt-4">🍲 Misi Kami</h3>
                <p>
                    Menyediakan referensi resep yang mudah
                    dipahami dan bisa dicoba di rumah.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection