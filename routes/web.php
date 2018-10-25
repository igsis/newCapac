<?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('/informacoesGerais',                'EventoController@informacoesGerais')->name('evento.informacoesGerais');

Route::get('/arquivosDoEvento',                 'EventoController@arquivosDoEvento')->name('evento.arquivosDoEvento');

Route::get('/dadosDoProdutor',                  'EventoController@dadosDoProdutor')->name('evento.dadosDoProdutor');

Route::get('/arquivosComunicacaoProducao',      'EventoController@arquivosComunicacaoProducao')->name('evento.arquivosComunicacaoProducao');

Route::get('/cadastroDoProponente',             'EventoController@cadastroDoProponente')->name('evento.cadastroDoProponente');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
