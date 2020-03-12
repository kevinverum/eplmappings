<?php

namespace kevinverum\eplmappings;

require(__DIR__ ."/JSONMappings.php");
require(__DIR__ ."/XMLMappings.php");

/**
 * Class EPLMapper
 * @package kevinverum\eplmappings
 */
class EPLMapper implements IEPLMapper
{
    private $epl_fields_map = [];

    public function mapJSON(string $json):array
    {
        $json_decoded = json_decode($json, true);

        $wp_post_meta_fields_mapped = $this->_mapJSON($json_decoded, array_keys($this->epl_fields_map['wp_postmeta']), $this->epl_fields_map['wp_postmeta']);
        $wp_post_fields_mapped = $this->_mapJSON($json_decoded, array_keys($this->epl_fields_map['wp_posts']), $this->epl_fields_map['wp_posts']);

        if (isset($wp_post_meta_fields_mapped['property_features'])) {
            array_walk($wp_post_meta_fields_mapped['property_features'], function ($val, $key) use (&$result) {
                $result .=  "$val $key\n";
            });
            $wp_post_meta_fields_mapped['property_features'] = trim($result);
        }

        return [
            "wp_posts"=>$wp_post_fields_mapped,
            "wp_postmeta"=>array_filter(
                $wp_post_meta_fields_mapped,
                function($v) {
                    return !is_null($v);
                }
            ),
            "address" => isset($json_decoded["address"])?["address"=>$json_decoded["address"]]:[],
            "feature_image" => isset($json_decoded["featureImage"])?$json_decoded["featureImage"]["url"]:"",
            "images" => isset($json_decoded["images"])?array_map(
                function($item) {
                    return $item["url"];
                },
                $json_decoded["images"]):[]

        ];

    }

    private function _mapJSON(array $json_decoded, array $fields, array $haystack):array
    {

        return array_reduce(
            $fields,
            function(array $carry, string $epl_key) use ($json_decoded, $haystack) {

                $json_key = $haystack[$epl_key];

                if (is_string($json_key) && isset($json_decoded[$json_key])) {

                    $carry[$epl_key] = $json_decoded[$json_key];

                } elseif (is_array($json_key)) {

                    if (isset($json_key['extraFields'])) {
                        $carry[$epl_key] = $this->_getExtraField($json_decoded, $json_key);
                    } else {

                        $carry[$epl_key] = $this->_getArrField($json_decoded, $json_key);

                    }
                } elseif (is_callable($json_key)) {

                    $carry[$epl_key] = $json_key((object)$json_decoded);

                }

                return $carry;
            },
            []
        );

    }

    private function _getArrField(array $json_decoded, array $json_key)
    {
        $k = key($json_key); // 0
        $v = $json_key[$k]; // ["listingAgent"=>[name"=>""]]
        if (is_array($v)) {
            $arr_k = key($v); // "listingAgent"
            $arr_v = $v[$arr_k]; // ["name"=>""]
            if (is_array($arr_v)) {
                $sub_arr_k = key($arr_v); // "name"
                return $json_decoded[$k][$arr_k][$sub_arr_k];
            }
            return $json_decoded[$k][$arr_k];
        }

        return null;
    }

    private function _getExtraField(array $json_decoded, array $json_key)
    {
        $i = array_search($json_key['extraFields']['tag'], array_column($json_decoded["extraFields"], "tag"));
        if ($i === false) {
            return null;
        }
        return $json_decoded['extraFields'][$i]["value"];
    }


    /**
     * EPLMapper constructor.
     * @param array $fields_map array telling us what wp property maps to what json property.
     */
    public function __construct(array $fields_map)
    {
        $this->epl_fields_map = $fields_map;

    }


}