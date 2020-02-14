<?php

require("vendor/autoload.php");

require("src/ieplmapper.php");
require("src/eplmapper.php");

$mapper = new \kevinverum\eplmappings\EPLMapper();

$json = json_encode(
    [
        "modTime" => "2019-12-12-10:55:06",
        "description" => "This is a house",
        "headline" => "This is a headline",
        "extraFields" => [
            [
                "tag" => "LISTING_TYPE",
                "value" => "Residential"
            ]
        ]
    ]
);
$mapped_fields = $mapper->mapJSON($json);
var_dump($mapped_fields);
