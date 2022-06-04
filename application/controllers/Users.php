<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @package : Ramom school management system
 * @version : 4.0
 * @developed by : RamomCoder
 * @support : ramomcoder@yahoo.com
 * @author url : http://codecanyon.net/user/RamomCoder
 * @filename : Student.php
 * @copyright : Reserved RamomCoder Team
 */

class Users extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model','u');
    }


    public function index()
    {

        if ($this->input->post('submit') == 'save') {
                $this->form_validation->set_rules('name', translate('name'), 'required');
                $this->form_validation->set_rules('email', translate('email'), 'required|is_unique[ads_users.email]');
                $this->form_validation->set_rules('mobile', translate('phone'), 'required|is_unique[ads_users.mobile]');
                $this->form_validation->set_rules('status', translate('status'), 'required');
                
                if ($this->form_validation->run() == true) {
                    $post = $this->input->post();
                    $response = $this->u->user_save($post);
                    if ($response) {
                        set_alert('success', translate('information_has_been_saved_successfully'));
                    }
                    redirect(base_url('users/index'));
                } else {
                    $this->data['validation_error'] = true;
                }
        }

        $this->data['users']        =  $this->u->allUsers();
        $this->data['title']        =  translate('users');
        $this->data['sub_page']     =  'users/index';
        $this->data['main_menu']    =  'users';
        $this->load->view('layout/index', $this->data);
    }

    public function user_status()
    {
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        if ($status == 'true') {
            $arrayData['status'] = 1;
        } else {
            $arrayData['status'] = 0;
        }
       
        $this->db->where('id', $id);
        $this->db->update('ads_users', $arrayData);
        $return = array('msg' => translate('information_has_been_updated_successfully'), 'status' => true);
        echo json_encode($return);
    }



    public function user_edit($id = '')
    {
         if ($this->input->post('submit') == 'edit') {
                $this->form_validation->set_rules('name', translate('name'), 'required');
                $this->form_validation->set_rules('email', translate('email'), 'required|is_unique[ads_users.email]');
                $this->form_validation->set_rules('mobile', translate('phone'), 'required|is_unique[ads_users.mobile]');
                $this->form_validation->set_rules('status', translate('status'), 'required');
                
                if ($this->form_validation->run() == true) 
                {
                    $post = $this->input->post();
                    $response = $this->u->user_edit($post,$id);
                    if ($response) {
                        set_alert('success', translate('information_has_been_updated_successfully'));
                    }
                    redirect(base_url('users/index'));
                } 
                else 
                {
                    $this->data['validation_error'] = true;
                }
        }
        
        $this->data['user']         = $this->u->getUser($id)[0];
        $this->data['title']        = translate('users');
        $this->data['sub_page']     = 'users/user_edit';
        $this->data['main_menu']    = 'users';
        $this->load->view('layout/index', $this->data);
    }


    public function user_delete($id = '')
    {

            $this->db->where('id', $id);
            $this->db->delete('ads_users');
       
            redirect(base_url(), 'refresh');
        
    }
}
