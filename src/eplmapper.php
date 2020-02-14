<?php

namespace kevinverum\eplmappings;

class EPLMapper implements IEPLMapper
{
    private $epl_fields_map = [];

    public function mapJSON(string $json):array
    {
        $json_decoded = json_decode($json, true);

        $wp_post_fields_mapped = $this->_mapJSON($json_decoded, array_keys($this->epl_fields_map['wp_posts']));
        $wp_post_meta_fields_mapped = $this->_mapJSON($json_decoded, array_keys($this->epl_fields_map['wp_postmeta']));

        return [
            "wp_posts"=>$wp_post_fields_mapped,
            "wp_postmeta"=>$wp_post_meta_fields_mapped
        ];

    }

    private function _mapJSON(array $json_decoded, array $fields):array
    {
        return array_reduce(
            $fields,
            function(array $carry, string $epl_key) use ($json_decoded) {

                $json_key = $this->epl_fields_map['wp_posts'][$epl_key];

                if (is_string($json_key) && isset($json_decoded[$json_key])) {

                    $carry[$epl_key] = $json_decoded[$json_key];

                } elseif (is_array($json_key)) {

                    if (isset($json_key['extraFields'])) {
                        $carry[$epl_key] = $this->_getExtraField($json_decoded, $json_key);
                    }
                }

                return $carry;
            },
            []
        );

    }


    private function _getExtraField(array $json_decoded, array $json_key):string
    {
        return $json_decoded['extraFields'][
        array_search($json_key['extraFields']['tag'], array_column($json_decoded["extraFields"], "tag"))
        ]["value"];
    }

    /**
     * EPLMapper constructor.
     */
    public function __construct()
    {
        $this->epl_fields_map =  [
            "wp_posts" => array_filter(
                [
                    "post_date" => "modTime",
                    "post_content" => "description",
                    "post_title" => "headline",
                    "post_type" => [
                        "extraFields" => [
                            "tag" => "LISTING_TYPE",
                            "value"
                        ]
                    ]
                ],
                function($v) {
                    return !empty($v);
                }
            ),
            "wp_postmeta" => array_filter([
                "property_mod_date" => "",
                "property_images_mod_date" => "",
                "property_inspection_times" => "",
                "property_featured" => "",
                "property_agent_hide_author_box" => "",
                "property_heading" => "headline",
                "property_office_id" => "",
                "property_agent" => [
                    "listingAgent" => 1
                ],
                "property_second_agent" => [
                    "listingAgent" => 2
                ],
                "property_status" => "status",
                "property_list_date" => "",
                "property_authority" => "authority",
                "property_com_authority" => "authority",
                "property_com_exclusivity" => "",
                "property_com_listing_type" => [
                    "extraFields" => [
                        "tag" => "LEGAL_ESTATE",
                        "value"
                    ]
                ],
                "property_commercial_category"=>"",
                "property_building_area_unit"=>[
                    "buildingDetails" => [
                        "unit"
                    ]
                ],
                "property_address_display"=> [
                    "address" => [
                        "display"
                    ]
                ],
                "property_address_street_number"=>  [
                    "address" => [
                        "streetNumber"
                    ]
                ],
                "property_address_street"=>  [
                    "address" => [
                        "street"
                    ]
                ],
                "property_address_suburb"=>  [
                    "address" => [
                        "suburb" => [
                            "value"
                        ]
                    ]
                ],
                "property_com_display_suburb"=> [
                    "address" => [
                        "suburb" => [
                            "display"
                        ]
                    ]
                ],
                "property_address_city"=> [
                    "address" => [
                        "city"
                    ]
                ],
                "property_address_state"=> [
                    "address" => [
                        "state"
                    ]
                ],
                "property_address_country"=> [
                    "address" => [
                        "country"
                    ]
                ],
                "property_address_coordinates"=> [
                    "extraFields" => [
                        [
                            "tag" => "GEOCODE_LATITUDE",
                            "value"],
                        [
                            "tag" => "GEOCODE_LONGITUDE",
                            "value"
                        ],
                        ","
                    ]
                ],
                "property_price"=> [
                    "price" => [
                        "value"
                    ]
                ],
                "property_price_view"=> "priceView",
                "property_price_display"=> [
                    "price" => [
                        "display"
                    ]
                ],
                "property_under_offer"=> "underOffer",
                "property_sold_date" => "",
                "property_rent_view"=>"",
                "property_rent_display"=>"",
                "property_date_available" => "",
                "property_com_outgoings" => "",
                "property_com_car_spaces"=>"",
                "property_external_link"=>"",
                "property_branch_name"=>"",
                "property_building_warehouse_area"=>"",
                "property_building_office_area"=>"",
                "property_building_mezzanine_area"=>"",
                "property_building_showroom_area"=>"",
                "property_building_retail_area"=> "",
                "property_features"=>"features",
                "property_building_storage_area"=>"",
                "property_price_global" => "",
                "property_unique_id" => "uniqueID",
                "property_building_area" => [
                    "buildingDetails" => [
                        "area"
                    ]
                ],
                "property_bedrooms"=>"",
                "property_bathrooms"=>"",
                "property_toilet"=>"",
                "property_ensuite"=>"",
                "property_garage"=>"",
                "property_carport"=>"",
                "property_open_spaces"=>"",
                "property_rooms"=>"",
                "property_year_built"=>"",
                "property_new_construction"=>"",
                "property_pool"=>"",
                "property_air_conditioning"=>"",
                "property_security_system"=>"",
                "property_energy_rating" => "",
                "property_land_fully_fenced" => "",
                "property_remote_garage" => "",
                "property_secure_parking" => "",
                "property_study" => "",
                "property_dishwasher" => "",
                "property_built_in_robes" => "",
                "property_gym" => "",
                "property_workshop" => "",
                "property_rumpus_room" => "",
                "property_floor_boards" => "",
                "property_broadband" => "",
                "property_pay_tv" => "",
                "property_vacuum_system" => "",
                "property_intercom" => "",
                "property_spa" => "",
                "property_tennis_court"=>"",
                "property_balcony"=>"",
                "property_deck"=>"",
                "property_courtyard"=>"",
                "property_outdoor_entertaining"=>"",
                "property_shed"=>"",
                "property_ducted_heating"=>"",
                "property_ducted_cooling"=>"",
                "property_split_system_heating"=>"",
                "property_hydronic_heating"=>"",
                "property_split_system_aircon"=>"",
                "property_gas_heating"=>"",
                "property_reverse_cycle_aircon"=>"",
                "property_evaporative_cooling"=>"",
                "property_open_fire_place"=>"",
                "property_address_sub_number"=>"",
                "property_address_postal_code"=>"",
                "property_address_hide_map"=>"",
                "property_auction"=>"",
                "property_is_home_land_package"=>"",
                "property_sold_price"=>"",
                "property_sold_price_display"=>"",
                "property_video_url"=>"",
                "property_external_link_label"=>"",
                "property_external_link_2"=>"",
                "property_external_link_2_label"=>"",
                "property_external_link_3"=>"",
                "property_external_link_3_label"=>"",
                "property_com_mini_web"=>"",
                "property_com_mini_web_2"=>"",
                "property_floorplan"=>"",
                "property_floorplan_label"=>"",
                "property_floorplan_2"=>"",
                "property_floorplan_2_label"=>"",
                "property_energy_certificate"=>"",
                "property_energy_certificate_label"=>"",

                "property_owner"=>"",

                "property_pet_friendly"=>"",
                "property_land_area_unit"=>[
                    "landDetails" => [
                        "unit"
                    ]
                ],
                "property_rent"=>"",
                "property_rent_period"=>"",
                "property_bond"=>"",
                "property_date_leased"=>"",
                "property_furnished"=>"",

                "property_com_rent"=>"",
                "property_com_rent_period"=>"",
                "property_com_rent_range_min"=>"",
                "property_com_rent_range_max"=>"",
                "property_com_lease_end_date"=>"",
                "property_com_property_extent"=>"",
                "property_com_tenancy"=>"",
                "property_com_plus_outgoings"=>"",
                "property_com_return"=>"",
                "property_bus_terms"=>"",

                "property_com_further_options"=>"",
                "property_com_zone"=>"",
                "property_com_highlight_1"=>"",
                "property_com_highlight_2"=>"",
                "property_com_highlight_3"=>"",
                "property_com_parking_comments"=>"",
                "property_com_is_multiple"=>"",

                "property_com_mini_web_3"=>"",

                "property_land_category"=>"",

                "property_address_lot_number"=>"",
                "property_bus_takings"=>"",
                "property_bus_franchise"=>"",
                "property_rural_category"=>"",

                "property_rural_fencing"=>"",
                "property_rural_annual_rainfall"=>"",
                "property_rural_soil_types"=>"",
                "property_rural_improvements"=>"",
                "property_rural_council_rates"=>"councilRates",
                "property_rural_irrigation"=>"",
                "property_rural_carrying_capacity"=>"",
                "property_rural_services"=>"",

                // Need to verify following fields against epl
                "property_rates" => "councilRates",
                "property_land_area" => [
                    "landDetails" => [
                        "area"
                    ]
                ],

                "property_legal_ct" =>  [
                    "extraFields" => [
                        "tag" => "LEGAL_CT",
                        "value"
                    ]
                ],
                "property_legal_dp" =>  [
                    "extraFields" => [
                        "tag" => "LEGAL_DP",
                        "value"
                    ]
                ],
                "property_legal_lot" =>  [
                    "extraFields" => [
                        "tag" => "LEGAL_LOT",
                        "value"
                    ]
                ],
                "property_rateable_value" =>  [
                    "extraFields" => [
                        "tag" => "RATEABLE_VALUE",
                        "value"
                    ]
                ]
            ],
                function($v) {
                    return !empty($v);
                })
        ];
    }


}