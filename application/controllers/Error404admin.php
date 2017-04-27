<?php
class error404admin extends CI_Controller {
    function __construct() {
        parent::__construct();
		
		// add things we use in views
		$this->template->append_css('default.css');
		$this->template->append_css('ie10-viewport-bug-workaround.css');
		$this->template->append_js('ie10-viewport-bug-workaround.js');

		// Admin model
		$this->load->model('Admin_m');

		// form helper
		$this->load->helper('form');

		// form validation
		$this->load->library('form_validation');

		// Ion_auth
		$this->load->language('ion_auth');

		// set form validation error default
		$this->form_validation->set_error_delimiters('<div class="help-block with-errors">', '</div>');
		
 
    }

    function index()
    {
		// does the user have permission to 
		// view/use this method?
		if ( ! $this->ion_auth->has_permission('dashboard'))
		{
			// nope, boot'm out
			$this->session->set_flashdata('error', lang('permission_check_failed'));
			redirect();
		}

		// get info for the dashboard
		$data = $this->Admin_m->get_dashboard();

		// set active_link so we know what to 
		// set class="active" to in the nav menu
		$this->template->set('active_link', 'dashboard');

		// build it and they will come.
        $this->load->view('admin/error/error404');
    }
}
?>