<?php
session_start ();
?>
<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
   <script type="text/javascript" src="../js/CounterHandler.js'?>"></script>'
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>
        <?php
        session_destroy ();
            echo "<script>
            countDecrease();
                    cierreSesion();

                    alert('Adios, vuelve cuando quieras.');
                    window.location.href='Layout.php';
                </script>";  
        ?>
      
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
