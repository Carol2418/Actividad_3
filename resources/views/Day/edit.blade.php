@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <div class="col-md-6 offset-md-3"></div>
        <form action="{{route('day.update', $study_day->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="table-responsive"></div>
            <table class="table table-striped" >
                <thead >
                <tr>
                    <th>JORNADA</th>
                    <td><input type="text" class="Form-control" name="name" value="{{$study_day->name}}"></td>
                </tr>
                <tr>
                    <th>FECHA</th>
                    <td><input type="date" class="Form-control" name="date" value="{{$study_day->date}}"></td>
                </tr>
                <tr>
                    <th>FICHA DEL PROGRAMA</th>
                    <td><input type="text" class="Form-control" name="file_program_id" value="{{$study_day->file->id}}"></td>


                </tr>

                </thead>
            </table>
            <button type="submit" class="btn btn-success  btn-sm">Actualizar Jornada</button>
            <a href="{{route('day.index')}}" class="btn btn-success btn-sm">Volver al inicio</a>
        </form>

    </div>



@endsection
