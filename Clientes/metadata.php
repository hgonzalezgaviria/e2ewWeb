<?php
$urlip= "http://169.254.169.254/latest/meta-data/local-ipv4"; //IP privada v4
$urlzone = "http://169.254.169.254/latest/meta-data/placement/availability-zone"; //La zona de disponibilidad en la que se ha lanzado la instancia.
$urlippub = "http://169.254.169.254/latest/meta-data/public-ipv4"; //IP publica v4
$urlInstaId = "http://169.254.169.254/latest/meta-data/instance-id"; //IP publica v4
$urlInstaType = "http://169.254.169.254/latest/meta-data/instance-type"; //IP publica v4

$ip= curlMetadatos($urlip);
$ippub= curlMetadatos($urlippub);
$zone= curlMetadatos($urlzone);
$insid= curlMetadatos($urlInstaId);
$instype= curlMetadatos($urlInstaType);


function curlMetadatos($url){
	$handler = curl_init();
	curl_setopt($handler, CURLOPT_URL, $url);
	curl_setopt($handler, CURLOPT_RETURNTRANSFER, 1);
	//$urlIp = curl_exec ($handler);
	 return curl_exec ($handler);
	 curl_close ($handler);
}

$enlace_actual = 'http://'.$_SERVER['HTTP_HOST'];
if ($enlace_actual=='http://e2ew.inttegrio-aws.com'){ //dns actual (ELB)
		$enlace_actual = 'http://'.$_SERVER['HTTP_HOST'];
	}else{
		$enlace_actual = 'https://'.$_SERVER['HTTP_HOST'].':8181';
	}

//var_dump($ip);
//$ip = getenv('USER');
		//$ip = $_SERVER['USER'];
 ?>
