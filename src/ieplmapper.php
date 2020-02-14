<?php

namespace kevinverum\eplmappings;

interface IEPLMapper
{
    public function mapJSON(string $json):array;
}