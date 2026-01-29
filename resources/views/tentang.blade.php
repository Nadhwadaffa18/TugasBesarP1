@extends('layouts.app')

@section('title', 'Tentang Studio - Blog Fotografi')

@push('styles')
    <link rel="stylesheet" href="{{ secure_asset('css/about.css') }}">
@endpush

@section('content')
<section class="about">
    <div class="about-container">
        <div class="about-text">
            <h1>Tentang Studio</h1>
            <p>
                <strong>Studio</strong> adalah studio fotografi yang bergerak
                di bidang fotorafi potret, event, dan dokumentasi kreatif.
                Kami percaya bahwa setiap foto memiliki cerita dan emosi
                yang layak diabadikan dalam satu frame terbaik.
            </p>

            <p>
                Dengan tim profesional, peralatan berkualitas,
                dan gaya visual yang konsisten,
                Daffa Studio siap membantu mengabadikan momen penting Anda
                melalui karya fotografi yang berkelas dan bermakna.
            </p>

            <a href="/kontak" class="btn-primary">Hubungi Studio</a>
        </div>

        <div class="about-image">
            <img src="{{ asset('https://www.tagvenue.com/blog/wp-content/uploads/2023/03/flower-wall-tagvenue.jpg') }}" alt="Foto Studio Daffa">
        </div>
