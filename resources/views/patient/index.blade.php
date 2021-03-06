    @extends('adminlte::page')

@section('content')


    <a href="{{route('patient.create')}}">
        <button class="btn btn-primary">Adicionar</button>
    </a>

    <br>
    <br>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Valor</th>
            <th scope="col">AÇÂO</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          @foreach($patients as $patient)
            <th scope="row">{{$patient->id}}</th>
            <td>{{$patient->cpf}}</td>
            <td>{{$patient->name}}</td>
            <td>{{$patient->ddd1.$patient->cellphone1}}</td>
            <td>{{$patient->health_insurance}}</td>
            <td>
                <a href="{{route('patient.show')}}">
                    <button class="btn btn-sm btn-success">Detalhes</button>
                </a>
                <button class="btn btn-sm btn-primary">Histórico</button>
                <button class="btn btn-sm btn-danger">Excluir</button>




            </td>

        </tr>
            @endforeach

        </tbody>
    </table>
@endsection
