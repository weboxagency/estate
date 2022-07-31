<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function hash($password) {
		return hash("sha512", $password . config_item("encryption_key"));
	}
		
	public function uploadBannerImage() {
		$return_photo = 'defualt.png';
		$old_user_photo = $this->input->post('img');
		if (isset($_FILES["img"]) && !empty($_FILES['img']['name'])) {
			$config['upload_path'] = './uploads/banners/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['overwrite'] = FALSE;
			$config['encrypt_name'] = TRUE;
			$this->upload->initialize($config);
			if ($this->upload->do_upload("img")) {
	            // need to unlink previous photo
	            if (!empty($old_user_photo)) {
	            	$unlink_path = 'uploads/banners/';
	                if (file_exists($unlink_path . $old_user_photo)) {
	                    @unlink($unlink_path . $old_user_photo);
	                }
	            }
				$return_photo = $this->upload->data('file_name');
			}
		}else{
			if (!empty($old_user_photo)){
				$return_photo = $old_user_photo;
			}
		}
		return $return_photo;
	}

	public function uploadAgenciesImage() {
		$return_photo = 'defualt.png';
		$old_user_photo = $this->input->post('old_user_photo');
		if (isset($_FILES["img"]) && !empty($_FILES['img']['name'])) {
			$config['upload_path'] = './uploads/images/agencies';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['overwrite'] = FALSE;
			$config['encrypt_name'] = TRUE;
			$this->upload->initialize($config);
			if ($this->upload->do_upload("img")) {
	            // need to unlink previous photo
	            if (!empty($old_user_photo)) {
	            	$unlink_path = '/uploads/images/agencies';
	                if (file_exists($unlink_path . $old_user_photo)) {
	                    @unlink($unlink_path . $old_user_photo);
	                }
	            }
				$return_photo = $this->upload->data('file_name');
			}
		}else{
			if (!empty($old_user_photo)){
				$return_photo = $old_user_photo;
			}
		}
		return $return_photo;
	}

	public function uploadComplexImage() {
		$return_photo = 'defualt.png';
		$old_user_photo = $this->input->post('old_user_photo');
		if (isset($_FILES["img"]) && !empty($_FILES['img']['name'])) {
			$config['upload_path'] = './uploads/images/complex/avatar';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['overwrite'] = FALSE;
			$config['encrypt_name'] = TRUE;
			$this->upload->initialize($config);
			if ($this->upload->do_upload("img")) {
	            // need to unlink previous photo
	            if (!empty($old_user_photo)) {
	            	$unlink_path = '/uploads/images/complex/avatar';
	                if (file_exists($unlink_path . $old_user_photo)) {
	                    @unlink($unlink_path . $old_user_photo);
	                }
	            }
				$return_photo = $this->upload->data('file_name');
			}
		}else{
			if (!empty($old_user_photo)){
				$return_photo = $old_user_photo;
			}
		}
		return $return_photo;
	}

	public function uploadMultipleImage() { 
		$data = [];
		$count = count($_FILES['complex_photo']['name']);
		for($i=0;$i<$count;$i++){
		  if(!empty($_FILES['complex_photo']['name'][$i])){
			$_FILES['file']['name'] = $_FILES['complex_photo']['name'][$i];
			$_FILES['file']['type'] = $_FILES['complex_photo']['type'][$i];
			$_FILES['file']['tmp_name'] = $_FILES['complex_photo']['tmp_name'][$i];
			$_FILES['file']['error'] = $_FILES['complex_photo']['error'][$i];
			$_FILES['file']['size'] = $_FILES['complex_photo']['size'][$i];
			$config['upload_path'] = './uploads/images/complex/photos'; 
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size'] = '5000';
			$config['file_name'] = $_FILES['complex_photo']['name'][$i];
			$this->load->library('upload',$config); 
			if($this->upload->do_upload('file'))
			{
			  $uploadData = $this->upload->data();
			  $filename = $uploadData['file_name'];
			  $data[] = $filename;
			}
		  }
		}
		return json_encode($data);
  
	 }

	public function uploadProjectImage() {
		$return_photo = 'defualt.png';
		$old_user_photo = $this->input->post('old_user_photo');
		if (isset($_FILES["img"]) && !empty($_FILES['img']['name'])) {
			$config['upload_path'] = './uploads/images/projects';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['overwrite'] = FALSE;
			$config['encrypt_name'] = TRUE;
			$this->upload->initialize($config);
			if ($this->upload->do_upload("img")) {
	            // need to unlink previous photo
	            if (!empty($old_user_photo)) {
	            	$unlink_path = '/uploads/images/projects';
	                if (file_exists($unlink_path . $old_user_photo)) {
	                    @unlink($unlink_path . $old_user_photo);
	                }
	            }
				$return_photo = $this->upload->data('file_name');
			}
		}else{
			if (!empty($old_user_photo)){
				$return_photo = $old_user_photo;
			}
		}
		return $return_photo;
	}

	public function uploadImage($role) {
		$return_photo = 'defualt.png';
		$old_user_photo = $this->input->post('old_user_photo');
		if (isset($_FILES["user_photo"]) && !empty($_FILES['user_photo']['name'])) {
			$config['upload_path'] = './uploads/images/' . $role . '/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['overwrite'] = FALSE;
			$config['encrypt_name'] = TRUE;
			$this->upload->initialize($config);
			if ($this->upload->do_upload("user_photo")) {
	            // need to unlink previous photo
	            if (!empty($old_user_photo)) {
	            	$unlink_path = 'uploads/images/' . $role . '/';
	                if (file_exists($unlink_path . $old_user_photo)) {
	                    @unlink($unlink_path . $old_user_photo);
	                }
	            }
				$return_photo = $this->upload->data('file_name');
			}
		}else{
			if (!empty($old_user_photo)){
				$return_photo = $old_user_photo;
			}
		}
		return $return_photo;
	}

    public function get($table, $where_array = NULL, $single = false, $branch = false, $columns = '*')
    {
        $this->db->select($columns);
        if (is_array($where_array)){
            $this->db->where($where_array);
        }
        if ($branch == true) {
	        if (!is_superadmin_loggedin()) {
	            $this->db->where("branch_id", get_loggedin_branch_id());
	        }
        }
        if ($single == true) {
            $method = 'row_array';
        } else {
            $method = 'result_array';
            $this->db->order_by('id', 'ASC');
        }
        $result = $this->db->get($table)->$method();
		return $result;
    }

    public function getSingle($table, $id = NULL, $single = false)
    {
        if ($single == true) {
            $method = 'row';
        } else {
            $method = 'result';
        }
        $q = $this->db->query("SELECT * FROM " . $table . " WHERE id = " . $this->db->escape($id));
		return $q->$method();
    }
}
