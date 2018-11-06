<?php

namespace capac\Http\Controllers;

use Gate;
use capac\Models\TipoEvento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index(){
        session()->put('evento', false);
        session()->put('semCache', false);
        session()->put('semContratacao', false);
        
        
        $tipos = TipoEvento::all();

        return view('evento.index', compact('tipos'));
        
    }

    public function inserir(Request $request){

        $tipos = [
            '1' => 'evento', 
            '2' => 'semCache',
            '3' => 'semContratacao'
        ];

        session()->put($tipos[$request->tipo], true);

        // redirect para info do evento de acordo com o tipo

        if($tipos[$request->tipo] == 'evento'){
            return view('evento.informacoes.eventoComCache');
        }

        if($tipos[$request->tipo] == 'semCache'){
            return view('evento.informacoes.eventoSemCache');
        }

        if($tipos[$request->tipo] == 'semContratacao'){
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
