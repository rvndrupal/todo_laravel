@extends('app')

@section('content')

<div id="crud" class="row"> {{-- id crud para vue --}}
    <div class="col-lg-12">
        <h1> Crud laravel y VUE </h1>
    </div>

    <div class="col-lg-7">
            <a href="#" class="btn btn-primary pull-right">Nueva Tarea</a>

            <table class="table table-hover table-sprite">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> Tarea </th>
                        <th colspan="2"> &nbsp;  </th>
                    </tr>
                </thead>

                <tbody>
                    <tr>    
                        <td width="10px">1</td>
                        <td>Tarea</td>
                        <td width="10px">
                            <a href="#" class="btn btn-warning btn-sm">Editar</a>
                        </td>
                        <td width="10px">
                                <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>

                    </tr>

                </tbody>


            </table>
    </div>

    <div class="col-lg-5">
        <pre>
            @{{ $data  }}
        </pre>
    </div>
    
</div>

@endsection