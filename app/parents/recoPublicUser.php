<?php
$con = New Conexion();


$consultaPublicacion = $con->query("SELECT p.id_publi,p.titulo,p.descripcion,p.imagen,p.fecha,u.id,g.id,g.nombre FROM publicaciones p 
INNER JOIN usuarios u ON u.codigo_gym_user=p.codigo_gym 
INNER JOIN usuarios g ON g.codigo_gym=u.codigo_gym_user
WHERE u.id='$id' ORDER BY p.id_publi DESC");



while($row = mysqli_fetch_array($consultaPublicacion)){
?>


    <div class="tarjeta">
        <div class="tarjeta-user" align="left">
        <form method="POST" action="php/comentario.php">
        <input type="text" value="<?php echo $row['id_publi']; ?>" name="id_publi" hidden> 
            <h5><?php echo $row['nombre'];?></h5>
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
            <?php 
            include("parents/com_like.php");
            ?>
                <div class="comentario_mostrar" id="mostrar_ocultar">
                        <textarea name="comentario" placeholder="Comentario..."></textarea>
                        <br>
                        <input type="submit" value="Comentar" name="comentar">
                    </form>
            </div>
        </div>
    </div>
    <br>
    <?php }?>

