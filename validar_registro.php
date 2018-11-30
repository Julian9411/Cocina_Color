<?php 
if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['Apellido'];
    $email = $_POST['email'];
    $fecha = date('Y-m-d H:i:s');
    try{
        require_once('includes/funciones/bd_conexion.php');
        $stmt = $conn->prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, email_registrado, fecha_registro) VALUES (?,?,?,?) ");
        $stmt->bind_param("ssss", $nombre, $apellido, $email, $fecha);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        header('Location: validar_registro.php?exitoso=1');
    } catch (exception $e) {
        $error = $e->getMessage();
    }
}
?>
<?php include_once 'includes/templates/header.php'; ?>

<?php if(isset($_GET['exitoso']) ) {
        if($_GET['exitoso'] == 1 ) {
?>
        <div class=" validarRegistro">
            <h2>Gracias por suscribirte ya eres parte de nuestra familia</h2>
            <img src="img/alimentos__vegetarianos.jpg" alt="almientos vegetarianos">
        </div>

<?php       }   
        }
?>


<?php include_once 'includes/templates/footer.php'; ?>
