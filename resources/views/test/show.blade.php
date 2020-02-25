@extends('adminlte::page')
@section('content')

    <div class="row-cols-1">
        <a href="{{route('test.create')}}">
            <button class="btn btn-success">Adicionar</button></div></a>
    <br>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Sobrenome</th>
            <th scope="col">Criado em:</th>
            <th scope="col">Atualizado em:</th>

        </tr>
        </thead>
        <tbody>
        @foreach($tests as $test)
        <tr>
            <th scope="row">{{$test->id}}</th>
            <td>{{$test->nome}}</td>
            <td>{{$test->sobrenome}}</td>
            <td>{{$test->created_at}}</td>
            <td>{{$test->updated_at}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>










    </ul>


@endsection
