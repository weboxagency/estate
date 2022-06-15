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

    public function search()
    {

        if (isset($_GET['number']) AND (!empty($_GET['number']))) 
        {
            $sql = "SELECT * FROM ads_all WHERE ads_number = " . $_GET['number'] . "";
            $ads = $this->home_model->searchAdsNumber($sql);
            if ($ads) 
            {
            redirect(base_url().'elan/'.$ads['url_slug'], 'refresh');
                // dd($ads);
            }
        }
        else
        {
            $sql = "SELECT * FROM ads_all WHERE status=2";
            if (isset($_GET['city']) AND (!empty($_GET['city']))) 
            {
                $sql .= " AND city_id IN (" . $_GET['city'] . ")"; 
            }
            if (isset($_GET['region']) AND (!empty($_GET['region']))) 
            {
                $sql .= " OR region_id IN (" . $_GET['region'] . ")";
            }
            if (isset($_GET['district']) AND (!empty($_GET['district'])))
            {
                $sql .= " OR district_id IN (" . $_GET['district'] . ")";
            }
            if (isset($_GET['metro']) AND (!empty($_GET['metro']))) 
            {
                $sql .= " AND metro_id IN (" . $_GET['metro'] . ")";
            }
            // if ($_GET['placemark']) 
            // {
            //     $sql .= " AND metro_id IN (" . $_GET['placemark'] . ")";
            // }

            if (isset($_GET['type']) AND (!empty($_GET['type']))) 
            {
                $sql .= " AND announcement_type IN (" . $_GET['type'] . ")";
            }
            if (isset($_GET['deed']) AND $_GET['deed']=="on") 
            {
                $sql .= " AND deed = 1";
            }
            if (isset($_GET['mortgage']) AND $_GET['mortgage']=="on") 
            {
                $sql .= " AND mortgage = 1";
            }
            if (isset($_GET['room']) AND (!empty($_GET['room']))) 
            {
                $in_room = '';
                foreach($_GET['room'] as $key => $r)
                {
                    $in_room .= $key . ','; 
                }
                $in_room = substr($in_room,0 ,-1);
                $sql .= " AND room IN (" . $in_room . ")";
            }
            if (isset($_GET['property_type']) AND (!empty($_GET['property_type']))) 
            {
                $in_property = '';
                foreach($_GET['property_type'] as $key => $r)
                {
                    $in_property .= $key . ','; 
                }
                $in_property = substr($in_property,0 ,-1);
                $sql .= " AND property_type IN (" . $in_property . ")";
            }
            if (isset($_GET['repair']) AND (!empty($_GET['repair']))) 
            {
                $in_repair = '';
                foreach($_GET['repair'] as $key => $r)
                {
                    $in_repair .= $key . ','; 
                }
                $in_repair = substr($in_repair,0 ,-1);
                $sql .= " AND repair IN (" . $in_repair . ")";
            }

            // PRİCE
            if(isset($_GET['price_min']))
            {
                if (!empty($_GET['price_min'])) 
                {
                    $price_min = str_replace(',', '', $_GET['price_min']);
                }
                else
                {
                    $price_min = 0;
                }
            }
            if(isset($_GET['price_max']))
            {
                if (!empty($_GET['price_max'])) 
                {
                    $price_max = str_replace(',', '', $_GET['price_max']);
                }
                else
                {
                    $price_max = 100000000;
                }
            }

            $sql .= " AND price BETWEEN ".$price_min." AND ".$price_max." "; 

            // AREA
            if(!empty($_GET['area_min']) OR !empty($_GET['area_max']))
            {
                if(isset($_GET['area_min']))
                {
                    if (!empty($_GET['area_min'])) 
                    {
                        $area_min = str_replace(',', '', $_GET['area_min']);
                    }
                    else
                    {
                        $area_min = 0;
                    }
                }
                if(isset($_GET['area_max']))
                {
                    if (!empty($_GET['area_max'])) 
                    {
                        $area_max = str_replace(',', '', $_GET['area_max']);
                    }
                    else
                    {
                        $area_max = 100000;
                    }
                }
                $sql .= " AND area BETWEEN ".$area_min." AND ".$area_max." "; 
            }

            // FLOOR
            if (!empty($_GET['floor_min']) OR !empty($_GET['floor_max']))
            {
                if(isset($_GET['floor_min']))
                {
                    if (!empty($_GET['floor_min'])) 
                    {
                        $floor_min = str_replace(',', '', $_GET['floor_min']);
                    }
                    else
                    {
                        $floor_min = 1;
                    }
                }
                if(isset($_GET['floor_max']))
                {
                    if (!empty($_GET['floor_max'])) 
                    {
                        $floor_max = str_replace(',', '', $_GET['floor_max']);
                    }
                    else
                    {
                        $floor_max = 100;
                    }
                }
                $sql .= " AND floor BETWEEN ".$floor_min." AND ".$floor_max." "; 
            }
            $this->data['new_ads_list']     = $this->home_model->searchAdsList($sql);
        }

        
        $this->data['cities']           = $this->home_model->allCities();
        $this->data['regions']          = $this->home_model->allRegions();
        $this->data['metros']           = $this->home_model->allMetros();
        $this->data['estate_types']     = $this->home_model->estateTypes();
        $this->data['ads_type']         = $this->home_model->adsType();
        $this->data['district']         = $this->home_model->allDistricts();
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
        $this->data['main_contents']    = $this->load->view('home/search', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function home()
    {
        if (is_user_loggedin()) 
        {
            $this->data['user_info']        = $this->um->getUserInfo(logged_user_id());
        }
        $this->data['cities']            = $this->home_model->allCities();
        $this->data['regions']           = $this->home_model->allRegions();
        $this->data['metros']            = $this->home_model->allMetros();
        $this->data['estate_types']      = $this->home_model->estateTypes();
        $this->data['ads_type']          = $this->home_model->adsType();
        $this->data['district']          = $this->home_model->allDistricts();
        $this->data['new_ads_list']      = $this->home_model->allNewAdsList();
        $this->data['all_yeni_tikili']   = $this->home_model->allYeniTikili();
        $this->data['all_kohne_tikili']  = $this->home_model->allKohneTikili();
        $this->data['all_heyet_evi']     = $this->home_model->allHeyetEvi();
        $this->data['all_villa']         = $this->home_model->allVilla();
       
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

    public function secilmisler()
    {
        $data      = ["wish_sess" => unique_token()];
        $sess      = ($this->session->has_userdata('wish_sess')) ? $this->session->userdata('wish_sess') : $this->session->set_userdata($data);
        $sess_id   = $this->session->userdata('wish_sess');
           
        $list      = $this->home_model->getWishlist($sess_id);

        
        // dd($list);
        $this->data['cities']            = $this->home_model->allCities();
        $this->data['regions']           = $this->home_model->allRegions();
        $this->data['metros']            = $this->home_model->allMetros();
        $this->data['estate_types']      = $this->home_model->estateTypes();
        $this->data['ads_type']          = $this->home_model->adsType();
        $this->data['district']          = $this->home_model->allDistricts();
        array_unshift($this->data['metros'],"");
        unset($this->data['metros'][0]);
        array_unshift($this->data['district'],"");
        unset($this->data['district'][0]);
        array_unshift($this->data['regions'],"");
        unset($this->data['regions'][0]);
        array_unshift($this->data['cities'],"");
        unset($this->data['cities'][0]);
        $this->data['page_data'] = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents'] = $this->load->view('home/secilmisler', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function sikayet()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }
        else
        {
            $data['id']             = $this->input->post('id');
            $data['category']       = $this->input->post('category');
            $data['extra_info']     = $this->input->post('extra_info');               

            $this->form_validation->set_rules('id', translate('id'), 'trim|required|xss_clean');
            $this->form_validation->set_rules('category', translate('category'), 'trim|required|xss_clean');
            $this->form_validation->set_rules('extra_info', translate('extra_info'), 'trim|required|xss_clean');

            if ($this->form_validation->run() === TRUE) 
            {
                $insertData = array(
                    'ads_id'            => $data['id'],
                    'complain_category' => $data['category'],
                    'extra_info'        => $data['extra_info'],
                    'ip'                => getIP(),
                    'soft'              => json_encode(getBrowser())
                );
                
                $this->db->insert('ads_complain', $insertData);

                $response = [
                    "status"        => "success",
                    "validations"   => [],
                    "message"       => ""
                ];
                echo json_encode($response);
                exit();
                
            }
            else
            {
                $output = array();
                foreach ($_POST as $key => $value)
                {
                    $text   =   str_ireplace('<p>','',form_error($key));
                    $text   =   str_ireplace('</p>','',$text); 
                    if ($key!='_token' AND !empty($text)) 
                    {
                         $output[$key] = [$text];
                    }
                }

                $response = [
                            "status"        => "success",
                            "message"       => "",
                            "validations"   => $output
                        ];
                echo json_encode($response);
                die();
            }
        }
    }

    public function detail($url_slug='')
    {
        if (empty($url_slug)) 
        {
            redirect('404_override');
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
                $property_type                  = $this->data['ads_detail']['property_type'];
                $ads_number                     = $this->data['ads_detail']['ads_number'];
                
                $ads_config                     = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();

                $sayfada                        = $ads_config['detail_ads_limit']; 
                $toplam_icerik                  = $this->home_model->get_count_detail_benzer($property_type, $ads_number);
                $this->data['toplam_sayfa']     = ceil($toplam_icerik / $sayfada);
                $this->data['sayfa']            = isset($_GET['page']) ? (int) $_GET['page'] : 1;
                $this->data['url']              = base_url().'elan/'.$this->data['ads_detail']['url_slug'];
                if($this->data['sayfa'] < 1)
                { 
                    $sayfa = 1;
                }
                
                if($this->data['sayfa'] > $this->data['toplam_sayfa'])
                {
                     $this->data['sayfa'] = $this->data['toplam_sayfa'];
                }

                $limit = abs(($this->data['sayfa'] - 1) * $sayfada);

                $this->data['benzer_elanlar']   = $this->home_model->benzerElanlarPagination($limit, $sayfada, $property_type,$ads_number);
                // $this->data['benzer_elanlar']   = $this->home_model->benzerElanlar($property_type,$ads_number);
                // dd($this->data['benzer_elanlar']);
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
