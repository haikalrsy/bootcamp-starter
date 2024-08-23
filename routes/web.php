<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/some-page', function () {
    return view('some-page');
})->name('some-page-route');

Route::get('/login', function () {
    return view('login');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/acc', function () {
    return view('acc');
});
Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/plan', function () {
    return view('plan');
});
Route::get('/pemasukan', function () {
    return view('pemasukan');
});

Route::get('/pengeluaran', function () {
    return view('pengeluaran');
});

Route::get('/kalku', function () {
    return view('kalku');
});
