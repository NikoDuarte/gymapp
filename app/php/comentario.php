<?php

if (isset($_POST['comentar'])) {
    
    $comentario = $_POST['comentario'];

        $stmt = $con->query("INSERT INTO comentarios (id_user,id_publi,descripcion,fecha) VALUES('".$id."','".$id_publi."','".$comentario."',now()");
        if ($stmt) {
            echo "se envio el comentario";
        }else {
            echo "no sirvio";
        }
}




?>