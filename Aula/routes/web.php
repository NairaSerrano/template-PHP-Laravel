<?php

use Illuminate\Support\Facades\Route; /*importando a classe route*/

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
/*route é uma classe do laravel, estou trabalhando com uma rota na URL=get o comando '/' quer dizer que não tem rota*/

Route::get('/', function () {
    echo "<h1> Aula</h1>";
});

/*aqui acabamos de definir a rota "quem somos"- porem aqui ela está vazia*/

Route::get('/quemsomos', function(){
    return View("quemsomos");
   /* echo "Oi sou eu Naira!"; aqui definimos a função*/
});

Route::get('/nossahistoria', function(){
    return View("nossahistoria");
});




