<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @package : Estate.az - Daşınmaz əmlak platforması
 * @version : 1.0
 * @developed by : Webox Agency
 * @support : aghakarim.karimov@gmail.com
 * @author url : https://webox.az
 * @filename : Dashboard.php
 * @copyright : Aghakarim Karimov & Cavid Shixiyev
 */

class Dashboard extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('dashboard_model');
    }

    public function index()
    {
        
            if (is_superadmin_loggedin()) {
                if ($this->input->get('school_id')) {
                    $schoolID = $this->input->get('school_id');
                    $this->data['title'] = get_type_name_by_id('branch', $schoolID) . " " . translate('branch_dashboard');
                } else {
                    $this->data['title'] = translate('all_branch_dashboard');
                    $schoolID = "";
                }
            } else {
                $schoolID = get_loggedin_branch_id();
                $this->data['title'] = get_type_name_by_id('branch', $schoolID) . " " . translate('branch_dashboard');
            }
            $this->data['school_id'] = $schoolID;
            // $this->data['student_by_class'] = $this->dashboard_model->getStudentByClass($schoolID);
            // $this->data['fees_summary'] = $this->dashboard_model->annualFeessummaryCharts($schoolID);
            // $this->data['income_vs_expense'] = $this->dashboard_model->getIncomeVsExpense($schoolID);
            // $this->data['weekend_attendance'] = $this->dashboard_model->getWeekendAttendance($schoolID);
            // $this->data['get_monthly_admission'] = $this->dashboard_model->getMonthlyAdmission($schoolID);
            // $this->data['get_voucher'] = $this->dashboard_model->getVoucher($schoolID);
            // $this->data['get_transport_route'] = $this->dashboard_model->get_transport_route($schoolID);
            // $this->data['get_total_student'] = $this->dashboard_model->get_total_student($schoolID);
            $this->data['sub_page'] = 'dashboard/index';
        
        $this->data['headerelements'] = array(
            'css' => array(
                'vendor/fullcalendar/fullcalendar.css',
            ),
            'js' => array(
                'vendor/chartjs/chart.min.js',
                'vendor/echarts/echarts.common.min.js',
                'vendor/moment/moment.js',
                'vendor/fullcalendar/fullcalendar.js',
            ),
        );
        $this->data['main_menu'] = 'dashboard';
        $this->load->view('layout/index', $this->data);
    }
}
