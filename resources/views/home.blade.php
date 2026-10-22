@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<section class="hero py-5">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <p class="text-success fw-bold mb-2">
                    Selamat Datang di
                </p>

                <h1 style="font-size: 3.5rem;">
                    Dapur Nusantara
                </h1>

                <p class="fs-5 mt-3">
                    Jelajahi kelezatan resep masakan tradisional
                    Indonesia dari berbagai daerah, dengan cita rasa
                    autentik yang selalu dirindukan.
                </p>

                <a href="{{ route('recipes.index') }}"
                   class="btn btn-green mt-2">
                    🍴 Mulai Jelajahi Resep →
                </a>

                <p class="mt-4 fst-italic">
                    Resep Tradisional, Rasa Istimewa
                </p>
            </div>

            <div class="col-lg-6">
                <img
                    src="{{ asset('assets/images/nasi goreng.jpg') }}"
                    alt="Nasi goreng khas Indonesia"
                    class="hero-photo shadow"
                >
            </div>
        </div>
    </div>
</section>

<section class="container py-5">
    <div class="d-flex justify-content-between align-items-center
                flex-wrap gap-3 mb-4">
        <div>
            <h2>Jelajahi Resep Nusantara</h2>
            <p class="text-muted">
                Inspirasi masakan rumahan yang lezat dan mudah dibuat.
            </p>
        </div>

        <a href="{{ route('recipes.index') }}"
           class="btn btn-green">
            Lihat Semua Resep →
        </a>
    </div>

    <div class="row g-4">
        @foreach (\App\Models\Recipe::latest()->take(3)->get() as $recipe)
            <div class="col-md-4">
                <div class="recipe-card">
                    <img
                        src="{{ asset('assets/images/' . $recipe->image) }}"
                        alt="{{ $recipe->name }}"
                        class="recipe-photo"
                    >

                    <div class="p-3">
                        <h3 class="recipe-name h5">
                            {{ $recipe->name }}
                        </h3>

                        <p>
                            <span class="category-badge">
                                {{ $recipe->category }}
                            </span>
                        </p>

                        <p>◷ {{ $recipe->cook_time }} menit</p>

                        <a href="{{ route('recipes.show', $recipe->id) }}"
                           class="btn btn-green w-100">
                            Lihat Detail →
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection