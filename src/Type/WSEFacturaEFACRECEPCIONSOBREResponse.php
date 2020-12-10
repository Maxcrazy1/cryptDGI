<?php

namespace App\Type;

class WSEFacturaEFACRECEPCIONSOBREResponse
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
     * @return WSEFacturaEFACRECEPCIONSOBREResponse
     */
    public function withDataout($Dataout)
    {
        $new = clone $this;
        $new->Dataout = $Dataout;

        return $new;
    }


}

