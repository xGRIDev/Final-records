<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('md_member');
        $this->load->helper(array('form', 'url')); 
    }
    public function index()
    {
        $this->load->view('member/index');
    }
}