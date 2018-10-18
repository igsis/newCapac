
@extends('adminlte::page')

@section('title', 'CAPAC')


@section('content_header')
    <h1>Dados do Produtor</h1>
@stop

@section('content')

    <div class="box-body">
        <div class="col-md-offset-2 col-md-8">
            <form role="form">            
                <div class="form-group text-center">
                    <label>Nome do Produtor * </label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                </div>

                <div class="form-group text-center">
                    <label>Email * </label>
                    <input type="email" class="form-control" placeholder="Enter ...">
                </div>

                <div class="row">
                    <div class="form-group text-center">
                        <div class="col-xs-6">
                            <label>Celular * </label>
                            <input type="email" class="form-control" placeholder="Enter ...">
                        </div>
                        <div class="col-xs-6">
                            <label>Outro telefone:</label>
                            <input type="email" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                </div><br>
                <button type="submit" class="btn btn-lg btn-info btn-block">Gravar</button>
            </form>
        </div>
    </div>
@stop