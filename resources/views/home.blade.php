@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Alimentos Nutritivos</title>
        <style>
        *::after {
  box-sizing: border-box;
}
.h1 {
  font-size: calc(1.375rem + 1.5vw);
  align:center;
}


.px-4 {
  padding-right: 1.5rem !important;
  padding-left: 1.5rem !important;
}


.container,
.container-fluid,
.container-xxl,
.container-xl,
.container-lg,
.container-md,
.container-sm {
  width: 100%;
  padding-right: var(--bs-gutter-x, 0.75rem);
  padding-left: var(--bs-gutter-x, 0.75rem);
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 576px) {
  .container-sm, .container {
    max-width: 540px;
  }
}
@media (min-width: 768px) {
  .container-md, .container-sm, .container {
    max-width: 720px;
  }
}
.image-fondo {
    background-image:url({{url('Lago_de_Ilopango.jpg')}})
}

.cabecera{
  color: #fff;
  height: 200px;
  line-height: 200px;
  text-align: center;
  vertical-align: middle;
  text-shadow: #111 0px 0px 10px;
}



        
        </style>
        </head>
    <body>
    
    
<div class="container">
<div class="image-fondo cabecera">
    <h1>Bienvenido</h1>
    <img src="{{URL::asset('Lago_de_Ilopango.jpg')}}">
    </div>
<section class="page-section">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Alimentos Nutritivos S.A. de Cv</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Productos</h3>
                            <p class="text-muted mb-0">Tenemos productos 100% salvadoreños</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Marcas</h3>
                            <p class="text-muted mb-0">Contamos con una amplia variedad de marcas.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Alcances</h3>
                            <p class="text-muted mb-0">Contamos con todo tipo de carne en diefernetes presentaciones</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Distribuidores</h3>
                            <p class="text-muted mb-0">Vendemos nuestros productos en diferentes cadenas de supermercados</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
            
</div>
@endsection
