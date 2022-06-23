<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @package : Estate.az - Daşınmaz əmlak platforması
 * @version : 1.0
 * @developed by : Webox Agency
 * @support : aghakarim.karimov@gmail.com
 * @author url : https://webox.az
 * @filename : Home.php
 * @copyright : Aghakarim Karimov & Cavid Shixiyev
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

    // BUTUN YENI ELANLAR START
    public function new()
    {
        
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        
        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;
        
        $this->data['new_ads_list']     = $this->home_model->allNewAdsListPagination($limit, $sayfada);  
        
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

    public function new_satish()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("sale");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_new_satish();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allNewAdsSaleList($limit, $sayfada);
        
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

    public function new_kiraye_ayliq()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("monthly_rent");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_new_kiraye_ayliq();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allNewAdsRentMonthlyList($limit, $sayfada);
        
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

    public function new_kiraye_gunluk()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("daily_rent");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_new_kiraye_gunluk();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allNewAdsRentDailyList($limit, $sayfada);
        
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

    // BUTUN YENI ELANLAR END

    public function yeni_tikili()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("new_building");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_yeni_tikili();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allYeniTikiliPagination($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/yeni_tikili', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function kohne_tikili()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("old_building");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_kohne_tikili();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allKohneTikiliPagination($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/kohne_tikili', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function heyet_evi_bag()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("garden_house");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_heyet_evi();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allHeyetEviPagination($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/heyet_evi', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function villa()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("villa");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_villa();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allVillaPagination($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/villa', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function office()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("office");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_ofis();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allOfisPagination($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/ofis', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function torpaq()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("torpaq");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_torpaq();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allTorpaqPagination($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/torpaq', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function obyekt()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("obyekt");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_obyekt();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allObyektPagination($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/obyekt', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function qaraj()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("qaraj");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_qaraj();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allQarajPagination($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/qaraj', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }


    // SALE

    public function yeni_tikili_sale()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("new_building");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_yeni_tikili_sale();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allYeniTikiliPaginationSale($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/yeni_tikili_sale', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function kohne_tikili_sale()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("old_building");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_kohne_tikili_sale();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allKohneTikiliPaginationSale($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/kohne_tikili_sale', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function heyet_evi_bag_sale()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("garden_house");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_heyet_evi_sale();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allHeyetEviPaginationSale($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/heyet_evi_bag_satis', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function villa_sale()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("villa");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_villa_sale();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allVillaPaginationSale($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/villa_satis', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function office_sale()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("office");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_ofis_sale();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allOfisPaginationSale($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/ofis_satis', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function torpaq_sale()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("torpaq");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_torpaq_sale();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allTorpaqPaginationSale($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/torpaq_satis', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function obyekt_sale()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("obyekt");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_obyekt_sale();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allObyektPaginationSale($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/obyekt_satis', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function qaraj_sale()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("qaraj");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_qaraj_sale();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allqarajPaginationSale($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/qaraj_satis', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    // SALE END

    // RENT

    public function yeni_tikili_rent()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("new_building");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_yeni_tikili_rent();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allYeniTikiliPaginationRent($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/yeni_tikili_rent', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function kohne_tikili_rent()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("old_building");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_kohne_tikili_rent();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allKohneTikiliPaginationRent($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/kohne_tikili_rent', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function heyet_evi_bag_rent()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("garden_house");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_heyet_evi_rent();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allHeyetEviPaginationRent($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/heyet_evi_bag_rent', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function villa_rent()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("villa");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_villa_rent();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allVillaPaginationRent($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/villa_rent', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function office_rent()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("office");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_ofis_rent();

        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;
        
        $this->data['new_ads_list']     = $this->home_model->allOfisPaginationRent($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/ofis_rent', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function torpaq_rent()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("torpaq");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_torpaq_rent();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allTorpaqPaginationRent($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/torpaq_rent', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function obyekt_rent()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("obyekt");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_obyekt_rent();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allObyektPaginationRent($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/obyekt_rent', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function qaraj_rent()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("qaraj");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_qaraj_rent();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allqarajPaginationRent($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/qaraj_rent', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    // RENT END


     // RENT DAILY

    public function yeni_tikili_rent_daily()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("new_building");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_yeni_tikili_rent_daily();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allYeniTikiliPaginationRentDaily($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/yeni_tikili_rent_daily', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function kohne_tikili_rent_daily()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("old_building");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_kohne_tikili_rent_daily();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allKohneTikiliPaginationRentDaily($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/kohne_tikili_rent_daily', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function heyet_evi_bag_rent_daily()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("garden_house");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_heyet_evi_rent_daily();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allHeyetEviPaginationRentDaily($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/heyet_evi_bag_rent_daily', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function villa_rent_daily()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("villa");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_villa_rent_daily();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allVillaPaginationRentDaily($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/villa_rent_daily', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function office_rent_daily()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("office");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_ofis_rent_daily();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allOfisPaginationRentDaily($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/ofis_rent_daily', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function torpaq_rent_daily()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("torpaq");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_torpaq_rent_daily();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allTorpaqPaginationRentDaily($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/torpaq_rent_daily', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function obyekt_rent_daily()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("obyekt");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_obyekt_rent_daily();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allObyektPaginationRentDaily($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/obyekt_rent_daily', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function qaraj_rent_daily()
    {
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['title']            = '- '.translate("qaraj");

        $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

        $sayfada                        = $ads_config['category_ads_limit']; 
        $toplam_icerik                  = $this->home_model->get_count_qaraj_rent_daily();
        $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
        $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        
        if($this->data['sayfa'] < 1)
        { 
            $sayfa = 1;
        }
        
        if($this->data['sayfa'] > $this->data['toplam_sayfa'])
        {
             $this->data['sayfa'] = $this->data['toplam_sayfa'];
        }

        $limit = ($this->data['sayfa']!=0) ? ($this->data['sayfa'] - 1) * $sayfada : 0;

        $this->data['new_ads_list']     = $this->home_model->allqarajPaginationRentDaily($limit, $sayfada);
        
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('ads/qaraj_rent_daily', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    // RENT DAILY END

    // public function satish()
    // {
    //     $this->data['cities']           = $this->home_model->allCities();
    //     $this->data['regions']          = $this->home_model->allRegions();
    //     $this->data['metros']           = $this->home_model->allMetros();
    //     $this->data['estate_types']     = $this->home_model->estateTypes();
    //     $this->data['ads_type']         = $this->home_model->adsType();
    //     $this->data['district']         = $this->home_model->allDistricts();
    //     $this->data['targets']          = $this->home_model->allTargets();
    //     $this->data['new_ads_list']     = $this->home_model->allNewAdsSaleList();
    //     array_unshift($this->data['metros'],"");
    //     unset($this->data['metros'][0]);
    //     array_unshift($this->data['district'],"");
    //     unset($this->data['district'][0]);
    //     array_unshift($this->data['regions'],"");
    //     unset($this->data['regions'][0]);
    //     array_unshift($this->data['cities'],"");
    //     unset($this->data['cities'][0]);

    //     $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
    //     $this->data['main_contents']    = $this->load->view('ads/satish', $this->data, true);
    //     $this->load->view('home/layout/index', $this->data);
    // }

    // public function kiraye()
    // {
    //     $this->data['cities']           = $this->home_model->allCities();
    //     $this->data['regions']          = $this->home_model->allRegions();
    //     $this->data['metros']           = $this->home_model->allMetros();
    //     $this->data['estate_types']     = $this->home_model->estateTypes();
    //     $this->data['ads_type']         = $this->home_model->adsType();
    //     $this->data['district']         = $this->home_model->allDistricts();
    //     $this->data['targets']          = $this->home_model->allTargets();
    //     $this->data['new_ads_list']     = $this->home_model->allNewAdsRentList();

    //     array_unshift($this->data['metros'],"");
    //     unset($this->data['metros'][0]);
    //     array_unshift($this->data['district'],"");
    //     unset($this->data['district'][0]);
    //     array_unshift($this->data['regions'],"");
    //     unset($this->data['regions'][0]);
    //     array_unshift($this->data['cities'],"");
    //     unset($this->data['cities'][0]);
    //     $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
    //     $this->data['main_contents']    = $this->load->view('ads/kiraye', $this->data, true);
    //     $this->load->view('home/layout/index', $this->data);
    // }


    

   



    

}
