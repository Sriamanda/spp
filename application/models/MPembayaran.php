<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MPembayaran extends CI_Model
{
    

    function AddData($tabel, $data=array())
    {
        $this->db->insert($tabel,$data);
    }

    function UpdateData($tabel,$fieldid,$fieldvalue,$data=array())
    {
        $this->db->where($fieldid,$fieldvalue)->update($tabel,$data);
    }

    function DeleteData($tabel,$fieldid,$fieldvalue)
    {
        $this->db->where($fieldid,$fieldvalue)->delete($tabel);
    }

    function GetData()
    {
        $this->db->from('petugas as a, siswa as b, spp as c, pembayaran as d');
        $this->db->where('a.id_petugas = `d`.`id_petugas`');
        $this->db->where('b.nisn = `d`.`nisn`');
        $this->db->where('c.id_spp = `d`.`id_spp`');
        $query= $this->db->get();
        return $query->result();
    }

    function GetDataWhere($id,$nilai)
    {
        $this->db->from('petugas as a, siswa as b, spp as c, pembayaran as d');
        $this->db->where('a.id_petugas = `d`.`id_petugas`');
        $this->db->where('b.nisn = `d`.`nisn`');
        $this->db->where('c.id_spp = `d`.`id_spp`');
        $this->db->where($id,$nilai);
        $query= $this->db->get();
        return $query;
    }
     function list_petugas()
     {
        return $this->db->get('petugas')->result();
     }
      function list_siswa()
     {
        return $this->db->get('siswa')->result();
     }
      function list_spp()
     {
        return $this->db->get('spp')->result();
     }
}