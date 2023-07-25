<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home;
use App\Http\Livewire\OurWorks;
use App\Http\Livewire\Sejarah;
use App\Http\Livewire\StrukturPerusahaan;

use function Termwind\render;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Home::class)->name('home');
Route::get('/sejarah', Sejarah::class)->name('sejarah');
Route::get('/our-works', OurWorks::class)->name('our-works');
Route::get('/struktur-perusahaan', StrukturPerusahaan::class)->name('struktur-perusahaan');
