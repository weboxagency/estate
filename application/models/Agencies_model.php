<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agencies_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //Cities

    public function allAgencies()
    {
        $this->db->select('*');
        $this->db->from('agencies');
        $query = $this->db->get();
        $this->db->order_by("id", "asc");
        return $query->result_array();
    }

    public function agency_save($data)
    {

        $arrayAgency = array(
            'agency_name'           => $data['agency_name'],
            'agency_logo'           => $this->uploadAgenciesImage('agencies'),
            'agency_address'        => $data['agency_address'],
            'agency_latitude'       => $data['agency_latitude'],
            'agency_longitude'      => $data['agency_longitude'],
            'agency_phone_1'        => $data['agency_phone_1'],
            'agency_phone_2'        => (isset($data['agency_phone_2']) ? $data['agency_phone_2'] : NULL),
            'agency_phone_3'        => (isset($data['agency_phone_3']) ? $data['agency_phone_3'] : NULL),
            'domain_url'            => (isset($data['domain_url']) ? $data['domain_url'] : NULL),
            'agency_email'          => $data['agency_email'],
            'agency_description'    => (isset($data['agency_description']) ? $data['agency_description'] : NULL),
            'agency_show_count'     => 0,
            'agency_status'         => $data['agency_status']
        );

        
        $this->db->insert('agencies', $arrayAgency);
        $id = $this->db->insert_id();

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function getAgency($id)
    {
        $this->db->select('*');
        $this->db->from('agencies');
        $this->db->where('agency_id', $id);
        $query = $this->db->get();
        
        return $query->result_array();
    }

    public function agency_edit($data,$id)
    {
        $arrayAgency = array(
            'agency_name'           => $data['agency_name'],
            'agency_logo'           => $this->uploadAgenciesImage('agencies'),
            'agency_address'        => $data['agency_address'],
            'agency_latitude'       => $data['agency_latitude'],
            'agency_longitude'      => $data['agency_longitude'],
            'agency_phone_1'        => $data['agency_phone_1'],
            'agency_phone_2'        => (isset($data['agency_phone_2']) ? $data['agency_phone_2'] : NULL),
            'agency_phone_3'        => (isset($data['agency_phone_3']) ? $data['agency_phone_3'] : NULL),
            'domain_url'            => (isset($data['domain_url']) ? $data['domain_url'] : NULL),
            'agency_email'          => $data['agency_email'],
            'agency_description'    => (isset($data['agency_description']) ? $data['agency_description'] : NULL),
            'agency_show_count'     => 0,
            'agency_status'         => $data['agency_status']
        );

        if(!empty($id))
        {
            $this->db->where('agency_id', $id);
            $this->db->update('agencies', $arrayAgency);
        }

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}