@extends('admin.template.main')

@section('title','Lista de usuarios')

@section('content')

@if(session('mensaje')!=null)
 <div class="alert alert-success">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
 {{session('mensaje')}}
 </div>
@endif﻿


    <a href="{{route('admin.users.create')}}" class="btn btn-info">Nuevo Usuario</a>
    <table class="table table-striped">
        
        <thead>
            
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Tipo</th>
            <th>Accion</th>
            
            
        </thead>
        
        <tbody>
            
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    @if($user->type == "admin")
                        <span class="label label-danger">{{$user->type}}</span>
                    
                    @else
                        <span class="label label-primary">{{$user->type}}</span>
                        
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.users.edit',$user->id)}}" class="btn btn-info"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                    <a href="{{ route('admin.users.destroy',$user->id)}}" class="btn btn-danger" onclick="return confirm('Confirma que desea eliminar el registro?')"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                    
                </td>
            </tr>
            @endforeach
            
        </tbody>

    </table>
    
    <div class="text-center">       
         {!! $users->render() !!}
    </div>
   

@endsection
