
@extends('adminlte::page')

@section('title', 'CAPAC')


@section('content_header')
    <h1>Cadastro do Proponente</h1>
@stop

@section('content')


    <div class="box-body">
        <div class="col-md-offset-2 col-md-8">
    
            <h3 class="box-title  text-center">Haverá representação jurídica?</h3><br>
                
            <div class="form-group text-center">
                <div class="col-xs-offset-2 col-xs-4">
                    <button type="submit" class="btn btn-lg btn-info btn-block">Sim</button>
                </div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-lg btn-info btn-block">Não</button>
                </div>
            </div>

        </div>
    </div>

@stop
