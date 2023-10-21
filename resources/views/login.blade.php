@extends('layout')
    @section('content')
        <main id="main" class="container">
            <div class="d-flex align-items-center justify-content-center vh-100">
                <div class="rounded bg-light shadow p-4">
                    <h1 class="text-center">Iniciar sesión</h1>
                    <form class="row g-4" action="login" method="post">
                        @csrf
                        <div>
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" name="email">
                            <p class="small text-danger">{{ $errors->first('email') }}</p>
                        </div>
                        <div>
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <p class="small text-danger">{{ $errors->first('password') }}</p>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-info w-50">Iniciar sesión</button>
                        </div>
                    </form>
                    <p class="text center my-2">¿No tenés cuenta?<a href="{{ url('/signup') }}">Registrate acá</a></p>
                </div>
            </div>  
        </main>
    @endsection