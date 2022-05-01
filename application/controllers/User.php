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

class User extends Frontend_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helpers('custom_fields');
        $this->load->model('email_model','em');
        $this->load->model('testimonial_model');
        $this->load->model('gallery_model');
        $this->load->model('user_model','um');
        $this->load->library('mailer');

    }

    public function index()
    {
        $this->home();
    }

    public function signin()
    {
        if (!$this->input->is_ajax_request()) 
        {
            exit('No direct script access allowed');
        }
        else
        {
            if ($_POST) 
            {
                // Validations
                $this->form_validation->set_rules("email", translate("email"), "trim|required|valid_email",
                    [
                        "required"      => ucfirst(translate("the_email_field_is_required")),
                        "valid_email"   => ucfirst(translate("the_email_address_is_not_valid"))
                    ]
                );
                $this->form_validation->set_rules("password", translate("password"), "trim|required",
                    [
                        "required"      => ucfirst(translate("the_password_field_is_required"))
                    ]
                );
                
                $email      = $this->input->post('email',TRUE);
                $password   = $this->input->post('password',TRUE);
                
                if ($this->form_validation->run() === TRUE) 
                {
                    $login_credential = $this->um->login_credential($email, $password);
                    if ($login_credential) 
                    {
                        if ($login_credential->status) 
                        {
                            $getUser    = $this->um->getUserInfo($login_credential->id);
                            $getConfig  = $this->db->get_where('global_settings', array('id' => 1))->row_array();
                            $sessionData = array(
                                'fr_name'           => $getUser['name'],
                                'fr_email'          => $getUser['email'],
                                'set_lang'          => $getConfig['translation'],
                                'fr_loggedin'       => true,
                                'fr_logger_id'      => $login_credential->id,
                                'fr_set_session_id' => $getConfig['session_id'],
                            );
                        $this->session->set_userdata($sessionData);
                        $response = [
                             "status"    => "success",
                             "text"      => "ok"    
                        ];
                        echo json_encode($response);
                        
                        // $this->db->update('ads_users', array('last_login' => date('Y-m-d H:i:s')), array('id' => $login_credential->id));
                        }
                        else
                        {
                            $output['email'] = [ucfirst(translate('inactive_account'))];
                            
                            $response = [
                                "status"        => "success",
                                "validations"   => $output
                            ];
                            echo json_encode($response);
                        }
                    }
                    else 
                    {
                        $output['email'] = [ucfirst(translate('username_or_password_incorrect'))];

                        $response = [
                            "status"        => "success",
                            "validations"   => $output
                        ];
                        echo json_encode($response);
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
                        "text"          => "",
                        "validations"   => $output
                    ];
                    echo json_encode($response);
                }   
            }       
        }
    }

    public function register()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }
        else
        {
            if ($_POST) 
            {
                // Validations
                $this->form_validation->set_rules("announcement_owner", translate("announcement_owner"), "trim|required|min_length[3]|xss_clean", 
                    [
                        "required"      => ucfirst(translate("the_announcement_owner_field_is_required")),
                        "min_length"    => ucfirst(translate("the_name_must_consist_of_at_least_3_letters")),
                    ]
                );
                $this->form_validation->set_rules("email", translate("email"), "trim|required|valid_email|is_unique[ads_users.email]|xss_clean", 
                    [
                        "required"      => ucfirst(translate("the_email_field_is_required")),
                        "valid_email"   => ucfirst(translate("the_email_address_is_not_valid")),
                        "is_unique"     => ucfirst(translate("the_email_address_already_used"))
                    ]
                );
                $this->form_validation->set_rules("mobile", translate("mobile"), "trim|required|min_length[10]|max_length[10]|is_unique[ads_users.mobile]|xss_clean", 
                    [
                        "required"      => ucfirst(translate("the_mobile_number_field_is_required")),
                        "max_length"    => ucfirst(translate("the_phone_number_is_not_valid")),
                        "min_length"    => ucfirst(translate("the_phone_number_is_not_valid")),
                        "is_unique"     => ucfirst(translate("the_phone_number_already_used"))
                    ]
                );
                $this->form_validation->set_rules("password", translate("password"), "trim|required|min_length[8]|xss_clean",
                    [
                        "required"      => ucfirst(translate("the_password_field_is_required")),
                        "min_length"    => ucfirst(translate("the_password_must_be_at_least_8_characters_long"))
                    ]
                );
                $this->form_validation->set_rules("repassword", translate("retry_password"), "trim|required|matches[password]|xss_clean",
                     [
                        "required"      => ucfirst(translate("the_password_field_is_required")),
                        "matches"       => ucfirst(translate("the_passwords_do_not_match"))
                    ]
                );                

                $announcement_owner     = $this->input->post('announcement_owner',TRUE);
                $email                  = $this->input->post('email',TRUE);
                $mobile                 = $this->input->post('mobile',TRUE);
                $password               = $this->input->post('password',TRUE);
                $repassword             = $this->input->post('repassword',TRUE);
                $user_agreement         = $this->input->post('user_agreement',TRUE);

                if ($this->form_validation->run() === TRUE)         
                {
                        $insertData = [
                            "name"              => $announcement_owner,
                            "email"             => $email,
                            "password"          => $this->app_lib->pass_hashed($password),
                            "register_token"    => hash('sha256', $announcement_owner . $email . app_generate_hash()),
                            "mobile"            => $mobile,
                            "balance"           => 0,
                            "status"            => 2,
                            "ip"                => getIP(),
                            "soft"              => getBrowser()['userAgent'],
                            "browser_name"      => getBrowser()['name'],
                            "register_at"       => date("Y-m-d H:i:s")
                        ];
                        $this->db->insert('ads_users', $insertData);
                        $user_id = $this->db->insert_id();
                        

                        $msgData['recipient'] = $email;
                        $msgData['subject'] = "Estate.az qeydiyyatınız tamamlandı.";
                        $msgData['message'] = '<!DOCTYPE html>
   <head>
      <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
      <title>New Account Email Template</title>
      <meta name="description" content="New Account Email Template.">
      <style type="text/css">
         a:hover {text-decoration: underline !important;}
      </style>
   </head>
   <body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
      <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
         style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: Open Sans, sans-serif;">
         <tr>
            <td>
               <table style="background-color: #f2f3f8; max-width:670px; margin:0 auto;" width="100%" border="0"
                  align="center" cellpadding="0" cellspacing="0">
                  <tr>
                     <td style="height:80px;">&nbsp;</td>
                  </tr>
                  <tr>
                     <td style="text-align:center;">
                        <a href="https://estate.az" title="logo" target="_blank">
                        <img width="110" src="'.base_url('uploads/frontend/images/logo1.png').'" title="logo" alt="logo">
                        </a>
                     </td>
                  </tr>
                  <tr>
                     <td style="height:20px;">&nbsp;</td>
                  </tr>
                  <tr>
                     <td>
                        <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                           style="max-width:670px; background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                           <tr>
                              <td style="height:40px;">&nbsp;</td>
                           </tr>
                           <tr>
                              <td style="padding:0 35px;">
                                 <h1 style="color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family:Rubik,sans-serif;">Hörmətli '.$announcement_owner.', xoş gəldiniz.
                                 </h1>
                                 <p style="font-size:15px; color:#455056; margin:8px 0 0; line-height:24px;">
                                    Saytımızdakı qeydiyyatınızı təsdiq etmək üçün, zəhmət olmasa aşağıdakı linkdən <br/>və ya <a href="https://estate.az">bu keçiddən</a> istifadə edərək, qeydiyyatınızı təsdiq edərək hesabınızı aktivləşdirin</strong>.
                                 </p>
                                 <span
                                    style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;"></span>
                                 <p style="color:#455056; font-size:18px;line-height:20px; margin:0; font-weight: 500;">
                                    <strong style="display: block;font-size: 13px; margin: 0 0 4px; color:rgba(0,0,0,.64); font-weight:normal;">Qeydiyyat üçün istifadə etdiyiniz mobil nömrə</strong>'.$mobile.'
                                   
                                 </p>
                                 <a href="login.html" style="background:#dca73d;text-decoration:none !important; display:inline-block; font-weight:500; margin-top:24px; color:#fff;text-transform:uppercase; font-size:14px;padding:10px 24px;display:inline-block;border-radius:50px;">
                                    Təsdiq et
                                </a>
                              </td>
                           </tr>
                           <tr>
                              <td style="height:40px;">&nbsp;</td>
                           </tr>
                        </table>
                     </td>
                  </tr>
                  <tr>
                     <td style="height:20px;">&nbsp;</td>
                  </tr>
                  <tr>
                     <td style="text-align:center;">
                        <p style="font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;"> Powered by &hearts; <strong>WeBoX Agency</strong> &hearts;</p>
                     </td>
                  </tr>
                  <tr>
                     <td style="height:80px;">&nbsp;</td>
                  </tr>
               </table>
            </td>
         </tr>
      </table>
   </body>
</html>';
                        $this->em->sendEmail($msgData);
                        $response = [
                            "status"        => "success",
                            "text"          => $email." ünvanına təsdiq mesajı göndərildi.",
                            "validations"   => []
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
                   
                    if (!isset($user_agreement)) 
                    {
                        $output['user_agreement'] = [ucfirst(translate("user_rules_not_accepted"))];
                    }
                   
                    $response = [
                        "status"        => "success",
                        "text"          => "",
                        "validations"   => $output
                    ];
                    echo json_encode($response);
                }   
            } 
        }
    }

    public function logout()
    {
        if (is_user_loggedin()) 
        {
            $this->session->unset_userdata('fr_name');
            $this->session->unset_userdata('fr_email');
            $this->session->unset_userdata('set_lang');
            $this->session->unset_userdata('fr_loggedin');
            $this->session->unset_userdata('fr_logger_id');
            $this->session->unset_userdata('fr_set_session_id');
            
            // $this->session->sess_destroy();
            redirect(base_url(), 'refresh');
        }
    }
    public function profile()
    {
        if (!is_user_loggedin()) {
            $this->session->set_userdata('redirect_url', current_url());
            redirect(base_url(), 'refresh');
        }
        $this->data['page_data'] = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents'] = $this->load->view('user/profile', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function account()
    {
        if (!is_user_loggedin()) {
            $this->session->set_userdata('redirect_url', current_url());
            redirect(base_url(), 'refresh');
        }
        $this->data['page_data'] = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents'] = $this->load->view('user/account', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function balance()
    {
        if (!is_user_loggedin()) {
            $this->session->set_userdata('redirect_url', current_url());
            redirect(base_url(), 'refresh');
        }
        $this->data['page_data'] = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents'] = $this->load->view('user/balance', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function statistics()
    {
        if (!is_user_loggedin()) {
            $this->session->set_userdata('redirect_url', current_url());
            redirect(base_url(), 'refresh');
        }
        $this->data['page_data'] = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents'] = $this->load->view('user/statistics', $this->data, true);
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

    public function detail()
    {
        $this->data['page_data'] = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents'] = $this->load->view('home/detail', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
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
    public function home()
    {
        $this->data['cities']       = $this->home_model->allCities();
        $this->data['regions']      = $this->home_model->allRegions();
        $this->data['metros']       = $this->home_model->allMetros();
        $this->data['ads_type']     = $this->home_model->adsType();
        $this->data['district']     = $this->home_model->allDistricts();
        $this->data['targets']      = $this->home_model->allTargets();
        $this->data['page_data'] = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
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
