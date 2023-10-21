@extends('layout')
    @section('content')
    <main id="main" class="container">
        <h1>Mi perfil</h1>
        <div class="clearfix">
            <img src="{{ asset('img/profilePicture.svg') }}" class="col-md-3 float-md-end " alt="...">
            <h2>Información de la cuenta</h2>
            <h3>Correo electrónico</h3>
            <p>alumno@mail.com</p>
            <h3>Próximas clases</h3>
            <p>Ver como se mostrarian</p>
            <h3>Últimas clases</h3>
            <p>Ver como se mostrarian</p>
        </div>
    </main>
    @endsection