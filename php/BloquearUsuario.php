  <?php
  include 'DbConfig.php';
	 $link = mysqli_connect($server,$user,$pass,$basededatos);
        if(!$link){
            die("Fallo al conectar con la base de datos: " .mysqli_connect_error());
        }
        $array = explode(",", $_POST['user']);
        $email = $array[0];
        $block= $array[1];
        if ($block==0){
          $sql = "UPDATE usuarios SET bloqueado= 1 WHERE email='".$email."';";
        } else {
           $sql = "UPDATE usuarios SET bloqueado= 0 WHERE email='".$email."';";
        }
        
        
		if ( mysqli_query($link,$sql)){
        	echo 'Actualizado';
        } else {
        	echo 'No se ha podido actualizar';
        }
        
      
   ?>