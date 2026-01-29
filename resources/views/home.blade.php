@extends('layouts.app')

@section('title', 'Beranda - Blog Fotografi')

@push('styles')
    <link rel="stylesheet" href="{{ secure_asset('css/home.css') }}">
@endpush

@section('content')
<section class="hero">
    <h1>Beberapa Karya Foto Studio</h1>

    <p>
        Selamat datang di portofolio dan blog fotografi saya.
        Lihat karya saya dan hubungi saya untuk sesi pemotretan.
    </p>

    <a href="{{ url('/portofolio') }}" class="btn-primary">Lihat Portofolio</a>
</section>
@endsection