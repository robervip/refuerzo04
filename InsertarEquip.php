<?php
$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
  echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}
else {
  $resultado = $conexion->query("INSERT INTO equipo (id_equipo, nombre, ciudad) VALUES ('25', 'pedro', 'Valencia')");
}
 ?>
 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <nav>
     <div class="nav-wrapper">
       <a href="#" class="brand-logo">Logo</a>
       <ul id="nav-mobile" class="right hide-on-med-and-down">
         <li><a href="topsalario.php">Top Saliario</a></li>
         <li><a href="">Top 5 Alturas</a></li>
         <li><a href="/03/index.php">Volver</a></li>
       </ul>
     </div>
   </nav>

     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
   </body>
 </html>
