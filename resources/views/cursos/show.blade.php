@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso->id)

@section('content')
    <h1>Bienvenido al curso: {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <br><br>
    <a href="{{route('cursos.edit', $curso)}}">Editar curso</a>
    <p><strong>Categoria: </strong>{{$curso->categoria}}</p>
    <p><strong>Descripcion: </strong>{{$curso->descripcion}}</p>

    <form action="{{route('cursos.destroy', $curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection()

