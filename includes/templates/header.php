<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, userscalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Merriweather|Slabo+27px" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <?php
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    ?>
    
    <title>Cocina Color</title>
</head>
<body class="<?php echo $pagina; ?>">

    <header class="clearfix">
        <div class="barra clearfix">
            <div class="redes_sociales">
            <nav class="menu_redes_sociales">
                <ul class="clearfix">
                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fas fa-utensils"></i></a></li>
                </ul>
            </nav>
            </div><!--redes_sociales-->
            <div class="logo">
                <a href="index.html"><img src="img/LOGO.png" alt="Logo Cocina Color"></a>
            </div><!--logo-->
            <div class="barra_busqueda">
                <form action="index.html" method="POST" id='serch' class="buscar">
                <label for="busqueda" class="serch"><i class="fas fa-search"></i><input type="serch" id="busqueda"></label>
            </form>
            </div><!--barra-busqueda-->
        </div><!--barra-->
     </header> <!--fin de encabezdo-->
     <!--Comienzo navegacion principal-->
     <nav class="navegacion_principal clearfix">
            <div class="menu_movil">
                <span></span>
                <span></span>
                <span></span>
            </div>
 
            <ul>
                <?php
                try{
                    require_once('includes/funciones/bd_conexion.php');
                    $sql = "SELECT * FROM `desayunos`";
                    $resultado = $conn->query($sql);
                }catch(Exception $e) { 
                    $error = $e->getMessage();
                }

                ?>
                <li><a href="desayunos/desayunos.html">Desayunos</a></li>
                <li><a href="almuerzos/almuerzos.html">Almuerzos</a></li>
                <li><a href="cenas/cenas.html">Cenas</a></li>
                <li><a href="postres/postres.html">Postres</a></li>
                <li><a href="bebidas/bebidas.html">Bebidas</a></li>
            </ul>
        </nav><!--fin navegacion principal-->
