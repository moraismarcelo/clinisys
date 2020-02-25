@extends('adminlte::page')
@section('content')

    <form action="{{route('test.create')}}" method="post">
        @csrf
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputEmail3" name="nome">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Sobrenome</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputPassword3" name="sobrenome">
            </div>
        </div>


        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </form>
@endsection

