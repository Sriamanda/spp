<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keahlian extends CI_Controller {
    function __construct(){
    parent::__construct();
    $this->load->model('MKeahlian');
    $this->load->library('form_validation');
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

    public function DataKeahlian()
    {

        

        if($this->uri->segment(4)=='view')
        {
            $id_kk=$this->uri->segment(3);
            $tampil=$this->MKeahlian->GetDataWhere('kompetensi_keahlian','id_kk',$id_kk)->row();
            $data['detail']['id_kk']= $tampil->id_kk;
            $data['detail']['nama_kk']= $tampil->nama_kk;
            $data['content']='Keahlian/VFormUpdateKeahlian';
        }
        else
        {   
            $data['DataKeahlian']=$this->MKeahlian->GetData('kompetensi_keahlian');
            $data['content']='Keahlian/VKeahlian';
        }


        $this->load->view('VBackend',$data);
    }


    public function VFormAddKeahlian()
    {
        $data['content']='Keahlian/VFormAddKeahlian';
        $this->load->view('VBackend',$data);
    }
    public function AddDataKeahlian()
    {
         $add['id_kk']=$this->input->post('id_kk');
         $add['nama_kk']= $this->input->post('nama_kk');
         $this->MKeahlian->AddData('kompetensi_keahlian',$add);
             redirect(site_url('Keahlian/DataKeahlian'));
    }



    public function UpdateDataKeahlian()
    {
         $id_kk=$this->input->post('id_kk');
         $update['nama_kk']= $this->input->post('nama_kk');
             $this->MKeahlian->UpdateData('kompetensi_keahlian','id_kk',$id_kk,$update);
         redirect(site_url('Keahlian/DataKeahlian'));
    }


    public function DeleteDataKeahlian()
    {
         $id_kk=$this->uri->segment('3');
             $this->MKeahlian->DeleteData('kompetensi_keahlian','id_kk',$id_kk);
             redirect(site_url('Keahlian/DataKeahlian'));
    }
}