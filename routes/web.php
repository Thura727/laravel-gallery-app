<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[GalleryController::class,'index'])->name('gallery.index');
Route::get('/gallery',[GalleryController::class,'create'])->name('gallery.create');
Route::post('/gallery',[GalleryController::class,'store'])->name('gallery.store');
