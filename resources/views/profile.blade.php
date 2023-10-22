@extends('layout')
    @section('content')
    <main id="main" class="container">
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="w-100">
                <h1>Mi perfil</h1>
                <div class="clearfix">
                    <img src="{{ asset('img/studentProfilePicture.svg') }}" class="col-md-3 float-md-end " alt="...">
                    <div class="row">
                        <div class="col">
                            <h2>Información de la cuenta</h2>
                        </div>
                        <div class="col">
                            <a href="" class="btn rounded-circle bg-primary text-light"><i class="bi bi-pencil-square"></i></a>
                        </div>
                    </div>
                    <h3>Correo electrónico</h3>
                    <p>alumno@mail.com</p>
                    <div class="row">
                        <div class="col">
                            <h3>Próximas clases</h3>
                        </div>
                        <div class="col">
                            <a href="" class="btn btn-outline-primary"><i class="bi bi-calendar"></i> Calendario</a>
                        </div>
                    </div>
                    
                    <a href="" class="btn btn-outline-primary">Clase 1</a>
                    <a href="" class="btn btn-outline-primary">Clase 2</a>
                    <a href="" class="btn btn-outline-primary">Clase 3</a>
                    <h3>Últimas clases</h3>
                    <p>Ver como se mostrarian</p>
                </div>
            </div>
        </div>
    </main>
    @endsection