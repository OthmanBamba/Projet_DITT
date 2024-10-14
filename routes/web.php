<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('ben'); // Vue d'accueil
});

// Définition des routes pour les services
Route::get('/service1', function () {
    return view('services.service1'); // Créez une vue resources/views/services/service1.blade.php
})->name('service1');

Route::get('/service2', function () {
    return view('services.service2'); // Créez une vue resources/views/services/service2.blade.php
})->name('service2');

Route::get('/service3', function () {
    return view('services.service3'); // Créez une vue resources/views/services/service3.blade.php
})->name('service3');

Route::get('/service4', function () {
    return view('services.service4'); // Créez une vue resources/views/services/service4.blade.php
})->name('service4');

// Ajoutez d'autres routes pour 'sous-directions', 'agents', 'pointages', etc.
