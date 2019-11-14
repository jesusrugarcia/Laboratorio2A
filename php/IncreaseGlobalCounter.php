<?php
$counter =simplexml_load_file('../xml/Count.xml') or die("Error: no se puede cargar");
$counter['counter']=$counter['counter']+1;
echo 'Numero de Usuarios : '.$counter['counter'];
$counter->asXML('../xml/Count.xml');

?>