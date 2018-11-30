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
    if(isset($_GET['/'])){
        $id = $_GET['/'];
    };
    ?>
    
    <title>Cocina Color</title>
</head>
<body class="<?php echo $id; ?>">

<div class="header">
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
                <a href="index.php"><img src="img/LOGO.png" alt="Logo Cocina Color"></a>
            </div><!--logo-->
            <div class="barra_busqueda">
                <form action="resultados.php" method="POST" id='serch' class="buscar">
                   <input type="text" id="busqueda" name="buscar">
                   <input type="image" src="img/search-solid.png" name="search" id="buscar">
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
                    $sql = "SELECT * FROM `categoriasReceta`";
                    $resultado = $conn->query($sql);
                }catch(Exception $e) { 
                    $error = $e->getMessage();
                }
                while($catReceta = $resultado->fetch_assoc()){
                ?>
                <li><a href="menu.php?/=<?php echo $catReceta['nombre_categorias_receta'] ?>"><?php echo $catReceta['nombre_categorias_receta'] ?></a></li>
                <?php } ?>
            </ul>
        </nav><!--fin navegacion principal-->
</div>