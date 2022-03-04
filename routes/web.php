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

/*
Route::get('/', function () {
    return 'olá';
});
*/

Route::get('/','\App\Http\Controllers\MainController@principal');

Route::get('/sobre-nos', '\App\Http\Controllers\SobreController@sobrenos');

Route::get('/contato', '\App\Http\Controllers\ContatoCotroller@contato');

route::get('/contato/{nome}/{categoria_id}',
function(
String $nome = 'name',
int $categoria_id = 1 // 1 - "informação"
) {
    echo "estamos aqui:  $nome - $categoria_id";
})->where('categoria_id','[0-9]+')->where('nome', '[A-Za-z]+'); 