<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function check_email($email)
    {
        $this->db->select('*');
        $this->db->from('ads_users');
        $this->db->where('email', $email);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) 
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function check_phone($phone)
    {
        $this->db->select('*');
        $this->db->from('ads_users');
        $this->db->where('mobile', $phone);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) 
        {
            return true;
        }
        else
        {
            return false;
        }
    }

     // checking login credential
    public function login_credential($email, $password)
    {
        $this->db->select('*');
        $this->db->from('ads_users');
        $this->db->where('email', $email);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            $verify_password = $this->app_lib->verify_password($password, $query->row()->password);
            if ($verify_password) {
                return $query->row();
            }
        }
        return false;
    }
    public function getUserInfo($userID = '')
    {
        $sql = "SELECT name,email,mobile,mobileBeautified,mobile_format_second,status,last_active,ip,soft,browser_name,register_at FROM ads_users WHERE id = " . $this->db->escape($userID);
        return $this->db->query($sql)->row_array(); 
    }

    public function getRegisterKey($par)
    {
        $this->db->select('*');
        $this->db->from('ads_users');
        $this->db->where('register_token', $par);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) 
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    
}
