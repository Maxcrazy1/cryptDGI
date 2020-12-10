<?php

namespace App\Type;

class Data
{

    /**
     * @var string
     */
    private $xmlData;

    /**
     * @return string
     */
    public function getXmlData()
    {
        return $this->xmlData;
    }

    /**
     * @param string $xmlData
     * @return Data
     */
    public function withXmlData($xmlData)
    {
        $new = clone $this;
        $new->xmlData = $xmlData;

        return $new;
    }


}

