<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @package : Ramom school management system
 * @version : 4.0
 * @developed by : RamomCoder
 * @support : ramomcoder@yahoo.com
 * @author url : http://codecanyon.net/user/RamomCoder
 * @filename : Student.php
 * @copyright : Reserved RamomCoder Team
 */

class Ads extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ads_model','ads');
    }


    public function index()
    {
        $this->data['ads']        =  $this->ads->allAds();
        $this->data['title']        =  translate('users');
        $this->data['sub_page']     =  'ads/index';
        $this->data['main_menu']    =  'ads';
        $this->load->view('layout/index', $this->data);
    }

    public function ads_status()
    {
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        if ($status == 'true') {
            $arrayData['status'] = 1;
        } else {
            $arrayData['status'] = 0;
        }
       
        $this->db->where('id', $id);
        $this->db->update('ads', $arrayData);
        $return = array('msg' => translate('information_has_been_updated_successfully'), 'status' => true);
        echo json_encode($return);
    }

    public function ads_delete($id = '')
    {
        $this->db->where('id', $id);
        $this->db->delete('ads');
       
        redirect(base_url(), 'refresh');   
    }
}
