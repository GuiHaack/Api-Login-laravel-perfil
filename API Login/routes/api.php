<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('user/register', 'APIRegisterController@register');
Route::post('user/login', 'APILoginController@login');

Route::middleware('jwt.auth')->get('users', function(Request $request) {
    return auth()->user();
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



//ROTAS PARA MAQUINA//
Route::get("perfil","PerfilController@getAll");
Route::get("perfil/{perfil}","PerfilController@show");
Route::post("perfil","PerfilController@store");
Route::patch("perfil/{perfil}","PerfilController@update");
Route::delete("perfil/{perfil}","PerfilController@delete");
