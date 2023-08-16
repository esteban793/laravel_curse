@extends('layouts.plantilla')

@section('title', 'Cursos edit')

@section('content')
    <h1>En esta pagina podras editar un curso</h1>
    <form action="{{route('cursos.update', $curso)}}" method="POST">

        @csrf

        @method('put')
        
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Descripción:
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion', $curso->descripcion)}}</textarea>
        </label>

        @error('descripcion')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Categoría:
            <br>
            <input type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}">
        </label>

        @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br><br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection()

