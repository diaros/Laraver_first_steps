@extends('admin.template.main')

@section('title','Lista de categorias')

@section('content')

@if(session('mensaje')!=null)
 <div class="alert alert-success">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
 {{session('mensaje')}}
 </div>
@endif﻿

<a href="{{route('admin.categories.create')}}" class="btn btn-info">Nueva Categoria</a>
<table class="table table-striped">
        
        <thead>
            
            <th>ID</th>
            <th>Nombre</th>
            <th>Fecha creación</th>
            <th>Ultima modificación</th>
            <th>Accion</th>
            
        </thead>
        
        <tbody>
            
            @foreach($categories as $categorie)
                
            <tr>
                
                <td>{{$categorie->id}}</td>
                <td>{{$categorie->name}}</td>
                <td>{{$categorie->created_at}}</td>
                <td>{{$categorie->updated_at}}</td>
                <td>
                    <a href="" class="btn btn-danger">Eliminar</a>
                    <a href="" class="btn btn-warning">Modificar</a>
                </td>
                
            </tr>
            
            @endforeach
            
            
        </tbody>

    </table>
    {!! $categories->render() !!}
@endsection