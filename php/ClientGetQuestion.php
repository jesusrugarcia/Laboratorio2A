<?php
require_once('../lib/nusoap.php');
require_once('../lib/class.wsdlcache.php');
$soapclient = new nusoap_client( 'https://g12sw.000webhostapp.com/php/GetQuestionWS.php?wsdl', true);
if (isset($_POST['clave'])){
	$resultPregunta=$soapclient->call('obtenerPregunta',array( 'x'=>$_POST['clave']));
	echo $resultPregunta;
	//echo '<h2>Request</h2><pre>' . htmlspecialchars($soapclient->request, ENT_QUOTES) . '</pre>';
	//echo '<h2>Response</h2><pre>' . htmlspecialchars($soapclient->response, ENT_QUOTES) . '</pre>';
	//echo '<h2>Debug</h2>';echo '<pre>' . htmlspecialchars($soapclient->debug_str, ENT_QUOTES) . '</pre>';

}
?>
