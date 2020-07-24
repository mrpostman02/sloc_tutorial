<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('sloc_tutorial_model');
    }

	public function index($page = 'index')
	    {
	        if (!file_exists(APPPATH . 'views/page_contents/' . $page . '.php')) {

	            show_404();
	        }
	        $data['title'] = ucfirst($page);

	        $this->load->view('template/header');
	        $this->load->view('page_contents/' . $page, $data);
	        $this->load->view('customize_js/all_customize_js');
	        $this->load->view('template/footer');
	}


}