<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Locations_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //Cities

    public function allCities()
    {
        $this->db->select('*');
        $this->db->from('cities');
        $query = $this->db->get();
        $this->db->order_by("id", "asc");
        return $query->result_array();
    }

    public function city_save($data)
    {
        $arrayCity = array(
            'city_name' => $data['city_name'],
            'seo_link' => seo_link($data['city_name']),
            'status' => $data['status']
        );

        $this->db->insert('cities', $arrayCity);
        $id = $this->db->insert_id();

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function city_edit($data,$id)
    {
        $arrayCity = array(
            'city_name' => $data['city_name'],
            'seo_link' => seo_link($data['city_name']),
            'status' => $data['status']
        );

        if(!empty($id))
        {
            $this->db->where('id', $id);
            $this->db->update('cities', $arrayCity);
        }

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getCity($id)
    {
        $this->db->select('*');
        $this->db->from('cities');
        $this->db->where('id', $id);
        $query = $this->db->get();
        
        return $query->result_array();
    }


    //Regions

    public function allRegions()
    {
        $this->db->select('regions.id, regions.region_name, regions.status, regions.seo_link, cities.city_name')
         ->from('regions')
         ->join('cities', 'regions.parent_city = cities.id');
         $query = $this->db->get();
        return $query->result_array();
    }

    public function region_save($data)
    {
        $arrayRegion = array(
            'parent_city'   => $data['parent_city'],
            'region_name' => $data['region_name'],
            'seo_link' => seo_link($data['region_name']),
            'status' => $data['status']
        );

        $this->db->insert('regions', $arrayRegion);
        $id = $this->db->insert_id();

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function region_edit($data,$id)
    {
        $arrayRegion = array(
            'parent_city'   => $data['parent_city'],
            'region_name' => $data['region_name'],
            'seo_link' => seo_link($data['region_name']),
            'status' => $data['status']
        );

        if(!empty($id))
        {
            $this->db->where('id', $id);
            $this->db->update('regions', $arrayRegion);
        }

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getRegion($id)
    {
        $this->db->select('*');
        $this->db->from('regions');
        $this->db->where('id', $id);
        $query = $this->db->get();
        
        return $query->result_array();
    }

    //districts

    public function allDistricts()
    {
        $this->db->select('districts.id, districts.district_name, districts.status, districts.seo_link, regions.region_name')
         ->from('districts')
         ->join('regions', 'districts.parent_region = regions.id');
         $query = $this->db->get();
        return $query->result_array();
    }

    public function district_save($data)
    {
        $arrayDistrict = array(
            'parent_region'   => $data['parent_region'],
            'district_name' => $data['district_name'],
            'seo_link' => seo_link($data['district_name']),
            'status' => $data['status']
        );

        $this->db->insert('districts', $arrayDistrict);
        $id = $this->db->insert_id();

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function district_edit($data,$id)
    {
        $arrayDistrict = array(
            'parent_region'   => $data['parent_region'],
            'district_name' => $data['district_name'],
            'seo_link' => seo_link($data['district_name']),
            'status' => $data['status']
        );

        if(!empty($id))
        {
            $this->db->where('id', $id);
            $this->db->update('districts', $arrayDistrict);
        }

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getDistrict($id)
    {
        $this->db->select('*');
        $this->db->from('districts');
        $this->db->where('id', $id);
        $query = $this->db->get();
        
        return $query->result_array();
    }


    //metros

    public function allMetros()
    {
        $this->db->select('*');
        $this->db->from('metros');
        $query = $this->db->get();
        $this->db->order_by("id", "asc");
        return $query->result_array();
    }

    public function metro_save($data)
    {
        $arrayMetro = array(
            'metro_name' => $data['metro_name'],
            'status' => $data['status']
        );

        $this->db->insert('metros', $arrayMetro);
        $id = $this->db->insert_id();

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function metro_edit($data,$id)
    {
        $arrayMetro = array(
            'metro_name' => $data['metro_name'],
            'status' => $data['status']
        );

        if(!empty($id))
        {
            $this->db->where('id', $id);
            $this->db->update('metros', $arrayMetro);
        }

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getMetro($id)
    {
        $this->db->select('*');
        $this->db->from('metros');
        $this->db->where('id', $id);
        $query = $this->db->get();
        
        return $query->result_array();
    }


    //targets

    public function allTargets()
    {
        $this->db->select('*');
        $this->db->from('targets');
        $query = $this->db->get();
        $this->db->order_by("id", "asc");
        return $query->result_array();
    }

    public function target_save($data)
    {
        $arrayTarget = array(
            'target_name' => $data['target_name'],
            'status' => $data['status']
        );

        $this->db->insert('targets', $arrayTarget);
        $id = $this->db->insert_id();

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function target_edit($data,$id)
    {
        $arrayTarget = array(
            'target_name' => $data['target_name'],
            'status' => $data['status']
        );

        if(!empty($id))
        {
            $this->db->where('id', $id);
            $this->db->update('targets', $arrayTarget);
        }

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getTarget($id)
    {
        $this->db->select('*');
        $this->db->from('targets');
        $this->db->where('id', $id);
        $query = $this->db->get();
        
        return $query->result_array();
    }


}
