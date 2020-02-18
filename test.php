<?php

require("vendor/autoload.php");

require("src/ieplmapper.php");
require("src/eplmapper.php");

$mapper = new \kevinverum\eplmappings\EPLMapper();

$json = json_encode(
    [
        "modTime" => "2019-08-12-10:55:06",
        "description" => "This is a house",
        "headline" => "This is a headline",
        "extraFields" => [
            [
                "tag" => "LISTING_TYPE",
                "value" => "Residential"
            ]
        ],
        "agentID" => "TMAAAAAAAAAA",
        "uniqueID" => "M1234AAAAAA",
        "authority" => "exclusive",
        "underOffer" => false,
        "listingAgent" => [
            [
                "id"=>1,
                "name" => "M W"
            ],
            [
                "id"=>2,
                "name" => "S W"
            ]
        ],
        "priceView" => "Buyer Enquiry From $444,000",
        "price" => [
            "display" => true,
            "value"=>99999
        ],
        "address" => [
            "display" => true,
            "streetNumber"=>13,
            "street" =>"C9",
            "suburb" => [
                "display"=>true,
                "value"=>"T"
            ],
            "city"=>"Wellington",
            "state"=>"Wellington",
            "postcode"=>5028,
            "country"=>"NZ"
        ],
        "category"=>"House",
        "headline"=>"Headline",
        "description"=>"Description",

        "features" => [
            "bedrooms" => 3,
            "bathrooms" => 2,
            "ensuite" => 1,
            "garages" => 2
        ],

        "councilRates"=>"$2,9999.70",

        "landDetails" => [
            "area"=> [
                "value" => 777,
                "unit" => "squareMeter"
            ]
        ],

        "buildingDetails" => [
            "area"=> [
                "value" => 777,
                "unit" => "squareMeter"
            ]
        ],

        "featureImage" => [
            "url" => "https://example.com._web.jpg",
            "modTime" => "2019-08-19-15:00:05"
        ],

        "images" => [
            [
                "url" => "https://example.com._web.jpg",
                "modTime" => "2019-08-19-15:00:05"
            ],
            [
                "url" => "https://example.com._web.jpg",
                "modTime" => "2019-08-19-15:00:05"
            ]
        ],

    ]
);
$mapped_fields = $mapper->mapJSON($json);
var_dump($mapped_fields);
