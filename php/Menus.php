<div id='page-wrap'>
<header class='main' id='h1'>
     <script src="../js/CounterHandler.js"></script>
      <div id="totalUsers">
    <script type="text/javascript">
        setInterval (countUsersTotal, 10000); 
    </script>
</div>
  <span class="right" id="register"><a href="SignUp.php">Registro</a></span>
        <span class="right" id="login"><a href="LogIn.php">Login</a></span>
        <span class="right" id="logout" style="display:none;"><a href="LogOut.php">Logout</a></span>


</header>
<nav class='main' id='n1' role='navigation'>
    <span><a href='Layout.php'>Inicio</a></span>
   <!-- <span id="insertq" style="display:none"><a href='QuestionFormHtml5.php<?php echo $GLOBALS["email"];?>'> Insertar Pregunta</a></span>
    <span id="showq" style="display:none"><a href='ShowQuestionsWithImage.php<?php echo $GLOBALS["email"];?>'>Ver Preguntas</a></span>
    <span id="showqxml" style="display:none"><a href='ShowXMLQuestions.php<?php echo $GLOBALS["email"];?>'>Ver Preguntas XML</a></span>-->
    <span id="handle" style="display:none"><a href='HandlingQuizesAjax.php'>Gestionar Preguntas</a></span>
    <span id="handleusers" style="display:none"><a href='HandlingAccounts.php'>Gestionar Usuarios</a></span>
    <span id="ver" style="display:none"><a href='VerPregunta.php'>Ver Pregunta Por Clave</a></span>   
    <span><a href='Credits.php'>Creditos</a></span>
</nav>
    <script src="../js/jquery-3.4.1.min.js"></script>
   
<script>
    function inicioSesion(){
       // $('#insertq').show();
       if ("<?php echo $_SESSION['user']; ?>" != 'admin@ehu.es'){
       $('#ver').show();
        $('#handle').show();
        } else {
             $('#handleusers').show();
        }
        $('#register').hide();
        $('#login').hide();
        $('#logout').show();
        
   
        $("#h1").append("<p><?php echo $_SESSION["user"];?></p>");
        $("#h1").append("<img width=\"50\" height=\"60\" src=\"data:image/*;base64,<?php echo getImagenDeBD();?>\" alt=\"Imagen\"/>");

        $('#totalUsers').show();

        //countIncrease();
    }
    
    function cierreSesion(){
      //  countDecrease();
           // $('#insertq').hide();
           $('#ver').hide();
            $('#handle').hide();
            $('#handleusers').hide();
            $('#register').show();
            $('#login').show();
            $('#logout').hide();
           $('#totalUsers').show();
             
    }
</script>
<?php
    
    if(isset($_SESSION['user'])){
        echo "<script>inicioSesion();</script>";
    }else{

        echo "<script>cierreSesion();</script>";
    }
    
    function getImagenDeBD(){
        if($_SESSION['user']!=""){
            include 'DbConfig.php';
            $mysqli = mysqli_connect($server,$user,$pass,$basededatos);
            if(!$mysqli){
                die("Error: ".mysqli_connect_error);
            }

            $sql = "SELECT foto FROM usuarios WHERE email=\"".$_SESSION['user']."\";";
            $resul = mysqli_query($mysqli,$sql, MYSQLI_USE_RESULT);
            if(!$resul){
                die("Error: ".mysqli_error($mysqli));
            }
            $img = mysqli_fetch_array($resul);
            return $img['foto'];
        }
        else{
            return "";
        }
    }
    ?>
    
    
    
    
    
