<?php
$con = New Conexion();

$stmt= $con->query("SELECT codigo_gym_user FROM usuarios WHERE id=$id");
$fila = $stmt->fetch_object();

$codigo = $fila->codigo_gym_user;


$consultaPublicacion = $con->query("SELECT * FROM `publicaciones` WHERE codigo_gym = '$codigo'");

$fila = $consultaPublicacion->fetch_object();

$nombre = $fila->id_user;
$id_publi = $fila->id_publi;

$pmpt = $con->query("SELECT nombre FROM usuarios WHERE id = $nombre");

$fila = $pmpt->fetch_object();

$name = $fila->nombre;

var_dump($id_publi);

while($row = mysqli_fetch_array($consultaPublicacion)){

?>


    <div class="tarjeta">
        <div class="tarjeta-user" align="left">
            <h5><?php echo $name?></h5>
            <h5><?php echo $row['fecha']?></h5>
        </div>
        <div class="tarjeta-imagen" align="left">
        <img src="<?php echo $row['imagen'];?>" alt="">
        </div>
        <div class="tarjeta-contenido">
            <div class="title">
            <h3><?php echo $row['titulo']?></h3>
            </div>
            <div class="descrip">
            <h3><?php echo $row['descripcion']?></h3>
            </div>
            <div class="like">
                <a href="" ><i class="fas fa-thumbs-up"></i> Likes()</a>
            </div>
            <div class="comentario">
                <a href="" onclick="mostrar();"><i class="fas fa-comments"></i> Comentarios()</a>
                <div class="comentario_mostrar" id="mostrar_ocultar">
                    <form method="POST">
                        <textarea name="comentario" placeholder="Comentario..."></textarea>
                        <br>
                        <input type="submit" value="Comentar" name="comentar">
                    </form>
                    <?php
                    include("php/comentario.php");
                    ?>
                </div>
            </div>
            
        </div>
    </div>
    <br>

<?php }?>