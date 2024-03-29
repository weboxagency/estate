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
                        if($login_credential->status == 2)
                        {
                            $output['email'] = [ucfirst(translate('unverified_account'))];
                            
                            $response = [
                                "status"        => "success",
                                "validations"   => $output
                            ];
                            echo json_encode($response);
                        }
                        elseif ($login_credential->status == 0) 
                        {
                           $output['email'] = [ucfirst(translate('inactive_account'))];
                            
                            $response = [
                                "status"        => "success",
                                "validations"   => $output
                            ];
                            echo json_encode($response);
                        }
                        elseif ($login_credential->is_registered == 0) 
                        {
                           $output['email'] = [ucfirst(translate('username_or_password_incorrect'))];
                            
                            $response = [
                                "status"        => "success",
                                "validations"   => $output
                            ];
                            echo json_encode($response);
                        }
                        elseif ($login_credential->status == 1) 
                        {
                            $getUser    = $this->um->getUserInfo($login_credential->id);
                            $getConfig  = $this->db->get_where('global_settings', array('id' => 1))->row_array();
                            $this->db->update('ads_users', array('last_login' => date('Y-m-d H:i:s')), array('id' => $login_credential->id));
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
                $this->form_validation->set_rules("email", translate("email"), "trim|required|valid_email|xss_clean", 
                    [   
                        "required"      => ucfirst(translate("the_email_field_is_required")),
                        "valid_email"   => ucfirst(translate("the_email_address_is_not_valid"))
                        // "is_unique"     => ucfirst(translate("the_email_address_already_used"))
                    ]
                );
                $this->form_validation->set_rules("mobile", translate("mobile"), "trim|required|min_length[10]|max_length[10]|xss_clean", 
                    [
                        "required"      => ucfirst(translate("the_mobile_number_field_is_required")),
                        "max_length"    => ucfirst(translate("the_phone_number_is_not_valid")),
                        "min_length"    => ucfirst(translate("the_phone_number_is_not_valid"))
                        // "is_unique"     => ucfirst(translate("the_phone_number_already_used"))
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
               
                $phoneCheck             = $this->um->check_phone($mobile);
                $phoneCheckExist        = $this->um->check_phone_exist($mobile);
                
                if ($this->form_validation->run() === TRUE)         
                {
                    
                    if (!isset($user_agreement)) 
                    {
                        $output['user_agreement'] = [ucfirst(translate("user_rules_not_accepted"))];

                        $response = [
                        "status"        => "success",
                        "text"          => "",
                        "validations"   => $output
                        ];
                        echo json_encode($response);
                    }
                    else
                    {  
                        if ($phoneCheck) 
                        {
                            $updateData = [
                            "password"              => $this->app_lib->pass_hashed($password),
                            "register_token"        => hash('sha256', $announcement_owner . $email . app_generate_hash()),
                            "is_registered"         => 1,
                            "status"                => 2,
                            "ip"                    => getIP(),
                            "soft"                  => getBrowser()['userAgent'],
                            "browser_name"          => getBrowser()['name'],
                            "register_at"           => date("Y-m-d H:i:s")
                            ];

                            $this->db->set('password', $updateData['password']);
                            $this->db->set('register_token', $updateData['register_token']);
                            $this->db->set('is_registered', $updateData['is_registered']);
                            $this->db->set('status', $updateData['status']);
                            $this->db->set('ip', $updateData['ip']);
                            $this->db->set('soft', $updateData['soft']);
                            $this->db->set('browser_name', $updateData['browser_name']);
                            $this->db->set('register_at', $updateData['register_at']);
                            $this->db->where('phone', $mobile);
                            $this->db->update('ads_users');

                            $emailData = [
                                "name"              => $announcement_owner,
                                "url"               => base_url(),
                                "logo"              => base_url()."uploads/frontend/images/logo1.png",
                                "email"             => $email,
                                "mobile"            => formatPhoneNumber("",$mobile)['national'],
                                "activation_url"    => base_url()."user/finish_registration/".$updateData['register_token']
                            ];
                            // send user activation email
                            $this->em->userRegistration($emailData);
                           
                            $response = [
                            "status"        => "success",
                            "text"          => $email." ünvanına təsdiq mesajı göndərildi.",
                            "validations"   => []
                            ];
                            
                            echo json_encode($response);
                            exit();
                        }
                        elseif ($phoneCheckExist) 
                        {
                            $output['mobile'] = [ucfirst(translate("the_phone_number_already_used"))];

                            $response = [
                            "status"        => "success",
                            "text"          => "",
                            "validations"   => $output
                            ];
                            echo json_encode($response);
                        }
                        else
                        {                  
                            $insertData = [
                                "name"                  => $announcement_owner,
                                "email"                 => $email,
                                "password"              => $this->app_lib->pass_hashed($password),
                                "register_token"        => hash('sha256', $announcement_owner . $email . app_generate_hash()),
                                "phone"                 => $mobile,
                                "mobile"                => formatPhoneNumber("",$mobile)['international'],
                                "mobile_format_second"  => formatPhoneNumber("",$mobile)['second_format'],
                                "mobileBeautified"      => formatPhoneNumber("",$mobile)['national'],
                                "provider_name"         => provider_name(formatPhoneNumber("",$mobile)['provider']),
                                "balance"               => 0,
                                "is_registered"         => 1,
                                "status"                => 2,
                                "ip"                    => getIP(),
                                "soft"                  => getBrowser()['userAgent'],
                                "browser_name"          => getBrowser()['name'],
                                "register_at"           => date("Y-m-d H:i:s")
                            ];
                            $this->db->insert('ads_users', $insertData);
                            $user_id = $this->db->insert_id();
                            
                            $emailData = [
                                "name"              => $announcement_owner,
                                "url"               => base_url(),
                                "logo"              => base_url()."uploads/frontend/images/logo1.png",
                                "email"             => $email,
                                "mobile"            => formatPhoneNumber("",$mobile)['national'],
                                "activation_url"    => base_url()."user/finish_registration/".$insertData['register_token']
                            ];

                            // send user activation email
                            $this->em->userRegistration($emailData);
                           
                            $response = [
                            "status"        => "success",
                            "text"          => $email." ünvanına təsdiq mesajı göndərildi.",
                            "validations"   => []
                            ];
                            
                            echo json_encode($response);
                            exit();
                        }
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

    public function finish_registration($par = '')
    {
        $par = (isset($par)) ? $par : '';
        if (!empty($par)) 
        {
            $responseKey = $this->um->getRegisterKey($par);
            if ($responseKey) 
            {
                $config = [
                    'status'         => 1,
                    'register_token' => ''
                ];
                $this->db->where('register_token', $par);
                $this->db->update('ads_users', $config);
                redirect(base_url().'?finish=1', 'refresh');
            }
            else
            {
                redirect(base_url(), 'refresh');
            }
        }
        else
        {
            redirect(base_url(), 'refresh');
        }
    }

    public function lose_password()
    {
        if (!$this->input->is_ajax_request()) 
        {
            exit('No direct script access allowed');
        }
        else
        {
            if ($_POST) 
            {
                $this->form_validation->set_rules("email", translate("email"), "trim|required|valid_email|xss_clean", 
                        [
                            "required"      => ucfirst(translate("the_email_field_is_required")),
                            "valid_email"   => ucfirst(translate("the_email_address_is_not_valid"))
                        ]
                    );

                if ($this->form_validation->run() === TRUE)         
                {
                    $email = $this->input->post('email');
                    if (!empty($email)) 
                    {
                        $this->db->select('*');
                        $this->db->from('ads_users');
                        $this->db->where('email', $email);
                        $this->db->limit(1);
                        $query = $this->db->get();

                        if ($query->num_rows() > 0) 
                        {
                            $login_credential = $query->row();
                            // $getUser = $this->application_model->getUserNameByRoleID($login_credential->role, $login_credential->id);
                            $key = hash('sha512', $login_credential->id . $login_credential->email . app_generate_hash());
                            $query = $this->db->get_where('ads_users_reset_password', array('credential_id' => $login_credential->id));
                            if ($query->num_rows() > 0) {
                                $this->db->where('credential_id', $login_credential->id);
                                $this->db->delete('ads_users_reset_password');
                            }
                            $arrayReset = array(
                                'key'           => $key,
                                'credential_id' => $login_credential->id,
                                'email'         => $login_credential->email,
                            );
                            $this->db->insert('ads_users_reset_password', $arrayReset);
                            
                            // send email for forgot password

                            $emailData = [
                            "name"              => $login_credential->name,
                            "url"               => base_url(),
                            "logo"              => base_url()."uploads/frontend/images/logo1.png",
                            "email"             => $email,
                            "mobile"            => $login_credential->mobileBeautified,
                            "reset_url"         => base_url()."user/reset_password?key=".$key
                            ];


                            // send user forgot password email 
                            $this->em->userForgotPassword($emailData);

                       
                            $response = [
                            "status"        => "success",
                            "text"          => $email." e-mail adresinə şifrə yeniləmə linki göndərildi.",
                            "validations"   => []
                            ];

                            echo json_encode($response);
                            exit();
                            return true;
                        }
                        else
                        {
                            $response = [
                                "status"        => "success",
                                "text"          => "",
                                "validations"   => [ "email" => [ucfirst(translate("the_email_address_is_not_valid"))] ]
                            ];
                            echo json_encode($response);
                        }
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

    public function reset_password($par = '')
    {
        $par = (isset($par)) ? $this->input->get('key') : '';
        
        if (!empty($par)) 
        {
            $this->db->select('*');
            $this->db->where(array('key' => $par));
            $query = $this->db->get('ads_users_reset_password')->result_array();
            
            if (count($query) > 0) 
            {   
                if (!sess_reset_tkn()) 
                {
                    $this->session->set_userdata('sess_reset_tkn', $par);
                    redirect(base_url().'?reset=1', 'refresh');
                }
            } 
            else 
            {
                $this->session->unset_userdata('sess_reset_tkn');
                set_alert('error', 'Token Has Expired');
                redirect(base_url());
            }
        } 
        else 
        {
            $this->session->unset_userdata('sess_reset_tkn');
            set_alert('error', 'Token Has Expired');
            redirect(base_url());
        }
          
    }

    public function password_reset()
    {
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|matches[c_password]');
        $this->form_validation->set_rules('passwordRepeat', 'Confirm Password', 'trim|required|min_length[4]');
        if ($this->form_validation->run() !== false) 
        {
            $password = $this->app_lib->pass_hashed($this->input->post('password'));
            $this->db->where('id', $query->row()->credential_id);
            $this->db->update('ads_users', array('password' => $password));
            $this->db->where('credential_id', $query->row()->credential_id);
            $this->db->delete('ads_users_reset_password'); 
            $response = [
                "status"        => "success",
                "text"          => "",
                "validations"   => []
                ]; 
            $this->session->unset_userdata('sess_reset_tkn');
            echo json_encode($response);
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
        if (!is_user_loggedin()) 
        {
            $this->session->set_userdata('redirect_url', current_url());
            redirect(base_url(), 'refresh');
        }
        $this->data['main_menu']        = 'profile';
        $this->data['user_info']        = $this->um->getUserInfo(logged_user_id());
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('user/profile', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function profile_edit()
    {
        if (!$this->input->is_ajax_request()) 
        {
            exit('No direct script access allowed');
        }
        else
        {
            if (!is_user_loggedin()) 
            {
                $this->session->set_userdata('redirect_url', current_url());
                redirect(base_url(), 'refresh');
            }
            if($_POST)
            {
                $user_info = $this->um->getUserInfo(logged_user_id());
                if ($_POST['form']==1) 
                {
                    $this->form_validation->set_rules("name", translate("name"), "trim|required|min_length[3]|xss_clean", 
                        [
                            "required"      => ucfirst(translate("the_name_field_is_required")),
                            "min_length"    => ucfirst(translate("the_name_must_consist_of_at_least_3_letters"))
                        ]
                    );
                    $name = $this->input->post('name', TRUE);
                    $user_info = $this->um->getUserInfo(logged_user_id());

                    if ($this->form_validation->run() === TRUE)         
                    {
                        
                        $config = [
                            'name'   => $name
                        ];
                        $this->db->where('id',logged_user_id());
                        $this->db->update('ads_users', $config);

                        $response = [
                            "status"        => "success",
                            "user"          => [
                                "agency_id"         => null,
                                "balance"           => 0,
                                "register_at"       => $user_info['register_at'],
                                "email"             => $user_info['email'],
                                "id"                => (int)logged_user_id(),
                                "isAgencyEmployee"  => false,
                                "isDirectior"       => false,
                                "mobile"            => $user_info['mobile'],
                                "mobileBeautified"  => $user_info['mobileBeautified'],
                                "name"              => $name,
                                "present"           => 0,
                                "type"              => "customer",
                                "updated_at"        => date("Y-m-d H:i:s")
                            ],
                            "validations"   => []
                        ];
                        echo json_encode($response);
                    }
                    else
                    {
                        $output = array();
                        foreach ($_POST as $key => $value)
                        {
                            $text   =   str_ireplace('<p>','',form_error($key));
                            $text   =   str_ireplace('</p>','',$text); 
                            if ($key!='_token' AND $key!='form' AND !empty($text)) 
                            {
                                $output[$key] = [$text];
                            }
                        }
                           
                        $response = [
                            "status"        => "success",
                            "user"          => [
                                // "agency_id"         => null,
                                "balance"           => 0,
                                "created_at"        => $user_info['register_at'],
                                "email"             => $user_info['email'],
                                "id"                => logged_user_id(),
                                // "isAgencyEmployee"  => false,
                                // "isDirectior"       => false,
                                "mobile"            => $user_info['mobile'],
                                "mobileBeautified"  => $user_info['mobile'],
                                "name"              => $name,
                                // "present"           => 0,
                                // "type"              => "customer",
                                "updated_at"        => date("Y-m-d H:i:s")
                            ],
                            "validations"   => $output
                        ];
                        echo json_encode($response);
                    }
                }
                elseif ($_POST['form']==2) 
                {
                    $this->form_validation->set_rules("email", translate("email"), "trim|required|valid_email|is_unique[ads_users.email]|xss_clean", 
                    [
                        "required"      => ucfirst(translate("the_email_field_is_required")),
                        "valid_email"   => ucfirst(translate("the_email_address_is_not_valid")),
                        "is_unique"     => ucfirst(translate("the_email_address_already_used"))
                    ]
                    );

                    $email = $this->input->post('email', TRUE);

                    $user_info = $this->um->getUserInfo(logged_user_id());
                    if ($this->form_validation->run() === TRUE)         
                    {                        
                        $rand                   = rand(1000,9999); 
                        $config = [
                            'email_verify_code' => $rand,
                            'second_email'      => $email
                        ];
                        $this->db->where('id',logged_user_id());
                        $this->db->update('ads_users', $config);

                        $emailData = [
                            "name"              => $user_info['name'],
                            "url"               => base_url(),
                            "logo"              => base_url()."uploads/frontend/images/logo1.png",
                            "email"             => $email,
                            "rand"              => $rand
                            ];

                        // send user change email verification
                        $this->em->userSendCode($emailData);

                        $response = [
                            "status"        => "success",
                            "user"          => [
                                "agency_id"         => null,
                                "balance"           => 0,
                                "created_at"        => $user_info['register_at'],
                                "email"             => $user_info['email'],
                                "id"                => (int)logged_user_id(),
                                "isAgencyEmployee"  => false,
                                "isDirectior"       => false,
                                "mobile"            => $user_info['mobile'],
                                "mobileBeautified"  => $user_info['mobileBeautified'],
                                "name"              => $user_info['name'],
                                "present"           => 0,
                                "type"              => "customer",
                                "updated_at"        => date("Y-m-d H:i:s")
                            ],
                            "validations"   => []
                        ];
                        echo json_encode($response);
                    }
                    else
                    {
                        $output = array();
                        foreach ($_POST as $key => $value)
                        {
                            $text   =   str_ireplace('<p>','',form_error($key));
                            $text   =   str_ireplace('</p>','',$text); 
                            if ($key!='_token' AND $key!='form' AND !empty($text)) 
                            {
                                $output[$key] = [$text];
                            }
                        }
                           
                        $response = [
                            "status"        => "success",
                            "user"          => [
                                // "agency_id"         => null,
                                "balance"           => 0,
                                "created_at"        => $user_info['register_at'],
                                "email"             => $user_info['email'],
                                "id"                => logged_user_id(),
                                // "isAgencyEmployee"  => false,
                                // "isDirectior"       => false,
                                "mobile"            => $user_info['mobile'],
                                "mobileBeautified"  => $user_info['mobileBeautified'],
                                "name"              => $user_info['name'],
                                // "present"           => 0,
                                // "type"              => "customer",
                                "updated_at"        => date("Y-m-d H:i:s")
                            ],
                            "validations"   => $output
                        ];
                        echo json_encode($response);
                    }
                }
                elseif ($_POST['form']==3)
                {
                    $this->form_validation->set_rules("mobile", translate("mobile"), "trim|required|min_length[9]|max_length[9]|is_unique[ads_users.mobile_format_second]|xss_clean", 
                        [
                            "required"      => ucfirst(translate("the_phone_number_field_is_required")),
                            "min_length"    => ucfirst(translate("the_phone_number_must_consist_of_at_least_10_numbers")),
                            "max_length"    => ucfirst(translate("the_phone_number_must_consist_of_at_least_10_numbers")),
                            "is_unique"     => ucfirst(translate("the_phone_number_already_used"))
                        ]
                    );
                    $mobile       = $this->input->post('mobile', TRUE);
                    $user_info = $this->um->getUserInfo(logged_user_id());
                    if ($this->form_validation->run() === TRUE)         
                    {
                        $config = [
                            "phone"                 => "0".$mobile,
                            "mobile"                => "+994".$mobile,
                            "mobile_format_second"  => $mobile,
                            "mobileBeautified"      => formatPhoneNumber("","0".$mobile)['national'],
                            "provider_name"         => provider_name(formatPhoneNumber("","0".$mobile)['provider'])
                        ];
                        $this->db->where('id',logged_user_id());
                        $this->db->update('ads_users', $config);

                        $response = [
                            "status"        => "success",
                            "user"          => [
                                "agency_id"         => null,
                                "balance"           => 0,
                                "created_at"        => $user_info['register_at'],
                                "email"             => $user_info['email'],
                                "id"                => (int)logged_user_id(),
                                "isAgencyEmployee"  => false,
                                "isDirectior"       => false,
                                "mobile"            => $user_info['mobile'],
                                "mobileBeautified"  => $user_info['mobileBeautified'],
                                "name"              => $user_info['name'],
                                "present"           => 0,
                                "type"              => "customer",
                                "updated_at"        => date("Y-m-d H:i:s")
                            ],
                            "validations"   => []
                        ];
                        echo json_encode($response);
                    }
                    else
                    {
                        $output = array();
                        foreach ($_POST as $key => $value)
                        {
                            $text   =   str_ireplace('<p>','',form_error($key));
                            $text   =   str_ireplace('</p>','',$text); 
                            if ($key!='_token' AND $key!='form' AND !empty($text)) 
                            {
                                $output[$key] = [$text];
                            }
                        }
                           
                        $response = [
                            "status"        => "success",
                            "user"          => [
                                // "agency_id"         => null,
                                "balance"           => 0,
                                "created_at"        => $user_info['register_at'],
                                "email"             => $user_info['email'],
                                "id"                => logged_user_id(),
                                // "isAgencyEmployee"  => false,
                                // "isDirectior"       => false,
                                "mobile"            => $user_info['mobile'],
                                "mobileBeautified"  => $user_info['mobileBeautified'],
                                "name"              => $user_info['name'],
                                // "present"           => 0,
                                // "type"              => "customer",
                                "updated_at"        => date("Y-m-d H:i:s")
                            ],
                            "validations"   => $output
                        ];
                        echo json_encode($response);
                    }
                }
                elseif ($_POST['form']==5) 
                {
                    $this->form_validation->set_rules("code", translate("code"), "trim|required|min_length[4]|xss_clean", 
                        [
                            "required"      => ucfirst(translate("the_code_field_is_required")),
                            "min_length"    => ucfirst(translate("the_code_must_consist_of_at_least_4_letters"))
                        ]
                    );
                    $code       = $this->input->post('code', TRUE);
                    $user_info  = $this->um->getUserInfo(logged_user_id());

                    if ($this->form_validation->run() === TRUE)         
                    {
                        if ($user_info['email_verify_code']===$code) 
                        {
                            $config = [
                                'email'             => $user_info['second_email'],
                                'second_email'      => NULL,
                                'email_verify_code' => NULL
                            ];
                            $this->db->where('id',logged_user_id());
                            $this->db->update('ads_users', $config);

                            $response = [
                                "status"        => "success",
                                "user"          => [
                                    "agency_id"         => null,
                                    "balance"           => 0,
                                    "register_at"       => $user_info['register_at'],
                                    "email"             => $user_info['email'],
                                    "id"                => (int)logged_user_id(),
                                    "isAgencyEmployee"  => false,
                                    "isDirectior"       => false,
                                    "mobile"            => $user_info['mobile'],
                                    "mobileBeautified"  => $user_info['mobileBeautified'],
                                    "name"              => $user_info['name'],
                                    "present"           => 0,
                                    "type"              => "customer",
                                    "updated_at"        => date("Y-m-d H:i:s")
                                ],
                                "validations"   => []
                            ];
                            echo json_encode($response);
                        }
                        else
                        {
                            $response = [
                                "status"        => "success",
                                "user"          => [
                                    "agency_id"         => null,
                                    "balance"           => 0,
                                    "register_at"       => $user_info['register_at'],
                                    "email"             => $user_info['email'],
                                    "id"                => (int)logged_user_id(),
                                    "isAgencyEmployee"  => false,
                                    "isDirectior"       => false,
                                    "mobile"            => $user_info['mobile'],
                                    "mobileBeautified"  => $user_info['mobileBeautified'],
                                    "name"              => $user_info['name'],
                                    "present"           => 0,
                                    "type"              => "customer",
                                    "updated_at"        => date("Y-m-d H:i:s")
                                ],
                                "validations"   => [
                                    "code" => [translate("code_is_not_valid")]
                                ]
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
                            if ($key!='_token' AND $key!='form' AND !empty($text)) 
                            {
                                $output[$key] = [$text];
                            }
                        }
                           
                        $response = [
                            "status"        => "success",
                            "user"          => [
                                // "agency_id"         => null,
                                "balance"           => 0,
                                "created_at"        => $user_info['register_at'],
                                "email"             => $user_info['email'],
                                "id"                => logged_user_id(),
                                // "isAgencyEmployee"  => false,
                                // "isDirectior"       => false,
                                "mobile"            => $user_info['mobile'],
                                "mobileBeautified"  => $user_info['mobile'],
                                "name"              => $user_info['name'],
                                // "present"           => 0,
                                // "type"              => "customer",
                                "updated_at"        => date("Y-m-d H:i:s")
                            ],
                            "validations"   => $output
                        ];
                        echo json_encode($response);
                    }
                }
            }
        }
    }
    public function account()
    {
        if (!is_user_loggedin()) 
        {
            $this->session->set_userdata('redirect_url', current_url());
            redirect(base_url(), 'refresh');
        }
        $this->data['main_menu']        = 'account';
        $this->data['user_info']        = $this->um->getUserInfo(logged_user_id());
        $this->data['page_data'] = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents'] = $this->load->view('user/account', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function balance()
    {
        if (!is_user_loggedin()) 
        {
            $this->session->set_userdata('redirect_url', current_url());
            redirect(base_url(), 'refresh');
        }
        $this->data['main_menu']        = 'balance';
        $this->data['user_info']        = $this->um->getUserInfo(logged_user_id());
        $this->data['page_data']        = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents']    = $this->load->view('user/balance', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }

    public function statistics()
    {
        if (!is_user_loggedin()) 
        {
            $this->session->set_userdata('redirect_url', current_url());
            redirect(base_url(), 'refresh');
        }
        $this->data['main_menu']        = 'statistics';
        $this->data['user_info']        = $this->um->getUserInfo(logged_user_id());
        $this->data['page_data'] = $this->home_model->get('front_cms_home_seo', array('branch_id' => 1), true);
        $this->data['main_contents'] = $this->load->view('user/statistics', $this->data, true);
        $this->load->view('home/layout/index', $this->data);
    }


    public function wishlist()
    {
        if (!$this->input->is_ajax_request()) 
        {
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
