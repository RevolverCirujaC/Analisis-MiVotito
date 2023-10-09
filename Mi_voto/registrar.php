<?php


$Usuario=$_POST["usuario"];
$Contraseña=$_POST["contraseña"];


$conexion=mysqli_connect("localhost","root","","mi_voto");

$consulta= "insert into clientes values('$Usuario', '$Contraseña')";

$resultado= mysqli_query($conexion,$consulta);

if($resultado)
{

    echo "Datos agregados correctamente";
    header("location: http://localhost/MI_VOTO/voto.html");

}

else
{

    echo "Error al ingresar los datos";
}

mysqli_close($conexion);

?>