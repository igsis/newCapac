@extends('adminlte::page')

@section('title', 'CAPAC - Minha Conta')


@section('content_header')
    <h1>Minha Conta</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        {{ $usuario->name }}
                    </h3>
                </div>

                <form action="{{route('usuario.contaEditar', $usuario->id)}}" method="post">
                    @csrf
                    @method('put')

                    <div class="box-body">
                        <div class="form-group col-md-6 has-feedback {{ $errors->has('nome') ? ' has-error' : '' }}">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" value="{{ $usuario->name }}">
                            @if ($errors->has('nome'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nome') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-md-6 has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" value="{{ $usuario->email  }}">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="box-footer">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
