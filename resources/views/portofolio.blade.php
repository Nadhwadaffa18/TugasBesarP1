@extends('layouts.app')

@section('title', 'Portofolio - Blog Fotografi Daffa')

@push('styles')
    <link rel="stylesheet" href="{{ secure_asset('css/portfolio.css') }}">
@endpush

@section('content')
<section class="portfolio">
    <div class="portfolio-header">
        <span class="section-subtitle">Portofolio</span>
        <h1>Karya Pilihan</h1>
        <p>
            Setiap foto adalah cerita yang saya abadikan
            melalui cahaya, komposisi, dan rasa.
        </p>
    </div>

    <div class="portfolio-grid">
        @forelse($portfolios as $portfolio)
            <div class="portfolio-item">
                <img 
                    src="{{ $portfolio->image }}" 
                    alt="Portfolio"
                    loading="lazy"
                    style="width: 100%; height: 100%; object-fit: cover;"
                >

                <div class="portfolio-overlay">
                    <p class="portfolio-description">
                        {{ $portfolio->description }}
                    </p>
                </div>
            </div>
        @empty
            <p style="grid-column:1/-1;text-align:center;">
                Belum ada portofolio
            </p>
        @endforelse
    </div>
</section>
@endsection
