<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>
      <?php
      include "DbConfig.php";
$mysqli=mysqli_connect($server,$user,$pass,$basededatos);
   
if (!$mysqli){
die ("Fallo al conectar a MySQL: " . mysqli_connect_error());
}
echo nl2br("Conexión Correcta \n");

$sql = "SELECT Email,Enunciado,Correcta,Incorrecta1,Incorrecta2,Incorrecta3,Dificultad,Tema FROM pregunta";
$resultado= mysqli_query($mysqli, $sql)or die(mysqli_error($mysqli)); 
if (!resultado){
die('Error al Obtener los datos: ' . mysqli_error($mysqli));
}
echo '<table border=1> <tr> <th>Email</th> <th>Enunciado</th> <th> Correcta</th> <th>Incorrecta1</th> <th>Incorrecta2</th> <th>Incorrecta3</th> <th>Dificultad</th> <th>Tema</th> </tr>';
while($row=mysqli_fetch_array($resultado)){
	echo '<tr>
	 <td>'.$row['Email'].'</td>
	 <td>'.$row['Enunciado'].'</td> 
	 <td>'.$row['Correcta'].'</td> 
	 <td>'.$row['Incorrecta1'].'</td>
	 <td>'.$row['Incorrecta2'].'</td>
	 <td>'.$row['Incorrecta3'].'</td>
	 <td>'.$row['Dificultad'].'</td>
	 <td>'.$row['Tema'].'</td>
	</tr>';
}

echo '</table>';
echo nl2br("Se han mostrado todas las preguntas \n");
mysqli_close($mysqli);
      ?>
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
