<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @package : Estate.az - Daşınmaz əmlak platforması
 * @version : 1.0
 * @developed by : Webox Agency
 * @support : aghakarim.karimov@gmail.com
 * @author url : https://webox.az
 * @filename : Settings.php
 * @copyright : Aghakarim Karimov & Cavid Shixiyev
 */

class Settings extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('useragreements_model','ua');
        $this->load->model('adsrules_model', 'ar');
        $this->load->model('right_left_banners_model', 'rlmodel');
        $this->load->model('ads_configuration_model', 'acmodel');
        $this->load->model('about_ads_configuration_model', 'aacmodel');
        
    }

    public function index()
    {
        redirect(base_url(), 'refresh');
    }



    /* global settings controller */
    
    /* user agreement */
    public function user_agreement()
    {
         if ($this->input->post('submit') == 'edit') {
                $this->form_validation->set_rules('content', translate('content'), 'required');
                $this->form_validation->set_rules('status', translate('status'), 'required');
                
                if ($this->form_validation->run() == true) 
                {
                    $post = $this->input->post();
                    // dd($post);
                    $data_model = [
                        "content" => $this->input->post('content'),
                        "status"  => $this->input->post('status')
                    ];

                    $response = $this->ua->user_agreement_edit($data_model);
                    if ($response) {
                        set_alert('success', translate('information_has_been_updated_successfully'));
                    }
                    redirect(base_url('settings/user_agreement'));
                } 
                else 
                {
                    $this->data['validation_error'] = true;
                }
        }
        $this->data['user_agreement']  = $this->ua->getUserAgreements()[0];
        $this->data['title']            = translate('user_agreement');
        $this->data['sub_page']         = 'settings/user_agreement';
        $this->data['main_menu']        = 'settings';
        $this->load->view('layout/index', $this->data);
    }


     /* ads rules */
    public function ads_rules()
    {
         if ($this->input->post('submit') == 'edit') {
                $this->form_validation->set_rules('content', translate('content'), 'required');
                $this->form_validation->set_rules('status', translate('status'), 'required');
                
                if ($this->form_validation->run() == true) 
                {
                    $post = $this->input->post();
                    // dd($post);
                    $data_model = [
                        "content" => $this->input->post('content'),
                        "status"  => $this->input->post('status')
                    ];

                    $response = $this->ar->ads_rules_edit($data_model);
                    if ($response) {
                        set_alert('success', translate('information_has_been_updated_successfully'));
                    }
                    redirect(base_url('settings/ads_rules'));
                } 
                else 
                {
                    $this->data['validation_error'] = true;
                }
        }
        $this->data['ads_rules']        = $this->ar->getAdsRules()[0] ?? "";
        // dd($this->data['ads_rules']);
        $this->data['title']            = translate('ads_rules');
        $this->data['sub_page']         = 'settings/ads_rules';
        $this->data['main_menu']        = 'locations';
        $this->load->view('layout/index', $this->data);
    }

    public function ads_rules_edit()
    {
        
         if ($this->input->post('submit') == 'edit') {
                $this->form_validation->set_rules('content', translate('content'), 'required');
                $this->form_validation->set_rules('status', translate('status'), 'required');
                
                if ($this->form_validation->run() == true) 
                {
                    $post = $this->input->post();
                    $response = $this->ar->ads_rules_edit($post);
                    if ($response) {
                        set_alert('success', translate('information_has_been_updated_successfully'));
                    }
                    redirect(base_url('settings/ads_rules'));
                } 
                else 
                {
                    $this->data['validation_error'] = true;
                }
        }
        $this->data['ads_rules']  = $this->ar->getAdsRules()[0];
        $this->data['title']            = translate('ads_rules');
        $this->data['sub_page']         = 'settings/ads_rules';
        $this->data['main_menu']        = 'locations';
        $this->load->view('layout/index', $this->data);
    }



    public function universal()
    {
        if (!get_permission('global_settings', 'is_view')) {
            access_denied();
        }

        if ($_POST) {
            if (!get_permission('global_settings', 'is_edit')) {
                access_denied();
            }
        }

        $config = array();
        if ($this->input->post('submit') == 'setting') {
            foreach ($this->input->post() as $input => $value) {
                if ($input == 'submit') {
                    continue;
                }
                $config[$input] = $value;
            }
            if (empty($config['reg_prefix'])) {
                $config['reg_prefix'] = false;
            }
            $this->db->where('id', 1);
            $this->db->update('global_settings', $config);
            set_alert('success', translate('the_configuration_has_been_updated'));
            redirect(current_url());
        }

        if ($this->input->post('submit') == 'theme') {
            foreach ($this->input->post() as $input => $value) {
                if ($input == 'submit') {
                    continue;
                }
                $config[$input] = $value;
            }
            $this->db->where('id', 1);
            $this->db->update('theme_settings', $config);
            set_alert('success', translate('the_configuration_has_been_updated'));
            $this->session->set_flashdata('active', 2);
            redirect(current_url());
        }

        if ($this->input->post('submit') == 'logo') {
            move_uploaded_file($_FILES['logo_file']['tmp_name'], 'uploads/app_image/logo.png');
            move_uploaded_file($_FILES['text_logo']['tmp_name'], 'uploads/app_image/logo-small.png');
            move_uploaded_file($_FILES['print_file']['tmp_name'], 'uploads/app_image/printing-logo.png');
            move_uploaded_file($_FILES['report_card']['tmp_name'], 'uploads/app_image/report-card-logo.png');

            move_uploaded_file($_FILES['slider_1']['tmp_name'], 'uploads/login_image/slider_1.jpg');
            move_uploaded_file($_FILES['slider_2']['tmp_name'], 'uploads/login_image/slider_2.jpg');
            move_uploaded_file($_FILES['slider_3']['tmp_name'], 'uploads/login_image/slider_3.jpg');

            move_uploaded_file($_FILES['sidebox_1']['tmp_name'], 'assets/login_page/image/sidebox.jpg');
            move_uploaded_file($_FILES['profile_bg']['tmp_name'], 'assets/images/profile_bg.jpg');

            set_alert('success', translate('the_configuration_has_been_updated'));
            $this->session->set_flashdata('active', 3);
            redirect(current_url());
        }

        if ($this->input->post('submit') == 'banner') {
            move_uploaded_file($_FILES['header_banner']['tmp_name'], 'uploads/app_image/header_banner.png');
            move_uploaded_file($_FILES['right_banner']['tmp_name'], 'uploads/app_image/right_banner.png');
            move_uploaded_file($_FILES['left_banner']['tmp_name'], 'uploads/app_image/left_banner.png');
            move_uploaded_file($_FILES['center_banner']['tmp_name'], 'uploads/app_image/center_banner.png');
            set_alert('success', translate('the_configuration_has_been_updated'));
            $this->session->set_flashdata('active', 4);
            redirect(current_url());
        }


        $this->data['title'] = translate('global_settings');
        $this->data['sub_page'] = 'settings/universal';
        $this->data['main_menu'] = 'settings';
        $this->data['headerelements'] = array(
            'css' => array(
                'vendor/dropify/css/dropify.min.css',
            ),
            'js' => array(
                'vendor/dropify/js/dropify.min.js',
            ),
        );
        $this->load->view('layout/index', $this->data);
    }

    /* ads banner controller */
    public function ads_banners()
    { 
         $this->uploadPath = 'uploads/banners/'; 
         $this->load->library('upload');
         if ($this->input->post('submit') == 'save') {

                // $this->form_validation->set_rules('file', translate('file'), 'required');
                $this->form_validation->set_rules('position', translate('position'), 'required');
                $this->form_validation->set_rules('external_link', translate('external_link'), 'required');
                $this->form_validation->set_rules('status', translate('status'), 'required');
                
                if ($this->form_validation->run() == true) 
                {
                   $data = array(); 
                      if(!empty($_FILES['file']['name']))
                      { 
                        $config['upload_path']   = $this->uploadPath; 
                        $config['allowed_types'] = 'jpg|jpeg|png'; 
                        $config['max_size']      = '6144';
                        $config['remove_spaces'] = TRUE;        
                        $config['encrypt_name']  = TRUE;
                        // Load and initialize upload library 
                        $this->load->library('upload', $config); 
                        $this->upload->initialize($config);
                        // Upload file to server 

                        if($this->upload->do_upload('file')){ 
                            $uploadData     = $this->upload->data(); 
                            $uploadedImage  = $uploadData['file_name'];  
                             // dd($uploadedImage);
                            $source_path  = $this->uploadPath.$uploadedImage;
                         }
                     }
                      else
                      { 
                         // $data['response'] = 'failed'; 
                      } 

                    $post = $this->input->post();
                    
                    $data_model = [
                        "file"          => $source_path,
                        "status"        => $this->input->post('status'),
                        "position"      => $this->input->post('position'),
                        "external_link" => $this->input->post('external_link'),
                    ];

                    $response = $this->rlmodel->ads_banners_save($data_model);
                    if ($response) {
                        set_alert('success', translate('information_has_been_updated_successfully'));
                    }
                    redirect(base_url('settings/ads_banners'));
                } 
                else 
                {
                    $this->data['validation_error'] = true;
                }
        }
        $this->data['banners']          = $this->rlmodel->getAdsBanners();
        $this->data['title']            = translate('ads_banners');
        $this->data['sub_page']         = 'settings/ads_banners';
        $this->data['main_menu']        = 'settings';
        $this->load->view('layout/index', $this->data);
    }



    public function edit_banner($id = '')
    {
         $this->uploadPath = 'uploads/banners/'; 
         $this->load->library('upload');
         if ($this->input->post('submit') == 'edit') {

                $this->form_validation->set_rules('position', translate('position'), 'required');
                $this->form_validation->set_rules('external_link', translate('external_link'), 'required');
                $this->form_validation->set_rules('status', translate('status'), 'required');
                
                if ($this->form_validation->run() == true) 
                {
                    $data = array(); 
                      if(!empty($_FILES['file']['name']))
                      { 
                        $config['upload_path']   = $this->uploadPath; 
                        $config['allowed_types'] = 'jpg|jpeg|png'; 
                        $config['max_size']      = '6144';
                        $config['remove_spaces'] = TRUE;        
                        $config['encrypt_name']  = TRUE;
                        $this->load->library('upload', $config); 
                        $this->upload->initialize($config);

                        if($this->upload->do_upload('file')){ 
                            $uploadData     = $this->upload->data(); 
                            $uploadedImage  = $uploadData['file_name'];  
                            $source_path  = $this->uploadPath.$uploadedImage;
                         }
                     }
                      else
                      { 
                         // $data['response'] = 'failed'; 
                      } 

                      $data_model = [
                        "file"          => $source_path,
                        "status"        => $this->input->post('status'),
                        "position"      => $this->input->post('position'),
                        "external_link" => $this->input->post('external_link'),
                    ];

                    

                    $response = $this->rlmodel->edit_banner($data_model);
                    if ($response) {
                        set_alert('success', translate('information_has_been_updated_successfully'));
                    }
                    redirect(base_url('settings/ads_banners'));
                } 
                else 
                {
                    $this->data['validation_error'] = true;
                }
        
        }
        

        $this->data['banner']          = $this->rlmodel->getAdsBanner($id);
        $this->data['title']            = translate('edit_banner');
        $this->data['sub_page']         = 'settings/edit_banner.php';
        $this->data['main_menu']        = 'settings';

        $this->load->view('layout/index', $this->data);
    }

    public function banner_status()
    {
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        if ($status == 'true') {
            $arrayData['status'] = 1;
        } else {
            $arrayData['status'] = 0;
        }
       
        $this->db->where('id', $id);
        $this->db->update('right_left_banners', $arrayData);
        $return = array('msg' => translate('information_has_been_updated_successfully'), 'status' => true);
        echo json_encode($return);
    }

    public function delete_banner($id = '')
    {
        if (is_superadmin_loggedin()) {
            $this->db->where('id', $id);
            $this->db->delete('right_left_banners');
        } else {
            redirect(base_url(), 'refresh');
        }
    }



    /* school settings controller */
    public function school()
    {
        if (!get_permission('school_settings', 'is_view')) {
            access_denied();
        }
        if ($_POST) {
            if (!get_permission('school_settings', 'is_edit')) {
                ajax_access_denied();
            }
            $this->form_validation->set_rules('branch_name', translate('branch_name'), 'trim|required|callback_unique_branchname');
            $this->form_validation->set_rules('school_name', translate('school_name'), 'trim|required');
            $this->form_validation->set_rules('email', translate('email'), 'trim|required|valid_email');
            $this->form_validation->set_rules('currency', translate('currency'), 'trim|required');
            if ($this->form_validation->run() == true) {
                $this->branchUpdate($this->input->post());
                $message = translate('the_configuration_has_been_updated');
                $array = array('status' => 'success', 'message' => $message);
            } else {
                $error = $this->form_validation->error_array();
                $array = array('status' => 'fail', 'error' => $error);
            }
            echo json_encode($array);
            exit();
        }
        $this->data['title'] = translate('school_settings');
        $this->data['sub_page'] = 'settings/school';
        $this->data['main_menu'] = 'settings';
        $this->load->view('layout/index', $this->data);
    }

    public function unique_branchname($name)
    {
        $this->db->where_not_in('id', get_loggedin_branch_id());
        $this->db->where('name', $name);
        $name = $this->db->get('branch')->num_rows();
        if ($name == 0) {
            return true;
        } else {
            $this->form_validation->set_message("unique_branchname", translate('already_taken'));
            return false;
        }
    }

    public function payment()
    {
        if (!get_permission('payment_settings', 'is_view')) {
            access_denied();
        }

        $branchID = $this->application_model->get_branch_id();
        $this->data['branch_id'] = $branchID;
        $this->data['config'] = $this->get_payment_config();
        $this->data['sub_page'] = 'settings/payment_gateway';
        $this->data['main_menu'] = 'settings';
        $this->data['title'] = translate('payment_control');
        $this->load->view('layout/index', $this->data);
    }

    public function paypal_save()
    {
        if (!get_permission('payment_settings', 'is_add')) {
            ajax_access_denied();
        }
        $branchID = $this->application_model->get_branch_id();
        $this->form_validation->set_rules('paypal_username', 'Paypal Username', 'trim|required');
        $this->form_validation->set_rules('paypal_password', 'Paypal Password', 'trim|required');
        $this->form_validation->set_rules('paypal_signature', 'Paypal Signature', 'trim|required');
        $this->form_validation->set_rules('paypal_email', 'Paypal Email', 'trim|required');
        if ($this->form_validation->run() !== false) {
            $paypal_sandbox = isset($_POST['paypal_sandbox']) ? 1 : 2;
            $arrayPaypal = array(
                'paypal_username' => $this->input->post('paypal_username'),
                'paypal_password' => $this->input->post('paypal_password'),
                'paypal_signature' => $this->input->post('paypal_signature'),
                'paypal_email' => $this->input->post('paypal_email'),
                'paypal_sandbox' => $paypal_sandbox,
            );
            $this->db->where('branch_id', $branchID);
            $q = $this->db->get('payment_config');
            if ($q->num_rows() == 0) {
                $arrayPaypal['branch_id'] = $branchID;
                $this->db->insert('payment_config', $arrayPaypal);
            } else {
                $this->db->where('id', $q->row()->id);
                $this->db->update('payment_config', $arrayPaypal);
            }
            $message = translate('the_configuration_has_been_updated');
            $array = array('status' => 'success', 'message' => $message);
        } else {
            $error = $this->form_validation->error_array();
            $array = array('status' => 'fail', 'error' => $error);
        }
        echo json_encode($array);
    }

    public function stripe_save()
    {
        if (!get_permission('payment_settings', 'is_add')) {
            ajax_access_denied();
        }
        $branchID = $this->application_model->get_branch_id();
        $this->form_validation->set_rules('stripe_secret', 'Stripe Secret Key', 'trim|required');
        if ($this->form_validation->run() !== false) {
            $stripe_demo = isset($_POST['stripe_demo']) ? 1 : 2;
            $arrayPaypal = array(
                'stripe_secret' => $this->input->post('stripe_secret'),
                'stripe_demo' => $stripe_demo,
            );
            $this->db->where('branch_id', $branchID);
            $q = $this->db->get('payment_config');
            if ($q->num_rows() == 0) {
                $arrayPaypal['branch_id'] = $branchID;
                $this->db->insert('payment_config', $arrayPaypal);
            } else {
                $this->db->where('id', $q->row()->id);
                $this->db->update('payment_config', $arrayPaypal);
            }
            $message = translate('the_configuration_has_been_updated');
            $array = array('status' => 'success', 'message' => $message);
        } else {
            $error = $this->form_validation->error_array();
            $array = array('status' => 'fail', 'error' => $error);
        }
        echo json_encode($array);
    }

    public function payumoney_save()
    {
        if (!get_permission('payment_settings', 'is_add')) {
            ajax_access_denied();
        }
        $branchID = $this->application_model->get_branch_id();
        $this->form_validation->set_rules('payumoney_key', 'Payumoney Key', 'trim|required');
        $this->form_validation->set_rules('payumoney_salt', 'Payumoney Salt', 'trim|required');
        if ($this->form_validation->run() !== false) {
            $payumoney_demo = isset($_POST['payumoney_demo']) ? 1 : 2;
            $arrayPayumoney = array(
                'payumoney_key' => $this->input->post('payumoney_key'),
                'payumoney_salt' => $this->input->post('payumoney_salt'),
                'payumoney_demo' => $payumoney_demo,
            );
            $this->db->where('branch_id', $branchID);
            $q = $this->db->get('payment_config');
            if ($q->num_rows() == 0) {
                $arrayPayumoney['branch_id'] = $branchID;
                $this->db->insert('payment_config', $arrayPayumoney);
            } else {
                $this->db->where('id', $q->row()->id);
                $this->db->update('payment_config', $arrayPayumoney);
            }
            $message = translate('the_configuration_has_been_updated');
            $array = array('status' => 'success', 'message' => $message);
        } else {
            $error = $this->form_validation->error_array();
            $array = array('status' => 'fail', 'error' => $error);
        }
        echo json_encode($array);
    }

    public function paystack_save()
    {
        if (!get_permission('payment_settings', 'is_add')) {
            ajax_access_denied();
        }
        $branchID = $this->application_model->get_branch_id();
        $this->form_validation->set_rules('paystack_secret_key', 'Paystack API Key', 'trim|required');
        if ($this->form_validation->run() !== false) {
            $arrayPaystack = array(
                'paystack_secret_key' => $this->input->post('paystack_secret_key'),
            );
            $this->db->where('branch_id', $branchID);
            $q = $this->db->get('payment_config');
            if ($q->num_rows() == 0) {
                $arrayMollie['branch_id'] = $branchID;
                $this->db->insert('payment_config', $arrayPaystack);
            } else {
                $this->db->where('id', $q->row()->id);
                $this->db->update('payment_config', $arrayPaystack);
            }
            $message = translate('the_configuration_has_been_updated');
            $array = array('status' => 'success', 'message' => $message);
        } else {
            $error = $this->form_validation->error_array();
            $array = array('status' => 'fail', 'error' => $error);
        }
        echo json_encode($array);
    }

    public function razorpay_save()
    {
        if (!get_permission('payment_settings', 'is_add')) {
            ajax_access_denied();
        }
        $branchID = $this->application_model->get_branch_id();
        $this->form_validation->set_rules('razorpay_key_id', 'Key Id', 'trim|required');
        $this->form_validation->set_rules('razorpay_key_secret', 'Key Secret', 'trim|required');
        if ($this->form_validation->run() !== false) {
            $razorpay_demo = isset($_POST['razorpay_demo']) ? 1 : 2;
            $arrayRazorpay = array(
                'razorpay_key_id' => $this->input->post('razorpay_key_id'),
                'razorpay_key_secret' => $this->input->post('razorpay_key_secret'),
            );
            $this->db->where('branch_id', $branchID);
            $q = $this->db->get('payment_config');
            if ($q->num_rows() == 0) {
                $arrayRazorpay['branch_id'] = $branchID;
                $this->db->insert('payment_config', $arrayRazorpay);
            } else {
                $this->db->where('id', $q->row()->id);
                $this->db->update('payment_config', $arrayRazorpay);
            }
            $message = translate('the_configuration_has_been_updated');
            $array = array('status' => 'success', 'message' => $message);
        } else {
            $error = $this->form_validation->error_array();
            $array = array('status' => 'fail', 'error' => $error);
        }
        echo json_encode($array);
    }

    public function payment_active()
    {
        if (!get_permission('payment_settings', 'is_add')) {
            ajax_access_denied();
        }
        $branchID = $this->application_model->get_branch_id();
        $paypal_status = isset($_POST['paypal_status']) ? 1 : 2;
        $stripe_status = isset($_POST['stripe_status']) ? 1 : 2;
        $payumoney_status = isset($_POST['payumoney_status']) ? 1 : 2;
        $paystack_status = isset($_POST['paystack_status']) ? 1 : 2;
        $razorpay_status = isset($_POST['razorpay_status']) ? 1 : 2;
        $midtrans_status = isset($_POST['midtrans_status']) ? 1 : 2;
        $sslcommerz_status = isset($_POST['sslcommerz_status']) ? 1 : 2;
        $jazzcash_status = isset($_POST['jazzcash_status']) ? 1 : 2;
        $arrayData = array(
            'paypal_status' => $paypal_status,
            'stripe_status' => $stripe_status,
            'payumoney_status' => $payumoney_status,
            'paystack_status' => $paystack_status,
            'razorpay_status' => $razorpay_status,
            'midtrans_status' => $midtrans_status,
            'sslcommerz_status' => $sslcommerz_status,
            'jazzcash_status' => $jazzcash_status,
        );

        $this->db->where('branch_id', $branchID);
        $q = $this->db->get('payment_config');
        if ($q->num_rows() == 0) {
            $arrayData['branch_id'] = $branchID;
            $this->db->insert('payment_config', $arrayData);
        } else {
            $this->db->where('id', $q->row()->id);
            $this->db->update('payment_config', $arrayData);
        }
        $message = translate('the_configuration_has_been_updated');
        $array = array('status' => 'success', 'message' => $message);
        echo json_encode($array);
    }

    public function midtrans_save()
    {
        if (!get_permission('payment_settings', 'is_add')) {
            ajax_access_denied();
        }
        $branchID = $this->application_model->get_branch_id();
        $this->form_validation->set_rules('midtrans_client_key', 'Client Key', 'trim|required');
        $this->form_validation->set_rules('midtrans_server_key', 'Server Key', 'trim|required');
        if ($this->form_validation->run() !== false) {
            $sandbox = isset($_POST['midtrans_sandbox']) ? 1 : 2;
            $arrayMidtrans = array(
                'midtrans_client_key' => $this->input->post('midtrans_client_key'),
                'midtrans_server_key' => $this->input->post('midtrans_server_key'),
                'midtrans_sandbox' => $sandbox,
            );
            $this->db->where('branch_id', $branchID);
            $q = $this->db->get('payment_config');
            if ($q->num_rows() == 0) {
                $arrayMidtrans['branch_id'] = $branchID;
                $this->db->insert('payment_config', $arrayMidtrans);
            } else {
                $this->db->where('id', $q->row()->id);
                $this->db->update('payment_config', $arrayMidtrans);
            }
            $message = translate('the_configuration_has_been_updated');
            $array = array('status' => 'success', 'message' => $message);
        } else {
            $error = $this->form_validation->error_array();
            $array = array('status' => 'fail', 'error' => $error);
        }
        echo json_encode($array);
    }

    public function sslcommerz_save()
    {
        if (!get_permission('payment_settings', 'is_add')) {
            ajax_access_denied();
        }
        $branchID = $this->application_model->get_branch_id();
        $this->form_validation->set_rules('sslcz_store_id', 'Store ID', 'trim|required');
        $this->form_validation->set_rules('sslcz_store_passwd', 'Store Password', 'trim|required');
        if ($this->form_validation->run() !== false) {
            $sandbox = isset($_POST['sslcommerz_sandbox']) ? 1 : 2;
            $arraySSLcommerz = array(
                'sslcz_store_id' => $this->input->post('sslcz_store_id'),
                'sslcz_store_passwd' => $this->input->post('sslcz_store_passwd'),
                'sslcommerz_sandbox' => $sandbox,
            );
            $this->db->where('branch_id', $branchID);
            $q = $this->db->get('payment_config');
            if ($q->num_rows() == 0) {
                $arraySSLcommerz['branch_id'] = $branchID;
                $this->db->insert('payment_config', $arraySSLcommerz);
            } else {
                $this->db->where('id', $q->row()->id);
                $this->db->update('payment_config', $arraySSLcommerz);
            }
            $message = translate('the_configuration_has_been_updated');
            $array = array('status' => 'success', 'message' => $message);
        } else {
            $error = $this->form_validation->error_array();
            $array = array('status' => 'fail', 'error' => $error);
        }
        echo json_encode($array);
    }
    
    public function jazzcash_save()
    {
        if (!get_permission('payment_settings', 'is_add')) {
            ajax_access_denied();
        }
        $branchID = $this->application_model->get_branch_id();
        $this->form_validation->set_rules('jazzcash_merchant_id', 'Jazzcash Merchant ID', 'trim|required');
        $this->form_validation->set_rules('jazzcash_passwd', 'Jazzcash Password', 'trim|required');
        $this->form_validation->set_rules('jazzcash_integerity_salt', 'Jazzcash Integerity Salt', 'trim|required');
        if ($this->form_validation->run() !== false) {
            $sandbox = isset($_POST['jazzcash_sandbox']) ? 1 : 2;
            $arraySSLcommerz = array(
                'jazzcash_merchant_id' => $this->input->post('jazzcash_merchant_id'),
                'jazzcash_passwd' => $this->input->post('jazzcash_passwd'),
                'jazzcash_integerity_salt' => $this->input->post('jazzcash_integerity_salt'),
                'jazzcash_sandbox' => $sandbox,
            );
            $this->db->where('branch_id', $branchID);
            $q = $this->db->get('payment_config');
            if ($q->num_rows() == 0) {
                $arraySSLcommerz['branch_id'] = $branchID;
                $this->db->insert('payment_config', $arraySSLcommerz);
            } else {
                $this->db->where('id', $q->row()->id);
                $this->db->update('payment_config', $arraySSLcommerz);
            }
            $message = translate('the_configuration_has_been_updated');
            $array = array('status' => 'success', 'message' => $message);
        } else {
            $error = $this->form_validation->error_array();
            $array = array('status' => 'fail', 'error' => $error);
        }
        echo json_encode($array);
    }

    public function branchUpdate($data)
    {
        $arrayBranch = array(
            'name' => $data['branch_name'],
            'school_name' => $data['school_name'],
            'email' => $data['email'],
            'mobileno' => $data['mobileno'],
            'currency' => $data['currency'],
            'symbol' => $data['currency_symbol'],
            'city' => $data['city'],
            'state' => $data['state'],
            'address' => $data['address'],
        );
        $this->db->where('id', get_loggedin_branch_id());
        $this->db->update('branch', $arrayBranch);
    }






    public function ads_configuration()
    {
         if ($this->input->post('submit') == 'edit') {
                $this->form_validation->set_rules('home_ads_limit', translate('home_ads_limit'), 'required');
                $this->form_validation->set_rules('detail_ads_limit', translate('detail_ads_limit'), 'required');
                $this->form_validation->set_rules('category_ads_limit', translate('category_ads_limit'), 'required');
                $this->form_validation->set_rules('min_photo_count', translate('min_photo_count'), 'required');
                $this->form_validation->set_rules('max_photo_count', translate('max_photo_count'), 'required');
                $this->form_validation->set_rules('one_number_ads_count', translate('one_number_ads_count'), 'required');
                $this->form_validation->set_rules('ads_expire_day', translate('ads_expire_day'), 'required');


                
                if ($this->form_validation->run() == true) 
                {
                    $post = $this->input->post();
                    $data_model = [
                        "home_ads_limit" => $this->input->post('home_ads_limit'),
                        "detail_ads_limit" => $this->input->post('detail_ads_limit'),
                        "category_ads_limit" => $this->input->post('category_ads_limit'),
                        "min_photo_count" => $this->input->post('min_photo_count'),
                        "max_photo_count" => $this->input->post('max_photo_count'),
                        "one_number_ads_count" => $this->input->post('one_number_ads_count'),
                        "ads_expire_day"  => $this->input->post('ads_expire_day')
                    ];

                    $response = $this->acmodel->ads_configuration_edit($data_model);
                    if ($response) {
                        set_alert('success', translate('information_has_been_updated_successfully'));
                    }
                    redirect(base_url('settings/ads_configuration'));
                } 
                else 
                {
                    $this->data['validation_error'] = true;
                }
        }
        $this->data['ads_configuration']  = $this->acmodel->getAdsConfigurations()[0];
        $this->data['title']            = translate('ads_configuration');
        $this->data['sub_page']         = 'settings/ads_configuration';
        $this->data['main_menu']        = 'settings';
        $this->load->view('layout/index', $this->data);
    }


     public function about_ads_configuration()
    {

        $this->data['about_ads_configuration']  = $this->aacmodel->getAboutAdsConfigurations();
        $this->data['title']            = translate('about_ads_configuration');
        $this->data['sub_page']         = 'settings/about_ads_configuration';
        $this->data['main_menu']        = 'settings';
        $this->load->view('layout/index', $this->data);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        if ($status == 'true') {
            $arrayData['status'] = 1;
        } else {
            $arrayData['status'] = 0;
        }
       
        $this->db->where('id', $id);
        $this->db->update('about_ads_configuration', $arrayData);
        $return = array('msg' => translate('information_has_been_updated_successfully'), 'status' => true);
        echo json_encode($return); 
    }



}
