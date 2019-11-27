<?php session_start(); 
if (isset($_SESSION['user'])){
  if ($_SESSION['user']!='admin@ehu.es'){
  echo "<script>
                    alert('No tienes los permisos pertinente. Pulsa aceptar para acceder a la pantalla principal.');
                    window.location.href='Layout.php';
                    </script>"; 
}
} else {
   echo "<script>
                    alert('No has iniciado sesion. Pulsa aceptar para acceder a la pantalla principal.');
                    window.location.href='Layout.php';
                    </script>"; 
}
?>
<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
  <script type="text/javascript" src="../js/HandleUser.js"></script>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>

      <h2>Gestionando Cuentas</h2>
      <form id="formuser" action="HandlingAccounts.php" method="post">
      <?php
        include 'DbConfig.php';
        //Creamos la conexion con la BD.
        $link = mysqli_connect($server,$user,$pass,$basededatos);
        if(!$link){
            die("Fallo al conectar con la base de datos: " .mysqli_connect_error());
        }
        
        $sql = "SELECT * FROM usuarios;";
        $resul = mysqli_query($link,$sql);
        echo "<table border = ><tr><th>Email</th><th>Pass</th><th>Foto</th><th>Estado</th><th>Bloqueo</th> <th>Borrar</th></tr>";
        while($row = mysqli_fetch_array($resul)){
            echo "<tr><td>".$row['email']."</td><td>".$row['pass']."</td><td><img width=\"30\" height=\"30\" src=\"data:image/*;base64, ".$row['foto']."\" alt=\"Foto\"/></td>";
            if ($row['bloqueado']==0){
            	echo "<td>Normal</td>";
            } else {
            	echo "<td>Bloqueado</td>";
            }
            echo "<td><input type=\"button\" value=\"Bloqueo\" onclick=\"changeBloqueado('".$row['email'].", "
            .$row['bloqueado']."')\" </td> <td><input type=\"button\" value=\"Borrar\" onclick=\"borrarUsuario('".$row['email']."')\"</td></tr>";
        }
        echo "</table>";
        mysqli_close($link);
    ?>
      </form>
    </div>
    <div id="result"></div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
