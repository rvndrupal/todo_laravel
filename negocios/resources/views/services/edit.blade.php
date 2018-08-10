@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Editar Servicio
                </div>

                <div class="panel-body">
                
                {!! Form::model($service, ['route'=> ['services.update', $service->id],
                 'method'=>'PUT','files'=>true]) !!}

                @include('services.partials.form')
                
                {!! Form::close() !!}
                
                
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection 