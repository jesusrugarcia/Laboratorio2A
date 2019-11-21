         <?php
            if(isset($_REQUEST['dirCorreo'])){
                $regexMail="/((^[a-zA-Z]+(([0-9]{3})+@ikasle\.ehu\.(eus|es))$)|^[a-zA-Z]+(\.[a-zA-Z]+@ehu\.(eus|es)|@ehu\.(eus|es))$)/";
                $regexPreg="/^.{10,}$/";
                 if(preg_match($regexMail,$_REQUEST['dirCorreo'])){
                     if(preg_match($regexPreg,$_REQUEST['nombrePregunta'])){
                            include 'DbConfig.php';
                            //Creamos la conexion con la BD.
                            $mysqli = mysqli_connect($server,$user,$pass,$basededatos);
                            if(!$mysqli)
                            {
                                die("Fallo al conectar a MySQL: " .mysqli_connect_error());
                            }
                            //Creamos la consulta que introducira los datos en el servidor
                            $email = $_REQUEST['dirCorreo'];
                            $enunciado = $_REQUEST['nombrePregunta'];
                            $respuestac = $_REQUEST['respuestaCorrecta'];
                            $respuestai1 = $_REQUEST['respuestaIncorrecta1'];
                            $respuestai2 = $_REQUEST['respuestaIncorrecta2'];
                            $respuestai3 = $_REQUEST['respuestaIncorrecta3'];
                            $complejidad = $_REQUEST['complejidad'];
                            $tema = $_REQUEST['temaPregunta'];
                            $image = $_FILES['file']['tmp_name'];
                            $contenido_imagen = base64_encode(file_get_contents($image));

                            $sql = "INSERT INTO preguntas(email, enunciado, respuestac, respuestai1, respuestai2, respuestai3, complejidad, tema, imagen) VALUES('$email', '$enunciado', '$respuestac', '$respuestai1', '$respuestai2', '$respuestai3', $complejidad, '$tema', '$contenido_imagen')";

                            if(!mysqli_query($mysqli,$sql))
                            {
                                die("Error: " .mysqli_error($mysqli));
                            } else{
                            echo "Registro añadido<br>";
                            echo "<a href=\"ShowQuestionsWithImage.php?email=".$GLOBALS['email']."\">Click en este enlace para ver todos los registros.</a><br>";
                            mysqli_close($mysqli);

                         
                           $xml= simplexml_load_file("../xml/Questions.xml");
                           $ultid=$xml['ultclave']+1;
                           $xml['ultclave']=$ultid;

                           if ($xml === false){
                            echo "Error cargando XML \n";
                          
                           }
                           else{
                           $newItem = $xml->addChild("assessmentItem");
                           $newItem->addAttribute('clave',$ultid);
                           $newItem->addAttribute('subject',$tema);
                           $newItem->addAttribute('author',$email);
                           $newChild= $newItem->addChild("itemBody");
                           $newChild->addChild("p",$enunciado);
                           $newChild= $newItem->addChild("correctResponse");
                           $newValue=$newChild->addChild("value",$respuestac);
                           $newChild=$newItem->addChild("incorrectResponses");
                           $newValue=$newChild->addChild("value",$respuestai1);
                           $newValue=$newChild->addChild("value",$respuestai2);
                           $newValue=$newChild->addChild("value",$respuestai3);

                           $xml->asXml("../xml/Questions.xml");
                           echo "se ha completado la insercion XML <br>";
                          }



							}



                     }else{
                         echo "El enunciado de la pregunta debe tener mas de 10 caracteres.<br>";
                         echo"<a href='javascript:history.back()'>Volver al formulario.</a>";
                     }
                 }else{
                    echo "El correo electronico no es correcto.<br>";
                    echo"<a href='javascript:history.back()'>Volver al formulario.</a>";
                 }
            }          
          ?>
  
