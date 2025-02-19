<?php

use App\Http\Controllers\CourtController;
use App\Http\Controllers\CourtTypeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('home');
})->name('home');



Route::get('/dashboard', function(){
    return view('dashboard');
});
Route::get('/project', function(){
    return view('mproject');
});
Route::get('/service', function(){
    return view('mservice');
});

Route::get('/court-type', [CourtTypeController::class, 'index']);
Route::post('/court-type', [CourtTypeController::class, 'store']);

Route::resource('court', CourtController::class);


?>