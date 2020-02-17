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
        ],
        "agentID" => "TMANA001",
        "uniqueID" => "M5828",
        "authority" => "exclusive",
        "underOffer" => false,
        "listingAgent" => [
            [
                "id"=>1,
                "name" => "Murray Woodley"
            ],
            [
                "id"=>2,
                "name" => "Susan Woodley"
            ]
        ],
        "priceView" => "Buyer Enquiry From $685,000",
        "price" => [
            "display" => true,
            "value"=>685000
        ],
        "address" => [
            "display" => true,
            "streetNumber"=>13,
            "street" =>"Colonial Grove",
            "suburb" => [
                "display"=>true,
                "value"=>"Tawa"
            ],
            "city"=>"Wellington",
            "state"=>"Wellington",
            "postcode"=>5028,
            "country"=>"NZ"
        ]
    ]
);
$mapped_fields = $mapper->mapJSON($json);
var_dump($mapped_fields);
