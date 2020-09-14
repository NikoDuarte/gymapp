<?php
$correo = $_SESSION['correo'];
$id = $_SESSION['user'];
$name = $_SESSION['username'];
if (!isset($_SESSION['user'],$_SESSION['correo'],$_SESSION['username'])) {
    header("location:../login-registro/login.php");
}

if (isset($_POST['compra'])) {
    

    $con = New Conexion();
    $cod = $_GET['cod'];

    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $tipoDoc = $_POST['tipoDoc'];
    $documento = $_POST['documento'];
    $pago = $_POST['pago'];
    $numTarjeta = $_POST['numTarjeta'];
    $fechaEx = $_POST['fechaEx'];
    $cvv = $_POST['cvv'];

    $consulta = $con->query("INSERT INTO pagos (id_producto,id_usuario,direccion,telefono,formpago,tipoDoc,documento,numTarjeta,fechaExpedicion,codeSeguridad)VALUES('".$cod."','".$id."','".$direccion."','".$telefono."','".$pago."','".$tipoDoc."','".$documento."','".$numTarjeta."','".$fechaEx."','".$cvv."')");
    if ($consulta) {
        ?>
        <script type="text/javascript">

        alert("Hizo su pago exitosamente");
        window.location.href='../index.php';

        </script>
<?php
    }else{
        ?>
        <script type="text/javascript">

alert("Ups!! parece que hubo un error al procesar el pago");
window.location.href='../index.php';

</script>
<?php
    }
}
