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
  
 <?php include('template/footer.php') //llamamos al footer ?>
 
</body>
</html>