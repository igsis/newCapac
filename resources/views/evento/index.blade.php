
@extends('adminlte::page')

@section('title', 'CAPAC')


@section('content_header')
    <h1>Título</h1>
@stop

@section('content')
    {{-- Tipos de evento --}}
    <div class="col-md-8 col-md-offset-2">
        <div class="row">
            <form action="{{ route('evento.informacoes') }}" class="form-group" method="POST">
                {{ csrf_field() }}
                <button type="submit" name="eventoComCache" value="true" class="btn btn-primary btn-lg btn-block">Evento com Cache</button>
            </form>
        </div>
        <div class="row">
            <form action="{{ route('evento.informacoes') }}" class="form-group" method="POST">
                {{ csrf_field() }}
                <button type="submit" name="eventoSemCache" value="true" class="btn btn-primary btn-lg btn-block">Evento sem Cache</button>
            </form>
        </div>
        <div class="row">        
            <form action="{{ route('evento.informacoes') }}" class="form-group" method="POST">
                {{ csrf_field() }}
                <button type="submit" name="eventoSemContracao" value="true" class="btn btn-primary btn-lg btn-block">Evento sem Contratação</button>
            </form>
        </div>
    </div>

    {{-- Carregar Eventos feitos pelo Users logado --}}
    <div class="col-md-8 col-md-offset-2">
        <div class="row">        
            <form action="{{ route('evento.informacoes') }}" class="form-group" method="POST">
                {{ csrf_field() }}
                <button type="submit" name="eventoSemContracao" value="true" class="btn btn-warning btn-lg btn-block">Carregar Evento</button>
            </form>
        </div>
    </div>

    
@stop

@section('js')

@stop

{{--         
Evento com Cache
Evento sem Cache
Evento sem Contratação --}}