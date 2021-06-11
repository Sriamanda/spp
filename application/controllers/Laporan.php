 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
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

	public function cetak(){

		$id_login = $this->session->userdata('id_login');

			$data['GetSiswa']=$this->db->query('SELECT * from siswa INNER JOIN pembayaran on siswa.nisn = pembayaran.nisn INNER JOIN kelas on siswa.id_kelas = kelas.id_kelas INNER join spp on siswa.id_spp = spp.id_spp where siswa.id_login = '.$id_login.' limit 1' )->row();

			$data['DataSiswa']=$this->db->query('SELECT * from siswa INNER JOIN pembayaran on siswa.nisn = pembayaran.nisn INNER JOIN kelas on siswa.id_kelas = kelas.id_kelas INNER join spp on siswa.id_spp = spp.id_spp where siswa.id_login =  ' .$id_login )->result();

			//$data['content']='VCetak';
		$this->load->view('LevelSiswa/v_cetak',$data);
	}

	public function DataLaporan()
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
			$data['DataSiswa']=$this->db->query('SELECT * from siswa INNER JOIN pembayaran on siswa.nisn = pembayaran.nisn INNER JOIN kelas on siswa.id_kelas = kelas.id_kelas INNER join spp on siswa.id_spp = spp.id_spp')->result();
			$data['content']='VLaporan';
		}


		$this->load->view('VBackend',$data);
	}
}