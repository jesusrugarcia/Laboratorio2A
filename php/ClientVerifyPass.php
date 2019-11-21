<?php
require_once('../lib/nusoap.php');
require_once('../lib/class.wsdlcache.php');
//creamos el objeto de tipo soapclient.
//http://www.mydomain.com/server.php se refiere a la url//donde se encuentra el servicio SOAP que vamos a utilizar.
$soapclient = new nusoap_client( 'https://g12sw.000webhostapp.com/php/VerifyPassWS.php?wsdl', true);
//Llamamos la función que habíamos implementado en el Web Service
//e imprimimos lo que nos devuelve
	if (isset($_POST['pass'])){
		$resultpass=$soapclient->call('checkPass',array( 'x'=>$_POST['pass'], 'y'=>1010));
		//.'</h1>';echo '<h2>Request</h2><pre>' . 
		//htmlspecialchars($soapclient->request, ENT_QUOTES) . '</pre>';echo '<h2>Response</h2><pre>' . 
		echo $resultpass;//htmlspecialchars($soapclient->response); //. '</pre>';echo '<h2>Debug</h2>';echo '<pre>' . 
		//htmlspecialchars($soapclient->debug_str, ENT_QUOTES) . '</pre>';
	}

		?>