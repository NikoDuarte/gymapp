<?php
include("php/envioPublic.php");
?>
<?php
        $con = New Conexion();
        $consulta=$con->query("SELECT rol FROM usuarios WHERE id = $id");
        $fila = $consulta->fetch_object();

        $rol = $fila->rol;

        switch ($rol) {
            case 'Gimnasio':
                ?>
                <br>
                <div class="contenedor" >
                    <input type="button" value="¿Quieres publicar?" onclick="mostrar();" class="contenedor-mostrar">
                    <div id="mostrar_ocultar" class="publicacion">
                    <br>
                        <form method="POST" enctype="multipart/form-data">
                        <input type="text" name="titulo" class="publicacion-titulo" placeholder="Titulo de la publicacion..." required>
                        <br>
                        <br>
                        <textarea name="descripcion"  placeholder="Descripcion de la publicacion..."></textarea>
                        <input type="file" name="imagen">
                        <br>
                        <input type="submit" value="Publicar" name="envio">
                    </div>
                        </form>
                </div>
                <br>
                <br>
                <?php
                    
            default:

                break;
        }
                ?>
