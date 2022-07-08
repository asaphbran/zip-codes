<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ZipCodesData;

class zipCodes extends Controller
{
    private $zipCodesData;

    function __construct(ZipCodesData $zipCodes)
    {
        $this->zipCodesData = $zipCodes;
    }

    public function getZipCodes(int $code): Array
    {
        return $this->zipCodesData->getZipCodeInformation($code);
    }
}
