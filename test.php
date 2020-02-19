<?php

use kevinverum\eplmappings\JSONMappings;

require("vendor/autoload.php");

require("src/ieplmapper.php");
require("src/eplmapper.php");

$mapper = new \kevinverum\eplmappings\EPLMapper(JSONMappings::map());

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
                "name" => "A W"
            ]
        ],
        "priceView" => "Buyer Enquiry From $444,000",
        "price" => [
            "display" => true,
            "value"=>99999
        ],
        "address" => [
            "display" => true,
            "streetNumber"=>99,
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

// Version 2
$json = [
        "numBedrooms"=> null,
        "numBathrooms"=> null,
        "numCarportCarSpaces"=> 89,
        "numOffstreetCarSpaces"=> null,
        "numGarageCarSpaces"=> null,
        "mapZoomLevel"=> 17,
        "landArea"=> null,
        "floorArea"=> 188.0,
        "internetBody"=> "Description",
        "displayStatus"=> "Inactive",
        "auctionLocation"=> "In rooms",
        "minimumPrice"=> 1200000.0,
        "maximumPrice"=> 1400000.0,
        "availableDateTime"=> null,
        "saleDate"=> null,
        "address"=> [
        "address1"=> "Unit H/7 XYZ",
            "address2"=> null,
            "googlePlaceId"=> null,
            "displayAddress"=> "Unit H/7 XYZ",
            "streetNo"=> "Unit H/7",
            "street"=> "XYZ",
            "suburb"=> "R",
            "city"=> "North Shore City",
            "region"=> "Auckland",
            "country"=> "New Zealand",
            "postcode"=> "0632",
            "latLng"=> [
            "lat"=> -99.9999,
                "lng"=> 99.999999
            ]
        ],
        "branch"=> [
        "id"=> 123456789,
            "name"=> "XYZ",
            "phone"=> null,
            "mobile"=> null,
            "fax"=> null,
            "email"=> null,
            "webAddress"=> "www.example.com",
            "isCommercial"=> false,
            "address"=> [
            "address1"=> "4/134 ABC",
                "address2"=> null,
                "googlePlaceId"=> null,
                "displayAddress"=> null,
                "streetNo"=> null,
                "street"=> null,
                "suburb"=> "T",
                "city"=> "Auckland",
                "region"=> null,
                "country"=> "New Zealand",
                "postcode"=> "0622",
                "latLng"=> [
                "lat"=> -88.88888,
                    "lng"=> 888.8888
                ]
            ],
            "latLng"=> [
            "lat"=> -88.8888,
                "lng"=> 888.88888
            ],
            "lat"=> -88.88888,
            "lng"=> 888.8888
        ],
        "users"=> [
            [
                "branchId"=> 123456,
                "businessPhone"=> "(09) 555 5555",
                "mobilePhone"=> "027 55555 555",
                "emailAddress"=> "me@exampe.com",
                "position"=> "Commercial Sales & Leasing Consultant",
                "webAddress"=> "www.example.com",
                "biography"=> null,
                "securityGroup"=> "propertyManagement",
                "displayPriority"=> 0,
                "isHidden"=> false,
                "isCommercial"=> false,
                "branch"=> null,
                "id"=> 4321,
                "firstName"=> "A",
                "lastName"=> "B",
                "pictureUrl"=> "https://images.example.,com"
            ],
            [
                "branchId"=> 123456,
                "businessPhone"=> "09 555 5555",
                "mobilePhone"=> "021 555 5555",
                "emailAddress"=> "me@example.com",
                "position"=> "Sales and Leasing Consultant",
                "webAddress"=> null,
                "biography"=> null,
                "securityGroup"=> "salesConsultant",
                "displayPriority"=> 0,
                "isHidden"=> false,
                "isCommercial"=> false,
                "branch"=> null,
                "id"=> 1234,
                "firstName"=> "N",
                "lastName"=> "A",
                "pictureUrl"=> "https://images.example.com"
            ]
        ],
        "photos"=> [
            [
                "orderIndex"=> 0,
                "description"=> null,
                "isFloorPlan"=> false,
                "isDeleted"=> false,
                "isActive"=> true,
                "photoUrl"=> "https://images.example.com"
            ],
            [
                "orderIndex"=> 1,
                "description"=> null,
                "isFloorPlan"=> false,
                "isDeleted"=> false,
                "isActive"=> true,
                "photoUrl"=> "https://images.example.com"
            ],
            [
                "orderIndex"=> 2,
                "description"=> null,
                "isFloorPlan"=> false,
                "isDeleted"=> false,
                "isActive"=> true,
                "photoUrl"=> "https://images.example.com"
            ],
            [
                "orderIndex"=> 3,
                "description"=> null,
                "isFloorPlan"=> false,
                "isDeleted"=> false,
                "isActive"=> true,
                "photoUrl"=> "https://images.example.com"
            ]
        ],
        "features"=> [
            [
                "id"=> 999999,
                "parentId"=> null,
                "title"=> "Property Type",
                "value"=> "Retail"
            ],
            [
                "id"=> 999,
                "parentId"=> 9999999,
                "title"=> "Retail",
                "value"=> "Retail"
            ],
            [
                "id"=> 99999,
                "parentId"=> null,
                "title"=> "Approx Floor Area",
                "value"=> null
            ],
            [
                "id"=> 99,
                "parentId"=> 9999,
                "title"=> "Showroom Square Metres",
                "value"=> "188"
            ],
            [
                "id"=> 9999,
                "parentId"=> null,
                "title"=> "Property Details",
                "value"=> "Tenanted Investment"
            ],
            [
                "id"=> 999,
                "parentId"=> 999999,
                "title"=> "Tenanted Investment",
                "value"=> "Tenanted Investment"
            ],
            [
                "id"=> 99999,
                "parentId"=> null,
                "title"=> "Tenure",
                "value"=> "Unit Title"
            ],
            [
                "id"=> 99999,
                "parentId"=> 9999,
                "title"=> "Unit Title",
                "value"=> "Unit Title"
            ],
            [
                "id"=> 9999,
                "parentId"=> null,
                "title"=> "Legal details",
                "value"=> null
            ],
            [
                "id"=> 99999,
                "parentId"=> 99999,
                "title"=> "C/T",
                "value"=> "9999"
            ],
            [
                "id"=> 999,
                "parentId"=> 999,
                "title"=> "Additional information",
                "value"=> "Unit H  and 9999 and 1/9 SH of AU 1-43 DP 99999999999"
            ],
            [
                "id"=> 999999,
                "parentId"=> 999,
                "title"=> "Legal vendor name",
                "value"=> "ABC"
            ],
            [
                "id"=> 99999,
                "parentId"=> null,
                "title"=> "Tenancy",
                "value"=> "ABC"
            ],
            [
                "id"=> 9999,
                "parentId"=> 99999,
                "title"=> "Additional Details",
                "value"=> "ABC"
            ],
            [
                "id"=> 9999999,
                "parentId"=> null,
                "title"=> "Remarks",
                "value"=> "ABC"
            ]
        ],
        "openHomes"=> [],
        "id"=> 999999,
        "displayAddress"=> "Unit 9 T Drive, R",
        "branchId"=> 123456789,
        "type"=> "commercialSale",
        "status"=> "inactive",
        "internetHeading"=> "Internet heading",
        "displayListingNumber"=> "ABC12345678",
        "displayPrice"=> "Auction 02 Apr 2030",
        "methodOfSaleName"=> "Auction",
        "auctionDateTime"=> "2030-08-01T23:00:00Z",
        "latLng"=> [
        "lat"=> -99.99999,
            "lng"=> 999.9999
        ],
        "primaryPhotoUrl"=> "https://images.example.com"
];

require("src/JSONV2Mappings.php");
$mapper = new \kevinverum\eplmappings\EPLMapper(\kevinverum\eplmappings\JSONV2Mappings::map());
$mapped_fields = $mapper->mapJSON(json_encode($json));
var_dump($mapped_fields);