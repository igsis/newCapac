
@extends('adminlte::page')

@section('title', 'CAPAC')


@section('content_header')
    <h1>Arquivos Para Comunicação e Produção </h1>
@stop

@section('content')

    <div class="box-body">
        <div class="col-md-offset-2 col-md-8">
    
            <h3 class="box-title">Envio de Arquivos</h3>


            <p>                
                Nesta página você envia os arquivos como o rider, mapas de cenas e luz, logos de parceiros, programação de filmes de mostras de 
                cinema, entre outros arquivos destinados à comunicação e produção. O tamanho máximo do arquivo deve ser 60MB.
            </p>
            <p>
                Não envie cópias de documentos nesta página.
            </p>
            <p>
                Solicitamos que envie no mínimo <b class="text-danger">2 fotos</b> para divulgação.
            </p>
    

            <div class="alert alert-danger alert-dismissible">
                <h4><i class="icon fa fa-warning"></i>Atenção</h4>    
                <p>
                    Os arquivos para upload devem ter nomes diferentes.
                </p>        
            </div>

            <div class="form-group">
                <input type="file" id="exampleInputFile">
            </div>
        
            <div class="form-group">
                <input type="file" id="exampleInputFile">
            </div>
        
            <div class="form-group">
                <input type="file" id="exampleInputFile">
            </div>
        
            <div class="form-group">            
                <input type="file" id="exampleInputFile">
            </div>
        
            <div class="form-group">
                <input type="file" id="exampleInputFile">
            </div>  
            
            <button type="submit" class="btn btn-lg btn-info btn-block">Enviar</button>
        </div>
    </div>


@stop