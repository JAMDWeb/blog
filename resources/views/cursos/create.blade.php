@extends('layouts.plantilla')

@section('title','Cursos create')

@section('content')
    <h1>En esta página podrás crear un curso</h1>

    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf

        <label>
            Nombre:
        <br>
        <input type="text" name="name" value="{{ old('name')}}" >
        </label>
        {{-- Directiva para capturar los mensajes de error --}}
        @error('name')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        {{-- <br>
        <label>
            URL amigable:
        <br>
        <input type="text" name="slug" value="{{ old('slug')}}" >
        </label>

        @error('slug')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror --}}
        <input type="hidden" name="slug" value="slug">
        <br>
        <label>
            Descripcion:
        <br>
            <textarea name="descripcion" rows="5">{{ old('descripcion') }}</textarea>
        </label>

        {{-- Directiva para capturar los mensajes de error --}}
        @error('descripcion')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{ old('categoria') }}">
        </label>

        {{-- Directiva para capturar los mensajes de error --}}
        @error('categoria')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Enviar formulario</button>

    </form>
@endsection

