<?php defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        $this->load->model('user_model','um');
        if (is_user_loggedin()) 
        {
           $this->data['user_info']        = $this->um->getUserInfo(logged_user_id());
        }
        if ($this->config->item('installed') == false) {
            redirect(site_url('install'));
        }

       
        

        $get_config = $this->db->get_where('global_settings', array('id' => 1))->row_array();
        $this->data['global_config']    = $get_config;
        $this->data['theme_config']     = $this->db->get_where('theme_settings', array('id' => 1))->row_array();
        $this->data['ads_config']       = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();
        date_default_timezone_set($get_config['timezone']);
    }

    // public function get_payment_config()
    // {
    //     $branchID = $this->application_model->get_branch_id();
    //     $this->db->where('branch_id', $branchID);
    //     $this->db->select('*')->from('payment_config');
    //     return $this->db->get()->row_array();
    // }

    // public function getBranchDetails()
    // {
    //     $branchID = $this->application_model->get_branch_id();
    //     $this->db->select('*');
    //     $this->db->where('id', $branchID);
    //     $this->db->from('branch');
    //     return $this->db->get()->row_array();
    // }
}

class Admin_Controller extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!is_loggedin()) {
            $this->session->set_userdata('redirect_url', current_url());
            redirect(base_url('authentication'), 'refresh');
        }
    }
}

class Front_User_Controller extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!is_user_loggedin()) {
            $this->session->set_userdata('redirect_url', current_url());
            redirect(base_url(), 'refresh');
        }
    }
}

class User_Controller extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!is_student_loggedin() && !is_parent_loggedin()) {
            $this->session->set_userdata('redirect_url', current_url());
            redirect(base_url('authentication'), 'refresh');
        }
    }
}

class Authentication_Controller extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('authentication_model');
    }
}

class Frontend_Controller extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
        $branchID = $this->home_model->getDefaultBranch();
        $cms_setting = $this->db->get_where('front_cms_setting', array('branch_id' => 1))->row_array();
        if (!$cms_setting['cms_active']) {
            redirect(site_url('authentication'));
        }
        $this->data['cms_setting'] = $cms_setting;
    }
}
