<?php
$counter =simplexml_load_file('../xml/Count.xml') or die("Error: no se puede cargar");
echo 'Numero de Usuarios : '.$counter['counter'];

?>