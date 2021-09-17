@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <div class="col-md-6 offset-md-3"></div>
        <form action="{{route('program.update', $file_program->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="table-responsive"></div>
            <table class="table table-striped" >
                <thead >
                <tr>
                    <th>NOMBRE DEL PROGRAMA</th>
                    <td><input type="text" class="Form-control" name="name" value="{{$file_program->name}}"></td>
                </tr>
                <tr>
                    <th>NOMBRE DEL INSTRUCTOR</th>
                    <td><input type="text" class="Form-control" name="name_teacher" value="{{$file_program->name_teacher}}"></td>
                </tr>
                <tr>
                    <th>AMBIENTE</th>
                    <td><input type="text" class="Form-control" name="classroom" value="{{$file_program->classroom}}"></td>
                </tr>
                <tr>
                    <th>NUMERO DE APRENDICES</th>
                    <td><input type="text" class="Form-control" name="students_numbers" value="{{$file_program->students_numbers}}"></td>
                </tr>
                <tr>
                    <th> ID APRENDIZ</th>
                    <td><input type="text" class="Form-control" name="apprentice_id" value="{{$file_program->user->id}}"></td>
                </tr>

                <tr>

                </thead>
            </table>
            <button type="submit" class="btn btn-success  btn-sm">Actualizar Programa</button>
            <a href="{{route('program.index')}}" class="btn btn-success btn-sm">Volver al inicio</a>
        </form>

    </div>



@endsection

