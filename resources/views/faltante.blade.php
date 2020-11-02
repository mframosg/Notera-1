@extends('layout')

@section('content')
    <!-- Forms to request the data -->
    <div class="row">
        <div class="col-12 col.sm-10 col-lg-6 mx-auto">
            <form class="bg-white shadow rounded py-3 px-4" action="{{ route('faltante') }}" method="GET">

                <h1 class="display-4">Cuanto te falta</h1>
                <hr>
                <br>
                <div class="form-group">
                    <input class="form-control bg-light shadow-sm border-0" type="text" name="name"
                        placeholder="Nombre"><br><br>
                    <input class="form-control bg-light shadow-sm border-0" type="text" name="subject"
                        placeholder="Materia"><br><br>
                    <input class="form-control bg-light shadow-sm border-0" type="text" name="grade1"
                        placeholder="Nota 1"><br><br>
                    <input class="form-control bg-light shadow-sm border-0" type="text" name="grade2"
                        placeholder="Nota 2"><br><br>
                    <input class="form-control bg-light shadow-sm border-0" type="text" name="grade3"
                        placeholder="Nota 3"><br><br>
                    <input class="form-control bg-light shadow-sm border-0" type="text" name="grade4"
                        placeholder="Nota 4"><br><br>
                    <button class="btn btn-primary mx-center" type="submit">
                        Calcular
                    </button>
                    <div>
                        <!-- Aqui se reciben las notas del usuario provenientes del formulario -->
                        @if (isset($_GET['name']) && isset($_GET['subject']) && isset($_GET['grade1']) && isset($_GET['grade2']) && isset($_GET['grade3']) && isset($_GET['grade4']))
                            @php
                            $name = $_GET['name'];
                            $subject = $_GET['subject'];
                            $grade1 = $_GET['grade1'];
                            $grade2 = $_GET['grade2'];
                            $grade3 = $_GET['grade3'];
                            $grade4 = $_GET['grade4'];
                            #Calcular promedio
                            $total = ($grade1 + $grade2 + $grade3 + $grade4) / 4;
                            @endphp
                            <h2 class="mt-5"> Hola  {{  $name}}</h2>
                            <p>Estas son tus notas</p>
                            <hr>
                            
                            <p>Nota 1 =   {{ $grade1}}</p>
                            <p>Nota 2 =   {{ $grade2}}</p>
                            <p>Nota 3 =   {{ $grade3}}</p>
                            <p>Nota 4 =   {{ $grade4}}</p>
                            
                            <p class="text-center"> Tu promedio es: {{ $total}} </p>
                            @if ($total < 2.95)  
                                <p class="lead text-center text-danger">Perdiste la materia</p>
                            @else
                                <p class="lead text-center text-success">¡Muy bien, Continua estudiando!</p>
                            @endif
                                
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
