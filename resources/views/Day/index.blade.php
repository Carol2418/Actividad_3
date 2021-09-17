@extends('layouts.app')

@section('content')

    <br>
    <div class="container">
        <div class="table-responsive"></div>
        <table class="table table-striped">
            <thead class="table-success">
            <tr>
                <th>ID</th>
                <th>JORNADA</th>
                <th>PROGRAMA</th>
                <th>ACCIONES</th>
            </tr>
            </thead>
            <tbody>
            @foreach($studiesday as $study_day)
                <tr>
                    <td>{{$study_day->id}}</td>
                    <td>{{$study_day->name}}</td>
                    <td>{{$study_day->file_program_id}}</td>



                    <td>
                        <form action="{{route('day.destroy', $study_day->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('day.show',$study_day->id)}}" class="btn btn-success btn-sm">Detalles</a>
                            <a href="{{route('day.edit',$study_day->id)}}" class="btn btn-success btn-sm">Editar</a>
                            <button type="submit" class="btn btn-success btn-sm">Eliminar </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{route('day.create')}}" class="btn btn-success  btn-sm mb-3 mt-3" >Registrar una nueva jornada</a>
    </div>

@endsection

