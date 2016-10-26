
@extends('admin.template.main')

@section('title','Crear usuario')
    

    @section('content')
    
        @if(count($errors)>0)
        
            <div class="alert alert-danger" role="alert">
                
                <ul>          
               
                    @foreach($errors->all() as $error)

                        <li>{{$error}}</li>

                    @endforeach
                
                </ul>
                
            </div>           
        
        @endif
    
        {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}
            
            
            <div class="form-group">
                
                {!! Form::label('name','Nombre user:') !!}             
                {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'Nombre Usuario', 'required']) !!}
                
            </div>
        
            <div class="form-group">
                
                {!! Form::label('email','Correo Electronico:') !!}             
                {!! Form::email('email', null, ['class' => 'form-control','placeholder' => '@email', 'required']) !!}
                
            </div>
        
            <div class="form-group">
                
                {!! Form::label('password','Contraseña:') !!}             
                {!! Form::password('password', ['class' => 'form-control','placeholder' => '******', 'required']) !!}
                
            </div>
        
            <div class="form-group">
                
                {!! Form::label('type','Tipo:') !!}             
                {!! Form::select('type',['' => '', 'member' => 'Miebro', 'admin' => 'Administrador'],null, ['class' => 'form-control']) !!}
                
            </div>
        
            <div class="form-group">
                {!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}                
            </div>
        
            <div class="form-group">
                {!! Form::reset('Limpiar',['class' => 'btn btn-danger']) !!}                
            </div>
            
        {!! Form::close() !!}   
    
 
    
@endsection

