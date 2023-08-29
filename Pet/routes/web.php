<?php

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route; /*importando a classe route*/

Route::get('/', function () {
    return View("paginas.index");
});



Route::get('/sobre', function () {
    return View("paginas.about");
});


Route::get('/servicos', function () {
    return View("paginas.services");
});

Route::get('/reservas', function () {
    return View("paginas.booking");
});

Route::get('/contato', function () {
    return View("paginas.contato");
});

Route::get('/precos', function () {
    return View("paginas.price");
});
