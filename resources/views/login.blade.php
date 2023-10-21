@extends('layout')
    @section('content')
        <main id="main" class="container">
            <div class="d-flex align-items-center justify-content-center vh-80">
                <div class="rounded bg-light">
                    <h2 class="text-center">Iniciar sesión</h2>
                    <form class="row g-3" action="login" method="post">
                        @csrf
                        <div class="col-md-6">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" name="email">
                            <p class="small text-danger">{{ $errors->first('email') }}</p>
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <p class="small text-danger">{{ $errors->first('password') }}</p>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-info">Iniciar sesión</button>
                        </div>
                    </form>
                    <p class="text center my-2">¿No tenés cuenta?<a href="{{ url('/signup') }}">Registrate acá</a></p>
                </div>
            </div>  
        </main>
    @endsection