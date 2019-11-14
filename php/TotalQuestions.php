<?php
 include 'DbConfig.php';
        
        $link = mysqli_connect($server,$user,$pass,$basededatos);
        $link2 = mysqli_connect($server,$user,$pass,$basededatos);
        if(!$link){
            die("Fallo al conectar con la base de datos: " .mysqli_connect_error());
        }
          if(!$link2){
            die("Fallo al conectar con la base de datos: " .mysqli_connect_error());
        }
        
        $sql = "SELECT COUNT(*) FROM preguntas;";
        $sql2= "SELECT COUNT(*) FROM preguntas WHERE email = '".$_REQUEST['email']."' ";
        $resul = mysqli_query($link,$sql);
          $resul2 = mysqli_query($link2,$sql2);
        if(!$resul){
            die("Error: ".mysqli_error($link));
        } else if(!$resul2){
            die("Error: ".mysqli_error($link2));
        }

        $num = mysqli_fetch_array($resul);
		$num2 = mysqli_fetch_array($resul2);

		echo 'Mis Preguntas  /  Total Preguntas <br>'
			 .$num2[0]. '  /  '. $num[0];
			 mysqli_close($link);
			 mysqli_close($link2);
?>