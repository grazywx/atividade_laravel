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

<h2>Criar</h2>
<form action="{{ route('funcionarios.store',)}}" method="post">
    @csrf
    <input type="text" name="nome" placeholder="Seu nome:">
    <input type="text" name="salario" placeholder="Seu salario: ">
    <button type="submit" style="color: white;">Criar</button>
</form>


@endsection