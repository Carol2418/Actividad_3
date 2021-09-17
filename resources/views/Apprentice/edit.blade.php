@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <div class="col-md-6 offset-md-3"></div>
        <form action="{{route('apprentice.update', $apprentice->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="table-responsive"></div>
            <table class="table table-striped" >
                <thead >
                <tr>
                    <th>NOMBRE COMPLETO</th>
                    <td><input type="text" class="Form-control" name="full_name" value="{{$apprentice->full_name}}"></td>
                </tr>
                <tr>
                    <th>N. IDENTIFICACIÓN</th>
                    <td><input type="text" class="Form-control" name="N_document" value="{{$apprentice->N_document}}"></td>
                </tr>
                <tr>
                    <th>CORREO</th>
                    <td><input type="text" class="Form-control" name="email" value="{{$apprentice->email}}"></td>
                </tr>
                <tr>
                    <th>TELEFONO</th>
                    <td><input type="text" class="Form-control" name="phone" value="{{$apprentice->phone}}"></td>
                </tr>
                <tr>
                    <th>EDAD</th>
                    <td><input type="text" class="Form-control" name="age" value="{{$apprentice->age}}"></td>
                </tr>
                <tr>
                    <th>¿ERES VOCERO?</th>
                    <td><input type="text" class="Form-control" name="classroom_leader" value="{{$apprentice->classroom_leader}}">
                    </td>
                </tr>
                <tr>
                    <th>DIRECCIÓN</th>
                    <td><input type="text" class="Form-control" name="address" value="{{$apprentice->address}}"></td>
                </tr>
                </thead>
            </table>
            <button type="submit" class="btn btn-success  btn-sm">Actualizar Aprendiz</button>
            <a href="{{route('apprentice.index')}}" class="btn btn-success btn-sm">Volver al inicio</a>
        </form>

    </div>



@endsection
