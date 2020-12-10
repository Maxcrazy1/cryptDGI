<?php

namespace App;

use App\AuthenticationXmlClient;
use App\AuthenticationXmlClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class AuthenticationXmlClientFactory
{

    public static function factory(string $wsdl) : \App\AuthenticationXmlClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(AuthenticationXmlClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new AuthenticationXmlClient($engine, $eventDispatcher);
    }


}

