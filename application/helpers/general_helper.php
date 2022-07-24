<?php
if ( !defined( 'BASEPATH' ) )exit( 'No direct script access allowed' );

function dd($par)
{
    echo "<pre>";
    print_r($par);
    echo "</pre>";
    die();
}

function date_aze($format, $datetime = 'now'){
    $z = date("$format", strtotime($datetime));
    $gun_dizi = array(
        'Monday'    => 'Bazar ertəsi',
        'Tuesday'   => 'Çərşənbə axşamı',
        'Wednesday' => 'Çərşənbə',
        'Thursday'  => 'Cümə axşamı',
        'Friday'    => 'Cümə',
        'Saturday'  => 'Şənbə',
        'Sunday'    => 'Bazar',
        'January'   => 'Yanvar',
        'February'  => 'Fevral',
        'March'     => 'Mart',
        'April'     => 'Aprel',
        'May'       => 'May',
        'June'      => 'İyun',
        'July'      => 'İyul',
        'August'    => 'Avqust',
        'September' => 'Sentyabr',
        'October'   => 'Oktyabr',
        'November'  => 'Noyabr',
        'December'  => 'Dekabr',
        'Mon'       => 'Bzr.e',
        'Tue'       => 'Çər.a',
        'Wed'       => 'Çər',
        'Thu'       => 'Cüm.a',
        'Fri'       => 'Cüm',
        'Sat'       => 'Şnb',
        'Sun'       => 'Bzr',
        'Jan'       => 'Yan',
        'Feb'       => 'Fev',
        'Mar'       => 'Mar',
        'Apr'       => 'Apr',
        'Jun'       => 'İyn',
        'Jul'       => 'İyl',
        'Aug'       => 'Avq',
        'Sep'       => 'Sen',
        'Oct'       => 'Okt',
        'Nov'       => 'Noy',
        'Dec'       => 'Dek',
    );
    foreach($gun_dizi as $en => $tr){
        $z = str_replace($en, $tr, $z);
    }
    if(strpos($z, 'May') !== false && strpos($format, 'F') === false) $z = str_replace('May', 'May', $z);
    return $z;
}

function formatPhoneNumber($par='',$number='') 
{
    // 070 854 43 01
    $without_zero   = substr($number, 1, 9); // 708544301
    $after_pr_code  = substr($number, 3, 3); // 854
    $first_twoDigit = $number[6].''.$number[7]; // 43
    $last_twoDigit  = $number[8].''.$number[9]; // 43
    $provider       = substr($number, 0, 3);
    $provider_two   = '('.$provider.')'; 
    $beauty_number  = $provider_two.' '.$after_pr_code.'-'.$first_twoDigit.'-'.$last_twoDigit;
    $international  = "+994".$without_zero;
    if ($par=='beauty') 
    {
        return $beauty_number;
    }
    else
    {
        $ar = [
            'international' => $international,
            'provider'      => $provider,
            'national'      => $beauty_number,
            'second_format' => $without_zero
        ];
        return $ar;
    }

    
    
}

function provider_name($par='')
{
    if ($par=='070' || $par == '077') 
    {
        return 'Narmobile';
    }
    elseif ($par=='055' || $par == '099') 
    {
        return 'Bakcell';
    }
    elseif($par=='010' || $par == '050' || $par == '051')
    {
        return 'Azercell';
    }
}

function seo_link($str, $options = array())
 {
     $str = mb_convert_encoding((string)$str, 'UTF-8', mb_list_encodings());
     $defaults = array(
         'delimiter' => '-',
         'limit' => null,
         'lowercase' => true,
         'replacements' => array(),
         'transliterate' => true
     );
     $options = array_merge($defaults, $options);
     $char_map = array(
         // Latin
         'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'AE', 'Ç' => 'C',
         'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I',
         'Ð' => 'D', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ő' => 'O',
         'Ø' => 'O', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ű' => 'U', 'Ý' => 'Y', 'Þ' => 'TH',
         'ß' => 'ss',
         'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'ae', 'ç' => 'c',
         'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i',
         'ð' => 'd', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ő' => 'o',
         'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'ű' => 'u', 'ý' => 'y', 'þ' => 'th',
         'ÿ' => 'y',
         // Latin symbols
         '©' => '(c)',
         // Greek
         'Α' => 'A', 'Β' => 'B', 'Γ' => 'G', 'Δ' => 'D', 'Ε' => 'E', 'Ζ' => 'Z', 'Η' => 'H', 'Θ' => '8',
         'Ι' => 'I', 'Κ' => 'K', 'Λ' => 'L', 'Μ' => 'M', 'Ν' => 'N', 'Ξ' => '3', 'Ο' => 'O', 'Π' => 'P',
         'Ρ' => 'R', 'Σ' => 'S', 'Τ' => 'T', 'Υ' => 'Y', 'Φ' => 'F', 'Χ' => 'X', 'Ψ' => 'PS', 'Ω' => 'W',
         'Ά' => 'A', 'Έ' => 'E', 'Ί' => 'I', 'Ό' => 'O', 'Ύ' => 'Y', 'Ή' => 'H', 'Ώ' => 'W', 'Ϊ' => 'I',
         'Ϋ' => 'Y',
         'α' => 'a', 'β' => 'b', 'γ' => 'g', 'δ' => 'd', 'ε' => 'e', 'ζ' => 'z', 'η' => 'h', 'θ' => '8',
         'ι' => 'i', 'κ' => 'k', 'λ' => 'l', 'μ' => 'm', 'ν' => 'n', 'ξ' => '3', 'ο' => 'o', 'π' => 'p',
         'ρ' => 'r', 'σ' => 's', 'τ' => 't', 'υ' => 'y', 'φ' => 'f', 'χ' => 'x', 'ψ' => 'ps', 'ω' => 'w',
         'ά' => 'a', 'έ' => 'e', 'ί' => 'i', 'ό' => 'o', 'ύ' => 'y', 'ή' => 'h', 'ώ' => 'w', 'ς' => 's',
         'ϊ' => 'i', 'ΰ' => 'y', 'ϋ' => 'y', 'ΐ' => 'i',
         // Turkish
         'Ş' => 'S', 'İ' => 'I', 'Ç' => 'C', 'Ü' => 'U', 'Ö' => 'O', 'Ğ' => 'G', 'Ə' => 'E',
         'ş' => 's', 'ı' => 'i', 'ç' => 'c', 'ü' => 'u', 'ö' => 'o', 'ğ' => 'g', 'ə' => 'e',
         // Russian
         'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'Yo', 'Ж' => 'Zh',
         'З' => 'Z', 'И' => 'I', 'Й' => 'J', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
         'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
         'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sh', 'Ъ' => '', 'Ы' => 'Y', 'Ь' => '', 'Э' => 'E', 'Ю' => 'Yu',
         'Я' => 'Ya',
         'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
         'з' => 'z', 'и' => 'i', 'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
         'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
         'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sh', 'ъ' => '', 'ы' => 'y', 'ь' => '', 'э' => 'e', 'ю' => 'yu',
         'я' => 'ya',
         // Ukrainian
         'Є' => 'Ye', 'І' => 'I', 'Ї' => 'Yi', 'Ґ' => 'G',
         'є' => 'ye', 'і' => 'i', 'ї' => 'yi', 'ґ' => 'g',
         // Czech
         'Č' => 'C', 'Ď' => 'D', 'Ě' => 'E', 'Ň' => 'N', 'Ř' => 'R', 'Š' => 'S', 'Ť' => 'T', 'Ů' => 'U',
         'Ž' => 'Z',
         'č' => 'c', 'ď' => 'd', 'ě' => 'e', 'ň' => 'n', 'ř' => 'r', 'š' => 's', 'ť' => 't', 'ů' => 'u',
         'ž' => 'z',
         // Polish
         'Ą' => 'A', 'Ć' => 'C', 'Ę' => 'e', 'Ł' => 'L', 'Ń' => 'N', 'Ó' => 'o', 'Ś' => 'S', 'Ź' => 'Z',
         'Ż' => 'Z',
         'ą' => 'a', 'ć' => 'c', 'ę' => 'e', 'ł' => 'l', 'ń' => 'n', 'ó' => 'o', 'ś' => 's', 'ź' => 'z',
         'ż' => 'z',
         // Latvian
         'Ā' => 'A', 'Č' => 'C', 'Ē' => 'E', 'Ģ' => 'G', 'Ī' => 'i', 'Ķ' => 'k', 'Ļ' => 'L', 'Ņ' => 'N',
         'Š' => 'S', 'Ū' => 'u', 'Ž' => 'Z',
         'ā' => 'a', 'č' => 'c', 'ē' => 'e', 'ģ' => 'g', 'ī' => 'i', 'ķ' => 'k', 'ļ' => 'l', 'ņ' => 'n',
         'š' => 's', 'ū' => 'u', 'ž' => 'z'
     );
     $str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);
     if ($options['transliterate']) {
         $str = str_replace(array_keys($char_map), $char_map, $str);
     }
     $str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);
     $str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);
     $str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');
     $str = trim($str, $options['delimiter']);
     return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;
 }

function unique_token()
{
    $token = openssl_random_pseudo_bytes(16);
    $token = bin2hex($token);
    return $token;
}

function getBrowser() { 
  $u_agent = $_SERVER['HTTP_USER_AGENT'];
  $bname = 'Unknown';
  $platform = 'Unknown';
  $version= "";

  //First get the platform?
  if (preg_match('/linux/i', $u_agent)) {
    $platform = 'linux';
  }elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
    $platform = 'mac';
  }elseif (preg_match('/windows|win32/i', $u_agent)) {
    $platform = 'windows';
  }

  // Next get the name of the useragent yes seperately and for good reason
  if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)){
    $bname = 'Internet Explorer';
    $ub = "MSIE";
  }elseif(preg_match('/Firefox/i',$u_agent)){
    $bname = 'Mozilla Firefox';
    $ub = "Firefox";
  }elseif(preg_match('/OPR/i',$u_agent)){
    $bname = 'Opera';
    $ub = "Opera";
  }elseif(preg_match('/Chrome/i',$u_agent) && !preg_match('/Edge/i',$u_agent)){
    $bname = 'Google Chrome';
    $ub = "Chrome";
  }elseif(preg_match('/Safari/i',$u_agent) && !preg_match('/Edge/i',$u_agent)){
    $bname = 'Apple Safari';
    $ub = "Safari";
  }elseif(preg_match('/Netscape/i',$u_agent)){
    $bname = 'Netscape';
    $ub = "Netscape";
  }elseif(preg_match('/Edge/i',$u_agent)){
    $bname = 'Edge';
    $ub = "Edge";
  }elseif(preg_match('/Trident/i',$u_agent)){
    $bname = 'Internet Explorer';
    $ub = "MSIE";
  }

  // finally get the correct version number
  $known = array('Version', $ub, 'other');
  $pattern = '#(?<browser>' . join('|', $known) .
')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
  if (!preg_match_all($pattern, $u_agent, $matches)) {
    // we have no matching number just continue
  }
  // see how many we have
  $i = count($matches['browser']);
  if ($i != 1) {
    //we will have two since we are not using 'other' argument yet
    //see if version is before or after the name
    if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
        $version= $matches['version'][0];
    }else {
        $version= $matches['version'][1];
    }
  }else {
    $version= $matches['version'][0];
  }

  // check if we have a number
  if ($version==null || $version=="") {$version="?";}

  return array(
    'userAgent' => $u_agent,
    'name'      => $bname,
    'version'   => $version,
    'platform'  => $platform,
    'pattern'    => $pattern
  );
} 

function getIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    if (filter_var($client, FILTER_VALIDATE_IP)) {
        $ip = $client;
    } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
        $ip = $forward;
    } else {
        $ip = ($remote == "::1" ? "127.0.0.1" : $remote);
    }
    return $ip;
}

// return translation
function translate($word = '')
{
    $CI = &get_instance();
    if ($CI->session->has_userdata('set_lang')) {
        $set_lang = $CI->session->userdata('set_lang');
    } else {
        $set_lang = get_global_setting('translation');
    }

    if ($set_lang == '') {
        $set_lang = 'english';
    }
    $query = $CI->db->get_where('languages', array('word' => $word));
    if ($query->num_rows() > 0) {
        if (isset($query->row()->$set_lang) && $query->row()->$set_lang != '') {
            return $query->row()->$set_lang;
        } else {
            return $query->row()->english;
        }
    } else {
        $arrayData = array(
            'word'      => $word,
            'english'   => ucwords(str_replace('_', ' ', $word)),
        );
        $CI->db->insert('languages', $arrayData);
        return ucwords(str_replace('_', ' ', $word));
    }
}

function get_permission($permission, $can = '')
{
    $ci = &get_instance();
    $role_id = $ci->session->userdata('loggedin_role_id');
    if ($role_id == 1) {
        return true;
    }
    $permissions = get_staff_permissions($role_id);
    foreach ($permissions as $permObject) {
        if ($permObject->permission_prefix == $permission && $permObject->$can == '1') {
            return true;
        }
    }
    return false;
}

function get_staff_permissions($id)
{
    $ci = &get_instance();
    $sql = "SELECT `staff_privileges`.*, `permission`.`id` as `permission_id`, `permission`.`prefix` as `permission_prefix` FROM `staff_privileges` JOIN `permission` ON `permission`.`id`=`staff_privileges`.`permission_id` WHERE `staff_privileges`.`role_id` = " . $ci->db->escape($id);
    $result = $ci->db->query($sql)->result();
    return $result;
}

function estateTypeName($id='')
{
    $CI = &get_instance();
    $CI->db->select('*');
    $CI->db->from('estate_type');
    $CI->db->where('id', $id);
    $query = $CI->db->get();
    $CI->db->order_by("id", "asc");
    
    return  $query->num_rows() > 0 ? $query->result_array()[0] : NULL;
}

function banners($page,$side)
{
    $CI = &get_instance();
    $CI->db->select('*');
    $CI->db->from('banners');
    $CI->db->where('page', $page);
    $CI->db->where('side', $side);
    $CI->db->where('status', 1);
    $query = $CI->db->get();
    return  $query->num_rows() > 0 ? $query->result_array()[0] : NULL;
}

function aboutConfig($val)
{
    $CI = &get_instance();
    $CI->db->select('*');
    $CI->db->from('about_ads_configuration');
    $CI->db->where('modul_key', $val);
    $query = $CI->db->get();
    return  $query->num_rows() > 0 ? $query->result_array()[0] : NULL;
}



function get_session_id()
{
    $CI = &get_instance();
    if ($CI->session->has_userdata('set_session_id')) {
        $session_id = $CI->session->userdata('set_session_id');
    } else {
        $session_id = get_global_setting('session_id');
    }
    return $session_id;
}

function is_secure($url)
{
    if ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) {
        $val = 'https://' . $url;
    } else {
        $val = 'http://' . $url;
    }
    return $val;
}

function get_global_setting($name = '')
{
    $CI = &get_instance();
    $name = trim($name);
    $CI->db->where('id', 1);
    $CI->db->select($name);
    $query = $CI->db->get('global_settings');

    if ($query->num_rows() > 0) {
        $row = $query->row();
        return $row->$name;
    }
}

function get_lang_info($field, $name = '')
{
    $CI = &get_instance();
    $name = trim($name);
    $CI->db->where('lang_field', $field);
    $CI->db->select($name);
    $query = $CI->db->get('language_list');

    if ($query->num_rows() > 0) {
        $row = $query->row();
        return $row->$name;
    }
}

function ads_photos($ids)
{
    $CI = &get_instance();
    $CI->db->select("*");
    $CI->db->where_in('id',explode(",",$ids));
    $CI->db->limit(5);
    $query = $CI->db->get('thumb_image');
    if ($query->num_rows() > 0) 
    {
        return $query->result_array();
    } 
}

function metro_name_by_id($id)
{
    $this->db->select('*');
    $this->db->from('metros');
    $this->db->where('id', $id);
    $query = $this->db->get();
    
    if ($query->num_rows() > 0) {
        $row = $query->row();
        return $row->metro_name;
    }
    
}



/**************************FRONT****************************/

// get session loggedin
function is_user_loggedin()
{
    $CI = &get_instance();
    if ($CI->session->has_userdata('fr_loggedin')) {
        return true;
    }
    return false;
}

function sess_reset_tkn()
{
    $CI = &get_instance();
    if ($CI->session->has_userdata('sess_reset_tkn')) {
        return true;
    }
    return false;
}

function is_logged_name()
{
    $CI = &get_instance();
    if ($CI->session->has_userdata('fr_name')) {
        return $CI->session->userdata('fr_name');
    }
    return false;
}

function logged_user_id()
{
    $CI = &get_instance();
    if ($CI->session->has_userdata('fr_logger_id')) {
        return $CI->session->userdata('fr_logger_id');
    }
    return false;
}

/*********************** DASHBOARD ***************************/


// is superadmin logged in @return boolean
function is_superadmin_loggedin()
{
    $CI = &get_instance();
    if ($CI->session->userdata('loggedin_role_id') == 1) {
        return true;
    }
    return false;
}

// is admin logged in @return boolean
function is_admin_loggedin()
{
    $CI = &get_instance();
    if ($CI->session->userdata('loggedin_role_id') == 2) {
        return true;
    }
    return false;
}

// is teacher logged in @return boolean
function is_teacher_loggedin()
{
    $CI = &get_instance();
    if ($CI->session->userdata('loggedin_role_id') == 3) {
        return true;
    }
    return false;
}

// is accountant logged in @return boolean
function is_accountant_loggedin()
{
    $CI = &get_instance();
    if ($CI->session->userdata('loggedin_role_id') == 4) {
        return true;
    }
    return false;
}

// is librarian logged in @return boolean
function is_librarian_loggedin()
{
    $CI = &get_instance();
    if ($CI->session->userdata('loggedin_role_id') == 5) {
        return true;
    }
    return false;
}

// is parent logged in @return boolean
function is_parent_loggedin()
{
    $CI = &get_instance();
    if ($CI->session->userdata('loggedin_role_id') == 6) {
        return true;
    }
    return false;
}

// is parent logged in @return boolean
function is_student_loggedin()
{
    $CI = &get_instance();
    if ($CI->session->userdata('loggedin_role_id') == 7) {
        return true;
    }
    return false;
}

// get logged in user id - login credential DB id
function get_loggedin_id()
{
    $ci = &get_instance();
    return $ci->session->userdata('loggedin_id');
}

// get staff db id
function get_loggedin_user_id()
{
    $ci = &get_instance();
    return $ci->session->userdata('loggedin_userid');
}

// get session loggedin
function is_loggedin()
{
    $CI = &get_instance();
    if ($CI->session->has_userdata('loggedin')) {
        return true;
    }
    return false;
}

// get loggedin role name
function loggedin_role_name()
{
    $CI = &get_instance();
    $roleID = $CI->session->userdata('loggedin_role_id');
    return $CI->db->select('name')->where('id', $roleID)->get('roles')->row()->name;
}

function loggedin_role_id()
{
    $ci = &get_instance();
    return $ci->session->userdata('loggedin_role_id');
}

// get logged in user type
function get_loggedin_user_type()
{
    $CI = &get_instance();
    return $CI->session->userdata('loggedin_type');
}

// get logged in user type
function get_loggedin_branch_id()
{
    $CI = &get_instance();
    return $CI->session->userdata('loggedin_branch');
}

// get parent selected active children Id
function get_activeChildren_id()
{
    $CI = &get_instance();
    return $CI->session->userdata('myChildren_id');
}

// get table name by type and id
function get_type_name_by_id($table, $type_id = '', $field = 'name')
{
    $CI = &get_instance();
    $get = $CI->db->select($field)->from($table)->where('id', $type_id)->limit(1)->get()->row_array();
    return $get[$field];
}

// set session alert / flashdata
function set_alert($type, $message)
{
    $CI = &get_instance();
    $CI->session->set_flashdata('alert-message-' . $type, $message);
}

// generate md5 hash
function app_generate_hash()
{
    return md5(rand() . microtime() . time() . uniqid());
}

// generate encryption key
function generate_encryption_key()
{
    $CI = &get_instance();
    // In case accessed from my_functions_helper.php
    $CI->load->library('encryption');
    $key = bin2hex($CI->encryption->create_key(16));
    return $key;
}

// generate get image url
function get_image_url($role = '', $file_name = '')
{
    if ($file_name == 'defualt.png' || empty($file_name)) {
        $image_url = base_url('uploads/app_image/defualt.png');
    } else {
        if (file_exists('uploads/images/' . $role . '/' . $file_name)) {
            $image_url = base_url('uploads/images/' . $role . '/' . $file_name);
        } else {
            $image_url = base_url('uploads/app_image/defualt.png');
        }
    }
    return $image_url;
}

// generate get agency image url
function get_agency_image_url($file_name = '')
{
    if ($file_name == 'defualt.png' || empty($file_name)) {
        $image_url = base_url('uploads/app_image/defualt.png');
    } else {
        if (file_exists('uploads/images/agencies/' . $file_name)) {
            $image_url = base_url('uploads/images/agencies/' . $file_name);
        } else {
            $image_url = base_url('uploads/app_image/defualt.png');
        }
    }
    return $image_url;
}

function adsCountForUser($par)
{
    $CI = &get_instance();
    $query = $CI->db->query("SELECT * FROM ads_all WHERE mobile='".$par."'");
    return $query->num_rows();
}

// get date format config
function _d($date)
{
    if ($date == '' || is_null($date) || $date == '0000-00-00') {
        return '';
    }
    $formats = 'Y-m-d';
    $get_format = get_global_setting('date_format');
    if ($get_format != '') {
        $formats = $get_format;
    }
    return date($formats, strtotime($date));
}

// delete url
function btn_delete($uri)
{
    return "<button class='btn btn-danger icon btn-circle' onclick=confirm_modal('" . base_url($uri) . "') ><i class='fas fa-trash-alt'></i></button>";
}

// delete url
function csrf_jquery_token()
{
    $csrf = [get_instance()->security->get_csrf_token_name() => get_instance()->security->get_csrf_hash()];
    return $csrf;
}

function check_hash_restrictions($table, $id, $hash)
{
    $CI = &get_instance();
    if (!$table || !$id || !$hash) {
        show_404();
    }

    $query = $CI->db->select('hash')->from($table)->where('id', $id)->get();
    if ($query->num_rows() > 0) {
        $get_hash = $query->row()->hash;
    } else {
        $get_hash = '';
    }
    if (empty($hash) || ($get_hash != $hash)) {
        show_404();
    }
}

function getMonthslist($m)
{
    $months = array(
        '01' => translate('January'),
        '02' => translate('February'),
        '03' => translate('March'),
        '04' => translate('April'),
        '05' => translate('May'),
        '06' => translate('June'),
        '07' => translate('July '),
        '08' => translate('August'),
        '09' => translate('September'),
        '10' => translate('October'),
        '11' => translate('November'),
        '12' => translate('December'),
    );
    return $months[$m];
}

function session_wishlist($session,$ads_id)
{
    $CI = &get_instance();
    $session = (isset($_SESSION['wish_sess'])) ? $_SESSION['wish_sess'] : '';
    if (!empty($session)) 
    {
        $CI->db->select('*');
        $CI->db->from('wishlists');
        $CI->db->where('session_id', $session);
        $CI->db->where('data_id', $ads_id);
        $query = $CI->db->get();
        if ($query->num_rows() > 0) 
        {
            return $query->result_array()[0];
        } 
        else 
        {
            return [];
        }
        
    }
    else
    {
        return false;
    }
}

function check_wishlist($session)
{
    $CI = &get_instance();
    $session = (isset($_SESSION['wish_sess'])) ? $_SESSION['wish_sess'] : '';
    if (!empty($session)) 
    {
        $CI->db->select('*');
        $CI->db->from('wishlists');
        $CI->db->where('session_id', $session);
        $query = $CI->db->get();
        if ($query->num_rows() > 0) 
        {
            return true;
        } 
        else 
        {
            return false;
        }
        
    }
    else
    {
        return false;
    }
}

function get_nicetime($date)
{
    $get_format = get_global_setting('date_format');
    if (empty($date)) {
        return "Unknown";
    }
    // Current time as MySQL DATETIME value
    $csqltime = date('Y-m-d H:i:s');
    // Current time as Unix timestamp
    $ptime = strtotime($date);
    $ctime = strtotime($csqltime);

    //Now calc the difference between the two
    $timeDiff = floor(abs($ctime - $ptime) / 60);

    //Now we need find out whether or not the time difference needs to be in
    //minutes, hours, or days
    if ($timeDiff < 2) {
        $timeDiff = "Just now";
    } elseif ($timeDiff > 2 && $timeDiff < 60) {
        $timeDiff = floor(abs($timeDiff)) . " minutes ago";
    } elseif ($timeDiff > 60 && $timeDiff < 120) {
        $timeDiff = floor(abs($timeDiff / 60)) . " hour ago";
    } elseif ($timeDiff < 1440) {
        $timeDiff = floor(abs($timeDiff / 60)) . " hours ago";
    } elseif ($timeDiff > 1440 && $timeDiff < 2880) {
        $timeDiff = floor(abs($timeDiff / 1440)) . " day ago";
    } elseif ($timeDiff > 2880) {
        $timeDiff = date($get_format, $ptime);
    }
    return $timeDiff;
}

function bytesToSize($path, $filesize = '')
{
    if (!is_numeric($filesize)) {
        $bytes = sprintf('%u', filesize($path));
    } else {
        $bytes = $filesize;
    }
    if ($bytes > 0) {
        $unit = intval(log($bytes, 1024));
        $units = [
            'B',
            'KB',
            'MB',
            'GB',
        ];
        if (array_key_exists($unit, $units) === true) {
            return sprintf('%d %s', $bytes / pow(1024, $unit), $units[$unit]);
        }
    }
    return $bytes;
}

function array_to_object($array)
{
    if (!is_array($array) && !is_object($array)) {
        return new stdClass();
    }
    return json_decode(json_encode((object) $array));
}

function access_denied()
{
    set_alert('error', translate('access_denied'));
    redirect(site_url('dashboard'));
}

function ajax_access_denied()
{
    set_alert('error', translate('access_denied'));
    $array = array('status' => 'access_denied');
    echo json_encode($array);
    exit();
}

function slugify($text){
    // replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '_', $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, '_');

    // remove duplicated - symbols
    $text = preg_replace('~-+~', '_', $text);

    // lowercase
    $text = strtolower($text);
    return $text;
}

// website menu list
function web_menu_list($publish = '', $default = '', $branchID = '')
{
    $CI = &get_instance();
    if (empty($branchID)) {
        $branchID = $CI->home_model->getDefaultBranch();
    }
    $CI->db->select('*,if(front_cms_menu_visible.name is null, front_cms_menu.title, front_cms_menu_visible.name) as title, front_cms_menu_visible.invisible');
    $CI->db->from('front_cms_menu');
    $CI->db->join('front_cms_menu_visible', 'front_cms_menu_visible.menu_id = front_cms_menu.id and front_cms_menu_visible.branch_id = ' . $branchID, 'left');
    if ($publish != '') {
        $CI->db->where('front_cms_menu.publish', $publish);
    }
    if ($default != '') {
        $CI->db->where('front_cms_menu.system', $default);
    }
    $CI->db->order_by('front_cms_menu.ordering', 'asc');
    $CI->db->where_in('front_cms_menu.branch_id', array(0, $branchID));
    $result = $CI->db->get()->result_array();
    return $result;
}

function get_request_url()
{
    $url = $_SERVER['QUERY_STRING'];
    $url = (!empty($url) ? '?' . $url : '');
    return $url;
}

function delete_dir($dirPath)
{
    if (!is_dir($dirPath)) {
        throw new InvalidArgumentException("$dirPath must be a directory");
    }
    if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
        $dirPath .= '/';
    }
    $files = glob($dirPath . '*', GLOB_MARK);
    foreach ($files as $file) {
        if (is_dir($file)) {
            delete_dir($file);
        } else {
            unlink($file);
        }
    }
    if (rmdir($dirPath)) {
        return true;
    }
    return false;
}

function getComplainCategory($complain_number='')
{
    if($complain_number==1)
    {
        return "Saxta elan";
    }
    elseif($complain_number==2)
    {
        return "Əmlak artıq satılıb";
    }
    elseif($complain_number==3)
    {
        return "Məlumat düzgün qeyd edilməyib";
    }
    elseif($complain_number==4)
    {
        return "Düzgün olmayan şəkil";
    }
    else
    {
        return "Təkrar elan";
    }

}


function insertPagination($base_url, $cur_page, $number_of_pages, $prev_next=true) {
    $ends_count   = 1;  
    $middle_count = 2;  
    $dots = false;
     
    echo '<div class="pagination">';
     
    if ($prev_next && $cur_page && 1 < $cur_page) 
    { 
        echo '<a href="'.$base_url.'?page='. ($cur_page-1) .'" title="Əvvəlki"> <i class="fa fa-chevron-left"></i></a>';
    }
    for ($i = 1; $i <= $number_of_pages; $i++) 
    {
        if ($i == $cur_page) 
        {
            echo '<a disabled>'.$i.'</a>';
            $dots = true;
        } 
        else 
        {
            if ($i <= $ends_count || ($cur_page && $i >= $cur_page - $middle_count && $i <= $cur_page + $middle_count) || $i > $number_of_pages - $ends_count) 
            { 
                echo '<a href="'. $base_url .'?page='. $i .'">'. $i .'</a>';
                $dots = true;
            } 
            elseif ($dots) 
            {
                echo '<a>...</a>';
                $dots = false;
            }
        }
    }
    if ($prev_next && $cur_page && ($cur_page < $number_of_pages || -1 == $number_of_pages)) 
    { 
        echo '<a href="'. $base_url .'?page='. ($cur_page+1) .'" title="İrəli"> <i class="fa fa-chevron-right"></i></a>';
    } 
    
    echo '</div>';
} 
