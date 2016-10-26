
@extends('admin.template.main')

@section('title','Editar usuario '. $user->name)
    
    @section('content')
    
   
        {!! Form::open(['route' => ['admin.users.update', $user], 'method' => 'PUT']) !!}
            
            
            <div class="form-group">
                
                {!! Form::label('name','Nombre user:') !!}             
                {!! Form::text('name', $user->name, ['class' => 'form-control','placeholder' => 'Nombre Usuario', 'required']) !!}
                
            </div>
        
            <div class="form-group">
                
                {!! Form::label('email','Correo Electronico:') !!}             
                {!! Form::email('email', $user->email, ['class' => 'form-control','placeholder' => '@email', 'required']) !!}
                
            </div>        
                   
            <div class="form-group">
                
                {!! Form::label('type','Tipo:') !!}             
                {!! Form::select('type',['' => '', 'member' => 'Miebro', 'admin' => 'Administrador'],$user->type, ['class' => 'form-control']) !!}
                
            </div>
        
            <div class="form-group">
                {!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}                
            </div>
        
            <div class="form-group">
                {!! Form::reset('Limpiar',['class' => 'btn btn-danger']) !!}                
            </div>
            
        {!! Form::close() !!}   
    
  
    
@endsection


