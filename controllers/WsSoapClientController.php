<?php
$url = 'https://efactura.dgi.gub.uy:6443/ePrueba/ws_eprueba?wsdl';
$localCert = '../assets/certificates/original.pem';
try {
    $client = new SoapClient($url, ['local_cert' => $localCert, 'passphrase' => 'pass']);
var_dump($client->__getFunctions());    
exit;
    $xmlr = new SimpleXMLElement("<soapenv:Envelope xmlns:soapenv='http://schemas.xmlsoap.org/soap/envelope/' xmlns:dgi='http://dgi.gub.uy'>
<soapenv:Body>
   <dgi:WS_eFactura.EFACRECEPCIONSOBRE>
      <dgi:Datain>
         <dgi:xmlData>?</dgi:xmlData>
      </dgi:Datain>
   </dgi:WS_eFactura.EFACRECEPCIONSOBRE>
</soapenv:Body>
</soapenv:Envelope>");

    $params = new stdClass();
    $params->xml = $xmlr->asXML();
    $params->Datain = '<dgi:xmlData>?</dgi:xmlData>';
    $result = $client->EFACRECEPCIONSOBRE($params);
    print($result);

} catch (SoapFault $e) {
    echo $e->getMessage();
}
echo PHP_EOL;
