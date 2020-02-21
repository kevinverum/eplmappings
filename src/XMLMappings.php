<?php


namespace kevinverum\eplmappings;

// ?
// commercialListingType
// allowances

class XMLMappings
{
    public static function map():array
    {
        return [
            "wp_posts" => array_filter(
                [
                    "post_date" => function(string $d) {
                            return $d;
                    },
                    "post_content" => function(string $content) {
                            return "<description>" . $content . "</description>";
                        },
                    "post_title" => function(string $heading) {
                            return "<headline>" . $heading . "</headline>";
                    },
                    "post_type" => function(string $type) {
                            return "<type>". $type . "<type>";
                    },
                ],
                function($v) {
                    return !empty($v);
                }
            ),

            "wp_postmeta" => array_filter([

                "property_bedrooms"=>function($v) {
                    return empty($v)?null:"<features><bedrooms>" . $v . "</bedrooms></features>";
                },
                "property_bathrooms"=>function($v) {
                    return empty($v)?null:"<features><bathrooms>" . $v . "</bathrooms></features>";
                },
                "property_toilet"=>"",
                "property_ensuite"=>function($v) {
                    return empty($v)?null:"<features><ensuite>" . $v . "</ensuite></features>";
                },
                "property_garage"=>function($v) {
                    return empty($v)?null:"<features><garages>" . $v . "</garages></features>";
                },
                "property_carport"=>function($v) {
                    return empty($v)?null:"<features><carports>" . $v . "</carports></features>";
                },
                "property_open_spaces"=>"",
                "property_rooms"=>"",
                "property_year_built"=>"",

                "property_new_construction"=>function($v) {
                    return empty($v)?null:"<features><newConstruction>" . $v . "</newConstruction></features>";
                },
                "property_pool"=>function($v) {
                    return empty($v)?null:"<features><pool>" . $v . "</pool></features>";
                },
                "property_air_conditioning"=>function($v) {
                    return empty($v)?null:"<features><airConditioning>" . $v . "</airConditioning></features>";
                },
                "property_security_system"=>function($v) {
                    return empty($v)?null:"<features><alarmSystem>" . $v . "</alarmSystem></features>";
                },
                "property_energy_rating" => "",

                "property_remote_garage" => function($v) {
                    return empty($v)?null:"<features><remoteGarage>" . $v . "</remoteGarage></features>";
                },
                "property_secure_parking" => function($v) {
                    return empty($v)?null:"<features><secureParking>" . $v . "</secureParking></features>";
                },
                "property_study" => function($v) {
                    return empty($v)?null:"<features><study>" . $v . "</study></features>";
                },
                "property_dishwasher" => function($v) {
                    return empty($v)?null:"<features><dishwasher>" . $v . "</dishwasher></features>";
                },
                "property_built_in_robes" => function($v) {
                    return empty($v)?null:"<features><builtInRobes>" . $v . "</builtInRobes></features>";
                },
                "property_gym" => function($v) {
                    return empty($v)?null:"<features><gym>" . $v . "</gym></features>";
                },
                "property_workshop" => function($v) {
                    return empty($v)?null:"<features><workshop>" . $v . "</workshop></features>";
                },
                "property_rumpus_room" => function($v) {
                    return empty($v)?null:"<features><rumpusRoom>" . $v . "</rumpusRoom></features>";
                },
                "property_floor_boards" => function($v) {
                    return empty($v)?null:"<features><floorBoards>" . $v . "</floorBoards></features>";
                },
                "property_broadband" => function($v) {
                    return empty($v)?null:"<features><broadband>" . $v . "</broadband></features>";
                },
                "property_pay_tv" => function($v) {
                    return empty($v)?null:"<features><payTV>" . $v . "</payTV></features>";
                },
                "property_vacuum_system" => function($v) {
                    return empty($v)?null:"<features><vacuumSystem>" . $v . "</vacuumSystem></features>";
                },
                "property_intercom" => function($v) {
                    return empty($v)?null:"<features><intercom>" . $v . "</intercom></features>";
                },
                "property_spa" => function($v) {
                    return empty($v)?null:"<features><spa>" . $v . "</spa></features>";
                },
                "property_tennis_court"=>function($v) {
                    return empty($v)?null:"<features><tennisCourt>" . $v . "</tennisCourt></features>";
                },
                "property_balcony"=>function($v) {
                    return empty($v)?null:"<features><balcony>" . $v . "</balcony></features>";
                },
                "property_deck"=>function($v) {
                    return empty($v)?null:"<features><deck>" . $v . "</deck></features>";
                },
                "property_courtyard"=>function($v) {
                    return empty($v)?null:"<features><courtyard>" . $v . "</courtyard></features>";
                },
                "property_outdoor_entertaining"=>function($v) {
                    return empty($v)?null:"<features><outdoorEnt>" . $v . "</outdoorEnt></features>";
                },
                "property_shed"=>function($v) {
                    return empty($v)?null:"<features><shed>" . $v . "</shed></features>";
                },
                "property_ducted_heating"=>function($v) {
                    return empty($v)?null:"<features><ductedHeating>" . $v . "</ductedHeating></features>";
                },
                "property_ducted_cooling"=>function($v) {
                    return empty($v)?null:"<features><ductedCooling>" . $v . "</ductedCooling></features>";
                },
                "property_split_system_heating"=>function($v) {
                    return empty($v)?null:"<features><splitSystemHeating>" . $v . "</splitSystemHeating></features>";
                },
                "property_hydronic_heating"=>function($v) {
                    return empty($v)?null:"<features><hydronicHeating>" . $v . "</hydronicHeating></features>";
                },
                "property_split_system_aircon"=>"",
                "property_gas_heating"=>function($v) {
                    return empty($v)?null:"<features><gasHeating>" . $v . "</gasHeating></features>";
                },
                "property_reverse_cycle_aircon"=>function($v) {
                    return empty($v)?null:"<features><reverseCycleAirCon>" . $v . "</reverseCycleAirCon></features>";
                },
                "property_evaporative_cooling"=>function($v) {
                    return empty($v)?null:"<features><evaporativeCooling>" . $v . "</evaporativeCooling></features>";
                },
                "property_open_fire_place"=>function($v) {
                    return empty($v)?null:"<features><openFirePlace>" . $v . "</openFirePlace></features>";
                },

                "property_address_street_number"=> function($v) {
                    return "<address><streetNumber>" . $v . "</streetNumber></address>";
                },
                "property_address_street"=> function($v) {
                    return "<address><street>" . $v . "</street></address>";
                },
                "property_address_suburb"=> function($v) {
                    return "<address><suburb display='yes'>" . $v . "</suburb></address>";
                },
                "property_address_city"=> function($v) {
                    return "<address><city>" . $v . "</city></address>";
                },
                "property_address_state"=> function($v) {
                    return "<address><state>" . $v . "</state></address>";
                },
                "property_address_country"=> function($v) {
                    return "<address><country>" . $v . "</country></address>";
                },
                "property_address_coordinates"=> function($lat, $lng="todo") {
                    return "<address><latitude>" . $lat . "</latitude><longitude>" . $lng . "</longitude></address>";
                },
                
                "property_com_display_suburb"=> "{address[1]/suburb[1]/@display}",
                "property_land_fully_fenced" => function($v) {
                    return "<landFullyFenced>" . $v . "</landFullyFenced>";
                },
                "property_custom_commercial_rent" => function($v) {
                    return "<netRent>" . $v . "</netRent>";
                },
                "property_holiday_rental" => function($v) {
                    return "<holiday value='$v' />";
                },
                "property_category" => function($v) {
                    return "<category value='$v' />";
                },
                "property_mod_date" => "{./@modTime}",
                "property_images_mod_date" => "{feedsyncImageModtime[1]}",
                "property_inspection_times" => "[FOREACH({inspectionTimes/inspection})]{.}
[ENDFOREACH]",
                "property_featured" => "{feedsyncFeaturedListing[1]}",
                "property_agent_hide_author_box" => "",
                "property_heading" => function($v) {
                    return "<headline>" . $v . "</headline>";
                },
                "property_office_id" => function($v) {
                    return "<branchID>" . $v . "</branchID>";
                },

                "property_agent" => function($v) {
                    return "<listingAgent><name>" . $v . "</name></listingAgent>";
                },

                "property_second_agent" => function($v) {
                    return "<listingAgent><name>" . $v . "</name></listingAgent>";
                },

                "property_status" => function($v) {
                    return $v;
                },

                "property_list_date" => function($v) {
                    return $v;
                },

                "property_authority" => function($v) {
                    return "<authority value='$v' />";
                },
                "property_com_authority" => function($v) {
                    return "<commercialAuthority value='$v' />";
                },
                "property_com_exclusivity" => function($v) {
                    return "<exclusivity value='$v' />";
                },
                "property_com_listing_type" => "",
                "property_commercial_category"=>function($v) {
                    return "<commercialCategory name='$v' />";
                },


                "property_building_area_unit"=>function($v) {
                    return "<buildingDetails><area unit='$v'/></buildingDetails>";
                },

                "property_address_display"=> "{address[1]/@display}",

                "property_price"=> "{price[1]/range[1]/min[1]}",
                "property_price"=> function($v) {
                    return "<price><range><min>" . $v . "</min></range></price>";
                },

                "property_price_view"=> function($v) {
                    return "<priceView>" . $v . "</priceView>";
                },
                "property_price_display"=> function($v) {
                    return "<price display='$v' />";
                },
                "property_under_offer"=> function($v) {
                    return "<underOffer value='$v' />";
                },
                "property_sold_date" => "{soldDetails[1]/soldDate[1]}",
                "property_rent_view"=>function($v) {
                    return "<priceView>" . $v . "</priceView>";
                },
                "property_rent_display"=>"",
                "property_date_available" => function($v) {
                    return "<dateAvailable>" . $v . "</dateAvailable>";
                },
                "property_com_outgoings" => function($v) {
                    return "<outgoings>" . $v . "</outgoings>";
                },
                "property_com_car_spaces"=>function($v) {
                    return "<carSpaces>" . $v . "</carSpaces>";
                },

                "property_external_link"=> function($v) {
                    return "<externalLink href='$v' />";
                },


                "property_branch_name"=>function($v) {
                    return "<branchName>" . $v . "</branchName>";
                },


                "property_building_warehouse_area"=>function($v) {
                    return "<buildingDetails><warehouseArea>" . $v . "</warehouseArea></buildingDetails>";
                },
                "property_building_office_area"=>function($v) {
                    return "<buildingDetails><officeArea>" . $v . "</officeArea></buildingDetails>";
                },
                "property_building_mezzanine_area"=>function($v) {
                    return "<buildingDetails><mezzanineArea>" . $v . "</mezzanineArea></buildingDetails>";
                },
                "property_building_showroom_area"=>function($v) {
                    return "<buildingDetails><showroomArea>" . $v . "</showroomArea></buildingDetails>";
                },
                "property_building_retail_area"=>function($v) {
                    return "<buildingDetails><retailArea>" . $v . "</retailArea></buildingDetails>";
                },

                "property_building_storage_area"=>function($v) {
                    return "<buildingDetails><storageArea>" . $v . "</storageArea></buildingDetails>";
                },

                "property_features"=>function($v) {
                    return "<propertyFeatures>" . $v . "</propertyFeatures>";
                },

                "property_price_global" => "",
                "property_unique_id" => function($v) {
                    return "<uniqueID>" . $v . "</uniqueID>";
                },
                "property_building_area" =>function($v) {
                    return "<buildingDetails><area>" . $v . "</area></buildingDetails>";
                },

                "property_address_sub_number"=>function($v) {
                    return "<address><subNumber>" . $v . "</subNumber></address>";
                },
                "property_address_postal_code"=>function($v) {
                    return "<address><postCode>" . $v . "</postCode></address>";
                },

                "property_address_hide_map"=>"",
                "property_auction"=>function($v) {
                    return "<auction date='$v' />";
                },
                "property_is_home_land_package"=>function($v) {
                    return "<isHomeLandPackage value='$v' />";
                },


                "property_sold_price"=>function($v) {
                    return "<soldDetails><price>" . $v . "</price></soldDetails>";
                },
                "property_sold_price_display"=>function($v) {
                    return "<soldDetails><price display='$v'></price></soldDetails>";
                },

                "property_video_url"=>function($v) {
                    return "<videoLink href='$v' />";
                },
                "property_external_link_label"=>"",
                "property_external_link_2"=> function($v) {
                    return "<externalLink href='$v' />";
                },

                "property_external_link_2_label"=>"",
                "property_external_link_3"=> function($v) {
                    return "<externalLink href='$v' />";
                },
                "property_external_link_3_label"=>"",
                "property_com_mini_web"=>"{miniweb[1]/uri[1]}",
                "property_com_mini_web_2"=>"{miniweb[1]/uri[2]}",
                "property_floorplan"=>"{objects[1]/floorplan[1]/@url}",
                "property_floorplan_label"=>"",
                "property_floorplan_2"=>"{objects[1]/floorplan[2]/@url}",
                "property_floorplan_2_label"=>"",
                "property_energy_certificate"=>"",
                "property_energy_certificate_label"=>"",

                "property_owner"=>"",

                "property_pet_friendly"=>"",

                "property_land_area_unit"=>function($v) {
                    return "<landDetails><area unit='$v'></area></landDetails>";
                },

                "property_rent"=>function($v) {
                    return "<rent>" . $v . "</rent>";
                },
                "property_rent_period"=>"{rent[1]/@period}",
                "property_bond"=>function($v) {
                    return "<bond>" . $v . "</bond>";
                },
                "property_date_leased"=>"",
                "property_furnished"=>function($v) {
                    return "<allowances><furnished>" . $v . "</furnished></allowances>";
                },

                "property_com_rent"=>function($v) {
                    return "<commercialRent>" . $v . "</commercialRent>";
                },
                "property_com_rent_period"=>function($v) {
                    return "<commercialRent period='$v' />";
                },
                "property_com_rent_range_min"=>"{commercialRentRange[1]}",
                "property_com_rent_range_max"=>"{commercialRentRange[1]}",
                "property_com_lease_end_date"=>"{currentLeaseEndDate[1]}",
                "property_com_property_extent"=>"{propertyExtent[1]}",
                "property_com_tenancy"=>"",
                "property_com_plus_outgoings"=>function($v) {
                    return "<commercialRent plusOutgoings='$v' />";
                },
                "property_com_return"=>function($v) {
                    return "<return>" . $v . "</return>";
                },
                "property_bus_terms"=>function($v) {
                    return "<terms>" . $v . "</terms>";
                },

                "property_com_further_options"=>function($v) {
                    return "<furtherOptions>" . $v . "</furtherOptions>";
                },
                "property_com_zone"=>function($v) {
                    return "<zone>" . $v . "</zone>";
                },
                "property_com_highlight_1"=>"{highlight[1]}",
                "property_com_highlight_2"=>"{highlight[2]}",
                "property_com_highlight_3"=>"{highlight[3]}",
                "property_com_parking_comments"=>"{parkingComments[1]}",
                "property_com_is_multiple"=>"",

                "property_com_mini_web_3"=>"{miniweb[1]/uri[3]}",

                "property_land_category"=>function($v) {
                    return "<landcategory name='$v' />";
                },

                "property_address_lot_number"=>"{address[1]/lotNumber[1]}",
                "property_address_lot_number"=>function($v) {
                    return "<address><lotNumber>" . $v . "</lotNumber></address>";
                },

                "property_bus_takings"=>function($v) {
                    return "<takings>" . $v . "</takings>";
                },

                "property_bus_franchise"=>"",
                "property_bus_category" => "{businessCategory[1]/name[1]}",
                "property_bus_category_2" => "{businessCategory[2]/name[1]}",
                "property_bus_category_3" => "{businessCategory[3]/name[1]}",
                "property_bus_sub_category" => "{businessCategory[1]/businessSubCategory[1]/name[1]}",
                "property_bus_sub_category_2" => "{businessCategory[2]/businessSubCategory[1]/name[1]}",
                "property_bus_sub_category_3" => "{businessCategory[3]/businessSubCategory[1]/name[1]}",

                "property_rural_category"=>function($v) {
                    return "<ruralCategory name='$v' />";
                },

                "property_rural_fencing"=>function($v) {
                    return "<ruralFeatures><fencing>" . $v . "</fencing></ruralFeatures>";
                },
                "property_rural_annual_rainfall"=>function($v) {
                    return "<ruralFeatures><annualRainfall>" . $v . "</annualRainfall></ruralFeatures>";
                },
                "property_rural_soil_types"=>function($v) {
                    return "<ruralFeatures><soilTypes>" . $v . "</soilTypes></ruralFeatures>";
                },
                "property_rural_improvements"=>function($v) {
                    return "<ruralFeatures><improvements>" . $v . "</improvements></ruralFeatures>";
                },
                "property_rural_council_rates"=>function($v) {
                    return "<ruralFeatures><councilRates>" . $v . "</councilRates></ruralFeatures>";
                },
                "property_rural_irrigation"=>function($v) {
                    return "<ruralFeatures><irrigation>" . $v . "</irrigation></ruralFeatures>";
                },
                "property_rural_carrying_capacity"=>function($v) {
                    return "<ruralFeatures><carryingCapacity>" . $v . "</carryingCapacity></ruralFeatures>";
                },
                "property_rural_services"=>function($v) {
                    return "<ruralFeatures><services>" . $v . "</services></ruralFeatures>";
                },

                "property_rates" => "councilRates",
                "property_land_area" =>function($v) {
                    return "<landDetails><area>" . $v . "</area></landDetails>";
                },

                // Need to verify following fields against epl
                "property_rates" => "councilRates",

                "property_legal_ct" =>  "",
                "property_legal_dp" =>  "",
                "property_legal_lot" =>  "",
                "property_rateable_value" =>  ""

            ],
                function($v) {
                    return !empty($v);
                })
        ];
    }
}