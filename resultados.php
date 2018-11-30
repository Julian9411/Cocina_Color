<?php 
include_once 'includes/funciones/funciones.php';
include_once 'includes/templates/header.php'; 
?>
    <?php 
    $buscar = trim( $_POST['buscar']);
    try {
        require_once('includes/funciones/bd_conexion.php');
        $sql = "SELECT * FROM recetas WHERE nombre_receta LIKE '%".$buscar."%'";
        $resultado = $conn->query($sql);
    } catch (\Exception $e) {
        $error = $e->getMessage();
    }
    ?>
    <div class="clearfix listado">
        <section class="listado_recetas">
            <article class="clearfix">
                <ul class="clearfix">

                  <?php if($receta = $resultado->fetch_assoc()){
                      while($receta = $resultado->fetch_assoc()){
                      ?>
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
                    <?php 
                            }
                        }else{ ?>
                    <div class="contenedor result_busqueda">
                        <h2>No se encontraron resultados</h2>
                    </div>
                    <?php }?>                    
                </ul>
        </section>


<?php include_once 'includes/templates/footer.php'; ?>