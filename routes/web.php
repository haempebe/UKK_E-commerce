<?php

use App\Livewire\Home;
use App\Livewire\Admin\Products;
use App\Livewire\Admin\ProductEdit;
use App\Livewire\Admin\ProductCreate;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');

Route::view('dashboard', 'pages.admin.dashboard')->middleware(['auth', 'verified'])->name('dashboard');
Route::get('products', Products::class)->name('products.index')->middleware(['auth']);
Route::get('product/create', ProductCreate::class)->name('products.create')->middleware(['auth']);
Route::get('product/edit', ProductEdit::class)->name('products.edit')->middleware(['auth']);
Route::view('profile', 'pages.profile.profile')->middleware(['auth'])->name('profile');

require __DIR__ . '/auth.php';
