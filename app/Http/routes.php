<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('institucional.index');
});

Route::auth();

## Put this line in auth;
Route::get('user/activation/{token}',    'Auth\AuthController@activateUser')->name('user.activate');
Route::get('/admin/loja',                'LojaController@index');

Route::post('/admin/loja/nome-existe',   'LojaController@storeNameExist')->name('nomeLojaExiste');

Route::get('/admin',                     'AdminController@index');
Route::get('/admin/perfil',              'PerfilController@index');

Route::get('/admin/loja/produtos',       'LojaProdutosController@index');
Route::get('/admin/loja/design-da-loja', 'LojaDesignDaLojaController@index');
Route::get('/admin/loja/configuracoes',  'LojaConfiguracoesController@index');
Route::get('/admin/loja/usuarios',       'LojaUsuariosController@index');
Route::get('/admin/loja/auditoria',      'LojaAuditoriaController@index');