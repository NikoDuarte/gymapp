<?php
    session_start();
    ob_start();

if (isset($_POST['iniciar'])) {
    //if (strlen($_POST['user']) >= 1 && strlen($_POST['pass']) >= 1) {

        $correo = $_POST['correo'];
        $pass = $_POST['pass'];

        $existe = valida($correo);
    
        if ($existe>0){

            $arreglo =consulta($correo,$pass);
    
            //if ($arreglo=1) {
                switch ($arreglo[0]) {
                    case "Gimnasio":
                            $_SESSION['correo'] = $correo;
                            $user = $_SESSION['user'];
                            $name = $_SESSION['username'];
                        
                    ?>
                        <div class="cont" align="center">
                        <h3 class="ok">Bienvenido <?php echo $name?> te estamos redireccionando</h3>
                        <meta http-equiv="refresh" content="1.5;URL=../app/index.php">
                        </div>
                    <?php
                    break;
                    case "Usuario":
                            $_SESSION['correo'] = $correo;
                            $user = $_SESSION['user'];
                            $name = $_SESSION['username'];
                    ?>
                        <div class="cont" align="center">
                        <h3 class="ok">Bienvenido <?php echo $name?> te estamos redireccionando</h3>
                        <meta http-equiv="refresh" content="1.5;URL=../app/index.php">
                        </div>
                    <?php
                    break; 
                    case "Admin":
                            $_SESSION['correo'] = $correo;
                            $user = $_SESSION['user'];
                            $name = $_SESSION['username'];
                    ?>
                            <div class="cont" align="center">
                            <h3 class="ok">Bienvenido <?php echo $name?> te estamos redireccionando</h3>
                            <meta http-equiv="refresh" content="1.5;URL=../app/index.php">
                            </div>
                    <?php
                    break;
                }
            //}else{
                //echo "no funciono";
            //}
        }else {
?>
        <div class="cont" align="center">
        <h3 class="bad">Ups, parece que el usuario con documento "<?php echo $correo; ?>" que ingresaste no existe, verifica los campos!</h3>
        <!--<meta http-equiv="refresh" content="2.3;URL=login.php">-->
        </div>
<?php
        }

        
    //}
}


function valida($correo)
{

    include("../config/conexion.php");  
    $con = New Conexion();
    $consulta="SELECT * FROM usuarios WHERE correo='$correo'";
    $resultado=$con->query($consulta) or die("Error de datos".mysqli_error($con));

    $numfilas = $resultado->num_rows;
        
        return $numfilas;
    
    
}


function consulta($correo,$pass)
{

    $con = New Conexion();
    $consulta="SELECT * FROM usuarios WHERE correo='$correo' AND password='$pass'";

    $resultado=$con->query($consulta) or die("Error de datos".mysqli_error($con));

    $numfilas = $resultado->num_rows;
    if ($numfilas>0){
        $fila = $resultado->fetch_object();
        $_SESSION['username'] = $fila->nombre;
        $_SESSION['user']= $fila->id;
        $arreglo = array($fila->rol); 
        return $arreglo;
    }
    else
    {
?>
        <h5 class="bad">Ups, parece que alguno de los datos no coinciden!</h5>
<?php
    }
}

?>
