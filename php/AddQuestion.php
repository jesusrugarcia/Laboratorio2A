<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/MenusLogged.php' ?>
  <section class="main" id="s1">
    <div>
<?php
include "DbConfig.php";
$mysqli=mysqli_connect($server,$user,$pass,$basededatos);

if (!$mysqli){
die ("Fallo al conectar a MySQL: " . mysqli_connect_error());
}
echo nl2br("Conexión Correcta \n");

$correo= $_POST['correo'];
$enunciado=$_POST['enunciado'];
$correcta=$_POST['correcta'];
$incorrecta1=$_POST['incorrecta1'];
$incorrecta2=$_POST['incorrecta2'];
$incorrecta3=$_POST['incorrecta3'];
$dificultad=$_POST['dificultad'];
$tema=$_POST['tema'];
$sql="INSERT INTO pregunta(Email,Enunciado,Correcta,Incorrecta1,Incorrecta2,Incorrecta3,Dificultad,Tema) VALUES ('$correo','$enunciado','$correcta','$incorrecta1','$incorrecta2','$incorrecta3','$dificultad','$tema')";


if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    echo nl2br ("Esta dirección de correo ($correo) es inválida. \n. "."<button onclick=\"goBack()\">Go Back</button>");
				}

elseif ($correo=="") {
	echo nl2br ("la direccion de correo no puede ser nula \n".
		"<button onclick=\"goBack()\">Go Back</button> "
);
} elseif ($enunciado==""){
echo nl2br ("el enunciado no puede ser nulo \n".
		"<button onclick=\"goBack()\">Go Back</button> "
);
} elseif (strlen($enunciado)<10){
	echo nl2br ("el enunciado debe tener 10 caracteres \n".
		"<button onclick=\"goBack()\">Go Back</button> "
);
} elseif($incorrecta3 == ""|| $incorrecta2 == "" || $incorrecta1 == "null" || $tema==""){
	echo nl2br ("hay campos vacios \n".
		"<button onclick=\"goBack()\">Go Back</button> "
);
} else{

if (!mysqli_query($mysqli, $sql)){
die('Error al insertar: ' . mysqli_error($mysqli));
}
echo 'Inserción Correcta';

mysqli_close($mysqli);

}
	?><br>
<a href="ShowQuestions.php">Ver preguntas ya insertadas</a>
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
  <script>
	function goBack() {
  	window.history.back();
	}
  </script>
</body>
</html>
