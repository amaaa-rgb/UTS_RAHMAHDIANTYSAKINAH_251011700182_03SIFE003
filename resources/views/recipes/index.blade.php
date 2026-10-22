@extends('layouts.app')

@section('title', 'Daftar Resep')

@section('content')
<div class="container py-5">

    <div class="text-center mb-5">
        <h1>Daftar Resep</h1>
        <p class="text-muted">
            Temukan inspirasi masakan tradisional favoritmu.
        </p>
    </div>

    <div class="row g-4">
        @forelse ($recipes as $recipe)

            <div class="col-md-6 col-lg-4">
                <div class="recipe-card h-100">

                    <img
                        src="{{ asset('assets/images/' . $recipe->image) }}"
                        alt="{{ $recipe->name }}"
                        class="recipe-photo"
                    >

                    <div class="p-4">
                        <h4>{{ $recipe->name }}</h4>

                        <p class="text-muted">
                            Waktu memasak: {{ $recipe->cook_time }} menit
                        </p>

                        <a href="{{ route('recipes.show', $recipe->id) }}"
                           class="btn btn-green">
                            Lihat Detail
                        </a>
                    </div>

                </div>
            </div>

        @empty
            <div class="col-12 text-center">
                Belum ada resep.
            </div>
        @endforelse
    </div>

    @if ($recipes->hasPages())
        <div class="d-flex justify-content-center mt-5">
            {{ $recipes->links('pagination::bootstrap-5') }}
        </div>
    @endif
    <div class="text-center mt-4">
    <a href="{{ route('home') }}"
       class="btn btn-outline-success rounded-pill px-4">
        ← Kembali ke Beranda
    </a>
</div>

</div>
@endsection