<?php

namespace capac\Http\Controllers;

use Illuminate\Http\Request;
use Gate;

class EventoController extends Controller
{
    public function index(){
        session()->put('evento', false);
        return view('evento.index');
        
    }

    public function informacoes(Request $request){

        if($request->eventoComCache){
            $ev = $request->session()->put('evento', true);

           

            return view('evento.informacoes.eventoComCache');
        }

        if($request->eventoSemCache){
            $request->session()->put('evento', true);
            return view('evento.informacoes.eventoSemCache');
        }

        if($request->eventoSemContracao){
            $request->session()->put('evento', true);
            return view('evento.informacoes.eventoSemContratacao');
        }
    }

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
