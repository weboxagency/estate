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

class Add_listing extends Frontend_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helpers('custom_fields');
        $this->load->model('email_model');
        $this->load->model('testimonial_model');
        $this->load->model('gallery_model');
        $this->load->model('ads_model');
        $this->load->library('mailer');
        $this->uploadPath = 'uploads/photos/'; 
    }

    public function index()
    {
        $this->data['cities']       = $this->home_model->allCities();
        $this->data['regions']      = $this->home_model->allRegions();
        $this->data['district']     = $this->home_model->allDistricts();
        $this->data['metros']       = $this->home_model->allMetros();
        $this->data['targets']      = $this->home_model->allTargets();
        $this->data['ads_type']     = $this->home_model->adsType();
        $this->data['ads_rules']    = $this->home_model->adsRules();
        
        $this->data['page_data'] = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents'] = $this->load->view('home/add_listing', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function check_info()
    {
        $last_ads_id                = $this->ads_model->lastAdsId();
        $owner                      = $this->input->post('announcement_owner',TRUE);
        $user_type                  = $this->input->post('user_type',TRUE);
        $mobile                     = $this->input->post('mobile',TRUE);
        $whatsapp                   = $this->input->post('whatsapp',TRUE);
        $email                      = $this->input->post('email',TRUE);
        $check                      = $this->input->post('check',TRUE);
        $announcement_type          = $this->input->post('announcement_type',TRUE);
        $land_area                  = $this->input->post('land_area',TRUE);
        $metro                      = $this->input->post('metro',TRUE);
        $city                       = $this->input->post('city',TRUE);
        $property_type              = $this->input->post('property_type',TRUE);
        $deed                       = $this->input->post('deed',TRUE);
        $room                       = $this->input->post('room',TRUE);
        $floor                      = $this->input->post('floor',TRUE);
        $max_floor                  = $this->input->post('max_floor',TRUE);
        $price                      = $this->input->post('price',TRUE);
        $area                       = $this->input->post('area',TRUE);
        $repair                     = $this->input->post('repair',TRUE);
        $city                       = $this->input->post('city',TRUE);
        $region                     = $this->input->post('region',TRUE);
        $district                   = $this->input->post('district',TRUE);
        $repair                     = $this->input->post('repair',TRUE);
        $address                    = $this->input->post('address',TRUE);
        $latitude                   = $this->input->post('latitude',TRUE);
        $longitude                  = $this->input->post('longitude',TRUE);
        $property_description       = $this->input->post('property_description',TRUE);

        $all_cities           = $this->home_model->allCities();
        $all_regions          = $this->home_model->allRegions();
        $all_metros           = $this->home_model->allMetros();
        $all_estate_types     = $this->home_model->estateTypes();
        $all_ads_type         = $this->home_model->adsType();
        $all_district         = $this->home_model->allDistricts();
        array_unshift($all_metros,"");
        unset($all_metros[0]);
        array_unshift($all_district,"");
        unset($all_district[0]);
        array_unshift($all_regions,"");
        unset($all_regions[0]);
        array_unshift($all_cities,"");
        unset($all_cities[0]);
        array_unshift($all_estate_types,"");
        unset($all_estate_types[0]);
        // dd($all_estate_types);

        if ($check == 1) 
        {        
        $this->form_validation->set_rules('announcement_owner', translate('announcement_owner'), 'trim|required|min_length[3]|xss_clean', 
                    [
                        "required"      => ucfirst(translate("the_announcement_owner_field_is_required")),
                        "min_length"    => ucfirst(translate("the_name_must_consist_of_at_least_3_letters")),
                    ]
                );
        $this->form_validation->set_rules('user_type', translate('user_type'), 'trim|required|xss_clean');
        $this->form_validation->set_rules('mobile', translate('mobile'), 'trim|required|min_length[9]|max_length[9]|xss_clean', 
                    [
                        "required"      => ucfirst(translate("the_mobile_number_field_is_required")),
                        "max_length"    => ucfirst(translate("the_mobile_number_is_not_valid")),
                        "min_length"    => ucfirst(translate("the_mobile_number_is_not_valid"))
                    ]
                );
        // $this->form_validation->set_rules('whatsapp', translate('whatsapp'), 'trim');
        $this->form_validation->set_rules('email', translate('email'), 'trim|required|valid_email|xss_clean', 
                    [
                        "required"      => ucfirst(translate("the_email_field_is_required")),
                        "valid_email"   => ucfirst(translate("the_email_address_is_not_valid"))
                    ]
                );

        
        $adsCount   = $this->home_model->getAdsCountForPhoneNumber($mobile);
        $provider   = ["99","55","70","77","50","51","10"];

        if ($this->form_validation->run() === TRUE) 
        {
            if ($adsCount>=2) 
            {
                $response = [
                        "status"        => "success",
                        "message"       => "",
                        "validations"   => ["id" => ["Siz artıq ay ərzində 2 pulsuz elan yerləşdirmisiniz"]]
                    ];
                echo json_encode($response);
                die();
            }
            elseif (!in_array($mobile[0].''.$mobile[1], $provider)) 
            {
                $response = [
                        "status"        => "success",
                        "message"       => "",
                        "validations"   => ["mobile" => ["Telefon nömrəsi doğru deyil"]]
                    ];
                echo json_encode($response);
                die();
            }
            elseif ($mobile[2] < 2) 
            {
                $response = [
                        "status"        => "success",
                        "message"       => "",
                        "validations"   => ["mobile" => ["Telefon nömrəsi doğru deyil"]]
                    ];
                echo json_encode($response);
                die();
            }
            else
            {
                $response = [
                    "status"        => "success",
                    "validations"   => [],
                    "message"       => ""
                ];
                echo json_encode($response);
                exit();
            }
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
        else
        {

            $this->form_validation->set_rules('announcement_type', translate('announcement_type'), 'trim|required|xss_clean', 
                    [
                        "required"      => ucfirst(translate("the_announcement_type_field_is_required"))                        
                    ]
                );
            $this->form_validation->set_rules('property_type', translate('property_type'), 'trim|required|xss_clean', 
                    [
                        "required"      => ucfirst(translate("the_property_type_field_is_required"))                        
                    ]
                );
            $this->form_validation->set_rules('deed', translate('deed'), 'trim|required|xss_clean', 
                    [
                        "required"      => ucfirst(translate("the_deed_field_is_required"))                        
                    ]
                );
            $this->form_validation->set_rules('room', translate('room'), 'trim|required|xss_clean', 
                    [
                        "required"      => ucfirst(translate("the_room_field_is_required"))                        
                    ]
                );
            $this->form_validation->set_rules('floor', translate('floor'), 'trim|required|xss_clean', 
                    [
                        "required"      => ucfirst(translate("the_floor_field_is_required"))                        
                    ]
                );
            $this->form_validation->set_rules('max_floor', translate('max_floor'), 'trim|required|xss_clean', 
                    [
                        "required"      => ucfirst(translate("the_max_floor_field_is_required"))                        
                    ]
                );
            $this->form_validation->set_rules('price', translate('price'), 'trim|required|xss_clean', 
                    [
                        "required"      => ucfirst(translate("the_price_field_is_required"))                        
                    ]
                );
            $this->form_validation->set_rules('area', translate('area'), 'trim|required|xss_clean', 
                    [
                        "required"      => ucfirst(translate("the_area_field_is_required"))                        
                    ]
                );
            if (((int)$_POST["property_type"] === 3) OR ((int)$_POST["property_type"] === 5)) 
            {
            $this->form_validation->set_rules('land_area', translate('land_area'), 'trim|required|xss_clean', 
                    [
                        "required"      => ucfirst(translate("the_land_area_field_is_required"))                        
                    ]
                );
            }
            $this->form_validation->set_rules('repair', translate('repair'), 'trim|required|xss_clean', 
                    [
                        "required"      => ucfirst(translate("the_repair_field_is_required"))                        
                    ]
                );
           
            $this->form_validation->set_rules('city', translate('city'), 'trim|required|xss_clean', 
                    [
                        "required"      => ucfirst(translate("the_city_field_is_required"))                        
                    ]
                );
            if ((int)$city === 1) 
            {
            $this->form_validation->set_rules('region', translate('region'), 'trim|required|xss_clean', 
                    [
                        "required"      => ucfirst(translate("the_region_field_is_required"))                        
                    ]
                );
             $this->form_validation->set_rules('district', translate('district'), 'trim|required|xss_clean', 
                    [
                        "required"      => ucfirst(translate("the_district_field_is_required"))                        
                    ]
                );
            }
            $this->form_validation->set_rules('repair', translate('repair'), 'trim|required|xss_clean', 
                    [
                        "required"      => ucfirst(translate("the_repair_field_is_required"))                        
                    ]
                );
            
            
            $this->form_validation->set_rules('address', translate('address'), 'trim|required|xss_clean', 
                    [
                        "required"      => ucfirst(translate("the_address_field_is_required"))                        
                    ]
                );
            $this->form_validation->set_rules('latitude', translate('latitude'), 'trim|required|xss_clean', 
                    [
                        "required"      => ucfirst(translate("the_latitude_field_is_required"))                        
                    ]
                );
            $this->form_validation->set_rules('longitude', translate('longitude'), 'trim|required|xss_clean', 
                    [
                        "required"      => ucfirst(translate("the_longitude_field_is_required"))                        
                    ]
                );
            $this->form_validation->set_rules('property_description', translate('property_description'), 'trim|required|xss_clean', 
                    [
                        "required"      => ucfirst(translate("the_property_description_field_is_required"))                        
                    ]
                );
            
           
            if ($this->form_validation->run() === TRUE) 
            {
                // ALL IS OK AND SAVE ADS
                $photo = array(); 
                foreach ($_POST['images'] as  $value) 
                {
                    $photo[] = $value; 
                } 
                $image_array = implode(", ", $photo);
                if ($announcement_type==1) 
                {
                    $pr = "Satılır";
                }
                elseif($announcement_type==2)
                {
                    $pr = "Kiraye aylıq";
                }
                else
                {
                    $pr = "Kiraye günlük";
                }
                if ($property_type==6) 
                {
                   $an_headline = $land_area;
                } 
                elseif ($property_type==10) 
                {
                   $an_headline = $area.' m²';
                }
                else 
                {
                   $an_headline = $room.' otaqlı - '. $area.' m²';
                }

                if ($metro!=0) 
                {
                  $loca = $all_metros[$metro]['metro_name'].' m.';
                } 
                elseif ($district!=0) 
                {
                  $loca = $all_district[$district]['district_name'].' q.';
                }
                elseif ($region!=0)
                {
                  $loca = $all_regions[$region]['region_name'].' r.';
                }
                else
                {
                  $loca = $all_cities[$city]['city_name'];
                }

                $emlak_novu = $all_estate_types[$property_type]['estate_type_name'];
               
                $title      = strip_tags($pr.','.$emlak_novu.','.$an_headline.','.$loca.'-'.time());
                $titleURL   = strtolower(url_title($title));
              
                
                $requesData = [
                    "ads_pin_kod"               => rand(10000,99999),
                    "ads_title"                 => $title,
                    "url_slug"                  => seo_link($titleURL),
                    "ads_number"                => $last_ads_id+10,
                    "announcement_type"         => (isset($announcement_type)) ? $announcement_type : '',   
                    "connection_type"           => (isset($connection_type)) ? $connection_type : '',
                    "property_type"             => (isset($property_type)) ? $property_type : '',  
                    "price"                     => (isset($price)) ? $price : '',  
                    "average_price"             => (isset($average_price)) ? $average_price : '',  
                    "room"                      => (isset($room)) ? $room : '',   
                    "area"                      => (isset($area)) ? $area : '',   
                    "land_area"                 => (isset($land_area)) ? $land_area : '',  
                    "floor"                     => (isset($floor)) ? $floor : '',  
                    "max_floor"                 => (isset($max_floor)) ? $max_floor : '',  
                    "repair"                    => (isset($repair)) ? $repair : '', 
                    "deed"                      => (isset($deed)) ? $deed : '',   
                    "mortgage"                  => (isset($mortgage)) ? $mortgage : '',   
                    "user_type"                 => (isset($user_type)) ? $user_type : '',  
                    "name"                      => (isset($owner)) ? $owner : '',   
                    "email"                     => (isset($email)) ? $email : '',  
                    "mobile"                    => (isset($mobile)) ? $mobile : '', 
                    "has_whatsapp"              => (isset($whatsapp)) ? $whatsapp : '',   
                    "city_id"                   => (isset($city)) ? $city : '',
                    "region_id"                 => (isset($region)) ? $region : '',  
                    "district_id"               => (isset($district)) ? $district : '',
                    "metro_id"                  => (isset($metro)) ? $metro : '',  
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
                    "photos"                    => $image_array, 
                    "created_at"                => date("Y-m-d H:i:s"), 
                    "updated_at"                => '', 
                    "deleted_at"                => '', 
                    "approved_at"               => '',
                    "simple_ads_end_date"       => ''
                ];

                $this->db->insert('ads_all', $requesData);
                $ads_last_id = $this->db->insert_id();
                $response = [
                            "status"        => "success",
                            "message"       => "Elan nömrəniz: ".$requesData['ads_number']."",
                            "validations"   => []   
                        ];
                    echo json_encode($response);
                    die();
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
                if (!isset($_POST['images']) OR (count($_POST['images']) < 4)) 
                {
                    $output["images"] = ["Şəkillər üçün minimal say 4 olmalıdır"];
                }
                if ((int)$_POST["announcement_type"] === 0) 
                {
                    $output["announcement_type"] = ["the_announcement_type_field_is_required"];
                }
                if ((int)$_POST["property_type"] === 0) 
                {
                    $output["property_type"] = ["the_property_type_field_is_required"];
                }
                if ((int)$_POST["city"] === 0) 
                {
                    $output["city"] = ["the_city_field_is_required"];
                }
                if ((int)$_POST["city"] === 1) 
                {
                    $output["metro"] = ["the_metro_field_is_required"];
                }
                if (((int)$_POST["property_type"] === 3) OR ((int)$_POST["property_type"] === 5)) 
                {
                    $output["land_area"] = ["the_land_area_field_is_required"];
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


    public function upload()
    {
        $thumb_msg = $status = $status_msg = $thumbnail = $org_image_size = $thumb_image_size = ''; 
        $data = array(); 
 
        // If the file upload form submitted 
      
        if(!empty($_FILES['path']['name'])){ 
                // File upload config 
                $config['upload_path']   = $this->uploadPath; 
                $config['allowed_types'] = 'jpg|jpeg|png'; 
                $config['max_size']      = '6144';
                $config['remove_spaces'] = TRUE;        
                $config['encrypt_name']  = TRUE;
                // Load and initialize upload library 
                $this->load->library('upload', $config); 
                $this->upload->initialize($config);
                // Upload file to server 

                if($this->upload->do_upload('path')){ 
                    $uploadData     = $this->upload->data(); 
                    $uploadedImage  = $uploadData['file_name']; 
                    $org_image_size = $uploadData['image_width'].'x'.$uploadData['image_height']; 
                     
                    $source_path  = $this->uploadPath.$uploadedImage; 
                    $thumb_path   = $this->uploadPath.'thumb/'; 
                    $thumb_width  = 280; 
                    $thumb_height = 175; 
                     
                    // Image resize config 
                    $config['image_library']    = 'gd2'; 
                    $config['source_image']     = $source_path; 
                    $config['new_image']        = $thumb_path; 
                    $config['maintain_ratio']   = FALSE; 
                    $config['width']            = $thumb_width; 
                    $config['height']           = $thumb_height; 
                     
                    // Load and initialize image_lib library 
                    $this->load->library('image_lib', $config); 
                     
                    // Resize image and create thumbnail 
                    if($this->image_lib->resize())
                    { 
                        $thumbnail = $thumb_path.$uploadedImage; 
                        $thumb_image_size = $thumb_width.'x'.$thumb_height; 
                        $thumb_msg = '<br/>Thumbnail created!'; 
                    }
                    else
                    { 
                        $thumb_msg = '<br/>'.$this->image_lib->display_errors(); 
                    } 
                     
                    $status = 'success'; 
                    $status_msg = 'Image has been uploaded successfully.'.$thumb_msg; 
                }else{ 
                    $status = 'error'; 
                    $status_msg = 'The image upload has failed!<br/>'.$this->upload->display_errors('',''); 
                } 
            }else{ 
                $status = 'error'; 
                $status_msg = 'Please select a image file to upload.';  
            } 

            $data['status']             = $status; 
            $data['status_msg']         = $status_msg; 
            $data['thumbnail']          = base_url().$thumbnail; 
            $data['source_path']        = base_url().$source_path; 
            $data['org_image_size']     = $org_image_size; 
            $data['thumb_image_size']   = $thumb_image_size;

            $insertData = [
                "avatar"    => $data['thumbnail'],
                "path"      => $data['source_path']                
            ];
            $this->db->insert('thumb_image', $insertData);
            $insert_id = $this->db->insert_id();
            $output = [];
            $response = [
                "status"        => "success",
                "photo"         => [
                    "avatar" => $data['thumbnail'],
                    "id"     => $insert_id, 
                    "path"   => $data['source_path']
                ],
                "validations"   => $output
            ];
            echo json_encode($response);
            die();   
    }

    public function home()
    {
        $this->data['cities']       = $this->home_model->allCities();
        $this->data['regions']      = $this->home_model->allRegions();
        $this->data['metros']       = $this->home_model->allMetros();
        $this->data['ads_type']     = $this->home_model->adsType();
        $this->data['district']     = $this->home_model->allDistricts();
        $this->data['targets']      = $this->home_model->allTargets();

        $this->data['main_contents'] = $this->load->view('home/index', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function about()
    {
        $branchID = $this->home_model->getDefaultBranch();
        $this->data['branchID'] = $branchID;
        $this->data['page_data'] = $this->home_model->get('front_cms_about', array('branch_id' => $branchID), true);
        $this->data['main_contents'] = $this->load->view('home/about', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function faq()
    {
        $branchID = $this->home_model->getDefaultBranch();
        $this->data['branchID'] = $branchID;
        $this->data['page_data'] = $this->home_model->get('front_cms_faq', array('branch_id' => $branchID), true);
        $this->data['main_contents'] = $this->load->view('home/faq', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function events()
    {
        $branchID = $this->home_model->getDefaultBranch();
        $this->data['branchID'] = $branchID;
        $this->data['page_data'] = $this->home_model->get('front_cms_events', array('branch_id' => $branchID), true);
        $this->data['main_contents'] = $this->load->view('home/events', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function event_view($id)
    {
        $branchID = $this->home_model->getDefaultBranch();
        $this->data['branchID'] = $branchID;
        $this->data['event'] = $this->home_model->get('event', array('id' => $id, 'branch_id' => $branchID, 'status' => 1, 'show_web' => 1), true);
        $this->data['page_data'] = $this->home_model->get('front_cms_events', array('branch_id' => $branchID), true);
        $this->data['main_contents'] = $this->load->view('home/event_view', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function teachers()
    {
        $branchID = $this->home_model->getDefaultBranch();
        $this->data['branchID'] = $branchID;
        $this->data['page_data'] = $this->home_model->get('front_cms_teachers', array('branch_id' => $branchID), true);
        $this->data['departments'] = $this->home_model->get_teacher_departments($branchID);
        $this->data['doctor_list'] = $this->home_model->get_teacher_list("", $branchID);
        $this->data['main_contents'] = $this->load->view('home/teachers', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function admission()
    {
        if (!$this->data['cms_setting']['online_admission']) {
            redirect(site_url('home'));
        }
        $branchID = $this->home_model->getDefaultBranch();
        $captcha = $this->data['cms_setting']['captcha_status'];
        if ($captcha == 'enable') {
            $this->load->library('recaptcha');
            $this->data['recaptcha'] = array(
                'widget' => $this->recaptcha->getWidget(),
                'script' => $this->recaptcha->getScriptTag(),
            );
        }
        if ($_POST) {
            $this->form_validation->set_rules('class_id', translate('class'), 'trim|required');
            $this->form_validation->set_rules('first_name', translate('first_name'), 'trim|required');
            $this->form_validation->set_rules('last_name', translate('last_name'), 'trim|required');
            $this->form_validation->set_rules('email', translate('email'), 'trim|required|valid_email');
            $this->form_validation->set_rules('gender', translate('gender'), 'trim|required');
            $this->form_validation->set_rules('birthday', translate('birthday'), 'trim|required');
            $this->form_validation->set_rules('mobile_no', translate('mobile_no'), 'trim|required|numeric');
            $this->form_validation->set_rules('address', translate('address'), 'trim|required');
            $this->form_validation->set_rules('guardian_name', translate('guardian_name'), 'trim|required');
            $this->form_validation->set_rules('grd_occupation', translate('occupation'), 'trim|required');
            $this->form_validation->set_rules('guardian_relation', translate('guardian_relation'), 'trim|required');
            $this->form_validation->set_rules('grd_mobile_no', translate('guardian') . " " . translate('mobile_no'), 'trim|required|numeric');
            $this->form_validation->set_rules('grd_address', translate('guardian') . " " . translate('address'), 'trim|required');
            if ($captcha == 'enable') {
                $this->form_validation->set_rules('g-recaptcha-response', 'Captcha', 'trim|required');
            }
            // custom fields validation rules
            $customFields = getCustomFields('online_admission', $branchID);
            foreach ($customFields as $fields_key => $fields_value) {
                if ($fields_value['required']) {
                    $fieldsID = $fields_value['id'];
                    $fieldLabel = $fields_value['field_label'];
                    $this->form_validation->set_rules("custom_fields[online_admission][" . $fieldsID . "]", $fieldLabel, 'trim|required');
                }
            }

            if ($this->form_validation->run() == true) {
                $arrayData = array(
                    'first_name' => $this->input->post('first_name'),
                    'last_name' => $this->input->post('last_name'),
                    'gender' => $this->input->post('gender'),
                    'birthday' => date("Y-m-d", strtotime($this->input->post('birthday'))),
                    'mobile_no' => $this->input->post('mobile_no'),
                    'email' => $this->input->post('email'),
                    'address' => $this->input->post('address'),
                    'guardian_name' => $this->input->post('guardian_name'),
                    'guardian_relation' => $this->input->post('guardian_relation'),
                    'father_name' => $this->input->post('father_name'),
                    'mother_name' => $this->input->post('mother_name'),
                    'grd_occupation' => $this->input->post('grd_occupation'),
                    'grd_income' => $this->input->post('grd_income'),
                    'grd_education' => $this->input->post('grd_education'),
                    'grd_email' => $this->input->post('grd_email'),
                    'grd_mobile_no' => $this->input->post('grd_mobile_no'),
                    'grd_address' => $this->input->post('grd_address'),
                    'status' => 1,
                    'branch_id' => $branchID,
                    'class_id' => $this->input->post('class_id'),
                    'section_id' => $this->input->post('section_id'),
                    'apply_date' => date("Y-m-d H:i:s"),
                );
                $this->db->insert('online_admission', $arrayData);
                $studentID = $this->db->insert_id();

                // handle custom fields data
                $class_slug = 'online_admission';
                $customField = $this->input->post("custom_fields[$class_slug]");
                if (!empty($customField)) {
                    saveCustomFields($customField, $studentID);
                }
                // check out admission payment status
                $this->load->model('admissionpayment_model');
                $getStudent = $this->admissionpayment_model->getStudentDetails($studentID);
                if ($getStudent['fee_elements']['status'] == 0) {
                    $url = base_url("home/admission_confirmation/" . $studentID);
                   
                   // applicant email send 
                    $arrayData['institute_name'] = get_type_name_by_id('branch', $arrayData['branch_id']);
                    $arrayData['admission_id'] = $studentID;
                    $arrayData['student_name'] = $arrayData['first_name'] . " " . $arrayData['last_name'];
                    $arrayData['class_name'] = get_type_name_by_id('class', $arrayData['class_id']);
                    $arrayData['section_name'] = get_type_name_by_id('section', $arrayData['section_id']);
                    $arrayData['payment_url'] = "";
                    $arrayData['admission_copy_url'] = $url;
                    $arrayData['paid_amount'] = 0;
                    $this->email_model->onlineAdmission($arrayData);
                    
                    $success = "Thank you for submitting the online registration form. Please you can print this copy.";
                    $this->session->set_flashdata('success', $success);
                } else {
                    $url = base_url("admissionpayment/index/" . $studentID);
                }
                $array = array('status' => 'success', 'url' => $url);
            } else {
                $error = $this->form_validation->error_array();
                $array = array('status' => 'fail', 'error' => $error);
            }
            echo json_encode($array);
            exit();
        }

        $this->data['branchID'] = $branchID;
        $this->data['page_data'] = $this->home_model->get('front_cms_admission', array('branch_id' => $branchID), true);
        $this->data['main_contents'] = $this->load->view('home/admission', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function admission_confirmation($studentID = '')
    {
        $this->load->model('admissionpayment_model');
        $getStudent = $this->admissionpayment_model->getStudentDetails($studentID);
        if (empty($getStudent['id'])) {
            set_alert('error', "This application was not found.");
            redirect($_SERVER['HTTP_REFERER']);
        }
        $this->data['student'] = $getStudent;
        $this->data['page_data'] = $this->home_model->get('front_cms_admission', array('branch_id' => $this->data['student']['branch_id']), true);
        $this->data['main_contents'] = $this->load->view('home/admission_confirmation', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function contact()
    {
        $branchID = $this->home_model->getDefaultBranch();
        $captcha = $this->data['cms_setting']['captcha_status'];
        if ($captcha == 'enable') {
            $this->load->library('recaptcha');
            $this->data['recaptcha'] = array(
                'widget' => $this->recaptcha->getWidget(),
                'script' => $this->recaptcha->getScriptTag(),
            );
        }

        if ($_POST) {
            $this->form_validation->set_rules('name', 'Name', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('phoneno', 'Phone', 'trim|required');
            $this->form_validation->set_rules('subject', 'Subject', 'trim|required');
            $this->form_validation->set_rules('message', 'Message', 'trim|required');
            if ($captcha == 'enable') {
                $this->form_validation->set_rules('g-recaptcha-response', 'Captcha', 'trim|required');
            }
            if ($this->form_validation->run() !== false) {
                if ($captcha == 'enable') {
                    $captchaResponse = $this->recaptcha->verifyResponse($this->input->post('g-recaptcha-response'));
                } else {
                    $captchaResponse = array('success' => true);
                }
                if ($captchaResponse['success'] == true) {
                    $name = $this->input->post('name');
                    $email = $this->input->post('email');
                    $phoneno = $this->input->post('phoneno');
                    $subject = $this->input->post('subject');
                    $message = $this->input->post('message');
                    $msg = '<h3>Sender Information</h3>';
                    $msg .= '<br><br><b>Name: </b> ' . $name;
                    $msg .= '<br><br><b>Email: </b> ' . $email;
                    $msg .= '<br><br><b>Phone: </b> ' . $phoneno;
                    $msg .= '<br><br><b>Subject: </b> ' . $subject;
                    $msg .= '<br><br><b>Message: </b> ' . $message;
                    $data = array(
                        'branch_id' => $branchID,
                        'recipient' => $this->data['cms_setting']['receive_contact_email'],
                        'subject' => 'Contact Form Email',
                        'message' => $msg,
                    );
                    if ($this->mailer->send($data)) {
                        $this->session->set_flashdata('msg_success', 'Message Successfully Sent. We will contact you shortly.');
                    } else {
                        $this->session->set_flashdata('msg_error', $this->email->print_debugger());
                    }
                } else {
                    $error = 'Captcha is invalid';
                    $this->session->set_flashdata('error', $error);
                }
                redirect(base_url('home/contact'));
            }
        }
        $this->data['page_data'] = $this->home_model->get('front_cms_contact', array('branch_id' => $branchID), true);
        $this->data['main_contents'] = $this->load->view('home/contact', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function admit_card()
    {
        $branchID = $this->home_model->getDefaultBranch();
        $this->data['branchID'] = $branchID;
        $this->data['page_data'] = $this->home_model->get('front_cms_admitcard', array('branch_id' => $branchID), true);
        $this->data['main_contents'] = $this->load->view('home/admit_card', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function admitCardprintFn()
    {
        if ($_POST) {
            $this->load->model('card_manage_model');
            $this->load->model('timetable_model');
            $this->load->library('ciqrcode', array('cacheable' => false));
            $this->form_validation->set_rules('exam_id', translate('exam'), 'trim|required');
            $this->form_validation->set_rules('register_no', translate('register_no'), 'trim|required');
            if ($this->form_validation->run() == true) {
                //get all QR Code file
                $files = glob('uploads/qr_code/*');
                foreach ($files as $file) {
                    if (is_file($file)) {
                        unlink($file); //delete file
                    }
                }
                $registerNo = $this->input->post('register_no');
                $userID = $this->db->select('id')->where('register_no', $registerNo)->get('student')->row_array();
                if (empty($userID)) {
                    $array = array('status' => '0', 'error' => "Register No Not Found.");
                    echo json_encode($array);
                    exit();
                }
                $templateID = $this->input->post('templete_id');
                if (empty($templateID) || $templateID == 0) {
                    $array = array('status' => '0', 'error' => "No Default Template Set.");
                    echo json_encode($array);
                    exit();
                }
                $this->data['exam_id'] = $this->input->post('exam_id');
                $this->data['userID'] = $userID;
                $this->data['template'] = $this->card_manage_model->get('card_templete', array('id' => $templateID), true);
                $this->data['print_date'] = date('Y-m-d');
                $card_data = $this->load->view('home/admitCardprintFn', $this->data, true);
                $array = array('status' => 'success', 'card_data' => $card_data);
            } else {
                $error = $this->form_validation->error_array();
                $array = array('status' => 'fail', 'error' => $error);
            }
            echo json_encode($array);
        }
    }

    public function exam_results()
    {
        $branchID = $this->home_model->getDefaultBranch();
        $this->data['branchID'] = $branchID;
        $this->data['page_data'] = $this->home_model->get('front_cms_exam_results', array('branch_id' => $branchID), true);
        $this->data['main_contents'] = $this->load->view('home/exam_results', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function examResultsPrintFn()
    {
        $this->load->model('exam_model');
        if ($_POST) {
            $this->form_validation->set_rules('exam_id', translate('exam'), 'trim|required');
            $this->form_validation->set_rules('register_no', translate('register_no'), 'trim|required');
            $this->form_validation->set_rules('session_id', translate('academic_year'), 'trim|required');
            if ($this->form_validation->run() == true) {
                $sessionID = $this->input->post('session_id');
                $registerNo = $this->input->post('register_no');
                $examID = $this->input->post('exam_id');
                $userID = $this->db->select('id')->where('register_no', $registerNo)->get('student')->row_array();
                if (empty($userID)) {
                    $array = array('status' => '0', 'error' => "Register No Not Found.");
                    echo json_encode($array);
                    exit();
                }
                $result = $this->exam_model->getStudentReportCard($userID['id'], $examID, $sessionID);
                if (empty($result['exam'])) {
                    $array = array('status' => '0', 'error' => "Exam Results Not Found.");
                    echo json_encode($array);
                    exit();
                }
                $this->data['result'] = $result;
                $this->data['sessionID'] = $sessionID;
                $this->data['userID'] = $userID['id'];
                $this->data['examID'] = $examID;
                $this->data['grade_scale'] = $this->input->post('grade_scale');
                $this->data['attendance'] = $this->input->post('attendance');
                $this->data['print_date'] = date('Y-m-d');
                $card_data = $this->load->view('home/reportCard', $this->data, true);
                $array = array('status' => 'success', 'card_data' => $card_data);
            } else {
                $error = $this->form_validation->error_array();
                $array = array('status' => 'fail', 'error' => $error);
            }
            echo json_encode($array);
        }
    }

    public function certificates()
    {
        $branchID = $this->home_model->getDefaultBranch();
        $this->data['branchID'] = $branchID;
        $this->data['page_data'] = $this->home_model->get('front_cms_certificates', array('branch_id' => $branchID), true);
        $this->data['main_contents'] = $this->load->view('home/certificates', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function certificatesPrintFn()
    {
        if ($_POST) {
            $this->load->model('certificate_model');
            $this->load->library('ciqrcode', array('cacheable' => false));
            //get all QR Code file
            $files = glob('uploads/qr_code/*');
            foreach ($files as $file) {
                if (is_file($file)) {
                    unlink($file); //delete file
                }
            }

            $this->form_validation->set_rules('templete_id', translate('certificate'), 'trim|required');
            $this->form_validation->set_rules('register_no', translate('register_no'), 'trim|required');
            if ($this->form_validation->run() == true) {

                $registerNo = $this->input->post('register_no');
                $examID = $this->input->post('exam_id');
                $userID = $this->db->select('id')->where('register_no', $registerNo)->get('student')->row_array();
                if (empty($userID)) {
                    $array = array('status' => '0', 'error' => "Register No Not Found.");
                    echo json_encode($array);
                    exit();
                }

                $this->data['user_type'] = 1;
                $templateID = $this->input->post('templete_id');
                $this->data['template'] = $this->certificate_model->get('certificates_templete', array('id' => $templateID), true);
                $this->data['userID'] = $userID['id'];
                $this->data['print_date'] = date('Y-m-d');
                $card_data = $this->load->view('home/certificatesPrintFn', $this->data, true);
                $array = array('status' => 'success', 'card_data' => $card_data);
            } else {
                $error = $this->form_validation->error_array();
                $array = array('status' => 'fail', 'error' => $error);
            }
            echo json_encode($array);
        }
    }

    public function gallery()
    {
        $branchID = $this->home_model->getDefaultBranch();
        $this->data['branchID'] = $branchID;
        $this->data['page_data'] = $this->home_model->get('front_cms_gallery', array('branch_id' => $branchID), true);
        $this->data['category'] = $this->home_model->getGalleryCategory($branchID);
        $this->data['galleryList'] = $this->home_model->getGalleryList($branchID);
        $this->data['main_contents'] = $this->load->view('home/gallery', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function gallery_view($alias = '')
    {
        $branchID = $this->home_model->getDefaultBranch();
        $this->data['branchID'] = $branchID;
        $this->data['page_data'] = $this->home_model->get('front_cms_gallery', array('branch_id' => $branchID), true);
        $this->data['gallery'] = $this->home_model->get('front_cms_gallery_content', array('branch_id' => $branchID, 'alias' => $alias), true);
        $this->data['category'] = $this->home_model->getGalleryCategory($branchID);
        $this->data['galleryList'] = $this->home_model->getGalleryList($branchID);
        $this->data['main_contents'] = $this->load->view('home/gallery_view', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
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

    public function getSectionByClass()
    {
        $html = "";
        $classID = $this->input->post("class_id");
        if (!empty($classID)) {
            $result = $this->db->select('sections_allocation.section_id,section.name')
                ->from('sections_allocation')
                ->join('section', 'section.id = sections_allocation.section_id', 'left')
                ->where('sections_allocation.class_id', $classID)
                ->get()->result_array();
            if (is_array($result) && count($result)) {
                $html .= '<option value="">' . translate('select') . '</option>';
                foreach ($result as $row) {
                    $html .= '<option value="' . $row['section_id'] . '">' . $row['name'] . '</option>';
                }
            } else {
                $html .= '<option value="">' . translate('no_selection_available') . '</option>';
            }
        } else {
            $html .= '<option value="">' . translate('select_class_first') . '</option>';
        }
        echo $html;
    }

    public function get_branch_url()
    {
        $branch_id = $this->input->post("branch_id");
        $url = $this->db->where('branch_id', $branch_id)->get('front_cms_setting')->row_array();
        $school = "";
        if ($this->uri->segment(4)) {
            $school = $this->uri->segment(4);
        } else {
            $school = $this->uri->segment(3);
        }
        echo json_encode(array('url_alias' => base_url("home/index/" . $url['url_alias'])));
    }

}
