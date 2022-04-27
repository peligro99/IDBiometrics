<?php
$conexion=mysqli_connect("localhost","root","","idbiometrics")
or die("Problemas en la conexion");
mysqli_query($conexion,"INSERT INTO clientes VALUES (null,'".$_POST["Nombre"]."','".$_POST["last_name"]."','".$_POST["E-Mail"]."','".$_POST["Telefono"]."','".$_POST["Direccion"]."','".$_POST["Ciudad"]."','".$_POST["state"]."','".$_POST["Codigo_postal"]."','".$_POST["hosting"]."','".$_POST["comment"]."')")
or die("Problemas en el select".mysql_error( $conexion));
mysqli_close($conexion);
echo "Producto guardado";
