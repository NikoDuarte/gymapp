<?php
$con = New Conexion();


$consultaPublicacion = $con->query("SELECT p.id_publi,p.titulo,p.descripcion,p.imagen,p.fecha,u.id,g.id,g.nombre FROM publicaciones p 
INNER JOIN usuarios u ON u.codigo_gym_user=p.codigo_gym 
INNER JOIN usuarios g ON g.codigo_gym=u.codigo_gym_user
WHERE u.id='$id'");



while($row = mysqli_fetch_array($consultaPublicacion)){
?>


    <div class="tarjeta">
        <div class="tarjeta-user" align="left">
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