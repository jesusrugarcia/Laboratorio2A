  <?php
  include 'DbConfig.php';
	 $link = mysqli_connect($server,$user,$pass,$basededatos);
        if(!$link){
            die("Fallo al conectar con la base de datos: " .mysqli_connect_error());
        }
        
        $sql = "DELETE FROM usuarios WHERE email='".$_POST['user']."';";
        
		if ( mysqli_query($link,$sql)){
        	echo 'Eliminado';
        } else {
        	echo 'No se ha podido eliminar';
        }
        
      
   ?>