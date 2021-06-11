<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MKelas');
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

	public function DataKelas()
	{

		if($this->uri->segment(4)=='view')
		{
			$id_kelas=$this->uri->segment(3);
			$tampil=$this->MKelas->GetDataWhere('id_kelas',$id_kelas)->row();
			$data['detail']['id_kelas']= $tampil->id_kelas;
            $data['detail']['nama_kelas']= $tampil->nama_kelas;
            $data['detail']['id_kk']= $tampil->id_kk;
			$data['content']='Kelas/VFormUpdateKelas';
		}
		else
		{	
			$data['DataKelas']=$this->MKelas->GetData();
			$data['content']='Kelas/VKelas';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddKelas()
	{
		$data['content']='Kelas/VFormAddKelas';
		$data['list_kk'] = $this->MKelas->list_kk();
		$this->load->view('VBackend',$data);
	}
	public function AddDataKelas()
	{
		 $add['id_kelas']=$this->input->post('id_kelas');
         	 $add['nama_kelas']= $this->input->post('nama_kelas');
         	 $add['id_kk']= $this->input->post('id_kk');
        	 $this->MKelas->AddData('kelas',$add);
        	 redirect(site_url('Kelas/DataKelas'));
	}



	public function UpdateDataKelas()
	{
		 $id_kelas=$this->input->post('id_kelas');
		 $update['nama_kelas']= $this->input->post('nama_kelas');
         $update['id_kk']= $this->input->post('id_kk');
          	 $this->MKelas->UpdateData('kelas','id_kelas',$id_kelas,$update);
		 redirect(site_url('Kelas/DataKelas'));
	}


	public function DeleteDataKelas()
	{
		 $id_kelas=$this->uri->segment('3');
        	 $this->MKelas->DeleteData('kelas','id_kelas',$id_kelas);
        	 redirect(site_url('Kelas/DataKelas'));
	}

}