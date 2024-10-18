@extends('master')
@section('content')

<div id="button">
<button><a href="{{ route('funcionarios.create')}}">Adicionar</a></button>
</div>

<hr>
<h2 style="text-align: center; color: #00cccc; ">Funcionarios</h2>
    <table class="styled-table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Salário</th>
            <th>Açoes</th>
        </tr>
    </thead>
    <tbody>
  
        @foreach ($funcionarios as $funcionario)
        <tr>
            <td>{{$funcionario->nome}}</td><td>{{$funcionario->salario}}</td><td><a href="{{ route('funcionarios.edit',['funcionario' => $funcionario->id])}}">Editar</a>  
                <a href="{{ route('funcionarios.show',['funcionario' => $funcionario->id])}}">Mostrar</a></td>
        </tr>
        @endforeach
    </table>


@endsection
