<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Right_left_banners_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function getAdsBanners()
    {
        $this->db->select('*');
        $this->db->from('right_left_banners');
        $query = $this->db->get();
        $this->db->order_by("id", "asc");
        return $query->result_array();
    }

    public function getAdsBanner($id)
    {
        $this->db->select('*');
        $this->db->from('right_left_banners');
        $this->db->where('id', $id);
        $query = $this->db->get();
        
        return $query->result_array()[0];
    }

    public function ads_banners_save($data)
    {
    	$arrayBanners = array(
            'file' => $data['file'],
            'position' => $data['position'],
            'external_link' => $data['external_link'],
            'status' => $data['status']
        );


        $this->db->insert('right_left_banners', $arrayBanners);
        $id = $this->db->insert_id();

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function edit_banner($data,$id)
    {
        $arrayBanners = array(
            'file' => $data['file'],
            'position' => $data['position'],
            'external_link' => $data['external_link'],
            'status' => $data['status']
        );

        if(!empty($id))
        {
            $this->db->where('id', $id);
            $this->db->update('right_left_banners', $arrayBanners);
        }

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
}