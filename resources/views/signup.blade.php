@extends('layout')
    @section('content')
        <main id="main" class="container">
            <div class="d-flex align-items-center justify-content-center vh-100">
                <div class="rounded bg-light shadow p-4 w-50">
                    <h1 class="text-center">Registrarme</h1>
                    <form class="row g-3 my-3" action="login" method="post">
                        @csrf
                        <div>
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" name="email">
                            <p class="small text-danger">{{ $errors->first('email') }}</p>
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <p class="small text-danger">{{ $errors->first('password') }}</p>
                        </div>
                        <div class="col-md-6">
                            <label for="password_confirm" class="form-label">Confirmar contraseña</label>
                            <input type="password" class="form-control" id="password_confirm" name="password_confirm">
                        </div>
                        <div class="row justify-content-around">
                            <div class="form-check col-md-3">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">Alumno</label>
                            </div>
                            <div class="form-check col-md-3">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">Profesor</label>
                            </div>
                            <!-- Si marca el de "profesor" se habilita el selector de materias, y si marca el de "alumno" puede seleccionar las materias/temas en los que esta interesado -->
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary w-50">Registrarme</button>
                        </div>
                    </form>
                    <p class="text-center my-2 small">¿Ya tenés cuenta? <a href="{{ url('/login') }}">Iniciá sesión acá</a></p>
                </div>
            </div>  
        </main>
    @endsection