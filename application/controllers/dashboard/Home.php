<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mod_admin');
    }

	public function index(){
        session_check();
        $data['title'] = 'Beranda';
        $data['page'] = 'dashboard/index';
        $this->load->view('dashboard/template/content', $data);
	}
}
