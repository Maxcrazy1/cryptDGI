<?php

namespace App;

use App\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class AuthenticationXmlClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\WSEFacturaEFACRECEPCIONSOBRE $parameters
     * @return ResultInterface|Type\WSEFactura
     * @throws SoapException
     */
    public function WSEFacturaEFACRECEPCIONSOBRE(\App\Type\WSEFacturaEFACRECEPCIONSOBRE $sobre) 
    {
        return $this->call('WS_eFacturaEFACRECEPCIONSOBRE', $sobre);
    }


    public function WSEFacturaEFACRECEPCIONREPORTE(\App\Type\WSEFacturaEFACRECEPCIONREPORTE $reporte) 
    {
        return $this->call('WSEFacturaEFACRECEPCIONREPORTE', $reporte);
    }



}