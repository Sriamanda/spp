<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MLogin');
	}

	public function index()
	{
		if (isset($_POST['btn_login'])){
				$username = $_POST['txt_user'];
				$password = $_POST['txt_pass'];
				
				
				$login = $this->MLogin->getData('tbl_login',array('username'=>$username,'password'=>$password));
				if($login->num_rows()==1) {
				$login = $login->row_array();
				//$sess['getLoginAct'] = "01n2s0129n1kz012klla";
				$sess['id_login'] = $login['id_login'];
				$sess['username'] = $login['username'];
				$sess['level'] = $login['level'];
				$this->session->set_userdata($sess);
				//$this->m_global->activities('Login administrator');
				redirect('welcome');
					} else {
						$this->session->set_flashdata('error', 'Maaf kombinasi username dan password tidak tepat!');
						 //echo $this->input->post('username')." ".md5($this->input->post('password'));
						redirect('login');
					}
			
			}else {
			$this->load->view('VLogin');
		}

		
	}

}