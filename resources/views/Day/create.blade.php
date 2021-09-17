@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <div class="col-md-6 offset-md-3"></div>
        <form action="{{route('day.store')}}" method="post">
            @csrf
            <div class="table-responsive"></div>
            <table class="table table-striped" >
                <thead >
                <tr>
                    <th>JORNADA</th>
                    <td><input type="text" class="Form-control" name="name" value=""></td>
                </tr>
                <tr>
                    <th>FECHA</th>
                    <td><input type="date" class="Form-control" name="date" value=""></td>
                </tr>
                <tr>
                    <th>FICHA DEL PROGRAMA</th>
                    <td><input type="text" class="Form-control" name="file_program_id" value=""></td>


                </tr>

                </thead>
            </table>
            <button type="submit" class="btn btn-success  btn-sm">Crear Jornada</button>
            <a href="{{route('day.index')}}" class="btn btn-success btn-sm">Volver al inicio</a>
        </form>

    </div>



@endsection
