<?php
$con = New Conexion();
$consultaPublicacion = $con->query("SELECT U.nombre,P.id_publi,P.titulo,P.descripcion,P.imagen,P.fecha FROM publicaciones P,usuarios U WHERE P.id_user=U.id AND P.id_user=$id AND P.codigo_gym = U.codigo_gym ORDER BY P.id_publi DESC");

while($row = mysqli_fetch_array($consultaPublicacion)){

?>


    <div class="tarjeta">
        <div class="tarjeta-user" align="left">
            <h5><?php echo $row['nombre']?></h5>
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

        </div>
    </div>
    <br>

<?php }?>