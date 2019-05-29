<?php

require_once('Clientes/metadata.php');
$estado='Inactivo';
$estEICEAI='Inactivo';
$url='http://'.$ip.':8080/app_auth/';
$urlState='http://'.$ip.':8080/EICW/servlet/StateEIC';
$content="";
//echo $url;

//ping
function get_http_response_code($url) {
  $headers = get_headers($url);
  return substr($headers[0], 9, 3);
}

$get_http_response_code = get_http_response_code($url);

if ( $get_http_response_code == 200 ) {
  //echo "OKAY!";
  $estado="Activo";
} else {
  //echo "Nokay!";
  $estado="Inactivo";
}

/*
require_once 'HTTP/Request2.php';
$request = new HTTP_Request2($url, HTTP_Request2::METHOD_GET);
try {
    $response = $request->send();
    if (200 == $response->getStatus()) {
      $estado="Activo";
//  echo $response->getBody();//Get content of page
//var_dump($response->getStatus());
    } else {
      $estado="Inactivo";
//echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .$response->getReasonPhrase();
    }
} catch (HTTP_Request2_Exception $e) {
  //  echo 'Error: ' . $e->getMessage();
}
*/

//EAI
$content = file_get_contents($urlState);
if ($content){
$cadena_de_texto = $content;
$cadena_buscada   = 'INICIADO';
$posicion_coincidencia = strpos($cadena_de_texto, $cadena_buscada);
if ($posicion_coincidencia === false) {
  $estEICEAI="Inactivo";
}else{
  $estEICEAI="Activo";
}
}else{
	$content="";
}

?>
