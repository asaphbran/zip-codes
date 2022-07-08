<?php

namespace App\Interfaces;

interface ZipCodesInterface {
    public function getZipCodes(int $code): Array;
}