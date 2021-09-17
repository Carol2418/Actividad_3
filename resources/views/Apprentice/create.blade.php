@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <div class="col-md-6 offset-md-3"></div>
        <form action="{{route('apprentice.store')}}" method="post">
            @csrf
            <div class="table-responsive"></div>
            <table class="table table-striped" >
                <thead >
                <tr>
                    <th>NOMBRE COMPLETO</th>
                    <td><input type="text" class="Form-control" name="full_name" value=""></td>
                </tr>
                <tr>
                    <th>N. IDENTIFICACIÓN</th>
                    <td><input type="text" class="Form-control" name="N_document" value=""></td>
                </tr>
                <tr>
                    <th>CORREO</th>
                    <td><input type="text" class="Form-control" name="email" value=""></td>
                </tr>
                <tr>
                    <th>TELEFONO</th>
                    <td><input type="text" class="Form-control" name="phone" value=""></td>
                </tr>
                <tr>
                    <th>EDAD</th>
                    <td><input type="text" class="Form-control" name="age" value=""></td>
                </tr>
                <tr>
                    <th>¿ERES VOCERO?</th>
                    <td><input type="text" class="Form-control" name="classroom_leader" value="">
                    </td>
                </tr>
                <tr>
                    <th>DIRECCIÓN</th>
                    <td><input type="text" class="Form-control" name="address" value=""></td>
                </tr>
                </thead>
            </table>
            <button type="submit" class="btn btn-success  btn-sm">Guardar Aprendiz</button>
            <a href="{{route('apprentice.index')}}" class="btn btn-success btn-sm">Volver al inicio</a>
        </form>

    </div>



@endsection
