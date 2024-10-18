@extends('master')

@section('content')

@if (session()->has('message'))
    {{ session()->get('message') }}   
@endif


@if($errors->any())
    @foreach($errors->all() as $error)
        {{$error}}
    @endforeach
@endif

<h2>Editar</h2>
<form action="{{ route('funcionarios.update',['funcionario' => $funcionario->id]) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="nome" value="{{$funcionario->nome}}">
    <input type="text" name="salario" value="{{$funcionario->salario}}">
    <button type="submit" style="color: white;">Atualizar</button>
</form>


@endsection