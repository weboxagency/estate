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