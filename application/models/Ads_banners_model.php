<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ads_banners_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //Cities

    public function allBanners()
    {
        $this->db->select('*');
        $this->db->from('banners');
        $query = $this->db->get();
        $this->db->order_by("id", "asc");
        return $query->result_array();
    }

    public function banner_save($data)
    {
        $arrayBanner = array(
            'page'          => $data['page'],
            'external_link' => $data['external_link'],
            'side'          => $data['side'],
            'type'          => $data['type'],
            'img'           => $data['img'],
            'status'        => $data['status']
        );

        $this->db->insert('banners', $arrayBanner);
        $id = $this->db->insert_id();

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}