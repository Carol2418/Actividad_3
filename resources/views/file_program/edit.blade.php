@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <div class="col-md-6 offset-md-3"></div>
        <form action="{{route('file_program.update', $file_program->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="table-responsive"></div>
            <table class="table table-secondary" >
                <thead >
                <tr>
                    <td>NOMBRE</td>
                    <td><input type="text" class="Form-control" name="name" value="{{$file_program->name}}"></td>
                </tr>
                <tr>
                    <td>NOMBRE DEL INSTRUCTOR</td>
                    <td><input type="text" class="Form-control" name="name_teacher" value="{{$file_program->name_teacher}}"></td>
                </tr>
                <tr>
                    <td>N. DE SALON</td>
                    <td><input type="text" class="Form-control" name="classroom" value="{{$file_program->classroom}}"></td>
                </tr>

                </thead>
            </table>
            <button type="submit" class="btn btn-dark  btn-sm">Guardar Producto</button>
            <a href="{{route('products.index')}}" class="btn btn-dark btn-sm">Volver al inicio</a>
        </form>

    </div>



@endsection
