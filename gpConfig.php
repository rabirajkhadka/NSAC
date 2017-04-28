<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '1055810625384-n3suohvt9l876ored7hmkfve3g85pq84.apps.googleusercontent.com'; //Google client ID
$clientSecret = '2Obv5SGrmbLIUYE7JG3MWUyz'; //Google client secret
$redirectURL = 'http://localhost/NSAC_17/'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>