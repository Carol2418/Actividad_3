@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <div class="col-md-6 offset-md-3"></div>
        <form action="{{route('apprentice.update', $apprentice->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="table-responsive"></div>
            <table class="table table-success" >
                <thead >
                <tr>
                    <th>NOMBRE COMPLETO</th>
                    <td><input type="text" class="Form-control" name="name" value="{{$apprentice->full_name}}"></td>
                </tr>
                <tr>
                    <th>N. IDENTIFICACIÓN</th>
                    <td><input type="text" class="Form-control" name="description" value="{{$apprentice->N_document}}"></td>
                </tr>
                <tr>
                    <th>CORREO</th>
                    <td><input type="text" class="Form-control" name="price" value="{{$apprentice->email}}"></td>
                </tr>
                <tr>
                    <th>TELEFONO</th>
                    <td><input type="text" class="Form-control" name="image" value="{{$apprentice->phone}}"></td>
                </tr>
                <tr>
                    <th>EDAD</th>
                    <td><input type="text" class="Form-control" name="companies_id" value="{{$apprentice->age}}"></td>
                </tr>
                <tr>
                    <th>¿ERES VOCERO?</th>
                    <td><input type="radio" name="Vocero" value="{{$apprentice->classroom_leader}}">Si
                    <input type="radio" name="Vocero" value="{{$apprentice->classroom_leader}}">No</td>
                </tr>
                <tr>
                    <th>DIRECCIÓN</th>
                    <td><input type="text" class="Form-control" name="companies_id" value="{{$apprentice->address}}"></td>
                </tr>
                </thead>
            </table>
            <button type="submit" class="btn btn-success  btn-sm">Actualizar Aprendiz</button>
            <a href="{{route('apprentice.index')}}" class="btn btn-dark btn-sm">Volver al inicio</a>
        </form>

    </div>



@endsection
