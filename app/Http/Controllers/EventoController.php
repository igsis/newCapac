<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function informacoesGerais(){
        return view('evento.ComCache.informacoes_gerais');
    }

    public function  arquivosDoEvento(){
        return view('evento.ComCache.arquivos_do_evento');
    } 

    public function  dadosDoProdutor(){
        return view('evento.ComCache.dados_do_produtor');
    } 

    public function  arquivosComunicacaoProducao(){
        return view('evento.ComCache.arquivos_comunicacao_producao');
    } 

    public function  cadastroDoProponente(){
        return view('evento.ComCache.cadastro_do_proponente');
    } 
}
