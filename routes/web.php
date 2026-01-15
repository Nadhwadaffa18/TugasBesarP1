<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/tentang', [PageController::class, 'tentang']);

Route::get('/layanan', [PageController::class, 'layanan']);

Route::get('/portofolio', [PageController::class, 'portofolio']);

Route::get('/kontak', [PageController::class, 'kontak']);

Route::post('/kontak', [PageController::class, 'kontakStore']);

// Admin Routes
Route::prefix('admin')->name('portfolios.')->group(function () {
    Route::get('portfolios', [PortfolioController::class, 'index'])->name('index');
    Route::get('portfolios/create', [PortfolioController::class, 'create'])->name('create');
    Route::post('portfolios', [PortfolioController::class, 'store'])->name('store');
    Route::get('portfolios/{portfolio}', [PortfolioController::class, 'show'])->name('show');
    Route::get('portfolios/{portfolio}/edit', [PortfolioController::class, 'edit'])->name('edit');
    Route::put('portfolios/{portfolio}', [PortfolioController::class, 'update'])->name('update');
    Route::delete('portfolios/{portfolio}', [PortfolioController::class, 'destroy'])->name('destroy');
});
