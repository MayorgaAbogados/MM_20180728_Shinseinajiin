<!-- -->
<!doctype html>
@php
$meta = new \stdClass();
$meta->title = "Soluciones Legales";
$meta->keywords = "abogados,
                   asesoria legal,
                   litigio, 
                   demandas, 
                   derecho aduanero";
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
        
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/main.css">
        
    </head>

    <body class="home">

        <nav class="navbar">
             @include('nav.nav')
        </nav>

        <main class="container"> 
            <h1 class="title">Mayorga Abogados</h1>
            <h2 class="subtitle">CONTACTENOS</h2>
            <ul class="services">
                <li>SEDE 1 (CONSULTORÍA CORPORATIVA)  AV. EL DORADO NO. 68C-61 OFICINA 204-TORRE CENTRAL DAVIVIENDA </li>
                <li>SEDE 2 (ARBITRAMENTO Y LITIGIO):  CALLE 22 F NO. 85 A-40 PISO 2 </li>
                <li>BOGOTÁ D.C  COLOMBIA</li>
                <li>PBX: (57-1) 4 322595  CELULARES: 315 2448112, 310 6962968, 317 8557728 </li>
                <li>SKYPE: MAYORGAABOGADOS  TWITTER: @MAYORGAABOGADOS </li>
            </ul>
            <div id="app"></div>
        </main>

        <footer class="footer">
           @include('footer.footer')
        </footer>

        <script src="js/app.js"></script>
        
    </body>
</html>
