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
        $this->db->from('ads');
        $query = $this->db->get();
        $this->db->order_by("id", "asc");
        return $query->result_array();
    }

    
}