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
     libxml_use_internal_errors(true);
    $preguntas= simplexml_load_file('../xml/Questions.xml');
    echo "<table border = ><tr><th>Autor</th><th>Enunciado</th><th>Respuesta Correcta</th>";
    foreach ($preguntas->xpath('//assessmentItem') as $pregunta){
      echo  utf8_decode("<tr><td>".$pregunta['author']."</td>
            <td>".$pregunta->itemBody->p."</td>
            <td>".$pregunta->correctResponse->value[0]."</td>");
    }
        
        
        
        echo "</table>";
        
         foreach(libxml_get_errors() as $error) {
                              echo "\t", $error->message;
                              }
                              
       
    ?>
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
