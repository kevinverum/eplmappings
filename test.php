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
        ],
        "category"=>"House",
        "headline"=>"AFFORDABLE TAWA",
        "description"=>"BEO $685,000&#13;&#10;&#13;&#10;OPEN HOME SUNDAY 15 DECEMBER - CANCELLED &#13;&#10;&#13;&#10;This solid weatherboard clad home, in a sunny location has potential to add value.  &#13;&#10;&#13;&#10;•&#9;3-4 bedrooms, Separate kitchen&#13;&#10;•&#9;Separate dining room with external access to a great decked area&#13;&#10;•&#9;Separate lounge also with external access &#13;&#10;•&#9;Large separate laundry&#13;&#10;•&#9;Refurbished family bathroom&#13;&#10;•&#9;Refurbished ensuite, 2 separate toilets&#13;&#10;•&#9;Downstairs rumpus/4th bedroom&#13;&#10;•&#9;2 separate internal single garages with auto doors. &#13;&#10;•&#9;Elevated, sunny, fully fenced backyard ideal for children &amp; pets &#13;&#10;•&#9;Close to sought after Greenacres primary school &#13;&#10;•&#9;LIM Report available&#13;&#10;•&#9;RV $710,000&#13;&#10;&#13;&#10;&#13;&#10;&#13;&#10;&#13;&#10;&#13;&#10;&#13;&#10;",

        "features" => [
            "bedrooms" => 3,
            "bathrooms" => 2,
            "ensuite" => 1,
            "garages" => 2
        ],

        "councilRates"=>"$2,936.70",

        "landDetails" => [
            "area"=> [
                "value" => 569,
                "unit" => "squareMeter"
            ]
        ],

        "buildingDetails" => [
            "area"=> [
                "value" => 200,
                "unit" => "squareMeter"
            ]
        ],

        "featureImage" => [
            "url" => "https://tommys.sgp1.digitaloceanspaces.com/654497_web.jpg",
            "modTime" => "2019-11-19-15:00:05"
        ],

        "images" => [
            [
                "url" => "https://tommys.sgp1.digitaloceanspaces.com/654498_web.jpg",
                "modTime" => "2019-11-19-15:00:05"
            ],
            [
                "url" => "https://tommys.sgp1.digitaloceanspaces.com/654499_web.jpg",
                "modTime" => "2019-11-19-15:00:05"
            ]
        ],

    ]
);
$mapped_fields = $mapper->mapJSON($json);
var_dump($mapped_fields);
