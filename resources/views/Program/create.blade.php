@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <div class="col-md-6 offset-md-3"></div>
        <form action="{{route('program.store')}}" method="post">
            @csrf
            <div class="table-responsive"></div>
            <table class="table table-striped" >
                <thead >
                <tr>
                    <th>NOMBRE DEL PROGRAMA</th>
                    <td><input type="text" class="Form-control" name="name" value=""></td>
                </tr>
                <tr>
                    <th>NOMBRE DEL INSTRUCTOR</th>
                    <td><input type="text" class="Form-control" name="name_teacher" value=""></td>
                </tr>
                <tr>
                    <th>AMBIENTE</th>
                    <td><input type="text" class="Form-control" name="classroom" value=""></td>
                </tr>
                <tr>
                    <th>NUMERO DE APRENDICES</th>
                    <td><input type="text" class="Form-control" name="students_numbers" value=""></td>
                </tr>
                <tr>
                    <th> APRENDIZ</th>
                    <td><input type="text" class="Form-control" name="apprentice_id" value=""></td>
                </tr>

                <tr>

                </thead>
            </table>
            <button type="submit" class="btn btn-success  btn-sm">Crear Programa</button>
            <a href="{{route('program.index')}}" class="btn btn-success btn-sm">Volver al inicio</a>
        </form>

    </div>



@endsection

