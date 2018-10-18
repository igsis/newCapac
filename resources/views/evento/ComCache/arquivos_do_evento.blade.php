@extends('adminlte::page')

@section('title', 'CAPAC')


@section('content_header')
<h1>Arquivos do Evento </h1>
@stop

@section('content')

    <div class="alert alert-danger alert-dismissible">
        <h4><i class="icon fa fa-warning"></i>AVISO</h4>    
        <p>
            Clique nos arquivos após efetuar o upload e confira a exibição do documento!
            Tamanho máximo permitido: 05 MB.
        </p>        
    </div>

    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Arquivo(s) Anexado(s) Somente em PDF</h3>
        </div>
        <div class="box-body">
            Não há arquivo(s) inserido(s).
        </div>
    </div>
@stop