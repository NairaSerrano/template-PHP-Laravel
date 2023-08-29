<?php

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route; /*importando a classe route*/

Route::get('/', function () {
    return View("paginas.index");
});


Route::get('/about', function () {
    return View("paginas.about");
});


Route::get('/servicos', function () {
    return View("paginas.servicos");
});

Route::get('/projeto', function () {
    return View("paginas.projeto");
});
