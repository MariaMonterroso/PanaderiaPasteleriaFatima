<?php
//Guardar al usuario
$usuario = "root";
//Guardar la contrasena
$contrasena = "";
//Guardar el servidor
$servidor = "localhost";
//Guardar la base de datos
$basededatos = "fatima";
//Recibir la edad de la pagina web

//Conexion a la base de datos
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos) or die ("No se ha podido conectar con la Base de datos");

//Consulta SQL con el parametro
$consulta = "SELECT productos tipoproducto.Descripcion, producto.Nombre, producto.Precio *FROM tipoproducto INNER JOIN producto ON tipoproducto.Id_Tipo = producto.Id_Tipo WHERE (((tipoproducto.Id_Tipo)=1))";

//Envio de la consulta
$resultado = mysqli_query($conexion, $consulta) or die ("Algo esta mal con la consulta SQL");

//Mostrar datos en el HTML junto con PHP
echo "<table border = '2' width = 50% height = 300px>";
echo "<tr>";
echo "<th> Descripcion </th>";
echo "<th> Nombre </th>";
echo "<th> Precio </th>";
echo "</tr>";
//Ciclo para mostrar el contenido de la tabla
while ($columna = mysqli_fetch_array($resultado))
{
	echo "<tr>";
	echo "<td>" . $columna['Descripcion'] . "</td><td>" . $columna['Nombre'] . "</td><td>" . $columna['Precio'] . "</td>";	
}
echo "</table>";
//Cerrar la conexion
mysqli_close($conexion);
?>