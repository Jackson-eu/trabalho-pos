@extends('layouts.master')
@section('content')
    <div class="container">
        <h1>Editar Produto {{$produto->nome}}</h1>

        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

    {!! Form::open(['route'=>['produtos.update', $produto->id], 'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('nome', 'Nome: ') !!}
            {!! Form::text('nome', $produto->nome, ['class' => 'form-control']) !!}
            {{--{!! $errors->first('name', '<div class="text-danger">:message</div>') !!}--}}
        </div>

        <div class="form-group">
            {!! Form::label('descricao', 'Descrição: ') !!}
            {!! Form::textarea('descricao', $produto->descricao, ['class' => 'form-control']) !!}
            {{--{!! $errors->first('descricao', '<div class="text-danger">:message</div>') !!}--}}
        </div>

        <div class="form-group">
            {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}
    </div>
@endsection