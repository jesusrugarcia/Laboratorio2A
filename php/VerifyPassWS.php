<?php
require_once('../lib/nusoap.php');
require_once('../lib/class.wsdlcache.php');//creamos el objeto de tipo soap_server
$ns="https://g12sw.000webhostapp.com/php";
$server = new soap_server;
$server->configureWSDL('checkPass',$ns);
$server->wsdl->schemaTargetNamespace=$ns;//registramos la función que vamos a implementa
$server->register('checkPass',array('x'=>'xsd:string','y'=>'xsd:int'),
array('z'=>'xsd:string'),
$ns);//implementamos la función
function checkPass ($x, $y){
	
	if ($y != 1010){
	return 'SIN SERVICIO';
}else {
	$file = file_get_contents("../txt/toppasswords.txt");

if(strpos($file, $x)) 
{
   return 'INVALIDA';
}else {
	return 'VALIDA';
	}
	}



	 


}
//llamamos al método servicede la clase nusoapantes obtenemos los valores de los parámetros
if( !isset( $HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA =file_get_contents( 'php://input' );	$server->service($HTTP_RAW_POST_DATA);
?>