@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                   <br>


                    @if (Auth::user()->role =="administrador"||Auth::user()->role =="superAdministrador" )


                        <a class="dropdown-item" href="{{ route('register') }}" >{{ __('Registro de usuarios') }}</a>
                        <a class="dropdown-item" href="{{ route('usuarios.index') }}" >{{ __('Listade usuarios') }}</a>
                        <a class="dropdown-item" href="{{ route('plataformas.register') }}">{{ __('Registro de plataformas') }}</a>
                        <a class="dropdown-item" href="{{ route('plataformas.index') }}">{{ __('Listad e plataformas') }}</a>


                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
