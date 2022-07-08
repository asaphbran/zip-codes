<?php

namespace App\Services;

use App\Services\XmlReader;

class ZipCodesData
{
    private $routeToXml;
    private $reader;

    function __construct(XmlReader $reader)
    {
        $this->routeToXml = public_path(env('ZIP_CODES_DATA_SOURCE'));
        $this->reader = $reader;
    }

    public function getZipCodeInformation($zipCode)
    {
        $xml = $this->reader->xmlContent($this->routeToXml);
        $zipCodes = [];

        foreach($xml->table as $item){
            if($item->d_codigo == $zipCode){
                $zipCodes[] = $item;
            }
        }

        return $zipCodes;
    }
}
