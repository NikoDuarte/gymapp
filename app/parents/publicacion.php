<?php
include("php/envioPublic.php");
?>
<?php
include("php/envioProducto.php");
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
            break;
            case 'Admin':
                ?>
                <br>
                <div class="contenedor" >
                    <input type="button" value="Producto" onclick="mostrar();" class="contenedor-mostrar">
                    <div id="mostrar_ocultar" class="publicacion">
                    <br>
                        <form method="POST" enctype="multipart/form-data">
                        <input type="text" name="nombre" class="publicacion-titulo" placeholder="Ingrese el nombre del producto" required>
                        <br>
                        <br>
                        <textarea name="descripcion"  placeholder="Descripcion de la publicacion..."></textarea>
                        <br>
                        <select name="tipo" id="">
                           <option value="">SELECCIONE EL TIPO DEL PRODUCTO..</option>
                           <option value="ropa">ROPA</option>
                           <option value="accesorios">ACCESORIOS</option>
                           <option value="vitaminas">VITAMINAS</option>
                        </select>
                        <br>
                        <br>
                        <input type="text" name="precio" id="" placeholder="Ingrese el precio..">
                        <input type="file" name="imagen">
                        <br>
                        <input type="submit" value="Publicar" name="envio">
                    </div>
                        </form>
                </div>
                <br>
                <br>
                <?php
            break;


                    
            default:

                break;
        }
                ?>
