<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ads_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //Cities

    public function allAds()
    {
        $this->db->select('*');
        $this->db->from('ads_all');
        $query = $this->db->get();
        $this->db->order_by("id", "asc");
        return $query->result_array();
    }


    public function ads_save($data)
    {
        $arrayCity = array(
            'name'      => $data['name'],
            'mobile' => $data['mobile'],
            'email'  => $data['email'],
            'user_type'  => $data['user_type'],
            'has_whatsapp'  => $data['has_whatsapp'],

            'ads_pin_kod' => mt_rand(100000, 999999),
            'ads_type'  => $data['ads_type'],
            'estate_type'  => $data['estate_type'],
            'price'  => $data['price'],
            'area'  => $data['area'],
            'land_area'  => $data['land_area'],
            'deed'  => $data['deed'],
            'mortgage'  => $data['mortgage'],
            'floor'  => $data['floor'],
            'max_floor'  => $data['max_floor'],
            'address'  => $data['address'],
            'description'  => $data['description'],
            'description'  => $data['description']

        );

        $this->db->insert('cities', $arrayCity);
        $id = $this->db->insert_id();

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function lastAdsId()
    {
        $this->db->select("*");
        $this->db->from("ads_all");
        $this->db->limit(1);
        $this->db->order_by('id',"DESC");
        $query = $this->db->get();
        $result =  $query->result_array();
        if ($result) 
        {
            return $result[0]['id'];
        }
        else
        {
            return 0;
        }
    }

    
}