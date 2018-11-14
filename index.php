<?php include_once 'includes/templates/header.php'; ?>

<?php 
if(isset($_GET['/'])){
    $id = $_GET['/'];
}
try{
    require_once('includes/funciones/bd_conexion.php');
    $sql = "SELECT nombre_receta, nombre_receta, descripcion_receta,url_img_receta, id_categoria_receta, id_categorias_receta, id_categorias_receta FROM `recetas` ";
    $sql .="INNER JOIN categoriasReceta ";
    $sql .="ON recetas.id_categoria_receta = categoriasReceta.id_categorias_receta ";
    $resultado = $conn->query($sql);
}catch(Exception $e){
    $error = $e->getMessage();
}
?>
<!--Comiezo del Contenido principal del sitio-->
        <div class="contenido_principal clearfix">

            <section class="top_recetas">
<!--Comienzo de articulo Top_recetas-->
        <article id="top_recetas" class="clearfix">
            <div class="contenedor clearfix">
                    <h2>Top de recetas vegetarianas</h2>
                <div class="receta_imagen">
                    <img src="img/almuerzo1.jpg" alt="Comida_Vegetariana">
                </div><!--receta_imgagen-->
                 <div class="top_recetas">

                    <ol class="clearfix">

                    <li>
                        <h2>NOODLES DE ARROZ</h2>
                        <div class="receta">
                       <img src="img/almuerzo10.jpg" alt="Receta-vegetarina">
                       <a href="receta.php?id=27" class="boton invisible">Leer Mas</a>
                       </div>
                       <p>Estos fideos de arroz se usan mucho en la comida asíatica y se pueden preparar de muchas maneras, esta receta es rica y sumamente versátil. Con esta base puedes preparar de la forma y con las verduras que quieras.</p>
                       <a href="receta.php?id=27" class="boton">Leer Mas</a>
                    </li>
                    <li>
                        <h2>TOSTADAS DE CHORIZO VEGANO</h2>
                        <div class="receta">
                       <img src="img/cenas2.jpg" alt="Receta-vegetarina">
                       <a href="receta.php?id=6" class="boton invisible">Leer Mas</a>
                       </div>
                       <p>Este platillo es ideal para un lunes sin carne ya que no contiene nada de producto animal, pero está lleno de sabor. Ricas tostadas con frijoles y chorizo vegano a base de garbanzos y acompañados de una crema de aguacate. Anímate a prepáralas.</p>
                       <a href="receta.php?id=6" class="boton">Leer Mas</a>
                    </li>
                    <li>
                        <h2>PAN FRANCÉS CLÁSICO</h2>
                        <div class="receta">
                       <img src="img/desayuno5.jpg" alt="Receta-vegetarina">
                       <a href="receta.php?id=12" class="boton invisible">Leer Mas</a>
                       </div>
                       <p>Una gran receta para preparar el Pan Francés, también conocido como French Toast. Se acompañan de miel de maple, mantequilla y se les puede poner fruta encima, como fresas.</p>
                       <a href="receta.php?id=12" class="boton">Leer Mas</a>
                    </li>
                    <li>
                        <h2>PUDDING DE CHÍA Y MANGO</h2>
                        <div class="receta">
                       <img src="img/postres1.jpg" alt="Receta-vegetarina">
                       <a href="receta.php?id=7" class="boton invisible">Leer Mas</a>
                       </div>
                       <p>Postre crudivegano, que además de tener un sabor delicioso, es nutritivo y fresco. Lo puedes acompañar con la fruta de tu elección y de esta manera darle un toque de sabor personalizado.</p>
                       <a href="receta.php?id=7" class="boton">Leer Mas</a>
                    </li>
                        <li>
                            <h2>PUDÍN DE PLÁTANO LIGHT</h2>
                            <div class="receta">
                            <img src="img/postres5.jpg" alt="Receta-vegetarina">
                             <a href="receta.php?id=38" class="boton invisible">Leer Mas</a>
                            </div>
                            <p>Esta rica receta de pudín de plátano es una versión del favorito original pero con menos calorias gracias a la leche reducida en grasa (leche light) y las claras de huevo.</p>
                            <a href="receta.php?id=38" class="boton">Leer Mas</a>
                        </li>
                    <li>
                        <h2>FLAN NAPOLITANO TRADICIONAL</h2>
                        <div class="receta">
                       <img src="img/postres9.jpg" alt="Receta-vegetarina">
                       <a href="receta.php?id=42" class="boton invisible">Leer Mas</a>
                       </div>
                       <p>Esta receta de Flan Napolitano tradicional no puede faltar en tu recetario de repostería.</p>
                       <a href="receta.php?id=42" class="boton">Leer Mas</a>
                    </li>                    
                </ol>
                     </div><!--top_recetas-->
                    </div><!--contenedor-->
                </article>
<!--Comienso de Articulo menu_recetas-->
                <article id="menu_recetas" class="clearfix">
                    <div class="menu_recetas clearfix contenedor">
                        <h2>Nuestro Menú de recetas</h2>
                        <ul>
                            <li>
                                <img src="img/desayunos2.jpg" alt="Pastas vegetarianas">
                                <div class=" clearfix" >
                                    <p>Recetas de desayunos rapidas y faciles de preparar como panquques, chilaquiles, omelette y muchos mas</p>
                                    <a href="menu.php?/=Desayuno">Ver recetas de desayunos Vegetarianas</a>
                                </div>
                            </li>
                             <li>
                                <img src="img/almuerzo7.jpg" alt="Pastas vegetarianas">
                                <div class="contenedor clearfix" >
                                    <p>Prepara deliciosas Pastas Vegetarianas,llenas de nutrientes e ingrendiente accesibles.</p>
                                    <a href="menu.php?/=Almuerzo">Ver recetas de Pastas Vegetarianas</a>
                                 </div>
                            </li>
                             <li>
                                <img src="img/almuerzo5.jpg" alt="Pastas vegetarianas">
                                <div class="contenedor clearfix" >
                                    <p>Deliciosos platos fuertes vegetarianos muy nutritivos que te dejaran satisfecho y son faciles de preparar</p>
                                    <a href="menu.php?/=Almuerzo">Ver recetas de platos fuertes Vegetarianas</a>
                                 </div>
                            </li>
                             <li>
                                <img src="img/cenas5.jpg" alt="Pastas vegetarianas">
                                <div class="contenedor clearfix" >
                                    <p>Platillos vegetarianas con los nutrientes de la soya deliciosos para cualquier ocasion</p>
                                    <a href="menu.php?/=Cenas">Ver recetas de soya Vegetarianas</a>
                                 </div>
                            </li>
                        </ul>
                    </div><!--menu_recetas-->
                </article>
<!--Comienzo de Articulo recetas-->           
                <article id="recetas" class="clearfix">
                        <div class="contenedor recetas clearfix">
                            <?php
                                try{
                                require_once('includes/funciones/bd_conexion.php');
                                $sql = "SELECT  id_receta, nombre_receta, descripcion_receta,url_img_receta, id_categoria_receta, id_categorias_receta, id_categorias_receta FROM `recetas` ";
                                $sql .="INNER JOIN categoriasReceta ";
                                $sql .="ON recetas.id_categoria_receta = categoriasReceta.id_categorias_receta ";
                                $sql .="ORDER BY RAND() LIMIT 10";
                                $resultado = $conn->query($sql);
                            }catch(Exception $e){
                                $error = $e->getMessage();
                            }
                            ?>
                            <h2>Recetas</h2>
                            <ul>
                                <?php 
                                while($receta = $resultado->fetch_assoc()){
                                ?>
                                <li>
                                    <a href="receta.php?id=<?php echo $receta['id_receta'] ?>">
                                    <img src="img/<?php echo $receta['url_img_receta'] ?>" alt="Foto de <?php echo $receta['nombre_receta'] ?>">
                                    <h3><?php echo $receta['nombre_receta'] ?></h3>
                                    <p><?php echo $receta['descripcion_receta'] ?></p>
                                    </a>
                                </li>
                                <?php } 
                                    $conn->close();
                                ?> 
                            </ul>
                        </div>

                </article>
                <article id="newslater">
                    <div class="contenedor newslater ">
                        <h2>Se parte de uno de nosotros suscribite para recivir mas recetas</h2>
                        <a class="boton invisible">Suscribete</a>
                        <form action="validar_registro.php" id="registro" class="registro" method="POST">
                                <div id="datos_usuario" class="registro caja clearfix">
                                <div class="campo">
                                <label for="nombre">*Nombre:</label>
                                    <input id="nombre" name="nombre" type="text" placeholder="Tu Nombre" required>
                                </div>
                                <div class="campo">
                                    <label for="apellido">*Apellido:</label>
                                    <input id="apellido" name="Apellido" type="text" placeholder="Tu Apellido" required> 
                                </div>
                                <div class="campo">
                                    <label for="email">*E-mail:</label>
                                    <input id="email" name="email" type="email" placeholder="Tu E-mail" required> 
                                </div>
                                <div>
                                        <input type="submit" name="submit" class="suscribir" value="Suscribirte">
                                    </div>
                                    <div id="error"></div> 
                                    
                                <h2>Personas Suscritas</h2>
                                <p class="numero">0</p>
                            </div><!--Datos_Usuarios-->
                            
                        </form>

                    </div>

                </article>
            </section> <!--fin seccion-->
            <aside>
                <div class="barra_lateral">
                    <h2>Tambien te pude interesar</h2>
                    <ul>
                        <li>Contenido 1</li>
                        <li>Contenido 2</li>
                        <li>Contenido 3</li>
                        <li>Contenido 4</li>
                    </ul>
                </div><!--barra_lateral-->
            </aside>
        </div><!--fin_contenido_principal-->

<?php include_once 'includes/templates/footer.php'; ?> 