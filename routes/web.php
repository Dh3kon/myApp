<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/api/pacotes', 'PacoteController@buscarTodosPacotes');
$router->get('/api/pacote/{id}', 'PacoteController@buscarPacote');
$router->post('/api/pacote', 'PacoteController@criarPacote');
