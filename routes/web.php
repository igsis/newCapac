<?php


Auth::routes(); // rotas de login

Route::get('/home', 'HomeController@index')->name('home'); 


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'evento'], function(){

    Route::get('/', 'EventoController@index')->name('evento');

    Route::any('/informacoes', 'EventoController@informacoes')->name('evento.informacoes');

    Route::get('/informacoesGerais', 'EventoController@informacoesGerais')->name('evento.informacoesGerais');

    Route::get('/arquivosDoEvento', 'EventoController@arquivosDoEvento')->name('evento.arquivosDoEvento');

    Route::get('/dadosDoProdutor', 'EventoController@dadosDoProdutor')->name('evento.dadosDoProdutor');

    Route::get('/arquivosComunicacaoProducao', 'EventoController@arquivosComunicacaoProducao')->name('evento.arquivosComunicacaoProducao');

    Route::get('/cadastroDoProponente', 'EventoController@cadastroDoProponente')->name('evento.cadastroDoProponente');

});