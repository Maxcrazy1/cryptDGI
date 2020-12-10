<?php

namespace App\Type;

class WSEFacturaEFACRECEPCIONREPORTEResponse
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
     * @return WSEFacturaEFACRECEPCIONREPORTEResponse
     */
    public function withDataout($Dataout)
    {
        $new = clone $this;
        $new->Dataout = $Dataout;

        return $new;
    }


}

