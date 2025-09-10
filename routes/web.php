<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Academy\Create as AcademyCreate;
use App\Livewire\Academy\Index as AcademyIndex;
use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Livewire\Barcode\Index as BarcodeIndex;
use App\Livewire\Barcode\Create as BarcodeCreate;
use App\Livewire\Menu\Index as MenuIndex;
use App\Livewire\Menu\Create as MenuCreate;
use App\Livewire\SetMenu\Index as SetMenuIndex;
use App\Livewire\SetMenu\Create as SetMenuCreate;
use App\Livewire\ScanBarcode\Index as ScanBarcodeIndex;


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

    Route::group(['prefix' => 'menu'], function () {
        Route::get('/', MenuIndex::class)->name('menu.index');
        Route::get('/tambah', MenuCreate::class)->name('menu.create');
    });

    Route::group(['prefix' => 'set-menu'], function () {
        Route::get('/', SetMenuIndex::class)->name('setMenu.index');
        Route::get('/tambah', SetMenuCreate::class)->name('setMenu.create');
    });

    Route::group(['prefix' => 'scan-barcode'], function () {
        Route::get('/', ScanBarcodeIndex::class)->name('scanBarcode.index');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
