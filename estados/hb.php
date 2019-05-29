<?php

$estmbank='Inactivo';
$estEAImbank='Inactivo';
$urlmbank='http://'.$ip.':8080/HOMEBANKING/';
$urlStateMbank='http://'.$ip.':8080/HOMEBANKING/servlet/State';
$content="";


//get ping
function get_http_response_codemb($urlmbank) {
  $headers = get_headers($urlmbank);
  return substr($headers[0], 9, 3);
}

$get_http_response_code = get_http_response_codemb($urlmbank);

if ( $get_http_response_code == 200 ) {
  //echo "OKAY!";
  $estmbank="Activo";
} else {
  //echo "Nokay!";
  $estmbank="Inactivo";
}
/*
require_once 'HTTP/Request2.php';
$request = new HTTP_Request2($urlmbank, HTTP_Request2::METHOD_GET);

try {
    $response = $request->send();
    if (200 == $response->getStatus()) {
      $estmbank="Activo";
//  echo $response->getBody();//Get content of page
//var_dump($response->getStatus());
    } else {
      $estmbank="Inactivo";
//echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .$response->getReasonPhrase();
    }
} catch (HTTP_Request2_Exception $e) {
  //  echo 'Error: ' . $e->getMessage();
}
*/
//EAI
$content = file_get_contents($urlStateMbank);
if ($content){
$cadena_de_texto = $content;
$cadena_buscada   = 'INICIADO';
$posicion_coincidencia = strpos($cadena_de_texto, $cadena_buscada);
if ($posicion_coincidencia === false) {
  $estEAImbank="Inactivo";
}else{
  $estEAImbank="Activo";
}
}else{
	$content="";
}


?>
