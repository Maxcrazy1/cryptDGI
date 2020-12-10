<?php

namespace App\Type;

class WSEFacturaEFACCONSULTARESTADOENVIOResponse
{

    /**
     * @var \App\Type\Data
     */
    private $Dataout;

    /**
     * @return \App\Type\Data
     */
    public function getDataout()
    {
        return $this->Dataout;
    }

    /**
     * @param \App\Type\Data $Dataout
     * @return WSEFacturaEFACCONSULTARESTADOENVIOResponse
     */
    public function withDataout($Dataout)
    {
        $new = clone $this;
        $new->Dataout = $Dataout;

        return $new;
    }


}

