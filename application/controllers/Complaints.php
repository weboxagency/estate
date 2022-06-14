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

class Complaints extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    //cities

    public function index()
    {
        
        $query = $this->db->query("
            SELECT 
            c.id AS complain_id,
            c.complain_category AS complain_category,
            c.extra_info AS extra_info,
            a.id AS ads_all_id,
            a.url_slug AS url_slug,
            a.ads_number AS ads_number,
            a.url_slug AS url_slug,
            a.ads_title AS ads_title   
            FROM ads_complain AS c 
            LEFT JOIN ads_all AS a ON c.ads_id=a.ads_number
            ORDER BY a.ads_number 
            "); 

        $this->data['complaints']   = $query->num_rows() > 0 ? $query->result_array() : NULL; 
        $this->data['title']        = translate('complaints');
        $this->data['sub_page']     = 'complaints/index';
        $this->data['main_menu']    = 'complaints';
        $this->load->view('layout/index', $this->data);

    }

  
    public function complain_delete($id = '')
    {
        if (is_superadmin_loggedin()) {

            $this->db->where('id', $id);
            $this->db->delete('ads_complain');

        } else {
            redirect(base_url(), 'refresh');
        }
    }


}
