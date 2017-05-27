<?php
 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
/**
 * Description of visitorcontroller
 *
 * @author http://roytuts.com
   http://www.roytuts.com/codeigniter-online-visitor-tracking-system/
 */
class Visitors extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('visitor_m', 'vm');
    }
 
    public function index() {
        $site_statics_today = $this->vm->get_site_data_for_today();
        $site_statics_last_week = $this->vm->get_site_data_for_last_week();
        $data['visits_today'] = isset($site_statics_today['visits']) ? $site_statics_today['visits'] : 0;
        $data['visits_last_week'] = isset($site_statics_last_week['visits']) ? $site_statics_last_week['visits'] : 0;
        $data['chart_data_today'] = $this->vm->get_chart_data_for_today();
        $data['chart_data_curr_month'] = $this->vm->get_chart_data_for_month_year();
        $this->load->view('visitors', $data);
    }
 
    function get_chart_data() {
        if (isset($_POST)) {
            if (isset($_POST['month']) && strlen($_POST['month']) && isset($_POST['year']) && strlen($_POST['year'])) {
                $month = $_POST['month'];
                $year = $_POST['year'];
                $data = $this->vm->get_chart_data_for_month_year($month, $year);
                if ($data !== NULL) {
                    foreach ($data as $value) {
                        echo $value->day . "t" . $value->visits .PHP_EOL;
                    }
                } else {
                    $timestamp = mktime(0, 0, 0, $month);
                    $label = date("F", $timestamp);
					echo '<div class="clear"> <br />&nbsp; <br /></div>'.PHP_EOL;
                    echo '<div class="alert alert-info alert-dismissable">'.PHP_EOL;
					echo '<button type="button" class="close" data-dismiss="alert">&times;</button>'.PHP_EOL;
					echo '<strong>¡Important!</strong> <br /> No data found for the' .  $label . ' - ' . $year;
				    echo '</div>'.PHP_EOL; 
                }
            } else if (isset($_POST['month']) && strlen($_POST['month'])) {
                $month = $_POST['month'];
                $data = $this->vm->get_chart_data_for_month_year($month);
                if ($data !== NULL) {
                    foreach ($data as $value) {
                        echo $value->day . "t" . $value->visits .PHP_EOL;
                    }
                } else {
                    $timestamp = mktime(0, 0, 0, $month);
                    $label = date("F", $timestamp);
					echo '<div class="clear"> <br />&nbsp; <br /></div>'.PHP_EOL;
                    echo '<div class="alert alert-info alert-dismissable">'.PHP_EOL;
					echo '<button type="button" class="close" data-dismiss="alert">&times;</button>'.PHP_EOL;
					echo '<strong>¡Important!</strong> <br /> No data found for the' .  $label;
				    echo '</div>'.PHP_EOL;
                }
            } else if (isset($_POST['year']) && strlen($_POST['year'])) {
                $year = $_POST['year'];
                $data = $this->vm->get_chart_data_for_month_year(0, $year);
                if ($data !== NULL) {
                    foreach ($data as $value) {
                        echo $value->day . "t" . $value->visits .PHP_EOL;
                    }
                } else {
					echo '<div class="clear"> <br />&nbsp;  <br /></div>'.PHP_EOL;
                    echo '<div class="alert alert-info alert-dismissable">'.PHP_EOL;
					echo '<button type="button" class="close" data-dismiss="alert">&times;</button>'.PHP_EOL;
					echo '<strong>¡Important!</strong> <br /> No data found for the' .  $year;
				    echo '</div>'.PHP_EOL;
                }
            } else {
                $data = $this->vm->get_chart_data_for_month_year();
                if ($data !== NULL) {
                    foreach ($data as $value) {
                        echo $value->day . "t" . $value->visits .PHP_EOL;
                    }
                } else {
					echo '<div class="clear"> <br />&nbsp; <br /></div>'.PHP_EOL;
                    echo '<div class="alert alert-info alert-dismissable">'.PHP_EOL;
					echo '<button type="button" class="close" data-dismiss="alert">&times;</button>'.PHP_EOL;
					echo '<strong>¡Important!</strong> <br /> No data found'.PHP_EOL;
				    echo '</div>'.PHP_EOL;
                }
            }
        }
    }
 
}
 
/* End of file visitors.php */
/* Location: ./application/controllers/visitors.php */