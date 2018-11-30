<?php include_once 'includes/templates/header.php'; ?>
<?php 
    if(isset($_GET['/'])){
        $id = $_GET['/'];
    };
    if ($id == 'Desayuno'){
    try{
        require_once('includes/funciones/bd_conexion.php');
        $sql = "SELECT nombre_receta, nombre_receta, descripcion_receta,url_img_receta, id_categoria_receta, id_categorias_receta, id_categorias_receta FROM `recetas` ";
        $sql .="INNER JOIN categoriasReceta ";
        $sql .="ON recetas.id_categoria_receta = categoriasReceta.id_categorias_receta ";
        $sql .="WHERE nombre_categorias_receta = 'Desayuno'";
        $resultado = $conn->query($sql);
    }catch(Exception $e) { 
        $error = $e->getMessage();
    }
?>
    <div class="clearfix listado">
        <section class="listado_recetas">
            <article class="clearfix">
                <ul class="clearfix">
                    <?php while($receta = $resultado->fetch_assoc()){?>
                        <li class="clearfix">

                            <h2><?php echo $receta['nombre_receta']; ?></h2>
                            <div class="receta_imagen">
                                <img src="img/<?php echo $receta['url_img_receta']; ?>" alt="<?php echo $receta['nombre_receta']; ?>">
                            </div><!--Receta_imgen-->
                                <div>
                                    <p><?php echo $receta['descripcion_receta']; ?><p>
                                    <a href="receta.php?id=<?php echo $receta['nombre_receta'];?> " class="boton">Leer Mas</a>
                                </div>
                        </li>
                    <?php } ?>                    
                </ul>
        </section>

<?php }elseif ($id == 'Almuerzo'){
    try{
        require_once('includes/funciones/bd_conexion.php');
        $sql = "SELECT nombre_receta, nombre_receta, descripcion_receta,url_img_receta, id_categoria_receta, id_categorias_receta, id_categorias_receta FROM `recetas` ";
        $sql .="INNER JOIN categoriasReceta ";
        $sql .="ON recetas.id_categoria_receta = categoriasReceta.id_categorias_receta ";
        $sql .="WHERE nombre_categorias_receta = 'Almuerzo'";
        $resultado = $conn->query($sql);
    }catch(Exception $e) { 
        $error = $e->getMessage();
    }
?>
    <div class="clearfix listado">
        <section class="listado_recetas">
            <article class="clearfix">
                <ul class="clearfix">
                    <?php while($receta = $resultado->fetch_assoc()){?>
                        <li class="clearfix">

                            <h2><?php echo $receta['nombre_receta']; ?></h2>
                            <div class="receta_imagen">
                                <img src="img/<?php echo $receta['url_img_receta']; ?>" alt="<?php echo $receta['nombre_receta']; ?>">
                            </div><!--Receta_imgen-->
                                <div>
                                    <p><?php echo $receta['descripcion_receta']; ?><p>
                                    <a href="receta.php?id=<?php echo $receta['nombre_receta'];?> " class="boton">Leer Mas</a>
                                </div>
                        </li>
                    <?php } ?>                    
                </ul>
        </section>
<?php } elseif($id == 'Cenas'){
    try{
        require_once('includes/funciones/bd_conexion.php');
        $sql = "SELECT nombre_receta, nombre_receta, descripcion_receta,url_img_receta, id_categoria_receta, id_categorias_receta, id_categorias_receta FROM `recetas` ";
        $sql .="INNER JOIN categoriasReceta ";
        $sql .="ON recetas.id_categoria_receta = categoriasReceta.id_categorias_receta ";
        $sql .="WHERE nombre_categorias_receta = 'Cenas'";
        $resultado = $conn->query($sql);
    }catch(Exception $e) { 
        $error = $e->getMessage();
    }
?>
    <div class="clearfix listado">
        <section class="listado_recetas">
            <article class="clearfix">
                <ul class="clearfix">
                    <?php while($receta = $resultado->fetch_assoc()){?>
                        <li class="clearfix">

                            <h2><?php echo $receta['nombre_receta']; ?></h2>
                            <div class="receta_imagen">
                                <img src="img/<?php echo $receta['url_img_receta']; ?>" alt="<?php echo $receta['nombre_receta']; ?>">
                            </div><!--Receta_imgen-->
                                <div>
                                    <p><?php echo $receta['descripcion_receta']; ?><p>
                                    <a href="receta.php?id=<?php echo $receta['nombre_receta'];?> " class="boton">Leer Mas</a>
                                </div>
                        </li>
                    <?php } ?>                    
                </ul>
        </section>

<?php } elseif($id == 'Postres'){
    try{
        require_once('includes/funciones/bd_conexion.php');
        $sql = "SELECT nombre_receta, nombre_receta, descripcion_receta,url_img_receta, id_categoria_receta, id_categorias_receta, id_categorias_receta FROM `recetas` ";
        $sql .="INNER JOIN categoriasReceta ";
        $sql .="ON recetas.id_categoria_receta = categoriasReceta.id_categorias_receta ";
        $sql .="WHERE nombre_categorias_receta = 'Postres'";
        $resultado = $conn->query($sql);
    }catch(Exception $e) { 
        $error = $e->getMessage();
    }
?>
    <div class="clearfix listado">
        <section class="listado_recetas">
            <article class="clearfix">
                <ul class="clearfix">
                    <?php while($receta = $resultado->fetch_assoc()){?>
                        <li class="clearfix">

                            <h2><?php echo $receta['nombre_receta']; ?></h2>
                            <div class="receta_imagen">
                                <img src="img/<?php echo $receta['url_img_receta']; ?>" alt="<?php echo $receta['nombre_receta']; ?>">
                            </div><!--Receta_imgen-->
                                <div>
                                    <p><?php echo $receta['descripcion_receta']; ?><p>
                                    <a href="receta.php?id=<?php echo $receta['nombre_receta'];?> " class="boton">Leer Mas</a>
                                </div>
                        </li>
                    <?php } ?>                    
                </ul>
        </section>
<?php } elseif($id == 'Bebidas'){
    try{
        require_once('includes/funciones/bd_conexion.php');
        $sql = "SELECT nombre_receta, nombre_receta, descripcion_receta,url_img_receta, id_categoria_receta, id_categorias_receta, id_categorias_receta FROM `recetas` ";
        $sql .="INNER JOIN categoriasReceta ";
        $sql .="ON recetas.id_categoria_receta = categoriasReceta.id_categorias_receta ";
        $sql .="WHERE nombre_categorias_receta = 'Bebidas'";
        $resultado = $conn->query($sql);
    }catch(Exception $e) { 
        $error = $e->getMessage();
    }
?>
    <div class="clearfix listado">
        <section class="listado_recetas">
            <article class="clearfix">
                <ul class="clearfix">
                    <?php while($receta = $resultado->fetch_assoc()){?>
                        <li class="clearfix">

                            <h2><?php echo $receta['nombre_receta']; ?></h2>
                            <div class="receta_imagen">
                                <img src="img/<?php echo $receta['url_img_receta']; ?>" alt="<?php echo $receta['nombre_receta']; ?>">
                            </div><!--Receta_imgen-->
                                <div>
                                    <p><?php echo $receta['descripcion_receta']; ?><p>
                                    <a href="receta.php?id=<?php echo $receta['nombre_receta'];?> " class="boton">Leer Mas</a>
                                </div>
                        </li>
                    <?php } ?>                    
                </ul>
        </section>
    <?php } ?>
<?php include_once 'includes/templates/footer.php'; ?>