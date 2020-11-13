<?php
class XMLController
{
    public function loadXml($path)
    {
        $xml = new DOMDocument();
        $xml->preserveWhiteSpace = false;
        $xml->load($path);
        return $xml;
    }

    public function saveXml(DOMDocument $xml)
    {
        $nameFileXml=date('h_i_s_')."signed.xml";
        $xml->save("./firmedXml/{$nameFileXml}");
    }
}
