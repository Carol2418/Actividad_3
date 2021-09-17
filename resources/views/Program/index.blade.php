@extends('layouts.app')

@section('content')

    <br>
    <div class="container">
        <div class="table-responsive"></div>
        <table class="table table-striped">
            <thead class="table-success">
            <tr>
                <th>ID</th>
                <th>NOMBRE DEL PROGRAMA</th>
                <th>NOMBRE DEL INSTRUCTOR</th>
                <th>AMBIENTE</th>
                <th>ACCIONES</th>
            </tr>
            </thead>
            <tbody>
            @foreach($files_program as $file_program)
                <tr>
                    <td>{{$file_program->id}}</td>
                    <td>{{$file_program->name}}</td>
                    <td>{{$file_program->name_teacher}}</td>
                    <td>{{$file_program->classroom}}</td>

                    <td>
                        <form action="{{route('program.destroy', $file_program->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('program.show',$file_program->id)}}" class="btn btn-success btn-sm">Detalles</a>
                            <a href="{{route('program.edit',$file_program->id)}}" class="btn btn-success btn-sm">Editar</a>
                            <button type="submit" class="btn btn-success btn-sm">Eliminar </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{route('program.create')}}" class="btn btn-success  btn-sm mb-3 mt-3" >Registrar un nuevo programa</a>
    </div>

@endsection
