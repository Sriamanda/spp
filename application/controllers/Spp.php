<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spp extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	$this->load->helper('Format');
	}

	public function index()
	{
		if($this->session->userdata('Login'))
		{
			$data['content']='VBlank';
			$this->load->view('VBackend',$data);
		}
		else
		{
			 redirect(site_url('Login'));
		}

	}

	public function DataSpp()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_spp=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('spp','id_spp',$id_spp)->row();
			$data['detail']['id_spp']= $tampil->id_spp;
            $data['detail']['tahun']= $tampil->tahun;
            $data['detail']['nominal']= $tampil->nominal;
			$data['content']='Spp/VFormUpdateSpp';
		}
		else
		{	
			$data['DataSpp']=$this->MSudi->GetData('spp');
			$data['content']='Spp/VSpp';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddSpp()
	{
		$data['content']='Spp/VFormAddSpp';
		$this->load->view('VBackend',$data);
	}
	public function AddDataSpp()
	{
		 $add['id_spp']=$this->input->post('id_spp');
         $add['tahun']= $this->input->post('tahun');
       	 $add['nominal']= $this->input->post('nominal');
        	 $this->MSudi->AddData('spp',$add);
        	 redirect(site_url('Spp/DataSpp'));
	}



	public function UpdateDataSpp()
	{
		 $id_spp=$this->input->post('id_spp');
		 $update['tahun']= $this->input->post('tahun');
         $update['nominal']= $this->input->post('nominal');
          	 $this->MSudi->UpdateData('spp','id_spp',$id_spp,$update);
		 redirect(site_url('Spp/DataSpp'));
	}


	public function DeleteDataSpp()
	{
		 $id_spp=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('spp','id_spp',$id_spp);
        	 redirect(site_url('Spp/DataSpp'));
	}


	
	public function Logout()
	{
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		redirect(site_url('Login'));
	}

}