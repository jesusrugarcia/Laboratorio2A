<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/MenusNotLogged.php' ?>
  <section class="main" id="s1">
    <div>

	<form id="login" name= "login" action="LogIn.php" method="post">
     	Correo Electronico(*): <br>
     	<input type="text" name="email" id="email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>">
     	<br>Contraseña(*): <br>
     	<input type="text" name="contraseña" id="contraseña"><br>
     	<input type="submit" value="enviar"><br>
     </form>
     <?php
include "DbConfig.php";
$mysqli=mysqli_connect($server,$user,$pass,$basededatos);

     if(isset($_POST['email'])){
$email=$_POST['email'];
$contraseña=$_POST['contraseña'];
$sql= "SELECT * FROM usuario WHERE email='$email' AND contraseña= '$contraseña' ";
$resultado= mysqli_query($mysqli, $sql)or die(mysqli_error($mysqli)); 
if (!$resultado){
die("LogIn incorrecto");
} else {
echo "<script> window.location =\"Welcome.php\" </script>";

    }
     }

     ?>	


    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
