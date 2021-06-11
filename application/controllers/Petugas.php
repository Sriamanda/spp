<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MPetugas');
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

	public function DataPetugas()
	{

		if($this->uri->segment(4)=='view')
		{
			$id_petugas=$this->uri->segment(3);
			$tampil=$this->MPetugas->GetDataWhere('id_petugas',$id_petugas)->row();
			$data['detail']['id_petugas']= $tampil->id_petugas;
            $data['detail']['nama_petugas']= $tampil->nama_petugas;
            $data['detail']['id_login']= $tampil->id_login;
			$data['content']='Petugas/VFormUpdatePetugas';
		}
		else
		{	
			$data['DataPetugas']=$this->MPetugas->GetData();
			$data['content']='Petugas/VPetugas';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddPetugas()
	{
		$data['content']='Petugas/VFormAddPetugas';
		$data['list_login'] = $this->MPetugas->list_login();
		$this->load->view('VBackend',$data);
	}
	public function AddDataPetugas()
	{
		 $config['upload_path']         = 'images/';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png'; // jenis file
            $config['max_size']             = 3000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
 
            if ( ! $this->upload->do_upload('gambar')) //sesuai dengan name pada form 
            {
                   echo 'anda gagal upload';
            }
            else
            {
            	//tampung data dari form
            	$file = $this->upload->data();
             $add['image'] = $file['file_name'];
		 	 $add['id_petugas']=$this->input->post('id_petugas');
         	 $add['nama_petugas']= $this->input->post('nama_petugas'); 
         	 $add['id_login']= $this->input->post('id_login');
        	 $this->MPetugas->AddData('petugas',$add);
        	 redirect(site_url('Petugas/DataPetugas'));
	}
}



	public function UpdateDataPetugas()
	{
		 $id_petugas=$this->input->post('id_petugas');
         $update['nama_petugas']= $this->input->post('nama_petugas');
         $update['id_login']= $this->input->post('id_login');
         $this->MPetugas->UpdateData('petugas','id_petugas',$id_petugas,$update);
		 redirect(site_url('Petugas/DataPetugas'));
	}


	public function DeleteDataPetugas()
	{
		 $id_petugas=$this->uri->segment('3');
        	 $this->MPetugas->DeleteData('petugas','id_petugas',$id_petugas);
        	 redirect(site_url('Petugas/DataPetugas'));
	}


	function do_upload() {
        // setting konfigurasi upload
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        // load library upload
        $this->load->library('upload', $config);
        if (!$this->input->post('gambar')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else {
            $result = $this->upload->data();
            echo "<pre>";
            print_r($result);
            echo "</pre>";
        }
    }

}
