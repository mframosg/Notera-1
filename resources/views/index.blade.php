@extends('layout')

@section('content')
    @if (session('status'))
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="card-body">

                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @auth
        {{ __('You are logged in!') }}

        welcome {{ auth()->user()->name }}
    @endauth
    @guest
        <h1>Por favor ingresa o registrate</h1>
        <a class="btn btn-primary" href="{{ route('login') }}">Log in</a>
    @else
        <br>
        <a class="btn btn-primary" href="#" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            Log Out
        </a>

    @endguest
@endsection
