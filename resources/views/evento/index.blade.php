
@extends('adminlte::page')

@section('title', 'CAPAC')


@section('content_header')
    <h1>Título</h1>
@stop

@section('content')
    {{-- Tipos de evento --}}
    <div class="col-md-8 col-md-offset-2">
        <div class="row">
            <button type="submit" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-lg btn-block">Inserir Evento</button><br>
        </div>
    </div>

    {{-- Carregar Eventos feitos pelo Users logado --}}
    <div class="col-md-8 col-md-offset-2">
        <div class="row">        
            <form action="" class="form-group" method="">
                {{-- {{ csrf_field() }} --}}
                <button type="button" class="btn btn-warning btn-lg btn-block">Carregar Evento</button>
            </form>
        </div>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Escolha o tipo do Evento</h4>
                </div>
                <div class="modal-body">                    
                    @foreach ($tipos as $tipo)
                        <form action="{{ route('evento.inserir') }}" class="form-group" method="POST">
                            {{ csrf_field() }}
                            <button type="submit" name="tipo" value="{{ $tipo->id }}" class="btn btn-primary btn-lg btn-block">{{ $tipo->tipo_evento }}</button>
                        </form>
                    @endforeach                                            
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>                    
                </div>
            </div>
        </div>
    </div>

    
@stop

@section('js')

@stop
