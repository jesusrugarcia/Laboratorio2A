<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
   <script type="text/javascript" src="../js/showComprobarPregunta.js"></script>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div id="Preguntas">
      <h2> Ver Pregunta Por Clave </h2>
      <input type="text" name="clave" id="clave">
      <input type="button" name="search" value="buscar" onclick="seeResultPreguntaId()">
    </div>
    <div id="comprobarResultadoPregunta"></div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
