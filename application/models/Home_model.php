<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends MY_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    /* PAGINATION */

    public function get_count() 
    {
        $query = $this->db->query("SELECT * FROM ads_all WHERE status=2 AND created_at BETWEEN NOW() - INTERVAL 30 DAY AND NOW() ORDER BY id DESC");
        return $query->num_rows();
    }

    public function get_count_new_satish() 
    {
        $query = $this->db->query("SELECT * FROM ads_all WHERE status=2 AND announcement_type=1  ORDER BY id DESC");
        return $query->num_rows();
    }

    public function get_count_new_kiraye_ayliq() 
    {
        $query = $this->db->query("SELECT * FROM ads_all WHERE status=2 AND announcement_type=2  ORDER BY id DESC ");
        return $query->num_rows();
    }

    public function get_count_new_kiraye_gunluk() 
    {
        $query = $this->db->query("SELECT * FROM ads_all WHERE status=2 AND announcement_type=3  ORDER BY id DESC");
        return $query->num_rows();
    }

    public function get_count_yeni_tikili() 
    {
        $query = $this->db->query("SELECT * FROM ads_all WHERE property_type=1 AND status=2 AND created_at BETWEEN NOW() - INTERVAL 30 DAY AND NOW() ORDER BY id DESC");
        return $query->num_rows();
    }

    public function get_count_detail_benzer($property_type, $ads_number) 
    {
        $query = $this->db->query("SELECT * FROM ads_all WHERE status=2 AND property_type='".$property_type."' AND ads_number!='".$ads_number."' ORDER BY id DESC");
        return $query->num_rows();
    }

    /* PAGINATION END */



    public function checkUrlSlug($url)
    {
        if (!empty($url)) 
        {
            $this->db->select('*');
            $this->db->from('ads_all');
            $this->db->where('url_slug', $url);
            $this->db->limit(1);
            $query = $this->db->get();
            if ($query->num_rows() == 1) 
            {
               return $query->num_rows();
            }
            else
            {
                return false;
            }
        }
    }

    public function getAdsDetail($url='')
    {
        if (!empty($url)) 
        {
            $this->db->select('*');
            $this->db->from('ads_all');
            $this->db->where('url_slug', $url);
            $this->db->where('status', 2);
            $this->db->limit(1);
            $query = $this->db->get();
            return $query->num_rows() > 0 ? $query->result_array()[0] : NULL;
        }
    }

    public function benzerElanlarPagination($limit, $start, $property_type='',$ads_number='')
    {
        $query = $this->db->query("SELECT * FROM ads_all WHERE status=2 AND property_type=".$property_type." AND ads_number!=".$ads_number." ORDER BY id DESC LIMIT $limit, $start");
        return $query->num_rows() > 0 ? $query->result_array() : NULL;
    }

    public function benzerElanlar($property_type='',$ads_number='')
    {
        $this->db->select('*');
        $this->db->from('ads_all');
        $this->db->where('property_type', $property_type);
        $this->db->where('ads_number !=', $ads_number);
        $this->db->where('status', 2);
        $query = $this->db->get();
        return $query->num_rows() > 0 ? $query->result_array() : NULL;
    }

    public function checkUserForPhone($phone)
    {
        if (!empty($phone)) 
        {
            $this->db->select('*');
            $this->db->from('ads_users');
            $this->db->where('mobile_format_second', $phone);
            $this->db->limit(1);
            $query = $this->db->get();
            if ($query->num_rows() == 1) 
            {
               return $query->num_rows();
            }
            else
            {
                return 0;
            }
        }
    }

    public function countAdsForNumber($phone)
    {
        // getAdsCountForPhoneNumber
        $this->db->select('*');
        $this->db->from('ads_all');
        $this->db->where('mobile', $phone);
        $this->db->where('created_at BETWEEN NOW() - INTERVAL 30 DAY AND NOW()', "", false);
        $ads = $this->db->get();
        return $ads->num_rows();
        
    }

    public function registeredUserAdsCount($phone)
    {
        // getAdsCountForPhoneNumber
        $this->db->select('*');
        $this->db->from('ads_users');
        $this->db->where('mobile', $phone);
        $this->db->where('is_registered', 1);
        $ads = $this->db->get();
        return $ads->num_rows();
        
    }

    public function nonRegisteredUserAdsCount($phone)
    {
        $this->db->select('*');
        $this->db->from('ads_users');
        $this->db->where('mobile', $phone);
        $this->db->where('is_registered', 0);
        $query = $this->db->get();
        return $query->num_rows(); 
    }

    public function getLangImage($id = '', $thumb = true)
    {
        $file_path = 'uploads/language_flags/flag_' . $id . '_thumb.png';
        if (file_exists($file_path)) {
            if ($thumb == true) {
                $image_url = base_url($file_path);
            } else {
                $image_url = base_url('uploads/language_flags/flag_' . $id . '.png');
            }
        } else {
            if ($thumb == true) {
                $image_url = base_url('uploads/language_flags/defualt_thumb.png');
            } else {
                $image_url = base_url('uploads/language_flags/defualt.png');
            }
        }
        return $image_url;
    }
    
    public function allCities($active = 1)
    {
        $this->db->select('*');
        $this->db->from('cities');
        $this->db->where('status', $active);
        $query = $this->db->get();
        $this->db->order_by("id", "asc");
        
        return $query->result_array();
    }

    public function allRegions($active = 1)
    {
        $this->db->select('*');
        $this->db->from('regions');
        $this->db->where('status', $active);
        $query = $this->db->get();
        $this->db->order_by("id", "asc");
        
        return $query->result_array();
    }

    public function allDistricts($active = 1)
    {
        $this->db->select('*');
        $this->db->from('districts');
        $this->db->where('status', $active);
        $query = $this->db->get();
        $this->db->order_by("id", "asc");
        
        return $query->result_array();
    }

    public function allTargets($active = 1)
    {
        $this->db->select('*');
        $this->db->from('targets');
        $this->db->where('status', $active);
        $query = $this->db->get();
        $this->db->order_by("id", "asc");
        
        return $query->result_array();
    }

    public function allMetros($active = 1)
    {
        $this->db->select('*');
        $this->db->from('metros');
        $this->db->where('status', $active);
        $query = $this->db->get();
        $this->db->order_by("id", "asc");
        
        return $query->result_array();
    }


    public function adsType($active = 1)
    {
        $this->db->select('*');
        $this->db->from('ads_type');
        $this->db->where('status', $active);
        $query = $this->db->get();
        $this->db->order_by("id", "asc");
        
        return $query->result_array();
    }

    public function estateTypes($active = 1)
    {
        $this->db->select('*');
        $this->db->from('estate_type');
        $this->db->where('status', $active);
        $query = $this->db->get();
        $this->db->order_by("id", "asc");
        
        return $query->result_array();
    }


    public function getWishCount($id, $sess)
    {
        $this->db->select('id');
        $this->db->from('wishlists');
        $this->db->where("session_id", $sess);
        $this->db->where("data_id", $id);
        return $this->db->get()->num_rows();
        
    }

    public function getWishlist($sess)
    {
        $this->db->select('data_id');
        $this->db->from('wishlists');
        $this->db->where("session_id", $sess);
        $query = $this->db->get();
        return $query->num_rows() > 0 ? $query->result_array() : NULL;
        
    }

    public function adsRules()
    {
        $this->db->select('*');
        $this->db->from('ads_rules');
        $query = $this->db->get();
        return $query->result_array()[0];
    }

    public function allNewAdsList()
    {
        $ads_config  = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();
        $query = $this->db->query("SELECT * FROM ads_all WHERE status=2 AND created_at BETWEEN NOW() - INTERVAL 30 DAY AND NOW() ORDER BY id DESC LIMIT ".$ads_config['home_ads_limit']."");
        return $query->num_rows() > 0 ? $query->result_array() : NULL;
        
    }

    public function allNewAdsListPagination($limit, $start)
    {
        
        $query = $this->db->query("SELECT * FROM ads_all WHERE status=2 AND created_at BETWEEN NOW() - INTERVAL 30 DAY AND NOW() ORDER BY id DESC LIMIT $limit, $start");
        return $query->num_rows() > 0 ? $query->result_array() : NULL;
        
    }   

    public function allYeniTikiliPagination($limit,$sayfada)
    {
        $ads_config  = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();
        $query = $this->db->query("SELECT * FROM ads_all WHERE property_type=1 AND status=2 AND created_at BETWEEN NOW() - INTERVAL 30 DAY AND NOW() ORDER BY id DESC LIMIT $limit, $sayfada");
        return $query->num_rows() > 0 ? $query->result_array() : NULL;
    }

    public function allYeniTikili()
    {
        $ads_config  = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();
        $query = $this->db->query("SELECT * FROM ads_all WHERE property_type=1 AND status=2 AND created_at BETWEEN NOW() - INTERVAL 30 DAY AND NOW() ORDER BY id DESC LIMIT ".$ads_config['home_ads_limit']."");
        return $query->num_rows() > 0 ? $query->result_array() : NULL;
    }

    public function allKohneTikili()
    {
        $ads_config  = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();
        $query = $this->db->query("SELECT * FROM ads_all WHERE property_type=2 AND status=2 AND created_at BETWEEN NOW() - INTERVAL 30 DAY AND NOW() ORDER BY id DESC LIMIT ".$ads_config['home_ads_limit']."");
        return $query->num_rows() > 0 ? $query->result_array() : NULL;  
    }

    public function allHeyetEvi()
    {
        $ads_config  = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();
        $query = $this->db->query("SELECT * FROM ads_all WHERE property_type=3 AND status=2 AND created_at BETWEEN NOW() - INTERVAL 30 DAY AND NOW() ORDER BY id DESC LIMIT ".$ads_config['home_ads_limit']."");
        return $query->num_rows() > 0 ? $query->result_array() : NULL;   
    }

    public function allVilla()
    {
        $ads_config  = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();
        $query = $this->db->query("SELECT * FROM ads_all WHERE property_type=5 AND status=2 AND created_at BETWEEN NOW() - INTERVAL 30 DAY AND NOW() ORDER BY id DESC LIMIT ".$ads_config['home_ads_limit']."");
        return $query->num_rows() > 0 ? $query->result_array() : NULL;   
    }

    public function allOfis()
    {
        $ads_config  = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();
        $query = $this->db->query("SELECT * FROM ads_all WHERE property_type=6 AND status=2 AND created_at BETWEEN NOW() - INTERVAL 30 DAY AND NOW() ORDER BY id DESC LIMIT ".$ads_config['home_ads_limit']."");
        return $query->num_rows() > 0 ? $query->result_array() : NULL;   
    }

    public function allTorpaq()
    {
        $ads_config  = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();
        $query = $this->db->query("SELECT * FROM ads_all WHERE property_type=8 AND status=2 AND created_at BETWEEN NOW() - INTERVAL 30 DAY AND NOW() ORDER BY id DESC LIMIT ".$ads_config['home_ads_limit']."");
        return $query->num_rows() > 0 ? $query->result_array() : NULL;   
    }

    public function allObyekt()
    {
        $ads_config  = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();
        $query = $this->db->query("SELECT * FROM ads_all WHERE property_type=9 AND status=2 AND created_at BETWEEN NOW() - INTERVAL 30 DAY AND NOW() ORDER BY id DESC LIMIT ".$ads_config['home_ads_limit']."");
        return $query->num_rows() > 0 ? $query->result_array() : NULL;   
    }

    public function allQaraj()
    {
        $ads_config  = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();
        $query = $this->db->query("SELECT * FROM ads_all WHERE property_type=10 AND status=2 AND created_at BETWEEN NOW() - INTERVAL 30 DAY AND NOW() ORDER BY id DESC LIMIT ".$ads_config['home_ads_limit']."");
        return $query->num_rows() > 0 ? $query->result_array() : NULL;   
    }
    
    public function searchAdsList($sql)
    {
        $query = $this->db->query($sql." ORDER BY id DESC");
        return $query->num_rows() > 0 ? $query->result_array() : NULL;
        
    }

    public function searchAdsNumber($sql)
    {
        $query = $this->db->query($sql." ORDER BY id DESC");
        return $query->num_rows() == 1 ? $query->result_array()[0] : NULL;
    }

    public function allNewAdsSaleList($limit, $start)
    {
        $ads_config       = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();
        $query = $this->db->query("SELECT * FROM ads_all WHERE status=2 AND announcement_type=1  ORDER BY id DESC LIMIT $limit, $start");
        return $query->num_rows() > 0 ? $query->result_array() : NULL;
        
    }

    public function allNewAdsRentMonthlyList($limit, $sayfada)
    {
        $ads_config       = $this->db->get_where('ads_configuration', array('id' => 1))->row_array();
        $query = $this->db->query("SELECT * FROM ads_all WHERE status=2 AND announcement_type=2  ORDER BY id DESC LIMIT $limit, $sayfada");
        return $query->num_rows() > 0 ? $query->result_array() : NULL;
        
    }

    public function allNewAdsRentDailyList($limit,$sayfada)
    {
        $ads_config       = $this->db->get_where('ads_configuration', array('id' => 1))->row_array(); 
        $query = $this->db->query("SELECT * FROM ads_all WHERE status=2 AND announcement_type=3  ORDER BY id DESC LIMIT $limit,$sayfada");
        return $query->num_rows() > 0 ? $query->result_array() : NULL;
        
    }

    public function allNewAdsRentList()
    {
        $this->db->select('*');
        $this->db->from('ads_all');
        if (ENVIRONMENT=="development") 
        {
            $array = ['announcement_type' => 2, 'announcement_type' => 3];
            $wherecond = "( ( ( announcement_type = 2 OR announcement_type = 3 ) ) )";
            $this->db->where('status', 2);
            $this->db->where($wherecond);
        }
        else
        {
            $this->db->where('status', 1);
            $this->db->where($wherecond);
        }
        
        $this->db->order_by("id", "asc");
        $query = $this->db->get();
        return $query->num_rows() > 0 ? $query->result_array() : NULL;
        
    }
    

    public function getDefaultBranch()
    {
        $school = "";
        if ($this->uri->segment(4)) {
            $school = $this->uri->segment(4);
        } else {
            $school = $this->uri->segment(3);
        }
        $row = $this->db->select('branch_id')->get_where('front_cms_setting', array('url_alias' => $school))->row_array();
        if (empty($row) || $row['branch_id'] == 0) {
            $row = $this->db->where('id', 1)->get('global_settings')->row_array();
            return $row['cms_default_branch'];
        } else {
            return $row['branch_id'];
        }
    }

    public function getCmsHome($item_type, $branch_id, $active = 1, $single = true)
    {
        $this->db->select('*');
        $this->db->from('front_cms_home');
        $this->db->where('active', $active);
        $this->db->where('branch_id', $branch_id);
        $this->db->where('item_type', $item_type);
        $query = $this->db->get();
        if ($single == true) {
            $method = "row_array";
        } else {
            $this->db->order_by("id", "asc");
            $method = "result_array";
        }
        return $query->$method();
    }

    // public function get_teacher_list($start = '', $branch_id)
    // {
    //     $this->db->select('staff.*,staff_designation.name as designation_name,staff_department.name as department_name');
    //     $this->db->from('staff');
    //     $this->db->join('login_credential', 'login_credential.user_id = staff.id and login_credential.role != 7', 'inner');
    //     $this->db->join('staff_designation', 'staff_designation.id = staff.designation', 'left');
    //     $this->db->join('staff_department', 'staff_department.id = staff.department', 'left');
    //     $this->db->where('login_credential.role', 3);
    //     $this->db->where('login_credential.active', 1);
    //     $this->db->where('staff.branch_id', $branch_id);
    //     $this->db->order_by('staff.id', 'asc');
    //     if ($start != '') {
    //         $this->db->limit(4, $start);
    //     }
    //     $result = $this->db->get()->result_array();
    //     return $result;
    // }

    public function get_teacher_departments($branch_id)
    {
        $this->db->select('staff_department.id as department_id,staff_department.name as department_name');
        $this->db->from('staff_department');
        $this->db->join('staff', 'staff.department = staff_department.id', 'left');
        $this->db->join('login_credential', 'login_credential.user_id = staff.id and login_credential.role != 7', 'inner');
        $this->db->where('login_credential.role', 3);
        $this->db->where('login_credential.active', 1);
        $this->db->where('staff_department.branch_id', $branch_id);
        $this->db->group_by('staff_department.id');
        $this->db->order_by('staff.id', 'asc');
        $result = $this->db->get()->result_array();
        return $result;
    }

    public function branch_list()
    {
        $this->db->select('b.school_name,b.id');
        $this->db->from('branch as b');
        $this->db->join('front_cms_setting as f', 'f.branch_id = b.id', 'inner');
        $this->db->where('f.cms_active', 1);
        $result = $this->db->get()->result();
        $arrayData = array();
        foreach ($result as $row) {
            $arrayData[$row->id] = $row->school_name;
        }
        return $arrayData;
    }

    public function menuList($school = '', $branchID = '')
    {
        $mainMenu = array();
        $subMenu = array();
        $mergeMenu = array();
        if (empty($branchID)) {
            $branchID = $this->getDefaultBranch();
        }
        $this->db->select('front_cms_menu.*,if(mv.name is null, front_cms_menu.title, mv.name) as title,if(mv.parent_id is null, front_cms_menu.parent_id, mv.parent_id) as parent_id,if(mv.ordering is null, front_cms_menu.ordering, mv.ordering) as ordering,mv.invisible');
        $this->db->from('front_cms_menu');
        $this->db->join('front_cms_menu_visible as mv', 'mv.menu_id = front_cms_menu.id and mv.branch_id = ' . $branchID, 'left');
        $this->db->where('front_cms_menu.publish', 1);
        $this->db->where_in('front_cms_menu.branch_id', array(0, $branchID));
        $result = $this->db->get()->result_array();
        //php array sort
        array_multisort(array_column($result, 'ordering'), SORT_ASC, SORT_NUMERIC, $result);
        foreach ($result as $key => $value) {
            if ($value['invisible'] == 0) {
                if ($value['parent_id'] == 0) {
                    $mainMenu[$key] = $value;
                } else {
                    $subMenu[$key] = $value;
                }
            }
        }

        foreach ($mainMenu as $key => $value) {
            $mergeMenu[$key] = $value;
            $mergeMenu[$key]['url'] = $this->genURL($value, $school);
            foreach ($subMenu as $key2 => $value2) {
                if ($value['id'] == $value2['parent_id']) {
                    $mergeMenu[$key]['submenu'][$key2] = array(
                        'title' => $value2['title'],
                        'open_new_tab' => $value2['open_new_tab'],
                        'url' => $this->genURL($value2, $school),
                    );
                }
            }
        }

        return $mergeMenu;
    }

    public function genURL($array = array(), $school = '')
    {
        $url = "#";
        if ($school != '') {
            $school = '/' . $school;
        }

        if ($array['system'] && $array['alias'] !== 'pages') {
            $url = base_url('home/' . $array['alias'] . $school);
        } else {
            if ($array['ext_url']) {
                $url = $array['ext_url_address'];
            } else {
                $url = base_url('home/page/' . $array['alias'] . $school);
            }
        }
        return $url;
    }

    public function getExamList($branchID = '', $classID = '', $sectionID = '')
    {
        $sessionID = get_session_id();
        $this->db->select('exam.id,exam.name,exam.term_id');
        $this->db->from('timetable_exam');
        $this->db->join('exam', 'exam.id = timetable_exam.exam_id', 'left');
        if (!empty($classID)) {
            $this->db->where('timetable_exam.class_id', $classID);
        }

        if (!empty($sectionID)) {
            $this->db->where('timetable_exam.section_id', $sectionID);
        }

        $this->db->where('timetable_exam.branch_id', $branchID);
        $this->db->where('timetable_exam.session_id', $sessionID);
        $this->db->group_by('timetable_exam.exam_id');
        $result = $this->db->get()->result_array();
        return $result;
    }

    public function getGalleryCategory($branch_id)
    {
        $this->db->select('front_cms_gallery_category.id as category_id,front_cms_gallery_category.name as category_name');
        $this->db->from('front_cms_gallery_category');
        $this->db->join('front_cms_gallery_content', 'front_cms_gallery_content.category_id = front_cms_gallery_category.id', 'inner');
        $this->db->where('front_cms_gallery_category.branch_id', $branch_id);
        $this->db->group_by('front_cms_gallery_category.id');
        $this->db->where('front_cms_gallery_content.show_web', 1);
        $this->db->order_by('front_cms_gallery_category.id', 'asc');
        $result = $this->db->get()->result_array();
        return $result;
    }

    public function getGalleryList($branch_id)
    {
        $this->db->select('front_cms_gallery_content.*,staff.name as staff_name');
        $this->db->from('front_cms_gallery_content');
        $this->db->join('staff', 'staff.id = front_cms_gallery_content.added_by', 'left');
        $this->db->where('front_cms_gallery_content.branch_id', $branch_id);
        $this->db->where('front_cms_gallery_content.show_web', 1);
        $this->db->order_by('front_cms_gallery_content.id', 'asc');
        $result = $this->db->get()->result_array();
        return $result;
    }

    public function getStatisticsCounter($type, $branch_id)
    {
        $result = 0;
        if ($type == 'class' || $type == 'section' || $type == 'live_class' || $type == 'subject' || $type == 'exam' || $type == 'book' || $type == 'branch') {
            $this->db->select('id');
            $this->db->from($type);
            if ($type != 'branch') {
                $this->db->where("branch_id", $branch_id);
            }
            $q = $this->db->get()->num_rows();
            $result = $q;
        }
        if ($type == 'employees' || $type == 'teacher') {
            $this->db->select('count(staff.id) as snumber');
            $this->db->from('staff');
            $this->db->join('login_credential', 'login_credential.user_id = staff.id', 'inner');
            $this->db->where_not_in('login_credential.role', 1);
            if ($type == 'teacher') {
                $this->db->where('login_credential.role', 3);
            } else {
                $this->db->where_not_in('login_credential.role', array(1, 6, 7));
            }
            $this->db->where('staff.branch_id', $branch_id);
            $q = $this->db->get()->row_array();
            $result = $q['snumber'];
        }
        if ($type == 'student') {
            $this->db->select('student.id');
            $this->db->from('enroll');
            $this->db->join('student', 'student.id = enroll.student_id', 'inner');
            $this->db->where('enroll.branch_id', $branch_id);
            $result = $this->db->get()->num_rows();
        }
        if ($type == 'parent') {
            $this->db->select('count(parent.id) as snumber');
            $this->db->from('parent');
            $this->db->where('parent.branch_id', $branch_id);
            $q = $this->db->get()->row_array();
            $result = $q['snumber'];
        }
        return $result;
    }

    public function getPaymentConfig($branchID)
    {
        $this->db->where('branch_id', $branchID);
        $this->db->select('*')->from('payment_config');
        return $this->db->get()->row_array();
    }
}
