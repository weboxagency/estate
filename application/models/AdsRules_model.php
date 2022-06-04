<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdsRules_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAdsRules()
    {
        $this->db->select('*');
        $this->db->from('ads_rules');
        $query = $this->db->get();
        $this->db->order_by("id", "asc");
        if ($this->db->affected_rows() > 0) 
        {
        	return $query->result_array();
    	}
    	else
    	{
    		return false;
    	}
    }

    public function ads_rules_edit($data)
    {
        $ads_rules = array(
            'content' => $data['content'],
            'status' => $data['status']
        );

        $this->db->update('ads_rules', $ads_rules);
      
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}