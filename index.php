<?php
require 'controllers/xmlController.php';
require 'controllers/encryptController.php';

const KEY_DGI = 'CERT_DGI_EFACTURA';

$xmlObj = new XMLController();
$encryptObj = new CryptController();

$xml = $xmlObj->loadXml('firmedXml/original_edited.xml');
$xml->createElementNS("http://cfe.dgi.gub.uy", "ns0");
$xml = $encryptObj->encrypt($xml, 'assets/mycert.pem', KEY_DGI);
$xmlObj->saveXml($xml);