@extends('layouts.app')

@section('content')

    <br>
<div class="container">
    <div class="table-responsive"></div>
    <table class="table table-striped">
        <thead class="table-success">
        <tr>
            <th>ID</th>
            <th>NOMBRE DEL INSTRUCTOR</th>
            <th>N. DE SALON</th>

        </tr>
        </thead>
        <tbody>
        @foreach($file_programs as $file_program)
            <tr>
                <td>{{$file_program->id}}</td>
                <td>{{$file_program->name_teacher}}</td>
                <td>{{$file_program->classroom}}</td>

                <td>
                    <form action="" method="post">
                        <a href="{{route('file_program.show',$file_program->id)}}" class="btn btn-success btn-sm">Detalles</a>
                        <a href="" class="btn btn-success btn-sm">Editar</a>
                        <button type="submit" class="btn btn-success btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="" class="btn btn-success  btn-sm mb-3 mt-3" >Registrar un nuevo aprendiz</a>
</div>

@endsection
