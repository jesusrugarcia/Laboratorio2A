<?php
require_once('../lib/nusoap.php');
require_once('../lib/class.wsdlcache.php');
$ns="https://g12sw.000webhostapp.com/php/";
$server = new soap_server;$server->configureWSDL('obtenerPregunta',$ns);
$server->wsdl->schemaTargetNamespace=$ns;
$server->register('obtenerPregunta',array('x'=>'xsd:string'),array('z'=>'xsd:string'),$ns);
function obtenerPregunta ($x){
	$return = true;
	 $xml= simplexml_load_file("../xml/Questions.xml");
	foreach ($xml->assessmentItem as $pregunta) {
		if((string)$pregunta['clave']==$x){
			return ('Autor: '.$pregunta['author'].'
	Enunciado: '.$pregunta->itemBody->p.'
	Respuesta Correcta: '.$pregunta->correctResponse->value.'.');
			$return=false;
		}
	
	} if($return){return 'Autor: Enunciado: Respuesta Correcta: ';}
}
if( !isset( $HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA =file_get_contents( 'php://input' );$server->service($HTTP_RAW_POST_DATA);?>