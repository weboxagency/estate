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

class Complex extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('complex_model','com');
        $this->load->model('locations_model', 'lm');
    }

    //cities

    public function index()
    {
        if ($this->input->post('submit') == 'save') 
        {
                $this->form_validation->set_rules('name', translate('name'), 'required');
                $this->form_validation->set_rules('phone1', translate('phone_number'), 'required');
                $this->form_validation->set_rules('address', translate('address'), 'required');
                $this->form_validation->set_rules('email', translate('email'), 'required');
                $this->form_validation->set_rules('company_name', translate('company_name'), 'required');
                $this->form_validation->set_rules('metro_name', translate('metro_name'), 'required');
                $this->form_validation->set_rules('region_name', translate('region_name'), 'required');
                $this->form_validation->set_rules('end_date', translate('end_date'), 'required');
                $this->form_validation->set_rules('korpus_sayi', translate('korpus_sayi'), 'required');
                $this->form_validation->set_rules('mertebe_sayi', translate('mertebe_sayi'), 'required');
                $this->form_validation->set_rules('menzil_sayi', translate('menzil_sayi'), 'required');
                $this->form_validation->set_rules('blok_sayi', translate('blok_sayi'), 'required');
                $this->form_validation->set_rules('details', translate('details'), 'required');
                $this->form_validation->set_rules('longitude', translate('longitude'), 'required');
                $this->form_validation->set_rules('latitude', translate('latitude'), 'required');
                $this->form_validation->set_rules('ustunlukler[]', translate('ustunlukler'), 'required');
                $this->form_validation->set_rules('avatar_photo', 'picture',array(array('handle_upload', array($this->application_model, 'profilePicUpload'))));
                $this->form_validation->set_rules('complex_', 'picture',array(array('handle_upload', array($this->application_model, 'profilePicUpload'))));

                if ($this->form_validation->run() == true) 
                {
                    $post = $this->input->post();
                    $response = $this->com->complex_save($post);

                    if ($response) {
                        set_alert('success', translate('information_has_been_saved_successfully'));
                    }
                    redirect(base_url('complex/index'));
                } 
                else 
                {
                    dd(validation_errors());
                    $this->data['validation_error'] = true;
                }
                $this->session->set_flashdata('active', 3);
        }

        if ($this->input->post('submit') == 'save-project') 
        {
            $this->form_validation->set_rules('otaq_sayi', translate('room_count'), 'required');
            $this->form_validation->set_rules('umumi_sahe', translate('general_area'), 'required');
            $this->form_validation->set_rules('qiymet', translate('price'), 'required');
            $this->form_validation->set_rules('temiri', translate('repair'), 'required');
            $this->form_validation->set_rules('eyvan_sayi', translate('balcony'), 'required');
            $this->form_validation->set_rules('sanitar_qovsag', translate('sanitary_junction'), 'required');
            $this->form_validation->set_rules('photos', 'picture',array(array('handle_upload', array($this->application_model, 'profilePicUpload'))));

            if ($this->form_validation->run() == true) 
            {
                $post = $this->input->post();
                $response = $this->com->project_save($post);

                if ($response) {
                    set_alert('success', translate('information_has_been_saved_successfully'));
                }
                redirect(base_url('complex/index'));
            } 
            else 
            {
                dd(validation_errors());
                $this->data['validation_error'] = true;
            }
            $this->session->set_flashdata('active', 4);
    }
       
        $this->data['metros']       = $this->lm->active_metros();
        $this->data['regions']      = $this->lm->active_regions();
        $this->data['complex']      = $this->com->allComplex();
        $this->data['projects']     = $this->com->allProjects();
        $this->data['title']        = translate('complex');
        $this->data['sub_page']     = 'complex/index';
        $this->data['main_menu']    = 'complex';
        $this->load->view('layout/index', $this->data);

    }

    public function complex_status()
    {
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        if ($status == 'true') {
            $arrayData['status'] = 1;
        } else {
            $arrayData['status'] = 0;
        }
       
        $this->db->where('id', $id);
        $this->db->update('complex', $arrayData);
        $return = array('msg' => translate('information_has_been_updated_successfully'), 'status' => true);
        echo json_encode($return);
    }

    public function complex_delete($id = '')
    {
        if (is_superadmin_loggedin()) {

            $this->db->where('id', $id);
            $this->db->delete('complex');

        } else {
            redirect(base_url(), 'refresh');
        }
    }

    public function project_delete($id = '')
    {
        if (is_superadmin_loggedin()) {

            $this->db->where('id', $id);
            $this->db->delete('complex_projects');

        } else {
            redirect(base_url(), 'refresh');
        }
    }

    public function complex_edit($id = '')
    {
         if ($this->input->post('submit') == 'edit') {
            $this->form_validation->set_rules('name', translate('name'), 'required');
            $this->form_validation->set_rules('phone1', translate('phone_number'), 'required');
            $this->form_validation->set_rules('address', translate('address'), 'required');
            $this->form_validation->set_rules('email', translate('email'), 'required');
            $this->form_validation->set_rules('company_name', translate('company_name'), 'required');
            $this->form_validation->set_rules('metro_name', translate('metro_name'), 'required');
            $this->form_validation->set_rules('region_name', translate('region_name'), 'required');
            $this->form_validation->set_rules('end_date', translate('end_date'), 'required');
            $this->form_validation->set_rules('korpus_sayi', translate('korpus_sayi'), 'required');
            $this->form_validation->set_rules('mertebe_sayi', translate('mertebe_sayi'), 'required');
            $this->form_validation->set_rules('menzil_sayi', translate('menzil_sayi'), 'required');
            $this->form_validation->set_rules('blok_sayi', translate('blok_sayi'), 'required');
            $this->form_validation->set_rules('details', translate('details'), 'required');
            $this->form_validation->set_rules('ustunlukler', translate('latitude'), 'required');
            $this->form_validation->set_rules('img', 'picture',array(array('handle_upload', array($this->application_model, 'profilePicUpload'))));
            $this->form_validation->set_rules('photos', 'picture',array(array('handle_upload', array($this->application_model, 'profilePicUpload'))));
                if ($this->form_validation->run() == true) 
                {
                    $post = $this->input->post();
                    $response = $this->com->complex_edit($post,$id);
                    if ($response) {
                        set_alert('success', translate('information_has_been_updated_successfully'));
                    }
                    redirect(base_url('complex/index'));
                } 
                else 
                {
                    $this->data['validation_error'] = true;
                }
        }


        $this->data['metros']       = $this->lm->active_metros();
        $this->data['regions']      = $this->lm->active_regions();
        $this->data['complex']       =  $this->com->getComplex($id)[0];
        $this->data['title']        = translate('complex');
        $this->data['sub_page']     = 'complex/edit';
        $this->data['main_menu']    = 'complex';
        $this->load->view('layout/index', $this->data);
    }


    public function projects_edit($id = '')
    {
         if ($this->input->post('submit') == 'edit-project') {
            $this->form_validation->set_rules('otaq_sayi', translate('room_count'), 'required');
            $this->form_validation->set_rules('umumi_sahe', translate('general_area'), 'required');
            $this->form_validation->set_rules('qiymet', translate('price'), 'required');
            $this->form_validation->set_rules('temiri', translate('repair'), 'required');
            $this->form_validation->set_rules('eyvan_sayi', translate('balcony'), 'required');
            $this->form_validation->set_rules('sanitar_qovsag', translate('sanitary_junction'), 'required');
            $this->form_validation->set_rules('photos', 'picture',array(array('handle_upload', array($this->application_model, 'profilePicUpload'))));
            // dd($_FILES); 
                if ($this->form_validation->run() == true) 
                {
                    $post = $this->input->post();
                    $response = $this->com->project_edit($post,$id);
                    if ($response) {
                        set_alert('success', translate('information_has_been_updated_successfully'));
                    }
                    redirect(base_url('complex/index'));
                } 
                else 
                {
                    $this->data['validation_error'] = true;
                }
        }


        $this->data['metros']       = $this->lm->active_metros();
        $this->data['regions']      = $this->lm->active_regions();
        $this->data['complex']      = $this->com->allComplex();
        $this->data['project']      =  $this->com->getProject($id)[0];
        $this->data['title']        = translate('complex');
        $this->data['sub_page']     = 'complex/projects_edit';
        $this->data['main_menu']    = 'complex';
        $this->load->view('layout/index', $this->data);
    }
}