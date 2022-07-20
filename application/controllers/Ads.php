<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @package : Estate.az - Daşınmaz əmlak platforması
 * @version : 1.0
 * @developed by : Webox Agency
 * @support : aghakarim.karimov@gmail.com
 * @author url : https://webox.az
 * @filename : Student.php
 * @copyright : Aghakarim Karimov & Cavid Shixiyev
 */

class Ads extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model', 'hm');
        $this->load->model('ads_model','ads');
        $this->load->model('email_model','em');
        $this->load->library('mailer');
    }


    public function index()
    {
        if ($this->input->post('submit') == 'save') {                  
                
            $arrayAds = array(
            'name'              => $_POST['name'],
            'mobile'            => $_POST['mobile'],
            'email'             => $_POST['email'],
            'user_type'         => $_POST['user_type'],
            'has_whatsapp'      => (isset($_POST['has_whatsapp'])) ? 1 : 0,

            
            'ads_pin_kod'       => mt_rand(100000, 999999),
            'ads_type'          => $_POST['ads_type'],
            'estate_type'       => $_POST['estate_type'],
            'price'             => $_POST['price'],
            'area'              => $_POST['area'],
            'land_area'         => $_POST['land_area'],
            'deed'              => (isset($_POST['deed'])) ? 1 : 0,
            'mortgage'          => (isset($_POST['mortgage'])) ? 1 : 0,
            'longitude'         => $_POST['longitude'],
            'latitude'          => $_POST['latitude'],
            'floor'             => $_POST['floor'],
            'max_floor'         => $_POST['max_floor'],
            'address'           => $_POST['address'],
            'description'       => $_POST['description'],
            'status'            => $_POST['status']
            // 'file'              => $_FILES['file'],

        );


            // if ($response) {
            //     set_alert('success', translate('information_has_been_saved_successfully'));
            // }
            //         redirect(base_url('ads/index'));
                
        }

        $this->data['ads_type']     = $this->hm->adsType();
        $this->data['estate_type']  = $this->hm->estateTypes();
        $this->data['cities']       = $this->hm->allCities();
        $this->data['regions']      = $this->hm->allRegions();
        $this->data['districts']    = $this->hm->allDistricts();
        $this->data['ads']          =  $this->ads->allAds();
        $this->data['title']        =  translate('ads');

        $this->data['sub_page']     =  'ads/index';
        $this->data['main_menu']    =  'ads';
        $this->load->view('layout/index', $this->data);
    }

    public function upload()
    {
        dd($_FILES);
    }

    public function ads_status()
    {
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        if ($status == 1) {
            $arrayData['status'] = 1;
        } elseif($status == 2) {
            $arrayData['status'] = 2;
        } elseif($status == 3) {
            $arrayData['status'] = 3;
        } elseif($status == 4) {
            $arrayData['status'] = 4;
        } elseif($status == 5) {
            $arrayData['status'] = 5;
        }
       
        $this->db->where('id', $id);
        $this->db->update('ads_all', $arrayData);

        $return = array('msg' => translate('information_has_been_updated_successfully'), 'status' => true);
        echo json_encode($return);
    }

    public function is_active()
    {
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        if ($status == 'true') {
            $arrayData['is_active'] = 1;
        } else {
            $arrayData['is_active'] = 0;
        }
       
        $this->db->where('id', $id);
        $this->db->update('ads_all', $arrayData);

        $return = array('msg' => translate('information_has_been_updated_successfully'), 'status' => true);
        echo json_encode($return);
    }

    public function ads_delete($id = '')
    {
        $arrayData['status'] = 5;
        $this->db->where('id', $id);
        $this->db->update('ads_all', $arrayData);
       
        redirect(base_url(), 'refresh');   
    }

}
