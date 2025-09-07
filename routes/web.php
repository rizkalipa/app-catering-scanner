<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Academy\Create as AcademyCreate;
use App\Livewire\Academy\Index as AcademyIndex;
use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Livewire\Barcode\Index as BarcodeIndex;
use App\Livewire\Barcode\Create as BarcodeCreate;


Route::middleware('auth')->group(function () {
    Route::get('/', Dashboard::class);
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::group(['prefix' => 'sekolah'], function () {
        Route::get('/', AcademyIndex::class)->name('academy.index');
        Route::get('/tambah', AcademyCreate::class)->name('academy.create');
    });

    Route::group(['prefix' => 'barcode'], function () {
        Route::get('/', BarcodeIndex::class)->name('barcode.index');
        Route::get('/tambah', BarcodeCreate::class)->name('barcode.create');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
