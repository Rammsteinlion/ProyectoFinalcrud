@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pantalla Principal</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="content">
                        <div class=" m-b-md">
                            <div class="container-fluid registerinicio">
                                <div class="row">
                                    <div class="col-md-6 register-left register-left1">
                                        <img src="http://www.idaipqroo.org.mx/wp-content/uploads/2018/06/proteccion-de-datos-personales-791x1024.png" alt=""/>
                                    </div>
                                    <div class="col-md-6 register-left">

                                        <h3>Bienvenid@</h3>
                                        <p>Gracias por Iniciar Sesion!</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
