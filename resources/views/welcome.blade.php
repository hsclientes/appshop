@extends('layouts.app')
@section('title','Bienvenido a App Shop')

@section('body-class','signup-page')
@section('styles')
    <style> 
        .team .row .col-md-4 {
        margin-bottom: 3em; 
    }
    .row {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display:        flex;
        flex-wrap: wrap;
    }
    .row > [class*='col-']{
        display:  flex;
        flex-direction: column;
    }
    
        
    </style>
@endsection
@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="title">Beinvenido a App Shop.</h1>
                        <h4>Realizando pedidos en linea y te contactaremos para coordinar la entrega</h4>
                        <br />
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-danger btn-raised btn-lg">
                            <i class="fa fa-play"></i> Watch video
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main main-raised">
            <div class="container">
                <div class="section text-center section-landing">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="title"> ¿Porque Comprar En linea? </h2>
                            <h5 class="description">Puedes revisar nuestra relacion de productos comparar precios y te deras cuenta que tenemos los mejores precios del mercado , el mejor producto y el mejor servicio </h5>
                        </div>
                    </div>

                    <div class="features">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-primary">
                                        <i class="material-icons">chat</i>
                                    </div>
                                    <h4 class="info-title">Atendemos tu Dudas</h4>
                                    <p>Atendemos rapidamente tus dudas, cualquier consulta que tengas via chat, no estas solo sino que siempre estaremos atentos a tus inquietudes, para que visita sea placentera ya sea solo, acompañado o para tus reuniones </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-success">
                                        <i class="material-icons">verified_user</i>
                                    </div>
                                    <h4 class="info-title">Pagos Seguros</h4>
                                    <p>Todo pedido que realices sera confirmado a traves de una llamada, sino confias en los pagos en linea, puedes pagar contra entrega el valor acordado. </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-danger">
                                        <i class="material-icons">fingerprint</i>
                                    </div>
                                    <h4 class="info-title">Informacion Privada</h4>
                                    <p>Los pedidos que realices solo los conoceras tu a traves de tu panel de usuario, Nadie mas tiene acceso a esta informacion</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section text-center">
                    <h2 class="title">Productos Disponibles</h2>
                    
                    <div class="team">
                        <div class="row">
                           @foreach ($products as $product)
                            <div class="col-md-4">
                                <div class="team-player">
                                    <img src="{{ $product->featured_image_url }}" alt="Thumbnail Image" class="img-raised img-circle">
                                    <h4 class="title">
                                        <a href="{{ url('/products/'.$product->id) }}"> {{  $product->name}} </a> 
                                        <br />
                                        <small class="text-muted">{{$product->category->name}}</small>
                                    </h4>
                                    <p class="description"> {{$product->description}} </p>
                                    
                                </div>
                            </div>
                           @endforeach
                        </div>
                        <div class="text-center"> 
                            {{ $products->links() }}
                        </div>
                    </div>

                </div>


                <div class="section landing-section">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-center title">¿Aun no te has registrado?</h2>
                            <h4 class="text-center description">Registrate ingresando tus datos basicos, y podras realizar tus pedidos a traves de nuestro carrito de compras. Si aun no te decides, de todas maneras, con tu cuenta de usuario podras hacer tods tus consultas sin compromiso</h4>
                            <form class="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Tu Nombre</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Tu Correo</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group label-floating">
                                    <label class="control-label">Tu Telefono y Mensaje </label>
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 col-md-offset-4 text-center">
                                        <button class="btn btn-primary btn-raised">
                                            ENVIAR CONSULTA
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        @include('includes.footer')  
@endsection

