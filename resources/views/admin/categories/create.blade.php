@extends('admin.template.main')

@section('title','Crear categoria')

@section('content')

    <div class="container">

        {!! Form::open(['route' => 'admin.categories.store','method' => 'POST']) !!}

        <div class="form-group">

            {!! Form::label('name','Nombre categoria:') !!}
            {!! Form::text('name',null,['class' => 'form-control','placeholder' => 'Nombre','required']) !!}

        </div>

        <div class="form-group">

            {!! Form::submit('Registrar',['class' => 'btn btn-info']) !!}

        </div>

        <div class="form-group">

            {!! Form::reset('Limpiar',['class' => 'btn btn-danger']) !!}

        </div>

        {!! Form::close() !!}

    </div>

@endsection


