<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/MenusNotLogged.php' ?>
  <section class="main" id="s1">
    <div>
     <form id="signup" name= "signup" action="SignUp.php" method="post">
     	Correo Electronico(*): <br>
     	<input type="text" name="email" id="email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>">
     	<br>Nombre(*): <br>
     	<input type="text" name="nombre" id="nombre" value="<?php echo isset($_POST["nombre"]) ? $_POST["nombre"] : ''; ?>">
     	<br>Apellidos(*): <br>
     	<input type="text" name="apellidos" id="apellidos" value="<?php echo isset($_POST["apellidos"]) ? $_POST["apellidos"] : ''; ?>">
     	<br>Tipo de Usuario(*): 
     	<br><select id="tipo" name = "tipo">
     		<option value="0">Profesor</option>
     		<option value="1">Alumno</option>
     	</select>
     	<br>Contraseña(*): <br>
     	<input type="text" name="contraseña" id="contraseña">
     	<br>Repetir Contraseña(*): <br>
     	<input type="text" name="repetir" id="repetir"><br>
     	<input type="submit" value="enviar "><br>
     	  </form><br>
 <?php
  include "DbConfig.php";


if(isset($_POST['email'])){
$mysqli=mysqli_connect($server,$user,$pass,$basededatos);
if (!$mysqli){
die ("Fallo al conectar a MySQL: " . mysqli_connect_error());
}
echo nl2br("Conexión Correcta \n");

$email=$_POST['email'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$tipo=$_POST['tipo'];
$contraseña=$_POST['contraseña'];
$repetir=$_POST['repetir'];
$sql= "INSERT INTO usuario(email,nombre,apellidos,contraseña,tipo) VALUES ('$email','$nombre','$apellidos','$contraseña','$tipo')";

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo nl2br ("Esta dirección de correo ($correo) es inválida. \n. ");
 
} elseif($email ==""|| $nombre ==""|| $apellidos ==""|| $contraseña ==""|| $repetir ==""){
	 echo nl2br ("No puede haber campos vacios \n. ");
}elseif(!$contraseña == $repetir){
	 echo nl2br ("contraseñas no coinciden \n. ");
}elseif(strlen($contraseña)<6){
	 echo nl2br ("la contraseña debe tener al menos 6 caracteres \n. ");
}else{

if (!mysqli_query($mysqli, $sql)){
die('Error al insertar: ' . mysqli_error($mysqli));
}
echo 'Registro Correcto';

mysqli_close($mysqli);

}
}

  ?>

   
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
 
</body>
</html>
