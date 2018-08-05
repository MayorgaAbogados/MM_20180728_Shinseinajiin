<!doctype html>




@php
$meta = new \stdClass();
$meta->title = "Soluciones Legales";
$meta->keywords = "abogados, asesoria legal, litigio, demandas, derecho aduanero";
$meta->description = "Areas de Práctica:  DERECHO ADUANERO  DERECHO CAMBIARIO , DERECHO TRIBUTARIO  DERECHO COMERCIAL Y SOCIETARIO , DERECHO PENAL  DERECHO LABORAL CORPORATIVO 
DERECHO AMBIENTAL, CONTRATACIÓN PÚBLICA , DERECHO DE FAMILIA , DERECHO DE LAS TELECOMUNICACIONES ";
$meta->author = "www.jlmayorga.com.co";
$meta->data = [
    'title' => $meta->title, 
    'keywords' => $meta->keywords,
    'author' => $meta->author,
    'description' => $meta->description
];
@endphp






<html lang="{{ app()->getLocale() }}">

    <head>
       @include('meta-tags', $meta->data)
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
      <link rel="stylesheet" href="css/app.css">
      <link rel="stylesheet" href="css/main.css">
      <style>
        .vertical-center {
            min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
            min-height: 100vh; /* These two lines are counted as one :-)       */

            display: flex;
            align-items: center;
        }
      </style>
    </head>

    <body>

        <div class="container vertical-center">
        
            <h1 style="text-align:center;margin:0 auto;">Mayorga Abogados</h1>
            <div id="app"></div>

        </div>


        <script src="js/app.js"></script>
    </body>
</html>
