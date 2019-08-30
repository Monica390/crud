<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include 'conexion.php';

    $arg=mysql_query("SELECT direccion FROM clientes WHERE nombre = '$_POST[t]'",$conectardb);

    if($ar=mysql_fetch_array($arg))
    {
    mysql_query("DELETE FROM clientes WHERE nombre='$_POST[t]'",$conectardb);
    echo "datos eliminados";
    }else{
    echo "datos no han sido eliminados";
    }
    ?>
    <p>Regresar
      <a href="index.php">atras</a><br>
  </body>
</html>
