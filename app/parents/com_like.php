<div class="like">
    <a href="" ><i class="fas fa-thumbs-up"></i> Likes()</a>
</div>
<div class="comentario">
    <?php 
    $con = New Conexion();
$comentConsulta = $con->query("SELECT * FROM comentarios WHERE id_publi='".$row['id_publi']."'");

    $row_cnt = mysqli_num_rows($comentConsulta);
    ?>
    <a href="" onclick="mostrar();"><i class="fas fa-comments"></i> Comentarios(<?php echo $row_cnt; ?>)</a>
</div>