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
                "property_custom_commercial_rent" => "{netRent[1]}",
                "property_holiday_rental" => "{holiday[1]/@value}",
                "property_category" => "{category[1]/@name}",
                "property_mod_date" => "{./@modTime}",
                "property_images_mod_date" => "{feedsyncImageModtime[1]}",
                "property_inspection_times" => "[FOREACH({inspectionTimes/inspection})]{.}
[ENDFOREACH]",
                "property_featured" => "{feedsyncFeaturedListing[1]}",
                "property_agent_hide_author_box" => "",
                "property_heading" => "{headline{1}}",
                "property_office_id" => "{branchID[1]}",
                "property_agent" => "{listingAgent[1]/name[1]}",
                "property_second_agent" => "{listingAgent[2]/name[1]}",
                "property_status" => "{./@status}",
                "property_list_date" => "{./@modTime}",
                "property_authority" => "{authority[1]/@value}",
                "property_com_authority" => "{commercialAuthority[1]/@value}",
                "property_com_exclusivity" => "{exclusivity[1]/@value}",
                "property_com_listing_type" => "",
                "property_commercial_category"=>"{commercialCategory[1]/@name}",
                "property_building_area_unit"=>"{buildingDetails[1]/area[1]/@unit}",
                "property_address_display"=> "{address[1]/@display}",
                "property_address_street_number"=>  "{address[1]/streetNumber[1]}",
                "property_address_street"=>  "{address[1]/street[1]}",
                "property_address_suburb"=>  "{address[1]/suburb[1]}",
                "property_com_display_suburb"=> "{address[1]/suburb[1]/@display}",
                "property_address_city"=> "{address[1]/city[1]}",
                "property_address_state"=> "{address[1]/state[1]}",
                "property_address_country"=> "{address[1]/country[1]}",
                "property_address_coordinates"=> "{address[1]/latitude[1]},{address[1]/longitude[1]}",
                "property_price"=> "{price[1]/range[1]/min[1]}",
                "property_price_view"=> "{priceView[1]}",
                "property_price_display"=> "{price[1]/@display}",
                "property_under_offer"=> "{underOffer[1]/@value}",
                "property_sold_date" => "{soldDetails[1]/soldDate[1]}",
                "property_rent_view"=>"{priceView[1]}",
                "property_rent_display"=>"",
                "property_date_available" => "{dateAvailable[1]}",
                "property_com_outgoings" => "{outgoings[1]}",
                "property_com_car_spaces"=>"{carSpaces[1]}",
                "property_external_link"=>"https://{externalLink[1]/@href}",
                "property_branch_name"=>"{branchName[1]}",
                "property_building_warehouse_area"=>"{buildingDetails[1]/warehouseArea[1]}",
                "property_building_office_area"=>"{buildingDetails[1]/officeArea[1]}",
                "property_building_mezzanine_area"=>"{buildingDetails[1]/mezzanineArea[1]}",
                "property_building_showroom_area"=>"{buildingDetails[1]/showroomArea[1]}",
                "property_building_retail_area"=> "{buildingDetails[1]/retailArea[1]}",
                "property_features"=>"{propertyFeatures[1]}",
                "property_building_storage_area"=>"{buildingDetails[1]/storageArea[1]}",
                "property_price_global" => "",
                "property_unique_id" => "{uniqueID[1]}",
                "property_building_area" => "{buildingDetails[1]/area[1]}",
                "property_bedrooms"=>"{features[1]/bedrooms[1]}",
                "property_bathrooms"=>"{features[1]/bathrooms[1]}",
                "property_toilet"=>"",
                "property_ensuite"=>"{features[1]/ensuite[1]}",
                "property_garage"=>"{features[1]/garages[1]}",
                "property_carport"=>"{features[1]/carports[1]}",
                "property_open_spaces"=>"",
                "property_rooms"=>"",
                "property_year_built"=>"",
                "property_new_construction"=>"{newConstruction[1]}",
                "property_pool"=>"{features[1]/pool[1]}",
                "property_air_conditioning"=>"{features[1]/airConditioning[1]}",
                "property_security_system"=>"{features[1]/alarmSystem[1]}",
                "property_energy_rating" => "",
                "property_land_fully_fenced" => "{landFullyFenced[1]}",
                "property_remote_garage" => "{features[1]/remoteGarage[1]}",
                "property_secure_parking" => "{features[1]/secureParking[1]}",
                "property_study" => "{features[1]/study[1]}",
                "property_dishwasher" => "{features[1]/dishwasher[1]}",
                "property_built_in_robes" => "{features[1]/builtInRobes[1]}",
                "property_gym" => "{features[1]/gym[1]}",
                "property_workshop" => "{features[1]/workshop[1]}",
                "property_rumpus_room" => "{features[1]/rumpusRoom[1]}",
                "property_floor_boards" => "{features[1]/floorBoards[1]}",
                "property_broadband" => "{features[1]/broadband[1]}",
                "property_pay_tv" => "{features[1]/payTV[1]}",
                "property_vacuum_system" => "{features[1]/vacuumSystem[1]}",
                "property_intercom" => "{features[1]/intercom[1]}",
                "property_spa" => "{features[1]/spa[1]}",
                "property_tennis_court"=>"{features[1]/tennisCourt[1]}",
                "property_balcony"=>"{features[1]/balcony[1]}",
                "property_deck"=>"{features[1]/deck[1]}",
                "property_courtyard"=>"{features[1]/courtyard[1]}",
                "property_outdoor_entertaining"=>"{features[1]/outdoorEnt[1]}",
                "property_shed"=>"{features[1]/shed[1]}",
                "property_ducted_heating"=>"{features[1]/ductedHeating[1]}",
                "property_ducted_cooling"=>"{features[1]/ductedCooling[1]}",
                "property_split_system_heating"=>"{features[1]/splitSystemHeating[1]}",
                "property_hydronic_heating"=>"{features[1]/hydronicHeating[1]}",
                "property_split_system_aircon"=>"",
                "property_gas_heating"=>"{features[1]/gasHeating[1]}",
                "property_reverse_cycle_aircon"=>"{features[1]/reverseCycleAirCon[1]}",
                "property_evaporative_cooling"=>"{features[1]/evaporativeCooling[1]}",
                "property_open_fire_place"=>"{features[1]/openFirePlace[1]}",
                "property_address_sub_number"=>"{address[1]/subNumber[1]}",
                "property_address_postal_code"=>"{address[1]/postcode[1]}",
                "property_address_hide_map"=>"",
                "property_auction"=>"{auction[1]/@date}",
                "property_is_home_land_package"=>"{isHomeLandPackage[1]/@value}",
                "property_sold_price"=>"{soldDetails[1]/price[1]}",
                "property_sold_price_display"=>"{soldDetails[1]/price[1]/@display}",
                "property_video_url"=>"{videoLink[1]/@href}",
                "property_external_link_label"=>"",
                "property_external_link_2"=>"{externalLink[2]/@href}",
                "property_external_link_2_label"=>"",
                "property_external_link_3"=>"{externalLink[3]/@href}",
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
                "property_land_area_unit"=>"{landDetails[1]/area[1]/@unit}",
                "property_rent"=>"{rent[1]}",
                "property_rent_period"=>"{rent[1]/@period}",
                "property_bond"=>"{bond[1]}",
                "property_date_leased"=>"",
                "property_furnished"=>"{allowances[1]/furnished[1]}",

                "property_com_rent"=>"{commercialRent[1]}",
                "property_com_rent_period"=>"{commercialRent[1]/@period}",
                "property_com_rent_range_min"=>"{commercialRentRange[1]}",
                "property_com_rent_range_max"=>"{commercialRentRange[1]}",
                "property_com_lease_end_date"=>"{currentLeaseEndDate[1]}",
                "property_com_property_extent"=>"{propertyExtent[1]}",
                "property_com_tenancy"=>"",
                "property_com_plus_outgoings"=>"{commercialRent[1]/@plusOutgoings}",
                "property_com_return"=>"{return[1]}",
                "property_bus_terms"=>"{terms[1]}",

                "property_com_further_options"=>"{furtherOptions[1]}",
                "property_com_zone"=>"{zone[1]}",
                "property_com_highlight_1"=>"{highlight[1]}",
                "property_com_highlight_2"=>"{highlight[2]}",
                "property_com_highlight_3"=>"{highlight[3]}",
                "property_com_parking_comments"=>"{parkingComments[1]}",
                "property_com_is_multiple"=>"",

                "property_com_mini_web_3"=>"{miniweb[1]/uri[3]}",

                "property_land_category"=>"{landcategory[1]/@name}",

                "property_address_lot_number"=>"{address[1]/lotNumber[1]}",
                "property_bus_takings"=>"{takings[1]}",
                "property_bus_franchise"=>"",
                "property_bus_category" => "{businessCategory[1]/name[1]}",
                "property_bus_category_2" => "{businessCategory[2]/name[1]}",
                "property_bus_category_3" => "{businessCategory[3]/name[1]}",
                "property_bus_sub_category" => "{businessCategory[1]/businessSubCategory[1]/name[1]}",
                "property_bus_sub_category_2" => "{businessCategory[2]/businessSubCategory[1]/name[1]}",
                "property_bus_sub_category_3" => "{businessCategory[3]/businessSubCategory[1]/name[1]}",

                "property_rural_category"=>"{ruralCategory[1]/@name}",

                "property_rural_fencing"=>"{ruralFeatures[1]/fencing[1]}",
                "property_rural_annual_rainfall"=>"{ruralFeatures[1]/annualRainfall[1]}",
                "property_rural_soil_types"=>"{ruralFeatures[1]/soilTypes[1]}",
                "property_rural_improvements"=>"{ruralFeatures[1]/improvements[1]}",
                "property_rural_council_rates"=>"{ruralFeatures[1]/councilRates[1]}",
                "property_rural_irrigation"=>"{ruralFeatures[1]/irrigation[1]}",
                "property_rural_carrying_capacity"=>"{ruralFeatures[1]/carryingCapacity[1]}",
                "property_rural_services"=>"{ruralFeatures[1]/services[1]}",

                // Need to verify following fields against epl
                "property_rates" => "councilRates",
                "property_land_area" =>"{landDetails[1]/area[1]}",

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