@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Logado
                </div>
            </div>
        </div>

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Produtos</div>

                <div class="panel-body">
                   <a href="{{ route('produtos.create') }}" class="btn btn-default">Criar novo</a>
                
                   <a href="{{ route('produtos') }}" class="btn btn-default">Ver Produtos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
