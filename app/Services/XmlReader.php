<?php

namespace App\Services;

class XmlReader
{
    public function xmlContent($xml)
    {
        return @simplexml_load_file($xml);
    }

    public function xmlJsonContent($xml)
    {
        $xmlContent = file_get_contents($xml);
        $xmlObject = @simplexml_load_string($xmlContent);
        return json_decode(json_encode($xmlObject), true);
    }
}
