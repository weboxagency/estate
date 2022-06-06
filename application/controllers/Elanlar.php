<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @package : Ramom school management system
 * @version : 4.0
 * @developed by : RamomCoder
 * @support : ramomcoder@yahoo.com
 * @author url : http://codecanyon.net/user/RamomCoder
 * @filename : Home.php
 * @copyright : Reserved RamomCoder Team
 */

class Elanlar extends Frontend_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helpers('custom_fields');
        $this->load->model('email_model');
        $this->load->model('testimonial_model');
        $this->load->model('gallery_model');
        $this->load->library('mailer');
    }

    public function index()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/index', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function vip()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();

        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/vip', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function new()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
       
        if (isset($_GET['type']) AND $_GET['type']=== "sale") 
        {
            $this->data['new_ads_list']     = $this->home_model->allNewAdsSaleList();
        }
        elseif (isset($_GET['type']) AND $_GET['type']=== "monthly_rent") 
        {
            $this->data['new_ads_list']     = $this->home_model->allNewAdsRentMonthlyList();
        }
        elseif (isset($_GET['type']) AND $_GET['type']=== "daily_rent") 
        {
            $this->data['new_ads_list']     = $this->home_model->allNewAdsRentDailyList();
        }
        else
        {
            $this->data['new_ads_list']     = $this->home_model->allNewAdsList();
        }
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/new', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function satish()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['new_ads_list']     = $this->home_model->allNewAdsSaleList();
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);

        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/satish', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function kiraye()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['new_ads_list']     = $this->home_model->allNewAdsRentList();

        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/kiraye', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }


    

   



    

}
