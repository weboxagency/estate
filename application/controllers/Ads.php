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
                $last_ads_id                    = $this->ads->lastAdsId();
                $requesData = [
                    "ads_pin_kod"               => rand(10000,99999),
                    "ads_title"                 => "Salam",
                    "url_slug"                  => seo_link("elan-salam"),
                    "ads_number"                => $last_ads_id+10,
                    "announcement_type"         => (isset($_POST['estate_type'])) ? $_POST['estate_type'] : '',   
                    "connection_type"           => 1,
                    "property_type"                  => (isset($_POST['ads_type'])) ? $_POST['ads_type'] : '',                       //+
                    "price"                     => (isset($_POST['price'])) ? $_POST['price'] : '',                             //+ 
                    "area"                      => (isset($_POST['area'])) ? $_POST['area'] : '',                               //+
                    "average_price"             => 10,  
                    "room"                      => (isset($_POST['room'])) ? $_POST['room'] : '',                               //+   
                    "land_area"                 => (isset($_POST['land_area'])) ? $_POST['land_area'] : '',  
                    "floor"                     => (isset($_POST['floor'])) ? $_POST['floor'] : '',                             //+
                    "max_floor"                 => (isset($_POST['max_floor'])) ? $_POST['max_floor'] : '',                     //+
                    "repair"                    => (isset($_POST['repair'])) ? $_POST['repair'] : '',                           //+ 
                    "deed"                      => (isset($_POST['deed'])) ? $_POST['deed'] : '',                               //+  
                    "mortgage"                  => (isset($_POST['mortgage'])) ? $_POST['mortgage'] : '',                       //+  
                    "user_type"                 => (isset($_POST['user_type'])) ? $_POST['user_type'] : '',                     //+  
                    "name"                      => (isset($_POST['name'])) ? $_POST['name'] : '',                               //+
                    "email"                     => (isset($_POST['email'])) ? $_POST['email'] : '',                             //+  
                    "mobile"                    => (isset($_POST['mobile'])) ? $_POST['mobile'] : '',                           //+
                    "has_whatsapp"              => (isset($_POST['has_whatsapp']) AND $_POST['has_whatsapp']=='on') ? 1 : 0,    //+   
                    "city_id"                   => (isset($_POST['city_id'])) ? $_POST['city_id'] : '',                         //+
                    "region_id"                 => (isset($_POST['region_id'])) ? $_POST['region_id'] : '',                     //+
                    "district_id"               => (isset($_POST['district_id'])) ? $_POST['district_id'] : '',                 //+
                    "metro_id"                  => (isset($_POST['metro_id'])) ? $_POST['metro_id'] : '',                       //+ 
                    "address"                   => (isset($_POST['address'])) ? $_POST['address'] : '',                         //+
                    "latitude"                  => (isset($_POST['latitude'])) ? $_POST['latitude'] : '',                       //+
                    "longitude"                 => (isset($_POST['longitude'])) ? $_POST['longitude'] : '',                     //+ 
                    "property_description"      => (isset($_POST['description'])) ? $_POST['description'] : '',  
                    "business_center"           => '',
                    "complex"                   => '',
                    "is_active"                 => 0,  
                    "status"                    => 2, 
                    "pull_ads_forward_begin"    => '', 
                    "pull_ads_forward_end"      => '',   
                    "vip_begin"                 => '',  
                    "vip_end"                   => '',
                    "premium_begin"             => '',  
                    "premium_end"               => '',
                    "photos"                    => "Salam", 
                    "created_at"                => date("Y-m-d H:i:s"), 
                    "updated_at"                => '', 
                    "deleted_at"                => '', 
                    "approved_at"               => '',
                    "simple_ads_end_date"       => ''
                ];

                $this->db->insert('ads_all', $requesData);
                $ads_last_id = $this->db->insert_id();
                set_alert('success', translate('information_has_been_saved_successfully'));
                redirect(base_url('ads/index'));
     

        }

        $this->data['ads_type']     = $this->hm->adsType();
        $this->data['estate_type']  = $this->hm->estateTypes();
        $this->data['cities']       = $this->hm->allCities();
        $this->data['regions']      = $this->hm->allRegions();
        $this->data['districts']    = $this->hm->allDistricts();
        $this->data['metros']       = $this->hm->allMetros();
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

    public function delete_ads($id = '')
    {
        $arrayData['status'] = 5;
        $this->db->where('id', $id);
        $this->db->update('ads_all', $arrayData);
        redirect(base_url(), 'refresh');   
    }

    public function save_reason()
    {
     $arrayCity = array(
        'ads_reason' => trim($_POST['reason']),
        'status' => $_POST['status']
    );


     $this->db->where('id', $_POST['id']);
     $this->db->update('ads_all', $arrayCity);


     $return = array('msg' => translate('information_has_been_updated_successfully'), 'status' => true);
     echo json_encode($return);
 }

 public function get_regions()
 {
    $this->db->select('*');
    $this->db->from('regions');
    $this->db->where('parent_city', $_POST['city_id']);
    $query = $this->db->get();
    $kerim = $query->result_array();

    $html = '';
    if(!empty($kerim))
    {
        foreach($kerim as $region)
        {
            $html.= '<option value="'.$region['id'].'">'.$region['region_name'].'</option>';
        }
        echo $html;
    }
    else
    {

        echo $html;
    }

}

 public function get_districts()
 {
    $this->db->select('*');
    $this->db->from('districts');
    $this->db->where('parent_region', $_POST['region_id']);
    $query = $this->db->get();
    $kerim = $query->result_array();

    $html = '';
    if(!empty($kerim))
    {
        foreach($kerim as $district)
        {
            $html.= '<option value="'.$district['id'].'">'.$district['district_name'].'</option>';
        }
        echo $html;
    }
    else
    {
        
        echo $html;
    }

}

}
