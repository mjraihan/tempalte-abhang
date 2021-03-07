<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mod_admin');
    }

	public function index(){
        session_check();
        $data['title'] = 'Admin Sign in';
        $data['page'] = 'dashboard/auth/login';
        $this->load->view('dashboard/template/auth', $data);
	}

    public function authentication(){
        $data_admin = array(
            'username_admin'=>$this->input->post('username'),
            'password_admin'=>md5($this->input->post('password'))
        );
        $check_admin = $this->Mod_admin->get_admin($data_admin);
        if($check_admin->num_rows()==1){
            $admin = $check_admin->row_array();
            set_session($admin);
            redirect('admin/home');
        }else{
            redirect('admin/login');
        }
    }

    public function logout(){
        unset_session();
        redirect('admin/login');
    }
}
