
@extends('adminlte::page')

@section('title', 'CAPAC')


@section('content_header')
    <h1>Título</h1>
@stop

@section('content')

    <div class="">
        <form action="{{ route('evento.informacoes') }}" method="POST">
            {{ csrf_field() }}
            <button type="submit" name="eventoComCache" value="true" class="btn btn-primary btn-lg">Evento com Cache</button>
        </form> <br>

        <form action="{{ route('evento.informacoes') }}" method="POST">
            {{ csrf_field() }}
            <button type="submit" name="eventoSemCache" value="true" class="btn btn-primary btn-lg">Evento sem Cache</button>
        </form> <br>

        <form action="{{ route('evento.informacoes') }}" method="POST">
            {{ csrf_field() }}
            <button type="submit" name="eventoSemContracao" value="true" class="btn btn-primary btn-lg">Evento sem Contratação</button>
        </form>
    </div>
    
@stop

@section('js')

@stop

{{--         
Evento com Cache
Evento sem Cache
Evento sem Contratação --}}