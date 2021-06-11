<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSiswa');
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

	public function DataSiswa()
	{

		if($this->uri->segment(4)=='view')
		{
		  $nisn=$this->uri->segment(3);
		   $tampil=$this->MSiswa->GetDataWhere('nisn',$nisn)->row();
			$data['detail']['nisn']= $tampil->nisn;
    		$data['detail']['nis']= $tampil->nis;
            $data['detail']['nama']= $tampil->nama;
            $data['detail']['id_kelas']= $tampil->id_kelas;
            $data['detail']['alamat']= $tampil->alamat;
            $data['detail']['no_telp']= $tampil->no_telp;
            $data['detail']['id_spp']= $tampil->id_spp;
            $data['detail']['id_login']= $tampil->id_login;
			      $data['content']='Siswa/VFormUpdateSiswa';
		}
		else
		{	
			$data['DataSiswa']=$this->MSiswa->GetData();
			$data['content']='Siswa/VSiswa';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddSiswa()
	{
		$data['content']='Siswa/VFormAddSiswa';
		$data['list_spp'] = $this->MSiswa->list_spp();
		$data['list_kelas'] = $this->MSiswa->list_kelas();
		$data['list_login'] = $this->MSiswa->list_login();
		$this->load->view('VBackend',$data);
	}
	public function AddDataSiswa()
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
		 $add['nisn']=$this->input->post('nisn');
         $add['nis']= $this->input->post('nis');
       	 $add['nama']= $this->input->post('nama');
       	 $add['id_kelas']= $this->input->post('id_kelas');  
       	 $add['alamat']= $this->input->post('alamat');
       	 $add['no_telp']= $this->input->post('no_telp');
       	 $add['id_spp']= $this->input->post('id_spp'); 
       	 $add['id_login']= $this->input->post('id_login');
        	 $this->MSiswa->AddData('siswa',$add);
        	 redirect(site_url('Siswa/DataSiswa'));
	}
}


	public function UpdateDataSiswa()
	{
		 $nisn=$this->input->post('nisn');
		 $update['nis']= $this->input->post('nis');
         $update['nama']= $this->input->post('nama');
         $update['id_kelas']= $this->input->post('id_kelas');
         $update['alamat']= $this->input->post('alamat'); 
         $update['no_telp']= $this->input->post('no_telp');
       	 $update['id_spp']= $this->input->post('id_spp');
       	 $update['id_login']= $this->input->post('id_login');
          	 $this->MSiswa->UpdateData('siswa','nisn',$nisn,$update);
		 redirect(site_url('Siswa/DataSiswa'));
	}


	public function DeleteDataSiswa()
	{
		 $nisn=$this->uri->segment('3');
        	 $this->MSiswa->DeleteData('siswa','nisn',$nisn);
        	 redirect(site_url('Siswa/DataSiswa'));
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