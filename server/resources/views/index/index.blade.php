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
            <h2 style="color:darkcyan">CONTACTENOS</h2>
            <ul class="services">
SEDE 1 (CONSULTORÍA CORPORATIVA)  AV. EL DORADO NO. 68C-61 OFICINA 204-TORRE CENTRAL DAVIVIENDA 
SEDE 2 (ARBITRAMENTO Y LITIGIO):  CALLE 22 F NO. 85 A-40 PISO 2 
BOGOTÁ D.C  COLOMBIA
PBX: (57-1) 4 322595  CELULARES: 315 2448112, 310 6962968, 317 8557728 
SKYPE: MAYORGAABOGADOS  TWITTER: @MAYORGAABOGADOS </li>
            </ul>
            <div id="app"></div>

        </div>


        <script src="js/app.js"></script>
    </body>
</html>
