@extends('layout')

@section('title', 'Materia')

@section('content')

    <div class="d-flex justify-content-between align-items-center">
        <h1 class="display-4 mb-0">
            Vista materias
        </h1>
        <a class="btn btn-primary" href="{{ route('materias.crear') }}">Agregar materias</a>
    </div>
    <hr>
    <p class="lead text-secondary"> Estas son las materias en tu horario</p>

    <ul class="list-group">
        @forelse ($materias as $materia)
            <li class="list-group-item border-0 mb-3 shadow-sm">
                <strong>{{ $materia->nombre }}:</strong>
                <small>{{ $materia->descripcion }}</small>
            </li>
        @empty
            <br>
            <p class="lead text-secondary">Actualmente no tienes materias registradas</p>
        @endforelse

    </ul>

@endsection
