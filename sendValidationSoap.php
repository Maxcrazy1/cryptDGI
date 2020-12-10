<?php
require_once 'vendor/autoload.php';

$client = \App\AuthenticationXmlClientFactory::factory("https://efactura.dgi.gub.uy:6443/ePrueba/ws_eprueba?wsdl");
$reception=new \App\Type\WSEFacturaEFACRECEPCIONSOBRE('<dgi:xmlData>?</dgi:xmlData>');
$response = $client->WSEFacturaEFACRECEPCIONSOBRE($reception);