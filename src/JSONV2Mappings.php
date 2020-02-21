<?php


namespace kevinverum\eplmappings;

// ? allowances

class JSONV2Mappings
{
    public static function map():array
    {
        return [
            "wp_posts" => array_filter(
                [
                    "post_date" => "",
                    "post_content" => "internetBody",
                    "post_title" => "internetHeading",
                    "post_type" => "type"
                ],
                function($v) {
                    return !empty($v);
                }
            ),
            "wp_postmeta" => array_filter([
                "property_com_car_spaces"=>SELF::carSpaces(),
                "property_custom_commercial_rent" => SELF::netRent(),
                "property_holiday_rental" => null,
                "property_category" => SELF::category(),
                "property_mod_date" => SELF::modTime(),
                "property_images_mod_date" => null,
                "property_inspection_times" => "openHomes",
                "property_featured" => null,
                "property_agent_hide_author_box" => SELF::hideAuthorBox(),
                "property_heading" => "internetHeading",
                "property_office_id" => SELF::branchID(),
                "property_agent" => SELF::agentName(0),
                "property_second_agent" => SELF::agentName(1),
                "property_status" => self::status(),
                "property_list_date" => SELF::modTime(),
                "property_authority" => SELF::authority(),
                "property_com_authority" => SELF::commercialAuthority(),
                "property_com_exclusivity" => SELF::exclusivity(),
                "property_com_listing_type" => null,
                "property_commercial_category"=> SELF::commercialCategory(),
                "property_building_area_unit"=> SELF::buildingAreaUnit(),
                "property_address_display"=> SELF::addressDisplay(),
                "property_address_street_number"=>  SELF::streetNumber(),
                "property_address_street"=>  SELF::streetName(),
                "property_address_suburb"=>  SELF::suburb(),
                "property_com_display_suburb"=> SELF::suburbDisplay(),
                "property_address_city"=> SELF::city(),
                "property_address_state"=> SELF::state(),
                "property_address_country"=> SELF::country(),
                "property_address_coordinates"=> SELF::addressCoordinates(),
                "property_price"=> SELF::price(),
                "property_price_view"=> "displayPrice",
                "property_price_display"=> SELF::displayPrice(),
                "property_under_offer"=> SELF::underOffer(),
                "property_sold_date" => SELF::soldDate(),
                "property_rent_view"=>"displayPrice",
                "property_rent_display"=>null,
                "property_date_available" => SELF::availableDateTime(),
                "property_com_outgoings" => SELF::outgoings(),
                "property_external_link"=> SELF::externalLink(),
                "property_branch_name"=>SELF::branchName(),
                "property_building_warehouse_area"=> SELF::warehouseArea(),
                "property_building_office_area"=>SELF::officeArea(),
                "property_building_mezzanine_area"=> SELF::mezzanineArea(),
                "property_building_showroom_area"=>SELF::showroomArea(),
                "property_building_retail_area"=> SELF::retailArea(),
                "property_features"=>SELF::propertyFeatures(),
                "property_building_storage_area"=>SELF::storageArea(),
                "property_price_global" => null,
                "property_unique_id" => "displayListingNumber",
                "property_building_area" => SELF::buildingArea(),
                "property_bedrooms"=>"numBedrooms",
                "property_bathrooms"=>"numBathrooms",
                "property_toilet"=>null,
                "property_ensuite"=>SELF::ensuite(),
                "property_garage"=>"numGarageCarSpaces",
                "property_carport"=>"numCarportCarSpaces",
                "property_open_spaces"=>null,
                "property_rooms"=>null,
                "property_year_built"=>null,
                "property_new_construction"=>null,
                "property_pool"=>"{features[1]/pool[1]}",
                "property_air_conditioning"=>SELF::airConditioning(),
                "property_security_system"=>SELF::securitySystem(),
                "property_energy_rating" => null,
                "property_land_fully_fenced" => SELF::landFullyFenced(),
                "property_remote_garage" => null,
                "property_secure_parking" => SELF::secureParking(),
                "property_study" => SELF::study(),
                "property_dishwasher" => SELF::dishwasher(),
                "property_built_in_robes" => SELF::builtInRobes(),
                "property_gym" => SELF::gym(),
                "property_workshop" => SELF::workshop(),
                "property_rumpus_room" => SELF::rumpus(),
                "property_floor_boards" => null,
                "property_broadband" => SELF::broadband(),
                "property_pay_tv" => null,
                "property_vacuum_system" => SELF::vaccumSystem(),
                "property_intercom" => SELF::intercom(),
                "property_spa" => SELF::spa(),
                "property_tennis_court"=>SELF::tennisCourt(),
                "property_balcony"=>SELF::balcony(),
                "property_deck"=>SELF::deck(),
                "property_courtyard"=>SELF::courtyard(),
                "property_outdoor_entertaining"=>SELF::outdoorEntertainment(),
                "property_shed"=>SELF::shed(),
                "property_ducted_heating"=>SELF::ductedHeating(),
                "property_ducted_cooling"=>null,
                "property_split_system_heating"=>null,
                "property_hydronic_heating"=>"{features[1]/hydronicHeating[1]}",
                "property_split_system_aircon"=>null,
                "property_gas_heating"=> SELF::gasHeating(),
                "property_reverse_cycle_aircon"=>null,
                "property_evaporative_cooling"=>null,
                "property_open_fire_place"=>SELF::openFireplace(),
                "property_address_sub_number"=>SELF::addressSubNumber(),
                "property_address_postal_code"=>SELF::addressPostalCode(),
                "property_address_hide_map"=>null,
                "property_auction"=>SELF::auctionDateTime(),
                "property_is_home_land_package"=>null,
                "property_sold_price"=>null,
                "property_sold_price_display"=>null,
                "property_video_url"=>SELF::videoLink(),
                "property_external_link_label"=>null,
                "property_external_link_2"=>null,
                "property_external_link_2_label"=>null,
                "property_external_link_3"=>null,
                "property_external_link_3_label"=>null,
                "property_com_mini_web"=>null,
                "property_com_mini_web_2"=>null,
                "property_floorplan"=>null,
                "property_floorplan_label"=>null,
                "property_floorplan_2"=>null,
                "property_floorplan_2_label"=>null,
                "property_energy_certificate"=>null,
                "property_energy_certificate_label"=>null,

                "property_owner"=>null,

                "property_pet_friendly"=>null,
                "property_land_area_unit"=>SELF::landUnit(),
                "property_rent"=> SELF::rent(),
                "property_rent_period"=>SELF::rentPeriod(),
                "property_bond"=>SELF::bond(),
                "property_date_leased"=>null,
                "property_furnished"=>"allowances",

                "property_com_rent"=> SELF::commercialRent(),
                "property_com_rent_period"=>SELF::commercialRentPeriod(),
                "property_com_rent_range_min"=>null,
                "property_com_rent_range_max"=>null,
                "property_com_lease_end_date"=>null,
                "property_com_property_extent"=>null,
                "property_com_tenancy"=>SELF::tenancy(),
                "property_com_plus_outgoings"=>SELF::commercialRentOutgoings(),
                "property_com_return"=>null,
                "property_bus_terms"=>null,

                "property_com_further_options"=>null,
                "property_com_zone"=> SELF::zone(),
                "property_com_highlight_1"=>null,
                "property_com_highlight_2"=>null,
                "property_com_highlight_3"=>null,
                "property_com_parking_comments"=> SELF::parkingComments(),
                "property_com_is_multiple"=>null,

                "property_com_mini_web_3"=>null,

                "property_land_category"=> SELF::landCategory(),

                "property_address_lot_number"=>SELF::addressLotNumber(),
                "property_bus_takings"=>null,
                "property_bus_franchise"=>"",
                "property_bus_category" => null,
                "property_bus_category_2" => null,
                "property_bus_category_3" => null,
                "property_bus_sub_category" => null,
                "property_bus_sub_category_2" => null,
                "property_bus_sub_category_3" => null,

                "property_rural_category"=> null,

                "property_rural_fencing"=> null,
                "property_rural_annual_rainfall"=>null,
                "property_rural_soil_types"=>null,
                "property_rural_improvements"=>null,
                "property_rural_council_rates"=>null,
                "property_rural_irrigation"=>null,
                "property_rural_carrying_capacity"=>null,
                "property_rural_services"=>null,

                // Need to verify following fields against epl
                "property_rates" => null,
                "property_land_area" =>null,

                "property_legal_ct" =>  null,
                "property_legal_dp" =>  null,
                "property_legal_lot" =>  null,
                "property_rateable_value" => null,

            ],
                function($v) {
                    return !empty($v);
                })
        ];
    }

    public static function openFireplace(){
        return function (object $json) {
            return SELF::hasFeature($json, function($feature){
                return preg_match("/.*?Woodfire \(Open.*?/", $feature->value)!==0?"yes":null;
            });
        };
    }

    public static function ductedHeating(){
        return function (object $json) {
            return SELF::hasFeature($json, function($feature){
                return preg_match("/.*?Ducted heating.*?/", $feature->value)!==0?"yes":null;
            });
        };
    }

    public static function shed(){
        return function (object $json) {
            return SELF::hasFeature($json, function($feature){
                if ($feature->title === 'No. of sheds') {
                    preg_match("/Number of sheds\: ([0-9]*)/", $feature->value, $matches);
                    if (isset($matches[1])) {
                        return (int)$matches[1] > 0;
                    }
                    return preg_match("/\s+?shed.*?/", $feature->value)!==0?"yes":null;
                } else {
                    return null;
                }
            });
        };
    }

    public static function courtyard(){
        return function (object $json) {
            return SELF::hasFeature($json, function($feature){
                return preg_match("/.*?courtyard.*?/i", $feature->value)!==0?"yes":null;
            });
        };
    }

    public static function intercom(){
        return function (object $json) {
            return SELF::hasFeature($json, function($feature){
                return preg_match("/.*?Intercom.*?/", $feature->value)!==0?"yes":null;
            });
        };
    }

    public static function broadband(){
        return function (object $json) {
            return SELF::hasFeature($json, function($feature){
                return preg_match("/.*?Broadband.*?/", $feature->value)!==0?"yes":null;
            });
        };
    }

    public static function rumpus(){
        return function (object $json) {
            return SELF::hasFeature($json, function($feature){
                return preg_match("/.*?Workshop.*?/", $feature->value)!==0?"yes":null;
            });
        };
    }

    public static function workshop(){
        return function (object $json) {
            return SELF::hasFeature($json, function($feature){
                return preg_match("/.*?Workshop.*?/", $feature->value)!==0?"yes":null;
            });
        };
    }

    public static function gym(){
        return function (object $json) {
            return SELF::hasFeature($json, function($feature){
                return preg_match("/.*?Other\s+\(Gym.*?/", $feature->value)!==0?"yes":null;
            });
        };
    }

    public static function study(){
        return function (object $json) {
            return SELF::hasFeature($json, function($feature){
                return $feature->title === 'Office study' && preg_match("/.*?study.*?/", $feature->value)!==0?"yes":null;
            });
        };
    }

    public static function secureParking(){
        return function (object $json) {
            return SELF::hasFeature($json, function($feature){
                return $feature->title === 'Garaging /carparking'
                    && (preg_match("/.*?lock\-up.*?/", $feature->value)!==0
                        ||preg_match("/.*?basement.*?/", $feature->value)!==0
                        ||preg_match("/.*?closed.*?/", $feature->value)!==0)?"yes":null;
            });
        };
    }

    public static function hasFeature(object $json, Callable $cb):bool
    {
        $features = array_filter (
            (array)$json->features,
            function($feature) use ($cb){
                return $cb($feature);
            }
        );
        return !empty($features);
    }

    public static function gasHeating(){
        return function (object $json) {
            return SELF::getFeatureValue($json, 'Gas reticulated');
        };
    }

    public static function outdoorEntertainment(){
        return function (object $json) {
            return SELF::getFeatureValue($json, 'Entertainment area');
        };
    }

    public static function deck(){
        return function (object $json) {
            return SELF::getFeatureValue($json, 'Deck / patio');
        };
    }

    public static function balcony(){
        return function (object $json) {
            return SELF::getFeatureValue($json, 'Balcony / deck');
        };
    }

    public static function spa(){
        return function (object $json) {
            return SELF::getFeatureValue($json, 'Spa bath');
        };
    }

    public static function vaccumSystem(){
        return function (object $json) {
            return SELF::getFeatureValue($json, 'Vacuum system');
        };
    }

    public static function builtInRobes(){
        return function (object $json) {
            return SELF::getFeatureValue($json, 'Walk-in-robe');
        };
    }

    public static function dishwasher(){
        return function (object $json) {
            return SELF::getFeatureValue($json, 'Dishwasher');
        };
    }

    public static function securitySystem(){
        return function (object $json) {
            return SELF::getFeatureValue($json, 'Security system');
        };
    }

    public static function airConditioning(){
        return function (object $json) {
            return SELF::getFeatureValue($json, 'Air Conditioning');
        };
    }

    public static function hideAuthorBox()
    {
        return function (object $json) {
            return "no";
        };
    }

    public static function ensuite(){
        return function (object $json) {
            return SELF::getFeatureValue($json, 'Ensuite');
        };
    }

    public static function buildingArea(){
        return function (object $json) {
            return $json->floorArea;
        };
    }

    public static function storageArea(){
        return function (object $json) {
            return SELF::getFeatureValueAsInteger($json, 'Storage Square Metres');
        };
    }

    public static function retailArea(){
        return function (object $json) {
            return SELF::getFeatureValueAsInteger($json, 'Retail Square Metres');
        };
    }

    public static function showRoomArea(){
        return function (object $json) {
            return SELF::getFeatureValueAsInteger($json, 'Showroom Square Metres');
        };
    }

    public static function mezzanineArea(){
        return function (object $json) {
            return SELF::getFeatureValueAsInteger($json, 'Mezzanine Square Metres');
        };
    }

    public static function officeArea(){
        return function (object $json) {
            return SELF::getFeatureValueAsInteger($json, 'Office Square Metres');
        };
    }

    public static function warehouseArea(){
        return function (object $json) {
            return SELF::getFeatureValueAsInteger($json, 'Warehouse Square Metres');
        };
    }

    public static function agentName($index){
        return function (object $json) use ($index){
            return $json->users[$index]->firstName . " " . $json->users[$index]->lastName;
        };
    }

    public static function modTime(){
        return function (object $json) {
            if (property_exists($json, 'updateDateTime')) {
                $format = 'Y-m-d-H:i:s';
                try{
                    $date = (new \DateTime($json->updateDateTime))->format($format);
                    return $date;
                }catch(\Exception $e){
                    return null;
                }
            }
            return null;
        };
    }

    public static function addressCoordinates(){
        return function (object $json) {
            $latLng = $json->address->latLng;
            return $latLng->lat . "," . $latLng->lng;
        };
    }

    public static function streetNumber(){
        return function (object $json) {
            return $json->address->streetNo;
        };
    }

    public static function streetName(){
        return function (object $json) {
            return $json->address->street;
        };
    }

    public static function addressSubNumber(){
        return function (object $json) {
            return $json->address->subNumber;
        };
    }

    public static function addressLotNumber(){
        return function (object $json) {
            return $json->address->lotNumber;
        };
    }

    public static function addressPostalCode(){
        return function (object $json) {
            return $json->address->postcode;
        };
    }

    public static function suburb(){
        return function (object $json) {
            return $json->address->suburb;
        };
    }

    public static function city(){
        return function (object $json) {
            return $json->address->city;
        };
    }

    public static function state(){
        return function (object $json) {
            return $json->address->region;
        };
    }

    public static function postCode(){
        return function (object $json) {
            return $json->address->postcode;
        };
    }

    public static function country(){
        return function (object $json) {
            return $json->address->country;
        };
    }

    public static function externalLink()
    {
        return function (object $json) {
            return $json->branch->webAddress;
        };
    }

    public static function status()
    {
        return function (object $json) {
            return property_exists($json, "status") && !empty($json->status) ?$json->status:null;
        };
    }

    public static function underOffer()
    {
        return function (object $json) {
            return property_exists($json, "status") && !empty($json->status) ?
                ($json->status === 'underOffer' ? 'yes' : 'no') : null;
        };
    }

    public static function exclusivity()
    {
        return function (object $json) {
            return "open";
        };
    }

    public static function category()
    {
        return function (object $json) {
            $category = '';

            if (is_null($json)) {
                $json = $this->jsonDecodedObject;
            }
            $features = $json->features;
            foreach ($features as $key => $feature) {
                if($feature->title === "Property Type"){
                    $category = $feature->value;
                    break;
                }
            }

            $mappedCategory = null;
            switch ($category) {
                case 'House':
                case 'Home and Income':
                    $mappedCategory = 'House';
                    break;

                case 'Unit':
                    $mappedCategory = 'Unit';
                    break;

                case 'Apartment':
                    $mappedCategory = 'Apartment';
                    break;

                case 'Townhouse':
                    $mappedCategory = 'Townhouse';
                    break;

                case 'Block of units':
                    $mappedCategory = 'BlockOfUnits';
                    break;

                case 'Warehouse':
                    $mappedCategory = 'Warehouse';
                    break;

                case 'Offices':
                    $mappedCategory = 'Offices';
                    break;

                case 'Office':
                    $mappedCategory = 'Offices';
                    break;

                case 'Retail':
                    $mappedCategory = 'Retail';
                    break;


                default:
                    $mappedCategory = 'Other';
                    break;
            }
            return $mappedCategory;
        };
    }

    public static function availableDateTime()
    {
        return function (object $json) {
            return $json->availableDateTime === null ? null : $json->availableDateTime;
        };
    }

    public static function landCategory()
    {
        return function (object $json) {
            return in_array($json->type, ["residentialRental", "residentialSale"]) ?
                "Residential" :
                (in_array($json->type, ["commercialLease", "commercialSale"]) ?
                    "Commercial" : null);
        };
    }

    public static function commercialAuthority()
    {
        return function (object $json) {
            return SELF::extractCommercialAuthority($json);
        };
    }

    public static function auctionDateTime()
    {
        return function (object $json) {
            return is_null($json->auctionDateTime) ? null : $json->auctionDateTime;
        };
    }

    public static function authority()
    {
        return function (object $json) {
            $commercialAuthority = SELF::extractCommercialAuthority($json);
            if (!is_null($json->auctionDateTime) || 'auction'===$commercialAuthority) {
                return 'auction';
            }
            if ('sale'===$commercialAuthority) {
                return 'sale';
            }
        };
    }

    public static function extractCommercialAuthority(object $json)
    {
        if (in_array($json->type, ["residentialRental", "residentialSale"])) {
            return null;
        }

        if (strpos($json->displayPrice,"Tender ") === 0 || "Tender" === $json->methodOfSaleName) {
            $commercialAuthority = 'tender';
        }elseif ("Auction" === $json->methodOfSaleName) {
            $commercialAuthority = 'auction';
        } else {
            $commercialAuthority = "sale";
        }

        return $commercialAuthority;

    }

    public static function videoLink()
    {
        return function (object $json) {
            $video_link_json = array_filter($json->features, function ($item) use($json) {
                return $item->title == 'Virtual Tour URL';
            });
            $video_link_json = array_pop($video_link_json);
            return !empty($video_link_json)? $video_link_json->value : null;
        };
    }

    public static function soldDate()
    {
        return function (object $json) {
            return  property_exists($json, 'saleDate') ? $json->saleDate : null;
        };
    }

    public static function propertyFeatures()
    {
        return function (object $json) {
            return SELF::getFeatureValue($json, 'Property Features');
        };
    }

    public static function netRent()
    {
        return function (object $json) {
            $net_rents = array_filter(
                SELF::getFeaturesByTitle($json, 'Source'),
                function(array $feature) {
                    return is_numeric($feature["value"]);
                }
            );
            return empty($net_rents)?null:$net_rents[0]->value;
        };
    }

    public static function tenancy()
    {
        return function (object $json) {
           return strtolower(SELF::getFeatureValue($json, "Tenancy"));
        };
    }

    public static function landFullyFenced()
    {
        return function (object $json) {
            $fenced = SELF::getFeatureValue($json, 'Fencing');
            return !is_null($fenced) && $fenced!=="Partial";
        };
    }

    public static function outgoings()
    {
        return function (object $json) {
            $outgoings_json = array_filter($json->features, function ($item) {
                return $item->title === 'OPEX $';
            });
            $outgoing_json = array_pop($outgoings_json);
            return !empty($outgoing_json) ? $outgoing_json->value : null;
        };
    }

    public static function branchName()
    {
        return function (object $json) {
            return property_exists($json, 'branch') ? $json->branch->name : null;
        };
    }

    public static function branchID()
    {
        return function (object $json) {
            return property_exists($json, 'branch') ? $json->branch->id : null;
        };
    }

    public static function zone()
    {
        return function (object $json) {
            return SELF::getFeatureValue($json, "Council zoning");
        };
    }

    public static function parkingComments()
    {
        return function (object $json) {
            return SELF::getFeatureValue($json, "Garaging / carparking");
        };
    }

    public static function tennisCourt()
    {
        return function (object $json) {
            return SELF::getFeatureValue($json, "Tennis court");
        };
    }

    public static function bond()
    {
        return function (object $json) {
            return SELF::getFeatureValueAsInteger($json, "Bond $");
        };
    }

    public static function getFeatureValue(object $json, string $feature_title)
    {
        $features = SELF::getFeaturesByTitle($json, $feature_title);

        if (empty($features)) {
            return null;
        } else {
            return $features[0]->value;
        }

    }

    public static function getFeaturesByTitle(object $json, string $feature_title)
    {
        return array_values(array_filter(
            $json->features,
            function (array $feature) use ($feature_title) {
                return $feature['title'] === $feature_title;
            }
        ));

    }

    public static function getFeatureValueAsInteger(object $json, string $feature)
    {
        $feature_value = SELF::getFeatureValue($json, $feature);
        $value = is_null($feature_value)?null:(int)str_replace(",", '',$feature_value);
        return is_numeric($value)?$value:null;
    }

    public static function rentPeriod()
    {
        return function (object $json) {
            $rent = property_exists($json, 'displayPrice')? $json->displayPrice:'';
            $temp = explode(" ", $rent); // $rent = "$520 p.w"
            return isset($temp[1]) && $temp[1]=="p.w."?"weekly":'';
        };
    }

    public static function commercialCategory()
    {
        return function (object $json) {
            if (in_array($json->type, ["commercialLease", "commercialSale"])) {
                $categories_string = str_replace(['Office', 'Warehouse'], ['Offices','Industrial/Warehouse'], SELF::getFeatureValue($json, "Property Type"));
                if (is_null($categories_string)) {
                    return 'Other';
                }
                $categories_from_json = array_map('trim', explode(',', $categories_string));
                $valid_categories = [
                    'Commercial Farming', 'Land/Development', 'Hotel/Leisure', 'Industrial/Warehouse', 'Medical/Consulting','Offices', 'Retail', 'Showrooms/Bulky Goods', 'Other'
                ];
                $valid_json_categories = array_values(array_intersect($categories_from_json, $valid_categories));
                return empty($valid_json_categories)?'Other':$valid_json_categories[0];
            } else {
                return null;
            }
        };
    }

    public static function rent()
    {
        return function (object $json) {
            if ($json->type === "residentialRental") {
                if (property_exists($json, 'displayPrice')) {
                    return $this->propertyAdapter->getRentValue($json->displayPrice);
                } else {
                    return null;
                }
            }
            return null;
        };
    }

    public static function getRentValue(string $rent):int
    {
        $temp = explode(" ", $rent); // $rent = "$520 p.w"
        return (int)ltrim($temp[0], '$');
    }

    public static function commercialRent()
    {
        return function (object $json) {
            if ($json->type === "commercialLease") {
                return property_exists($json, 'displayPrice') && !is_null($json->displayPrice) ?
                    SELF::formatPrice($json->displayPrice) :
                    null;
            } else {
                return "";
            }
        };
    }

    public static function displayPrice()
    {
        return function (object $json) {
            if (property_exists($json, 'methodOfSaleName')) {
                $display_price = in_array(strtolower($json->methodOfSaleName), ['priced'])?'yes':'no';
            } else {
                if (property_exists($json, 'displayPrice')) {
                    $price = SELF::formatPrice($json->displayPrice);
                    $display_price = !empty($price)?'yes':'no';
                } else {
                    $display_price = 'no';
                }
            }
            return $display_price;
        };
    }

    public static function price()
    {
        return function(object $json) {
            if (empty($json->displayPrice)) {
                return null;
            } else {
                // $this->propertyAdapter->formatPrice($json->displayPrice)
                $price_string = $json->displayPrice;
                return SELF::formatPrice($price_string);
            }
        };
    }

    public static function formatPrice(string $price_string)
    {
        if (is_null($price_string)) {
            return $price_string;
        }
        // "$775,000 Plus GST (if any)"
        $temp = explode(" ", ltrim($price_string, '$'));
        $price = (int)str_replace(',', "", $temp[0]);
        return $price;
    }

    public static function carSpaces()
    {
        return function(object $json) {
            $carparks = array_values(array_filter(
                (array)$json->features,
                function($item) {
                    return !is_null($item->value) && ($item->title === "Carparks" || $item->title === "Total Carparks" || $item->title === "Parking");
                }
            ));

            if (empty($carparks)) {
                return property_exists($json, 'numCarportCarSpaces')?(int)$json->numCarportCarSpaces:0;
            }

            if (is_numeric($carparks[0]->value)) {
                return (int)$carparks[0]->value;
            } else {
                $temp = explode(":", $carparks[0]->value);
                if (count($temp)!=2) {
                    return 0;
                } else {
                    return (int)trim($temp[1]);
                }
            }
        };
    }

    public static function buildingAreaUnit()
    {
        return function (object $json) {
            return "sqm";
        };
    }

    public static function landUnit()
    {
        return function (object $json) {
            return "sqm";
        };
    }

    public static function addressDisplay()
    {
        return function (object $json) {
            return "yes";
        };
    }

    public static function suburbDisplay()
    {
        return function (object $json) {
            return "yes";
        };
    }

    public static function commercialRentPeriod()
    {
        return function (object $json) {
            return "annual";
        };
    }

    // $this->propertyAdapter->extractOutgoingsAttribute($json)
    public static function commercialRentOutgoings()
    {
        return function (object $json) {
            $outgoings = (int) SELF::extractOutgoings($json);
            return $outgoings > 0 ? 'yes' : 'no';
        };
    }

    public static function extractOutgoings(object $json)
    {
        $outgoings_json = array_filter($json->features, function ($item) {
            return $item->title === 'OPEX $';
        });
        $outgoing_json = array_pop($outgoings_json);
        return !empty($outgoing_json) ? $outgoing_json->value : null;
    }

}