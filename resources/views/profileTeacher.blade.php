@extends('layout')
    @section('content')
    <main id="main" class="container">
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="w-100">
                <h1>Mi perfil</h1>
                <div class="clearfix">
                    <img src="{{ asset('img/teacherProfilePicture.svg') }}" class="col-md-3 float-md-end " alt="...">
                    <h2>Información de la cuenta</h2>
                    <h3>Correo electrónico</h3>
                    <p>profesor@mail.com</p>
                    <h3>Próximas clases</h3>
                    <a href="" class="btn btn-outline-primary">Clase 1</a>
                    <a href="" class="btn btn-outline-primary">Clase 2</a>
                    <a href="" class="btn btn-outline-primary">Clase 3</a>
                    <h3>Clases activas</h3>
                    <p>Ver como se mostrarian</p>
                </div>
            </div>
        </div>
    </main>
    @endsection