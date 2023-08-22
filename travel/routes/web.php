<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');
Route::fallback(function () {
    return redirect()->route('index');
});



require __DIR__.'/auth.php';
