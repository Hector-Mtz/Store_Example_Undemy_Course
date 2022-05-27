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
 <?php include('template/header.php') //llamamos el header ?>

 <?php include('template/nav.php') //llamamos el menu ?>

 <main class="contenedor">
   <h1>Nosotros</h1>
   <div class="nosotros">
      <div class="nosotros__contenido">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
           Nihil animi quia eaque dolores ut autem rem voluptatibus 
           corrupti libero odit maxime, sequi provident labore impedit 
           officia nesciunt suscipit quae laudantium.
           Lorem ipsum dolor sit amet consectetur adipisicing elit. 
           Nihil animi quia eaque dolores ut autem rem voluptatibus 
           corrupti libero odit maxime, sequi provident labore impedit 
           officia nesciunt suscipit quae laudantium</p>

           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
           Nihil animi quia eaque dolores ut autem rem voluptatibus 
           corrupti libero odit maxime, sequi provident labore impedit 
           officia nesciunt suscipit quae laudantium.
           Lorem ipsum dolor sit amet consectetur adipisicing elit. 
           Nihil animi quia eaque dolores ut autem rem voluptatibus 
           corrupti libero odit maxime, sequi provident labore impedit 
           officia nesciunt suscipit quae laudantium</p>
      </div>
      <img class="nosotros__imagen" src="img/nosotros.jpg" alt="nosotros">
   </div>
 </main>

 <section class="contenedor comprar">
    <h2 class="comprar__titulo">¿Porqué comprar con nosotros?</h2>
    <div class="bloques">
      <!--bloque-->
       <div class="bloque">
          <img class="bloque__imagen" src="img/icono_1.png" alt="icono1">
          <h3 class="bloque_titulo">El mejor precio.</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
           Nihil animi quia eaque dolores ut autem rem voluptatibus </p>
       </div>
      <!--end bloque-->
       <!--bloque-->
       <div class="bloque">
          <img class="bloque__imagen" src="img/icono_2.png" alt="icono2">
          <h3 class="bloque_titulo">Para DEVS.</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
           Nihil animi quia eaque dolores ut autem rem voluptatibus </p>
       </div>
      <!--end bloque-->
       <!--bloque-->
       <div class="bloque">
          <img class="bloque__imagen" src="img/icono_3.png" alt="icono3">
          <h3 class="bloque_titulo">Envío gratis.</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
           Nihil animi quia eaque dolores ut autem rem voluptatibus </p>
       </div>
      <!--end bloque-->
       <!--bloque-->
       <div class="bloque">
          <img class="bloque__imagen" src="img/icono_4.png" alt="icono4">
          <h3 class="bloque_titulo">La mejor calidad.</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
           Nihil animi quia eaque dolores ut autem rem voluptatibus </p>
       </div>
      <!--end bloque-->
    </div>
 </section>
  
 <?php include('template/footer.php') //llamamos al footer ?>

</body>
</html>