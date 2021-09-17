@extends('layouts.app')

@section('content')
    <br>
    <div class="container">
        <div class="col-md-6 offset-md-3"></div>
        <div class="table-responsive"></div>
        <table class="table table-striped">
            <thead >
            <tr>
                <th>NOMBRE DEL PROGRAMA</th>
                <td>{{$file_program->name}}</td>
            </tr>
            <tr>
                <th>NOMBRE DEL INSTRUCTOR</th>
                <td>{{$file_program->name_teacher}}</td>
            </tr>
            <tr>
                <th>AMBIENTE</th>
                <td>{{$file_program->classroom}}</td>
            </tr>
            <tr>
                <th>NUMERO DE APRENDICES</th>
                <td>{{$file_program->students_numbers}}</td>
            </tr>
            <tr>
                <th>ID APRENDIZ</th>
                <td>{{$file_program->user->id}}</td>
            </tr>
            <tr>
                <th>NOMBRE DEL APRENDIZ</th>
                <td>{{$file_program->user->name}}</td>
            </tr>

            </thead>
        </table>
        <a href="{{route('program.index')}}" class="btn btn-success  btn-sm">Volver al inicio</a>
        <a href="{{route('program.edit',$file_program->id)}}" class="btn btn-success  btn-sm">Editar Programa</a>
    </div>
@endsection

