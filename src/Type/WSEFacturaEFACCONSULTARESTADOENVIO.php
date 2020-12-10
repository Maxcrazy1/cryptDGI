<?php

namespace App\Type;

use Phpro\SoapClient\Type\RequestInterface;

class WSEFacturaEFACCONSULTARESTADOENVIO implements RequestInterface
{

    /**
     * @var \App\Type\Data
     */
    private $Datain;

    /**
     * Constructor
     *
     * @var \App\Type\Data $Datain
     */
    public function __construct($Datain)
    {
        $this->Datain = $Datain;
    }

    /**
     * @return \App\Type\Data
     */
    public function getDatain()
    {
        return $this->Datain;
    }

    /**
     * @param \App\Type\Data $Datain
     * @return WSEFacturaEFACCONSULTARESTADOENVIO
     */
    public function withDatain($Datain)
    {
        $new = clone $this;
        $new->Datain = $Datain;

        return $new;
    }


}

