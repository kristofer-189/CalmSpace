<?php  

use Illuminate\Support\Facades\Route;

require __DIR__ . "/../public/index.php";

Route::get('/', function () {
    return view('home');
})->name('home');