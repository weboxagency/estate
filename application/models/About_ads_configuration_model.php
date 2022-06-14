<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About_ads_configuration_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAboutAdsConfigurations()
    {
        $this->db->select('*');
        $this->db->from('about_ads_configuration');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function update($data)
    {
        $ads_conf = array(
            "home_ads_limit" => $data['home_ads_limit'],
            "detail_ads_limit" => $data['detail_ads_limit'],
            "category_ads_limit" => $data['category_ads_limit'],
            "min_photo_count" => $data['min_photo_count'],
            "max_photo_count" => $data['max_photo_count'],
            "one_number_ads_count" => $data['one_number_ads_count'],
            "ads_expire_day"  => $data['ads_expire_day']
        );

        $this->db->update('ads_configuration', $ads_conf);
      
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}