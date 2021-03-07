<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function session_check(){
	$CI =& get_instance();
	if(get_session('logged_in')){
		$CI->load->model('Mod_admin');
		$admin = $CI->Mod_admin->get_admin(array('username_admin'=>$CI->session->userdata('admin_username')))->num_rows();
		if($admin!=1){
			unset_session();
			redirect('admin/login');
		}
		if($CI->uri->segment('2')=='login'){
			redirect('admin/home');
		}
	}else{
		if($CI->uri->segment('2')!='login'){
			redirect('admin/login');
		}		
	}	
}

function get_session($userdata){
	$CI =& get_instance();
	return $CI->session->userdata($userdata);
}

function set_session($admin_data = array()){
	$CI =& get_instance();
	$admindata = array(
		'logged_in'=>TRUE,
		'admin_username'=>$admin_data['username_admin'],
	);
	$CI->session->set_userdata($admindata);
}

function unset_session(){
    $CI =& get_instance();
    $CI->session->unset_userdata('logged_in');
    $CI->session->unset_userdata('admin_username');
}




