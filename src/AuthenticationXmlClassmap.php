<?php

namespace App;

use App\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class AuthenticationXmlClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('Data', Type\Data::class),
            new ClassMap('WS_eFactura.EFACRECEPCIONSOBRE', Type\WSEFacturaEFACRECEPCIONSOBRE::class),
            new ClassMap('WS_eFactura.EFACRECEPCIONSOBREResponse', Type\WSEFacturaEFACRECEPCIONSOBREResponse::class),
            new ClassMap('WS_eFactura.EFACRECEPCIONREPORTE', Type\WSEFacturaEFACRECEPCIONREPORTE::class),
            new ClassMap('WS_eFactura.EFACRECEPCIONREPORTEResponse', Type\WSEFacturaEFACRECEPCIONREPORTEResponse::class),
            new ClassMap('WS_eFactura.EFACCONSULTARESTADOENVIO', Type\WSEFacturaEFACCONSULTARESTADOENVIO::class),
            new ClassMap('WS_eFactura.EFACCONSULTARESTADOENVIOResponse', Type\WSEFacturaEFACCONSULTARESTADOENVIOResponse::class),
        ]);
    }


}

