<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Complex_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //Cities

    public function allComplex()
    {
        $this->db->select('*');
        $this->db->from('complex');
        $query = $this->db->get();
        $this->db->order_by("id", "asc");
        return $query->result_array();
    }

    public function allProjects()
    {
        $this->db->select('*');
        $this->db->from('complex_projects');
        $query = $this->db->get();
        $this->db->order_by("id", "asc");
        return $query->result_array();
    }

    public function statusActiveComplex()
    {
        $query = $this->db->query("SELECT * FROM complex WHERE status=1  ORDER BY id DESC");
        return $query->result_array();
    }

    public function complex_save($data)
    {

        $arrayComplex = array(
            'name'              => $data['name'],
            'phone1'            => $data['phone1'],
            'phone2'            => $data['phone2'],
            'phone3'            => $data['phone3'],
            'address'           => $data['address'],
            'email'             => $data['email'],
            'domain'            => $data['domain'],
            'company_name'      => $data['company_name'],
            'metro_name'        => $data['metro_name'],
            'region_name'       => $data['region_name'],
            'end_date'          => $data['end_date'],
            'avatar_photo'      => $this->uploadComplexImage('complex'),
            'photos'            => $this->uploadMultipleImage(),
            'korpus_sayi'       => $data['korpus_sayi'],
            'mertebe_sayi'      => $data['mertebe_sayi'],
            'menzil_sayi'       => $data['menzil_sayi'],
            'blok_sayi'         => $data['blok_sayi'],
            'details'           => $data['details'],
            'longitude'         => $data['longitude'],
            'latitude'          => $data['latitude'],
            'ustunlukler'       => json_encode($data['ustunlukler']),
            'video_url'         => $data['video_url'],
            'status'            => $data['status'],
            'url_slug'          => seo_link($data['url_slug']) ?? 'zero'
        );


        $this->db->insert('complex', $arrayComplex);
        $id = $this->db->insert_id();

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function project_save($data)
    {
        $arrayProject = array(
            'complex_id'       => $data['complex_id'],
            'otaq_sayi'        => $data['otaq_sayi'],
            'umumi_sahe'       => $data['umumi_sahe'],
            'qiymet'           => $data['qiymet'],
            'temiri'           => $data['temiri'],
            'eyvan_sayi'       => $data['eyvan_sayi'],
            'sanitar_qovsag'   => $data['sanitar_qovsag'],
            'photo'            => $this->uploadProjectImage('projects'),
        );


        $this->db->insert('complex_projects', $arrayProject);
        $id = $this->db->insert_id();

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function project_edit($data, $id)
    {
        $arrayProject = array(
            'complex_id'       => $data['complex_id'],
            'otaq_sayi'        => $data['otaq_sayi'],
            'umumi_sahe'       => $data['umumi_sahe'],
            'qiymet'           => $data['qiymet'],
            'temiri'           => $data['temiri'],
            'eyvan_sayi'       => $data['eyvan_sayi'],
            'sanitar_qovsag'   => $data['sanitar_qovsag'],
            'photo'            => $this->uploadProjectImage('projects'),
        );


        $this->db->where('id', $id);
        $this->db->update('complex_projects', $arrayProject);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function getComplex($id)
    {
        $this->db->select('*');
        $this->db->from('complex');
        $this->db->where('id', $id);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function getProject($id)
    {
        $this->db->select('*');
        $this->db->from('complex_projects');
        $this->db->where('id', $id);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function complex_edit($data, $id)
    {
        dd($_POST);
        $arrayComplex = array(
            'name'              => $data['name'],
            'phone1'            => $data('phone1'),
            'phone2'            => $data['phone2'],
            'phone3'            => $data['phone3'],
            'address'           => $data['address'],
            'email'             => $data['email'],
            'domain'            => $data['domain'],
            'company_name'      => $data['company_name'],
            'metro_name'        => $data['agmetro_nameency_phone_3'],
            'region_name'       => $data['region_name'],
            'end_date'          => $data['end_date'],
            'avatar_photo'      => $this->uploadComplexImage('complex'),
            'photos'            => $this->uploadMultipleImage(),
            'korpus_sayi'       => $data['korpus_sayi'],
            'mertebe_sayi'      => $data['mertebe_sayi'],
            'menzil_sayi'       => $data['mensil_sayi'],
            'blok_sayi'         => $data['blok_sayi'],
            'details'           => $data['details'],
            'longitude'         => $data['longitude'],
            'latitude'          => $data['latitude'],
            'ustunlukler'       => json_encode($data['ustunlukler']),
            'video_url'         => $data['video_url'],
            'status'            => $data['status'],
            'url_slug'          => $data['url_slug']
        );

        if (!empty($id)) {
            $this->db->where('id', $id);
            $this->db->update('complex', $arrayComplex);
        }

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
