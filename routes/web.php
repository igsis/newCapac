<?php


Auth::routes(); // rotas de login

Route::get('/home', 'HomeController@index')->name('home'); 


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'evento'], function(){

    Route::get('/', 'EventoController@index')->name('evento');

    Route::any('/inserir', 'EventoController@inserir')->name('evento.inserir');

    Route::get('/informacoesGerais', 'EventoController@informacoesGerais')->name('evento.informacoesGerais');

    Route::get('/arquivosDoEvento', 'EventoController@arquivosDoEvento')->name('evento.arquivosDoEvento');

    Route::get('/dadosDoProdutor', 'EventoController@dadosDoProdutor')->name('evento.dadosDoProdutor');

    Route::get('/arquivosComunicacaoProducao', 'EventoController@arquivosComunicacaoProducao')->name('evento.arquivosComunicacaoProducao');

    Route::get('/cadastroDoProponente', 'EventoController@cadastroDoProponente')->name('evento.cadastroDoProponente');

});

Route::group(['prefix' => 'usuario'], function() {

    Route::get('{usuario}/conta', 'UserController@contaExibir')->name('usuario.contaExibir');

    Route::put('{usuario}/atualizar', 'UserController@contaEditar')->name('usuario.contaEditar');

});
