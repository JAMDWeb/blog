@extends('layouts.plantilla')

@section('title','Cursos')

@section('content')
    <h1>Bienvenido a la pagina principal de cursos</h1>
    <a href="{{ route('cursos.create') }}">Crear Curso</a>
    <ul>
        @foreach ( $cursos as $curso)
            <li>
                <a href="{{ route('cursos.show',$curso) }}" >{{$curso->name}}</a>
                <br>

            </li>
        @endforeach
    </ul>
    {{-- // botones de paginado Prev/Next --}}
    {{ $cursos->links()}}

@endsection


