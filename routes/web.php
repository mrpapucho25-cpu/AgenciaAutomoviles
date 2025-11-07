<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('Principal');
})->name('inicio');

Route::get('/Automoviles', function () {
  return view('Pagina2');
})->name('Automoviles');

Route::get('/Informacion', function () {
  return view('Pagina3');
})->name('Informacion');
