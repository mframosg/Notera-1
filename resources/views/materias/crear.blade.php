@extends('layout')

@section('title', 'Crear proyecto')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-12 col.sm-10 col-lg-6 mx-auto">
                <form class="bg-white shadow rounded py-3 px-4" action="{{ route('materia.store') }}" method="post">
                    <h1 class="display-4">Nueva Materia</h1>
                    <hr>
                    <br>
                    @csrf
                    <div class="form-group">
                        <label class="" for="nombre">Nombre de la materia</label><br>
                        <input id="nombre" class="form-control bg-light shadow-sm border-0" placeholder="Nombre" type="text" name="nombre">
                    </div>
                    <br>
                    <div>
                        <label for="descripcion">Descripcion</label><br>
                        <textarea placeholder="Description.." class="form-control" name="descripcion"></textarea>
                    </div>
                    <br>
                    <button class="btn btn-primary btn-lg btn-block">Guardar materia</button>   
                </form>
            </div>
        </div>
    </div>
@endsection