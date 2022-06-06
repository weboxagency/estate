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

class Home extends Frontend_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helpers('custom_fields');
        $this->load->model('email_model');
        $this->load->model('user_model','um');
        $this->load->model('testimonial_model');
        $this->load->model('gallery_model');
        $this->load->library('mailer');
    }

    public function index()
    {
        $this->home();
    }

    public function home()
    {
        if (is_user_loggedin()) 
        {
            $this->data['user_info']        = $this->um->getUserInfo(logged_user_id());
        }
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
        $this->data['new_ads_list']     = $this->home_model->allNewAdsList();
        // dd($this->data['new_ads_list']);
        // dd($this->data['new_ads_list']);
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
   
        $this->data['targets']          = $this->home_model->allTargets();
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('home/index', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    

    public function wishlist()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }
        else
        {
            $data      = ["wish_sess" => unique_token()];
            $sess      = ($this->session->has_userdata('wish_sess')) ? $this->session->userdata('wish_sess') : $this->session->set_userdata($data);
            $id        = $this->input->post('id');
            $sess_id   = $this->session->userdata('wish_sess');
               
            $count     = $this->home_model->getWishCount($id, $sess_id);

            if ($count==0) 
            {
                $insertData = array(
                    'session_id' => $sess_id,
                    'data_id'    => $id
                );

                $this->db->insert('wishlists', $insertData);
                $data = [
                    "announcement" => $this->input->post('id'),
                    "favorites"    => 1,
                    "result"       => 1,
                    "status"       => "success",
                    "validations"  => []
                ];
                echo  json_encode($data);
            }
            else
            {
                $this->db->where('session_id', $sess_id);
                $this->db->where('data_id', $id);
                $this->db->delete('wishlists');
                $data = [
                    "announcement" => $this->input->post('id'),
                    "favorites"    => 0,
                    "result"       => 0,
                    "status"       => "success",
                    "validations"  => []
                ];
                 echo  json_encode($data);
            }
        }
    }

    public function detail($url_slug='')
    {
        if (empty($url_slug)) 
        {
            redirect(base_url(), 'refresh');
        }
        else
        {
            $check_url = $this->home_model->checkUrlSlug($url_slug);
            if ((int)$check_url === 1) 
            {
                $this->data['cities']           = $this->home_model->allCities();
                $this->data['regions']          = $this->home_model->allRegions();
                $this->data['metros']           = $this->home_model->allMetros();
                $this->data['estate_types']     = $this->home_model->estateTypes();
                $this->data['ads_type']         = $this->home_model->adsType();
                $this->data['district']         = $this->home_model->allDistricts();
                $this->data['ads_detail']       = $this->home_model->getAdsDetail($url_slug);
                // dd($this->data['ads_detail']);
                array_unshift($this->data['metros'],"");
                unset($this->data['metros'][0]);
                array_unshift($this->data['district'],"");
                unset($this->data['district'][0]);
                array_unshift($this->data['regions'],"");
                unset($this->data['regions'][0]);
                array_unshift($this->data['cities'],"");
                unset($this->data['cities'][0]);
                $this->data['page_data'] = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
                $this->data['main_contents'] = $this->load->view('home/detail', $this->data, true);
                $this->load->view('home/layout/index', $this->data);
            }
            else
            {
                redirect('404_override');
            }
        }
    }

    public function signin()
    {
       $res['status'] = 'error';
       $res['message'] = 'salam';
       echo json_encode($res);
    }

    public function sitemap()
    {
        $this->data['cities']       = $this->home_model->allCities();
        $this->data['regions']      = $this->home_model->allRegions();
        $this->data['metros']       = $this->home_model->allMetros();
        $this->data['ads_type']     = $this->home_model->adsType();
        $this->data['district']     = $this->home_model->allDistricts();
        $this->data['targets']      = $this->home_model->allTargets();

        $this->data['page_data'] = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents'] = $this->load->view('home/sitemap', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function user_agreement()
    {

        $this->data['page_data'] = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents'] = $this->load->view('home/user_agreement', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }
  

    public function set_language($action = '')
    {
        $this->session->set_userdata('set_lang', $action);
        if (!empty($_SERVER['HTTP_REFERER'])) {
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            redirect(base_url(), 'refresh');
        } 
    }

    public function page($url = '')
    {
        $this->db->select('front_cms_menu.title as menu_title,front_cms_menu.alias,front_cms_pages.*');
        $this->db->from('front_cms_menu');
        $this->db->join('front_cms_pages', 'front_cms_pages.menu_id = front_cms_menu.id', 'inner');
        $this->db->where('front_cms_menu.alias', $url);
        $this->db->where('front_cms_menu.publish', 1);
        $getData = $this->db->get()->row_array();
        if (empty($getData)) {
            redirect('404_override');
        }
        $this->data['page_data'] = $getData;
        $this->data['active_menu'] = 'page';
        $this->data['main_contents'] = $this->load->view('home/page', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    

}
