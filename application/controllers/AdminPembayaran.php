<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPembayaran extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MPembayaran');
	$this->load->model('MSpp');
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

	public function DataPembayaran()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_pembayaran=$this->uri->segment(3);
			$tampil=$this->MPembayaran->GetDataWhere('id_pembayaran',$id_pembayaran)->row();
					$data['detail']['id_pembayaran']= $tampil->id_pembayaran;
					$data['detail']['id_petugas']= $tampil->id_petugas;
					$data['detail']['nisn']= $tampil->nisn;
            		$data['detail']['tgl_bayar']= $tampil->tgl_bayar;
            		$data['detail']['bulan_bayar']= $tampil->bulan_bayar;
            		$data['detail']['tahun_bayar']= $tampil->tahun_bayar;
            		$data['detail']['id_spp']= $tampil->id_spp;
            		$data['detail']['jumlah_bayar']= $tampil->jumlah_bayar;
			$data['content']='LevelAdmin/VFormUpdatePembayaran';
		}
		else
		{	
			$data['DataPembayaran']=$this->MPembayaran->GetData('');
			$data['content']='LevelAdmin/VPembayaran';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddPembayaran()
	{
		$data['content']='LevelAdmin/VFormAddPembayaran';
		$data['list_spp'] = $this->MPembayaran->list_spp();
		$data['list_petugas'] = $this->MPembayaran->list_petugas();
		$data['list_siswa'] = $this->MPembayaran->list_siswa();
		$this->load->view('VBackend',$data);
	}
	public function AddDataPembayaran()
	{
			 $add['id_pembayaran']=$this->input->post('id_pembayaran');
		 	 $add['id_petugas']=$this->input->post('id_petugas');
		 	 $add['nisn']=$this->input->post('nisn');
         	 	
         	 	$tgl_bayar = $this->input->post('tgl_bayar');
         	 	
         	 	$hari = date('d', strtotime($tgl_bayar) );
         	 	$bulan = date('m', strtotime($tgl_bayar) );
         	 	$tahun = date('Y', strtotime($tgl_bayar) );

         	 	$tgl_bayar_en = $tahun.'-'.$bulan.'-'.$hari;
         	 $add['tgl_bayar']= $tgl_bayar_en;
         	 $add['bulan_bayar']= $bulan; //$this->input->post('bulan_bayar');
         	 $add['tahun_bayar']= $tahun; //$this->input->post('tahun_bayar');
         	 
         	 	$id_spp = $this->input->post('id_spp');
         	 	$get_spp = $this->MSpp->GetDataWhere('spp','id_spp',$id_spp);

         	 $add['id_spp'] = $id_spp;
         	 $add['jumlah_bayar']= $get_spp->row()->nominal;  //$this->input->post('jumlah_bayar');
        	 $this->MPembayaran->AddData('pembayaran',$add);
        	 redirect(site_url('APembayaran/DataPembayaran'));
	}


}