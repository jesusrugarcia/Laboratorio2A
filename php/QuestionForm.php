<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
   
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
     <div class="container" style="background-color: #E8D0F2; width: 400px; margin: auto; height: 400px; margin-top:30px; border-radius: 15px; border: 5px outset #E8C2F2; font-family: arial; font-weight: bold; color: #644073; line-height: 130%;">
    <div style= "padding-top: 5px">
    <form id="fquestion" name="fquestion" action="AddQuestion.php" method="post" >
	Correo Electronico(*): <br>
	<input type="text" id="correo" name="correo" ><br>
	Enunciado de la pregunta(*):<br>
	<input type="text" id="enunciado" name="enunciado" ><br>
	Respuesta correcta(*):<br>
	<input type="text" id="correcta" name="correcta"><br>
	Respuesta incorrecta 1(*):<br>
	<input type="text" id="incorrecta1" name="incorrecta1"><br>
	Respuesta incorrecta 2(*):<br>
	<input type="text" id="incorrecta2" name="incorrecta2"><br>
	Respuesta incorrecta 3(*):<br>
	<input type="text" id="incorrecta3" name="incorrecta3"><br>
	Dificultad de la pregunta(*):
	<select id="dificultad" name="dificultad" style="color: #644073;  font-family: arial; font-weight: bold; background-color: #E8C2F2;  border: 3px outset #B7A4BF;">
		<option value="1">Baja</option>
		<option value="2">Media</option>
		<option value="3">Alta</option>
	</select><br>
	Tema de la pregunta(*):<br>
	<input type="text" id="tema" name="tema"><br><br>
	Enviar(Comprobar formulario)<br>
	<input type="submit" id="button" style="color: #644073;  font-family: arial; font-weight: bold; background-color: #E8C2F2;  border: 3px outset #B7A4BF;" >
	</form>
    </div>
    </div>
  </section>
  <?php include '../html/Footer.html'   #onClick="$(document).ready(ValidateFieldsQuestion())" ?>

<script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/ValidateFieldsQuestion.js"></script>
</body>
</html>

