<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //Cities

    public function allUsers()
    {
        $this->db->select('*');
        $this->db->from('ads_users');
        $query = $this->db->get();
        $this->db->order_by("id", "asc");
        return $query->result_array();
    }

    public function user_save($data)
    {
        $arrayUsers = array(
            'name'                  => $data['name'],
            'email'                 => $data['email'],
            "mobile"                => formatPhoneNumber("",$data['mobile'])['international'],
            "mobile_format_second"  => formatPhoneNumber("",$data['mobile'])['second_format'],
            "mobileBeautified"      => formatPhoneNumber("",$data['mobile'])['national'],
            "provider_name"         => provider_name(formatPhoneNumber("",$data['mobile'])['provider']),
            'balance'               => $data['balance'],
            'status'                => $data['status']
        );

        $this->db->insert('ads_users', $arrayUsers);
        $id = $this->db->insert_id();

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getUser($id)
    {
        $this->db->select('*');
        $this->db->from('ads_users');
        $this->db->where('id', $id);
        $query = $this->db->get();
        
        return $query->result_array();
    }

    public function user_edit($data,$id)
    {
        $arrayUsers = array(
            'name'                  => $data['name'],
            'email'                 => $data['email'],
            "mobile"                => formatPhoneNumber("",$data['mobile'])['international'],
            "mobile_format_second"  => formatPhoneNumber("",$data['mobile'])['second_format'],
            "mobileBeautified"      => formatPhoneNumber("",$data['mobile'])['national'],
            "provider_name"         => provider_name(formatPhoneNumber("",$data['mobile'])['provider']),
            'balance'               => $data['balance'],
            'status'                => $data['status']
        );

        if(!empty($id))
        {
            $this->db->where('id', $id);
            $this->db->update('ads_users', $arrayUsers);
        }

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    
}