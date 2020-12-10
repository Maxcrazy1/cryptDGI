<?php

require 'controllers/xmlController.php';
require 'controllers/encryptController.php';

const KEY_CERT = 'VamoPeñarol1891';

$xmlObj = new XMLController();
$encryptObj = new CryptController();

$xml = $xmlObj->loadXml('firmedXml/example.xml');
$xml->createElementNS("http://cfe.dgi.gub.uy", "ns0");
$xml = $encryptObj->encrypt($xml, 'assets/certificates/mycert.pfx', KEY_CERT);
$xmlObj->saveXml($xml);
