@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <span class="category-badge">Hubungi Kami</span>
        <h1 class="mt-3">Contact Us</h1>
        <p class="text-muted">
            Punya pertanyaan atau saran untuk Dapur Nusantara?
            Kami senang mendengarnya!
        </p>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="content-box">
                <form action="#" method="GET"
                      onsubmit="alert('Terima kasih atas pesanmu! Formulir ini masih berupa contoh.'); return false;">

                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control"
                               placeholder="Masukkan nama kamu" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control"
                               placeholder="Masukkan email kamu" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Pesan</label>
                        <textarea class="form-control" rows="5"
                                  placeholder="Tulis pesan kamu..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-green">
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection