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

class Locations extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('locations_model','lm');
    }

    //cities

    public function cities()
    {
        if ($this->input->post('submit') == 'save') {
                $this->form_validation->set_rules('city_name', translate('city_name'), 'required|callback_check_string');
                $this->form_validation->set_rules('status', translate('status'), 'required');
                
                if ($this->form_validation->run() == true) {
                    $post = $this->input->post();
                    $response = $this->lm->city_save($post);
                    if ($response) {
                        set_alert('success', translate('information_has_been_saved_successfully'));
                    }
                    redirect(base_url('locations/cities'));
                } else {
                    $this->data['validation_error'] = true;
                }
        }

        $this->data['cities']       =  $this->lm->allCities();
        $this->data['title']        = translate('cities');
        $this->data['sub_page']     = 'locations/cities';
        $this->data['main_menu']    = 'locations';
        $this->load->view('layout/index', $this->data);

    }

    public function city_edit($id = '')
    {
         if ($this->input->post('submit') == 'edit') {
                $this->form_validation->set_rules('city_name', translate('city_name'), 'required|callback_check_string');
                $this->form_validation->set_rules('status', translate('status'), 'required');
                
                if ($this->form_validation->run() == true) 
                {
                    $post = $this->input->post();
                    $response = $this->lm->city_edit($post,$id);
                    if ($response) {
                        set_alert('success', translate('information_has_been_updated_successfully'));
                    }
                    redirect(base_url('locations/cities'));
                } 
                else 
                {
                    $this->data['validation_error'] = true;
                }
        }
        $this->data['city']         = $this->lm->getCity($id)[0];
        
        $this->data['title']        = translate('cities');
        $this->data['sub_page']     = 'locations/city_edit';
        $this->data['main_menu']    = 'locations';
        $this->load->view('layout/index', $this->data);
    }

    public function city_status()
    {
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        if ($status == 'true') {
            $arrayData['status'] = 1;
        } else {
            $arrayData['status'] = 0;
        }
       
        $this->db->where('id', $id);
        $this->db->update('cities', $arrayData);
        $return = array('msg' => translate('information_has_been_updated_successfully'), 'status' => true);
        echo json_encode($return);
    }

    public function city_delete($id = '')
    {
        if (is_superadmin_loggedin()) {

            $this->db->select('*');
            $this->db->where('parent_city', $id);
            $this->db->get()->row_array();


            $this->db->where('parent_city', $id);
            $this->db->delete('regions');
            $this->db->where('id', $id);
            $this->db->delete('cities');


        } else {
            redirect(base_url(), 'refresh');
        }
    }


    //regions

    public function regions()
    {
       
        if ($this->input->post('submit') == 'save') {
                $this->form_validation->set_rules('region_name', translate('region_name'), 'required|callback_check_string');
                $this->form_validation->set_rules('status', translate('status'), 'required');
                
                if ($this->form_validation->run() == true) {
                    $post = $this->input->post();
                    $response = $this->lm->region_save($post);
                    if ($response) {
                        set_alert('success', translate('information_has_been_saved_successfully'));
                    }
                    redirect(base_url('locations/regions'));
                } else {
                    $this->data['validation_error'] = true;
                }
        }
        $this->data['cities']           = $this->lm->allCities();
        $this->data['regions']          =  $this->lm->allRegions();
        $this->data['title']            = translate('regions');
        $this->data['sub_page']         = 'locations/regions';
        $this->data['main_menu']        = 'locations';
        $this->load->view('layout/index', $this->data);
    }

    public function region_edit($id = '')
    {
         if ($this->input->post('submit') == 'edit') {
            $this->form_validation->set_rules('parent_city', translate('parent_city'), 'required');
                $this->form_validation->set_rules('region_name', translate('region_name'), 'required|callback_check_string');
                $this->form_validation->set_rules('status', translate('status'), 'required');
                
                if ($this->form_validation->run() == true) 
                {
                    $post = $this->input->post();
                    $response = $this->lm->region_edit($post,$id);
                    if ($response) {
                        set_alert('success', translate('information_has_been_updated_successfully'));
                    }
                    redirect(base_url('locations/regions'));
                } 
                else 
                {
                    $this->data['validation_error'] = true;
                }
        }
        $this->data['cities']       = $this->lm->allCities();
        $this->data['region']       = $this->lm->getRegion($id)[0];
        
        $this->data['title']        = translate('regions');
        $this->data['sub_page']     = 'locations/region_edit';
        $this->data['main_menu']    = 'locations';
        $this->load->view('layout/index', $this->data);
    }

    public function region_status()
    {
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        if ($status == 'true') {
            $arrayData['status'] = 1;
        } else {
            $arrayData['status'] = 0;
        }
       
        $this->db->where('id', $id);
        $this->db->update('regions', $arrayData);
        $return = array('msg' => translate('information_has_been_updated_successfully'), 'status' => true);
        echo json_encode($return);
    }

    public function region_delete($id = '')
    {
        if (is_superadmin_loggedin()) {

            $this->db->where('parent_region', $id);
            $this->db->delete('districts');

            $this->db->where('id', $id);
            $this->db->delete('regions');
        } else {
            redirect(base_url(), 'refresh');
        }
    }


    //districts

    public function districts()
    {
       
        if ($this->input->post('submit') == 'save') {
                $this->form_validation->set_rules('district_name', translate('district_name'), 'required|callback_check_string');
                $this->form_validation->set_rules('status', translate('status'), 'required');
                
                if ($this->form_validation->run() == true) {
                    $post = $this->input->post();
                    $response = $this->lm->district_save($post);
                    if ($response) {
                        set_alert('success', translate('information_has_been_saved_successfully'));
                    }
                    redirect(base_url('locations/districts'));
                } else {
                    $this->data['validation_error'] = true;
                }
        }

        $this->data['regions']          = $this->lm->allRegions();
        $this->data['districts']        = $this->lm->allDistricts();
        $this->data['title']            = translate('districts');
        $this->data['sub_page']         = 'locations/districts';
        $this->data['main_menu']        = 'locations';
        $this->load->view('layout/index', $this->data);
    }

    public function district_edit($id = '')
    {
         if ($this->input->post('submit') == 'edit') {
            $this->form_validation->set_rules('parent_region', translate('parent_region'), 'required');
                $this->form_validation->set_rules('district_name', translate('district_name'), 'required|callback_check_string');
                $this->form_validation->set_rules('status', translate('status'), 'required');
                
                if ($this->form_validation->run() == true) 
                {
                    $post = $this->input->post();
                    $response = $this->lm->district_edit($post,$id);
                    if ($response) {
                        set_alert('success', translate('information_has_been_updated_successfully'));
                    }
                    redirect(base_url('locations/districts'));
                } 
                else 
                {
                    $this->data['validation_error'] = true;
                }
        }
        $this->data['regions']       = $this->lm->allRegions();
        $this->data['district']       = $this->lm->getDistrict($id)[0];
        
        $this->data['title']        = translate('districts');
        $this->data['sub_page']     = 'locations/district_edit';
        $this->data['main_menu']    = 'locations';
        $this->load->view('layout/index', $this->data);
    }

    public function district_status()
    {
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        if ($status == 'true') {
            $arrayData['status'] = 1;
        } else {
            $arrayData['status'] = 0;
        }
       
        $this->db->where('id', $id);
        $this->db->update('districts', $arrayData);
        $return = array('msg' => translate('information_has_been_updated_successfully'), 'status' => true);
        echo json_encode($return);
    }

    public function district_delete($id = '')
    {
        if (is_superadmin_loggedin()) {
            $this->db->where('id', $id);
            $this->db->delete('districts');
        } else {
            redirect(base_url(), 'refresh');
        }
    }



    //metros

    public function metros()
    {
        if ($this->input->post('submit') == 'save') {
                $this->form_validation->set_rules('metro_name', translate('metro_name'), 'required|callback_check_string');
                $this->form_validation->set_rules('status', translate('status'), 'required');
                
                if ($this->form_validation->run() == true) {
                    $post = $this->input->post();
                    $response = $this->lm->metro_save($post);
                    if ($response) {
                        set_alert('success', translate('information_has_been_saved_successfully'));
                    }
                    redirect(base_url('locations/metros'));
                } else {
                    $this->data['validation_error'] = true;
                }
        }

        $this->data['metros']       =  $this->lm->allMetros();
        $this->data['title']        = translate('metros');
        $this->data['sub_page']     = 'locations/metros';
        $this->data['main_menu']    = 'locations';
        $this->load->view('layout/index', $this->data);

    }

    public function metro_edit($id = '')
    {
         if ($this->input->post('submit') == 'edit') {
                $this->form_validation->set_rules('metro_name', translate('metro_name'), 'required|callback_check_string');
                $this->form_validation->set_rules('status', translate('status'), 'required');
                
                if ($this->form_validation->run() == true) 
                {
                    $post = $this->input->post();
                    $response = $this->lm->metro_edit($post,$id);
                    if ($response) {
                        set_alert('success', translate('information_has_been_updated_successfully'));
                    }
                    redirect(base_url('locations/metros'));
                } 
                else 
                {
                    $this->data['validation_error'] = true;
                }
        }
        $this->data['metro']         = $this->lm->getMetro($id)[0];
        
        $this->data['title']        = translate('metros');
        $this->data['sub_page']     = 'locations/metro_edit';
        $this->data['main_menu']    = 'locations';
        $this->load->view('layout/index', $this->data);
    }

    public function metro_status()
    {
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        if ($status == 'true') {
            $arrayData['status'] = 1;
        } else {
            $arrayData['status'] = 0;
        }
       
        $this->db->where('id', $id);
        $this->db->update('metros', $arrayData);
        $return = array('msg' => translate('information_has_been_updated_successfully'), 'status' => true);
        echo json_encode($return);
    }

    public function metro_delete($id = '')
    {
        if (is_superadmin_loggedin()) {
            $this->db->where('id', $id);
            $this->db->delete('metros');
        } else {
            redirect(base_url(), 'refresh');
        }
    }


    //targets

    public function targets()
    {
        if ($this->input->post('submit') == 'save') {
                $this->form_validation->set_rules('target_name', translate('target_name'), 'required|callback_check_string');
                $this->form_validation->set_rules('status', translate('status'), 'required');
                
                if ($this->form_validation->run() == true) {
                    $post = $this->input->post();
                    $response = $this->lm->target_save($post);
                    if ($response) {
                        set_alert('success', translate('information_has_been_saved_successfully'));
                    }
                    redirect(base_url('locations/targets'));
                } else {
                    $this->data['validation_error'] = true;
                }
        }

        $this->data['targets']       =  $this->lm->allTargets();
        $this->data['title']        = translate('targets');
        $this->data['sub_page']     = 'locations/targets';
        $this->data['main_menu']    = 'locations';
        $this->load->view('layout/index', $this->data);

    }

    public function target_edit($id = '')
    {
         if ($this->input->post('submit') == 'edit') {
                $this->form_validation->set_rules('target_name', translate('target_name'), 'required|callback_check_string');
                $this->form_validation->set_rules('status', translate('status'), 'required');
                
                if ($this->form_validation->run() == true) 
                {
                    $post = $this->input->post();
                    $response = $this->lm->target_edit($post,$id);
                    if ($response) {
                        set_alert('success', translate('information_has_been_updated_successfully'));
                    }
                    redirect(base_url('locations/targets'));
                } 
                else 
                {
                    $this->data['validation_error'] = true;
                }
        }
        $this->data['target']         = $this->lm->getTarget($id)[0];
        
        $this->data['title']        = translate('targets');
        $this->data['sub_page']     = 'locations/target_edit';
        $this->data['main_menu']    = 'locations';
        $this->load->view('layout/index', $this->data);
    }

    public function target_status()
    {
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        if ($status == 'true') {
            $arrayData['status'] = 1;
        } else {
            $arrayData['status'] = 0;
        }
       
        $this->db->where('id', $id);
        $this->db->update('targets', $arrayData);
        $return = array('msg' => translate('information_has_been_updated_successfully'), 'status' => true);
        echo json_encode($return);
    }

    public function target_delete($id = '')
    {
        if (is_superadmin_loggedin()) {
            $this->db->where('id', $id);
            $this->db->delete('targets');
        } else {
            redirect(base_url(), 'refresh');
        }
    }


    //check_string

    public function check_string($par)
    {
        if(!is_string($par))
        {
            return false;
        }
        return true;
    }
}
