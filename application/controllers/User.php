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
                        <html>
                        <head>

                          <meta charset="utf-8">
                          <meta http-equiv="x-ua-compatible" content="ie=edge">
                          <title>Email Confirmation</title>
                          <meta name="viewport" content="width=device-width, initial-scale=1">
                          <style type="text/css">
                          @media screen {
                            @font-face {
                              font-family: "Source Sans Pro";
                              font-style: normal;
                              font-weight: 400;
                              src: local("Source Sans Pro Regular"), local("SourceSansPro-Regular"), url(https://fonts.gstatic.com/s/sourcesanspro/v10/ODelI1aHBYDBqgeIAH2zlBM0YzuT7MdOe03otPbuUS0.woff) format("woff");
                            }
                            @font-face {
                              font-family: "Source Sans Pro";
                              font-style: normal;
                              font-weight: 700;
                              src: local("Source Sans Pro Bold"), local("SourceSansPro-Bold"), url(https://fonts.gstatic.com/s/sourcesanspro/v10/toadOcfmlt9b38dHJxOBGFkQc6VGVFSmCnC_l7QZG60.woff) format("woff");
                            }
                          }
                          body,
                          table,
                          td,
                          a {
                            -ms-text-size-adjust: 100%; /* 1 */
                            -webkit-text-size-adjust: 100%; /* 2 */
                          }
                          table,
                          td {
                            mso-table-rspace: 0pt;
                            mso-table-lspace: 0pt;
                          }
                          img {
                            -ms-interpolation-mode: bicubic;
                          }
                          a[x-apple-data-detectors] {
                            font-family: inherit !important;
                            font-size: inherit !important;
                            font-weight: inherit !important;
                            line-height: inherit !important;
                            color: inherit !important;
                            text-decoration: none !important;
                          }
                          div[style*="margin: 16px 0;"] {
                            margin: 0 !important;
                          }
                          body {
                            width: 100% !important;
                            height: 100% !important;
                            padding: 0 !important;
                            margin: 0 !important;
                          }
                          table {
                            border-collapse: collapse !important;
                          }
                          a {
                            color: #1a82e2;
                          }
                          img {
                            height: auto;
                            line-height: 100%;
                            text-decoration: none;
                            border: 0;
                            outline: none;
                          }
                          </style>

                        </head>
                        <body style="background-color: #e9ecef;">
                          <div class="preheader" style="display: none; max-width: 0; max-height: 0; overflow: hidden; font-size: 1px; line-height: 1px; color: #fff; opacity: 0;">
                            A preheader is the short summary text that follows the subject line when an email is viewed in the inbox.
                          </div>
                          <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                              <td align="center" bgcolor="#e9ecef">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                                  <tr>
                                    <td align="center" valign="top" style="padding: 36px 24px;">
                                      <a href="https://sendgrid.com" target="_blank" style="display: inline-block;">
                                        <img src="https://estate.az/assets/uploads/logo/logo354.png" alt="Logo" border="0" style="display: block; width: 108px; max-width: 108px; min-width: 98px;">
                                      </a>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                            <tr>
                              <td align="center" bgcolor="#e9ecef">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                                  <tr>
                                    <td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
                                      <h4 style="margin: 0; font-size: 22px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">Hörmətli '.$announcement_owner.', qeydiyyatınız üçün təşəkkürlər</h4>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                            <tr>
                              <td align="center" bgcolor="#e9ecef">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                                  <tr>
                                    <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
                                      <p style="margin: 0;">Aşağıdakı düyməyə klik edərək qeydiyyatınızı tamamlayın. </p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td align="left" bgcolor="#ffffff">
                                      <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <tr>
                                          <td align="center" bgcolor="#ffffff" style="padding: 12px;">
                                            <table border="0" cellpadding="0" cellspacing="0">
                                              <tr>
                                                <td align="center" bgcolor="#1a82e2" style="border-radius: 6px;">
                                                  <a href="https://sendgrid.com" target="_blank" style="display: inline-block; padding: 16px 36px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; color: #ffffff; text-decoration: none; border-radius: 6px;">Qeydiyyatı tamamla</a>
                                                </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                      </table>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
                                      <p style="margin: 0;">Əgər hər hansı bir səbəbdən təsdiq etmə işləməzsə aşağıdakı linkdən davam edə bilərsiniz:</p>
                                      <p style="margin: 0;"><a href="https://blogdesire.com" target="_blank">https://estate.az</a></p>
                                    </td>
                                  </tr>
                                  
                                </table>
                              </td>
                            </tr>
                            <tr>
                              <td align="center" bgcolor="#e9ecef" style="padding: 24px;">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                                  
                                  <tr>
                                    <td align="center" bgcolor="#e9ecef" style="padding: 12px 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; color: #666;">
                                      <p style="margin: 0;">Copyright © 2022 </p>
                                      <p style="margin: 0;">Estate.az | Bütün hüquqlar qorunur.</p>
                                    </td>
                                  </tr>

                                </table>
                                </td>
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
