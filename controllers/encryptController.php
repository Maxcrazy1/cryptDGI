<?php

require 'libraries/xmlseclibs/src/XMLSecurityDSig.php';
require 'libraries/xmlseclibs/src/XMLSecurityKey.php';

use RobRichards\XMLSecLibs\XMLSecurityDSig;
use RobRichards\XMLSecLibs\XMLSecurityKey;

class CryptController
{
    public function encrypt($xml, $cert, $keyDgi)
    {
        $objDSig = new XMLSecurityDSig();
        $objDSig->setCanonicalMethod(XMLSecurityDSig::EXC_C14N);

        $objDSig->addReference(
            $xml,
            XMLSecurityDSig::SHA256,
            array('http://www.w3.org/2000/09/xmldsig#enveloped-signature')
        );

        $objKey = new XMLSecurityKey(XMLSecurityKey::RSA_SHA256, array('type' => 'private'));

        $objKey->loadKey('assets/privkey.pem', true);
        $objKey->passphrase = $keyDgi;

        $objDSig->sign($objKey);
        $objDSig->add509Cert(file_get_contents($cert));
        $objDSig->appendSignature($xml->documentElement);

        return $xml;

    }
}