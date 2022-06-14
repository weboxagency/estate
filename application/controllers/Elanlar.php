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

        $limit = ($this->data['sayfa'] - 1) * $sayfada;
        
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
        $this->data['new_ads_list']     = $this->home_model->allNewAdsRentMonthlyList();
        
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
        $this->data['new_ads_list']     = $this->home_model->allNewAdsRentDailyList();
        
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
        $this->data['new_ads_list']     = $this->home_model->allYeniTikili();
        
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
