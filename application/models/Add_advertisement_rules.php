<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add_advertisement_rules extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAddAdvertisementRules()
    {
        $this->db->select('*');
        $this->db->from('Add_advertisement_rules');
        $query = $this->db->get();
        $this->db->order_by("id", "asc");
        return $query->result_array();
    }

    public function add_advertisement_rules_edit($data)
    {
        $Add_advertisement_rules = array(
            'content' => $data['content'],
            'status' => $data['status']
        );

        $this->db->update('Add_advertisement_rules', $Add_advertisement_rules);
      
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}