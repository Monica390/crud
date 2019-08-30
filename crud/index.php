<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><strong>crud</strong></title>
  </head>
  <body>

<?php
include('conexion.php');
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];

if(isset($_POST['nombre'])){
  if(is_null($_POST['nombre'])
   or $_POST['nombre']==''){
}else{
$sql = "insert into clientes values ('$nombre','$apellidos','$direccion')";

}
}
?>
    <form class="index.php" action="index.php" method="post">
      <p><label>Nombre: <input type = "text" name="nombre" placeholder="Ingrese el nombre"/></label></p>
      <p><label>Su direccion: <input type = "text" name="direccion" placeholder="Ingrese la direccion"/></label></p>
     <input type= "submit" value="Enviar"/>
    </form>
</br>
    <?php
$ver=mysql_query($sql);
include 'mitabla.php';
?>

<?php
include 'botoneliminar.php';
 ?>

  </body>
</html>
