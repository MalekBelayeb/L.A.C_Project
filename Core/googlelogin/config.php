<?php
if(session_status()==PHP_SESSION_DISABLED)
{session_start();}
	require_once "GoogleAPI/vendor/autoload.php";
$http = new GuzzleHttp\Client([
    'verify' => 'C:/wamp64/bin/php/php5.6.31/extras/ssl/cacert.pem'
]);
$gClient = new Google_Client;
$gClient->setHttpClient($http);

$gClient->setClientId("203751044837-vm6t3btma0vuvhqhil8r9aqb2rdpsn35.apps.googleusercontent.com");
	$gClient->setClientSecret("yuquUS62zYaxW-2fwBOMgufq");
	$gClient->setApplicationName("Librairie Avenir Culturel");
	$gClient->setRedirectUri("http://localhost/AvenirCulturel/Core/googlelogin/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
