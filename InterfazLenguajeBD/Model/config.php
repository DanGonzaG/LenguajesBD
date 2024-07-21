<?php
$oracle = oci_connect ("edilit_root","absc","localhost/ORCL");
if($oracle){
    $success_message = "Conexión exitosa ";
    error_log($success_message);
    echo $success_message;
    var_dump($oracle);   
}
else {
    $error_message = "Error en conexion";
    error_log($error_message);
    echo $error_message;
   
}

?>