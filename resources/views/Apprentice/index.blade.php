@extends('layouts.app')

@section('content')

    <br>
<div class="container">
    <div class="table-responsive"></div>
    <table class="table table-striped">
        <thead class="table-success">
        <tr>
            <th>ID</th>
            <th>NOMBRE COMPLETO</th>
            <th>N. IDENTIFICACIÓN</th>
            <th>EDAD</th>
            <th>¿ERES VOCERO?</th>
            <th>ACCIONES</th>
        </tr>
        </thead>
        <tbody>
        @foreach($apprentices as $apprentice)
            <tr>
                <td>{{$apprentice->id}}</td>
                <td>{{$apprentice->full_name}}</td>
                <td>{{$apprentice->N_document}}</td>
                <td>{{$apprentice->age}}</td>
                <td>{{$apprentice->classroom_leader}}</td>


                <td>
                    <form action="" method="post">
                        <a href="{{route('apprentice.show',$apprentice->id)}}" class="btn btn-success btn-sm">Detalles</a>
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
