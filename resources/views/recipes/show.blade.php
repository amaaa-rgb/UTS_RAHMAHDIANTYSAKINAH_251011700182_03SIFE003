@extends('layouts.app')

@section('title', $recipe->name)

@section('content')
<div class="container py-5">

    <a href="{{ route('recipes.index') }}"
       class="text-decoration-none text-success">
        ← Kembali ke Daftar Resep
    </a>

    <div class="row align-items-center g-5 mt-2 mb-5">
        <div class="col-lg-6">
            <img
                src="{{ asset('assets/images/' . $recipe->image) }}"
                alt="{{ $recipe->name }}"
                class="detail-photo"
                style="height: 400px;"
            >
        </div>

        <div class="col-lg-6">
            <span class="category-badge">
                {{ $recipe->category }}
            </span>

            <h1 class="mt-3 mb-3">
                {{ $recipe->name }}
            </h1>

            <p class="text-muted">
                Nikmati cita rasa masakan Nusantara yang lezat
                dan cocok disajikan untuk keluarga.
            </p>

            <div class="content-box mt-4">
                <p class="mb-1 text-muted">Waktu Memasak</p>
                <h5>🕒 {{ $recipe->cook_time }}</h5>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-lg-5">
            <div class="content-box">
                <h2 class="mb-4">Bahan-bahan</h2>

                <div style="white-space: pre-line; line-height: 2;">
                    {{ $recipe->ingredients }}
                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="content-box">
                <h2 class="mb-4">Cara Memasak</h2>

                <div style="white-space: pre-line; line-height: 2;">
                    {{ $recipe->steps }}
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="{{ route('recipes.index') }}"
           class="btn btn-green">
            Jelajahi Resep Lainnya →
        </a>
    </div>

</div>
@endsection