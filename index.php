<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
</head>
<body>
<!--
        BEM: BLOCK ELEMENT MODIFIER, ES UNA METODOLOGIA 
        PARA CREAR CODIGO REUTILIZABLE Y ORDENADO PARA 
        PROYECTOS CSS.

        TIENE CONVENCIONES(COSAS YA PREDEFINIDAS).
        GRACIAS A ESTO SE EVITAN LAS COLISIONES ENTRE NONBRES.

    -   BLOQUES: CONTENEDORES, SI UNA SECCION POR SI SOLA ES
        SIGNIFICATIVA Y NO REQUIERE DE OTRAS SECCIONES PARA SU
        APARIENCIA(CSS) DEBERÁ IR EN UN BLOQUE

        EJEMPLO: <div class="clientes">...</div>

    -   ELEMENTOS:PARTE DE UN BLOQUE QUE DEPENDE DEL BLOQUE Y 
        NO ES POR SI SOLO SIGNIFICATIVO; TIENE LA CARACTERISTICA 
        DE QUE UTILIZAN EL NOMBRE DEL BLOQUE Y DESPUES DOBLE GUION BAJO

        EJEMPLO: <p class="cliente__nombre">...</p>

    -  MODIFICADORES: ¿UN BLOQUE O ELEMENTO TENDRA UNA VRAIABLE?SE UTILIZA
       UN MODIFICADOR QUE ES UNA 'BANDERA' QUE AVISAQUE ESE ELEMENTO
       TEDRÁ UN DISEÑO DIFERENTE

       EJEMPLO: <p class="cliente__nombre--ceo">...</p>
-->
 <?php include('template/header.php') //llamamos el header ?>

 <?php include('template/nav.php') //llamamos el menu ?>

 <main class="contenedor">
   <h1>Nuestros productos</h1>
   <div class="grid">
       <div class="producto"> <!--inicio producto-->
           <a href="producto.php">
               <img class="producto__imagen" src="img/1.jpg" alt="imagen camisa">
               <div class="producto__informacion">
                   <p class="producto__nombre">VueJs</p>
                   <p class="producto__precio">$25</p>
               </div>
           </a>
       </div><!--fin producto-->
       <div class="producto"> <!--inicio producto-->
           <a href="producto.php">
               <img class="producto__imagen" src="img/2.jpg" alt="imagen camisa">
               <div class="producto__informacion">
                   <p class="producto__nombre">Agular</p>
                   <p class="producto__precio">$25</p>
               </div>
           </a>
       </div><!--fin producto-->
       <div class="producto"> <!--inicio producto-->
           <a href="producto.php">
               <img class="producto__imagen" src="img/3.jpg" alt="imagen camisa">
               <div class="producto__informacion">
                   <p class="producto__nombre">ReacNative</p>
                   <p class="producto__precio">$25</p>
               </div>
           </a>
       </div><!--fin producto-->
       <div class="producto"> <!--inicio producto-->
           <a href="producto.php">
               <img class="producto__imagen" src="img/4.jpg" alt="imagen camisa">
               <div class="producto__informacion">
                   <p class="producto__nombre">Redux</p>
                   <p class="producto__precio">$25</p>
               </div>
           </a>
       </div><!--fin producto-->
       <div class="producto"> <!--inicio producto-->
           <a href="producto.php">
               <img class="producto__imagen" src="img/5.jpg" alt="imagen camisa">
               <div class="producto__informacion">
                   <p class="producto__nombre">NodeJs</p>
                   <p class="producto__precio">$25</p>
               </div>
           </a>
       </div><!--fin producto-->
       <div class="producto"> <!--inicio producto-->
           <a href="producto.php">
               <img class="producto__imagen" src="img/6.jpg" alt="imagen camisa">
               <div class="producto__informacion">
                   <p class="producto__nombre">SASS</p>
                   <p class="producto__precio">$25</p>
               </div>
           </a>
       </div><!--fin producto-->
       <div class="producto"> <!--inicio producto-->
           <a href="producto.php">
               <img class="producto__imagen" src="img/7.jpg" alt="imagen camisa">
               <div class="producto__informacion">
                   <p class="producto__nombre">HTML5</p>
                   <p class="producto__precio">$25</p>
               </div>
           </a>
       </div><!--fin producto-->
       <div class="producto"> <!--inicio producto-->
           <a href="producto.php">
               <img class="producto__imagen" src="img/8.jpg" alt="imagen camisa">
               <div class="producto__informacion">
                   <p class="producto__nombre">GtiHub</p>
                   <p class="producto__precio">$25</p>
               </div>
           </a>
       </div><!--fin producto-->
       <div class="producto"> <!--inicio producto-->
           <a href="producto.php">
               <img class="producto__imagen" src="img/9.jpg" alt="imagen camisa">
               <div class="producto__informacion">
                   <p class="producto__nombre">BulmaCSS</p>
                   <p class="producto__precio">$25</p>
               </div>
           </a>
       </div><!--fin producto-->
       <div class="producto"> <!--inicio producto-->
           <a href="producto.php">
               <img class="producto__imagen" src="img/10.jpg" alt="imagen camisa">
               <div class="producto__informacion">
                   <p class="producto__nombre">TypeScript</p>
                   <p class="producto__precio">$25</p>
               </div>
           </a>
       </div><!--fin producto-->
       <div class="producto"> <!--inicio producto-->
           <a href="producto.php">
               <img class="producto__imagen" src="img/11.jpg" alt="imagen camisa">
               <div class="producto__informacion">
                   <p class="producto__nombre">Drupal</p>
                   <p class="producto__precio">$25</p>
               </div>
           </a>
       </div><!--fin producto-->
       <div class="producto"> <!--inicio producto-->
           <a href="producto.php">
               <img class="producto__imagen" src="img/12.jpg" alt="imagen camisa">
               <div class="producto__informacion">
                   <p class="producto__nombre">JavaScript</p>
                   <p class="producto__precio">$25</p>
               </div>
           </a>
       </div><!--fin producto-->
       <div class="producto"> <!--inicio producto-->
           <a href="producto.php">
               <img class="producto__imagen" src="img/13.jpg" alt="imagen camisa">
               <div class="producto__informacion">
                   <p class="producto__nombre">GraphQL</p>
                   <p class="producto__precio">$25</p>
               </div>
           </a>
       </div><!--fin producto-->
       <div class="producto"> <!--inicio producto-->
           <a href="producto.php">
               <img class="producto__imagen" src="img/14.jpg" alt="imagen camisa">
               <div class="producto__informacion">
                   <p class="producto__nombre">Wordpress</p>
                   <p class="producto__precio">$25</p>
               </div>
           </a>
       </div><!--fin producto-->

       <div class="grafico grafico--camisas">

       </div>
       
       <div class="grafico grafico--node">

       </div>
   </div>
 </main>
  
 <?php include('template/footer.php') //llamamos al footer ?>

</body>
</html>