@extends('layouts.app')

@section('content')
    <br>
<div class="container">
    <div class="col-md-6 offset-md-3"></div>
    <div class="table-responsive"></div>
    <table class="table table-striped">
        <thead >
        <tr>
            <th>JORNADA</th>
            <td>{{$study_day->name}}</td>
        </tr>
        <tr>
            <th>FECHA</th>
            <td>{{$study_day->date}}</td>
        </tr>
        <tr>
            <th>PROGRAMA</th>
            <td>{{$study_day->file->id}}</td>
        </tr>
        <tr>
            <th>NOMBRE DEL PROGRAMA</th>
            <td>{{$study_day->file->name}}</td>
        </tr>
        <tr>
            <th>NOMBRE DEL INSTRUCTOR</th>
            <td>{{$study_day->file->name_teacher}}</td>
        </tr>
        <tr>
            <th>AMBIENTE DE FORMACIÓN</th>
            <td>{{$study_day->file->classroom}}</td>
        </tr>



        </thead>
    </table>
    <a href="{{route('day.index')}}" class="btn btn-success  btn-sm">Volver al inicio</a>
    <a href="{{route('day.edit',$study_day->id)}}" class="btn btn-success  btn-sm">Editar Jornada</a>
</div>
@endsection

