<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>crud</title>
  </head>
  <body>
    <?php
    include 'conexion.php';
    $sql="select * from clientes";
    $er=mysql_query($sql);
     ?>
     <div>
       <table border="10">
         <thead>
           <tr>
             <th>Nombre</th>
            <th>Direccion</th>
         </tr>
    </thead>
    <tbody>
      <?php while ($filas=mysql_fetch_assoc($er)){
         ?>
      <tr>
             <td><?php echo $filas['nombre'] ?></td>
             <td><?php echo $filas['direccion'] ?></td>
        </td>
       </tr>
     <?php } ?>
 </table>
   </div>

 </tbody>

  </body>
</html>
