<?php include_once 'includes/templates/header.php'; ?>
<?php 
    try{
        require_once('includes/funciones/bd_conexion.php');
        $sql = "SELECT * FROM `desayunos`" ;
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

                            <h2><?php echo $receta['nombre_receta_desayuno']; ?></h2>
                            <div class="receta_imagen">
                                <img src="img/DESAYUNOS/<?php echo $receta['url_img_receta_desayuno']; ?>" alt="<?php echo $receta['nombre_receta_desayuno']; ?>">
                            </div><!--Receta_imgen-->
                                <div>
                                    <p><?php echo $receta['descripcion_receta_desayuno']; ?><p>
                                    <a href="receta.php?id=<?php echo $receta['id_receta_desayuno'];?> " class="boton">Leer Mas</a>
                                </div>
                        </li>
                        <pre>
                            <?php  var_dump ($receta); ?>
                        </pre>
                    <?php } ?>                    
                </ul>

<?php include_once 'includes/templates/footer.php'; ?>