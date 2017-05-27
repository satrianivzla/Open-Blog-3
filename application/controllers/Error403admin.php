<?php
class error403 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form','url', 'security'));
        $this->load->library(array('ion_auth', 'form_validation'));
        $this->load->database();
		$this->lang->load('auth');	
    }

    function index()
    {
        $this->load->view('error403');
    }
}
?>