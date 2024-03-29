<?php session_start(); 
if (isset($_SESSION['user'])){
  if ($_SESSION['user']=='admin@ehu.es'){
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
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/ShowImageInForm.js"></script>
  <script src="../js/ValidateFieldsQuestion.js"></script>
  <script src="../js/ShowQuestionsAjax.js"></script>
   <script src="../js/AddQuestionsAjax.js"></script>
   <script src="../js/CountQuestions.js"></script>
   </head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div id="totalQuestions">
    <script type="text/javascript">
        setInterval (countTotalQuestions, 10000, <?php echo ('"'.$_REQUEST['email'].'"');?>); 
    </script>
    </div>
    
    <div>
        <form action="" name="fquestion" id="fquestion" method="post" enctype="multipart/form-data">
            <p>Introduce tu dirección de correo: *</p>
            <input type="text" size="60" id="dirCorreo" name="dirCorreo" value=<?php echo ('"'.$_SESSION['user'].'"');?> readonly>
            <p>Introduce el enunciado de la pregunta: *</p>
            <input type="text" size="60" id="nombrePregunta" name="nombrePregunta">
            <p>Respuesta correcta: *</p>
            <input type="text" size="60" id="respuestaCorrecta" name="respuestaCorrecta">
            <p>Respuesta incorrecta1: *</p>
            <input type="text" size="60" id="respuestaIncorrecta1" name="respuestaIncorrecta1">
            <p>Respuesta incorrecta2: *</p>
            <input type="text" size="60" id="respuestaIncorrecta2" name="respuestaIncorrecta2">
            <p>Respuesta incorrecta3: *</p>
            <input type="text" size="60" id="respuestaIncorrecta3" name="respuestaIncorrecta3">
            <p>Complejidad de la pregunta: *</p>
            <select id="complejidad" name="complejidad">
                <option value="1">Baja</option>
                <option value="2" selected>Media</option>
                <option value="3">Alta</option>
            </select>
            <p>Introduce el tema de la pregunta: *</p>
            <input type="text" size="60" id="temaPregunta" name="temaPregunta">
            <div id="selector">
                <input type="file" id="file" accept="image/*" name="file">
            </div>

            
            <p> <input type="button" id="submit" value="Enviar" onclick="ajaxAdd()"> <input type="reset" value="Limpiar">
            	<input type="button" id="showQuestions" value="mostrar Preguntas" onclick="verPreguntas()"></p>
            </form>

        </div>
        <div id="results"></div>
        <div id="QuestionSpace">
            
        </div>
    </section>
    <?php include '../html/Footer.html' ?>
    
</body>
</html>
