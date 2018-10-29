<?php include_once 'includes/templates/header.php'; ?>

<?php 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    };
    try{
        require_once('includes/funciones/bd_conexion.php');
        $sql = "SELECT * FROM `desayunos` WHERE `id_receta_desayuno` = '{$id}' ";
        $resultado = $conn->query($sql);
    }catch(Exception $e) { 
        $error = $e->getMessage();
    }
?>
        <section class="receta">
            <article class="clearfix">
            <?php while($receta = $resultado->fetch_assoc()){?>
                <div class="contenedor">
                <img class="rece" src="img/DESAYUNOS/<?php echo $receta['url_img_receta_desayuno'];?>" alt="receta 1">
              <h2><?php echo $receta['nombre_receta_desayuno']; ?></h2>
              <p><?php echo $receta['descripcion_receta_desayuno']; ?></p>
              <h3>Ingredientes</h3>
              <ul>
                <?php                    
                    $ingredientes = array();
                    $ingredientes = explode("," , $receta["ingredientes_receta"]);
                    foreach($ingredientes as $ingrediente):
                ?>
                    <li>
                    <?php  echo $ingrediente ?>
                    </li>
                    <?php endforeach ?>
                </ul>
              <h3>Preparacion</h3>
              <ol>
                    <?php 
                        $pasosPreparacion = array();
                        $pasosPreparacion = explode("," , $receta["preparacion_desayuno"]);
                        foreach($pasosPreparacion as $preparacion):
                    ?>
                  <li>
                      <p><?php echo $preparacion; ?></p>
                  </li>
                    <?php endforeach; ?>
              </ol>
              <img class="nutricional" src="img/DESAYUNOS/<?php echo $receta['url_img_nutrional_desayuno'] ?>" alt="Valor Nutricional de <?php echo $receta['nombre_receta_desayuno']; ?>">
            </div>
            <?php } ?>
            <?php $conn->close(); ?>
            </article>
        </section>

<?php include_once 'includes/templates/footer.php'; ?>