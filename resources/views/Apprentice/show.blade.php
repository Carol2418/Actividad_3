@extends('layouts.app')

@section('content')
    <br>
<div class="container">
    <div class="col-md-6 offset-md-3"></div>
    <div class="table-responsive"></div>
    <table class="table table-striped">
        <thead >
        <tr>
            <th>NOMBRE COMPLETO</th>
            <td>{{$apprentice->full_name}}</td>
        </tr>
        <tr>
            <th>N. IDENTIFICACIÓN</th>
            <td>{{$apprentice->N_document}}</td>
        </tr>
        <tr>
            <th>CORREO</th>
            <td>{{$apprentice->email}}</td>
        </tr>
        <tr>
            <th>TELEFONO</th>
            <td>{{$apprentice->phone}}</td>
        </tr>
        <tr>
            <th>EDAD</th>
            <td>{{$apprentice->age}}</td>
        </tr>
        <tr>
            <th>¿ERES VOCERO?</th>
            <td>{{$apprentice->classroom_leader}}</td>
        </tr>
        <tr>
            <th>DIRECCIÓN</th>
            <td>{{$apprentice->address}}</td>
        </tr>
        </thead>
    </table>
    <a href="{{route('apprentice.index')}}" class="btn btn-success  btn-sm">Volver al inicio</a>
    <a href="" class="btn btn-success  btn-sm">Editar Aprendiz</a>
</div>
@endsection
