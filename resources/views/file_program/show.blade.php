@extends('layouts.app')

@section('content')
    <br>
<div class="container">
    <div class="col-md-6 offset-md-3"></div>
    <div class="table-responsive"></div>
    <table class="table table-striped">
        <thead >
        <tr>
            <th>NOMBRE DEL INSTRUCTOR</th>
            <td>{{$file_programa->name_teacher}}</td>
        </tr>
        <tr>
            <th>N. DE SALON</th>
            <td>{{$file_program->classroom}}</td>
        </tr>
        </thead>
    </table>
    <a href="{{route('file_program.index')}}" class="btn btn-success  btn-sm">Volver al inicio</a>
    <a href="" class="btn btn-success  btn-sm">Editar Programa</a>
</div>
@endsection
