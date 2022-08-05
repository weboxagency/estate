<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @package : Estate.az - Daşınmaz əmlak platforması
 * @version : 1.0
 * @developed by : Webox Agency
 * @support : aghakarim.karimov@gmail.com
 * @author url : https://webox.az
 * @filename : Award.php
 * @copyright : Aghakarim Karimov & Cavid Shixiyev
 */

class Agencies extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('agencies_model','am');
    }

    //cities

    public function index()
    {
        if ($this->input->post('submit') == 'save') {
                $this->form_validation->set_rules('agency_name', translate('agency_name'), 'required');
                $this->form_validation->set_rules('agency_address', translate('agency_address'), 'required');
                $this->form_validation->set_rules('agency_phone_1', translate('agency_phone_1'), 'required');
                $this->form_validation->set_rules('agency_email', translate('agency_email'), 'required');
                $this->form_validation->set_rules('agency_description', translate('agency_description'), 'required');
                $this->form_validation->set_rules('agency_status', translate('status'), 'required');
                $this->form_validation->set_rules('img', 'picture',array(array('handle_upload', array($this->application_model, 'profilePicUpload'))));

                if ($this->form_validation->run() == true) 
                {
                    $post = $this->input->post();
                    $response = $this->am->agency_save($post);

                    if ($response) {
                        set_alert('success', translate('information_has_been_saved_successfully'));
                    }
                    redirect(base_url('agencies/index'));
                } 
                else 
                {
                    dd(validation_errors());
                    $this->data['validation_error'] = true;
                }
        }
       
        $this->data['agencies']     =  $this->am->allAgencies();
        $this->data['title']        = translate('agencies');
        $this->data['sub_page']     = 'agencies/index';
        $this->data['main_menu']    = 'agencies';
        $this->load->view('layout/index', $this->data);

    }

    public function agency_status()
    {
        $id = $this->input->post('id');
        $status = $this->input->post('agency_status');
        if ($status == 'true') {
            $arrayData['agency_status'] = 1;
        } else {
            $arrayData['agency_status'] = 0;
        }
       
        $this->db->where('agency_id', $id);
        $this->db->update('agencies', $arrayData);
        $return = array('msg' => translate('information_has_been_updated_successfully'), 'status' => true);
        echo json_encode($return);
    }

    public function agency_delete($id = '')
    {
        if (is_superadmin_loggedin()) {
            $this->db->where('agency_id', $id);
            $this->db->delete('agencies');
        } else {
            redirect(base_url(), 'refresh');
        }
    }

    public function agency_edit($id = '')
    {
         if ($this->input->post('submit') == 'edit') {
                $this->form_validation->set_rules('agency_name', translate('agency_name'), 'required');
                $this->form_validation->set_rules('agency_address', translate('agency_address'), 'required');
                $this->form_validation->set_rules('agency_phone_1', translate('agency_phone_1'), 'required');
                $this->form_validation->set_rules('agency_email', translate('agency_email'), 'required');
                $this->form_validation->set_rules('agency_description', translate('agency_description'), 'required');
                $this->form_validation->set_rules('agency_status', translate('status'), 'required');
                $this->form_validation->set_rules('img', 'picture',array(array('handle_upload', array($this->application_model, 'profilePicUpload'))));
                
                if ($this->form_validation->run() == true) 
                {
                    $post = $this->input->post();
                    $response = $this->am->agency_edit($post,$id);
                    if ($response) {
                        set_alert('success', translate('information_has_been_updated_successfully'));
                    }
                    redirect(base_url('agencies/index'));
                } 
                else 
                {
                    $this->data['validation_error'] = true;
                }
        }

        $this->data['agency']       =  $this->am->getAgency($id)[0];
        $this->data['title']        = translate('agencies');
        $this->data['sub_page']     = 'agencies/edit';
        $this->data['main_menu']    = 'agencies';
        $this->load->view('layout/index', $this->data);
    }
}