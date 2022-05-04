<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserAgreements_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getUserAgreements()
    {
        $this->db->select('*');
        $this->db->from('user_agreements');
        $query = $this->db->get();
        $this->db->order_by("id", "asc");
        return $query->result_array();
    }

    public function user_agreement_edit($data)
    {
        $user_agreement = array(
            'content' => $data['content'],
            'status' => $data['status']
        );

        $this->db->update('user_agreements', $user_agreement);
      
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}