<?php
$Empresa = $_POST['txtEmpresa'];
$Nombre = $_POST['txtNombre'];
$Direccion = $_POST['txtDireccion'];
$telefono = $_POST['txtTelefono'];

$usuario ="root";
$contrasena = "";
$servidor = "localhost";
$basededatos= "fatima";

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos) or die ("no se pudo conectar a la base");
$insertar = "insert into empresarios(NombreEmpresario,Direccion,NombreEmpresa,Telefono) values ('$Nombre', '$Direccion','$Empresa', '$telefono')";
if (mysqli_query($conexion ,$insertar))
{
	echo "La insercion a sido exitosa";
}
else 
{
	echo "Error: ". $insertar ."<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);

?>