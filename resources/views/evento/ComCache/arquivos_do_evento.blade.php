@extends('adminlte::page')

@section('title', 'CAPAC')


@section('content_header')
<h1>Arquivos do Evento </h1>
@stop

@section('content')
    <div class="box-body">
        <div class="col-md-offset-2 col-md-8">
            <form action="">
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
            
            
                <div class="form-group">
                    <label for="exampleInputFile">Repertório</label>
                    <input type="file" id="exampleInputFile">
                </div>
            
                <div class="form-group">
                    <label for="exampleInputFile">Material de imprensa (clipping) (no mínimo 3)</label>
                    <input type="file" id="exampleInputFile">
                </div>
            
                <div class="form-group">
                    <label for="exampleInputFile">Autorização SBAT</label>
                    <input type="file" id="exampleInputFile">
                </div>
            
                <div class="form-group">
                    <label for="exampleInputFile">Currículo do Grupo</label>
                    <input type="file" id="exampleInputFile">
                </div>
            
                <div class="form-group">
                    <label for="exampleInputFile">Documentos Comprobatórios de Valor (no mínimo 3)</label>
                    <input type="file" id="exampleInputFile">
                </div>
            
                <div class="form-group">
                    <label for="exampleInputFile">DRT's de TODOS dos Integrantes (em casos de Teatro, Dança ou Circo)</label>
                    <input type="file" id="exampleInputFile">
                </div>    
                
                <button type="submit" class="btn btn-lg btn-info btn-block">Gravar</button>
            </form>
        </div>
   </div>
@stop
