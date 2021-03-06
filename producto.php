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
   <h1>ReacJs</h1>

   <div class="camisa">
      <img class="camisa__imagen" src="img/3.jpg" alt="camisa">
      <div class="camisa__contenido">
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
           Adipisci consequatur dolor consectetur asperiores? Nam dolorem, 
           neque mollitia quibusdam repudiandae ab blanditiis provident quis pariatur, 
           reprehenderit error perferendis? Veritatis, doloremque. Sapiente.
          </p>
          <form class="formulario">
              <select class="formulario__campo" name="" id="">
                <option value="" selected disabled>Selecciona una talla</option>
                <option value="">Chica</option>
                <option value="">Mediana</option>
                <option value="">Grande</option>
              </select>
              <input class="formulario__campo"  type="number" placeholder="Cantidad" min="1" step="10">
              <input class="formulario__submit"  type="submit" value="Agregar a carrito">
          </form>
      </div>
   </div>

 </main>
  
 <?php include('template/footer.php') //llamamos al footer ?>

</body>
</html>