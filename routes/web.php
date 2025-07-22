<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $nome = "JP";
    $idade = 20;

    $arry = [ 1,2,3,4];
    return view('welcome', 
        [
            'nome' => $nome,
            'idade' => $idade,
            'array' => $arry
        ]);
});


Route::get('/produtos', function () {

    $busca = request('search');
    return view('produtos', ['busca' => $busca ]);
});

Route::get('/produto/{id?}', function ($id = null) {
    return view('produto', ['id' => $id ]);
});
