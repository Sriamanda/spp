<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MSiswa extends CI_Model
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
        $this->db->from('kelas as a, spp as b, tbl_login as c, siswa as d');
        $this->db->where('a.id_kelas = `d`.`id_kelas`');
        $this->db->where('b.id_spp = `d`.`id_spp`');
        $this->db->where('c.id_login = `d`.`id_login`');
        $query= $this->db->get();
        return $query->result();
    }

    function GetDataWhere($id,$nilai)
    {
        $this->db->from('kelas as a, spp as b, tbl_login as c, siswa as d');
        $this->db->where('a.id_kelas = `d`.`id_kelas`');
        $this->db->where('b.id_spp = `d`.`id_spp`');
        $this->db->where('c.id_login = `d`.`id_login`');
        $this->db->where($id,$nilai);
        $query= $this->db->get();
        return $query;
    }
     function list_kelas()
     {
        return $this->db->get('kelas')->result();
     }

     function list_spp()
     {
        return $this->db->get('spp')->result();
     }

     function list_login()
     {
        return $this->db->get('tbl_login')->result();
     }
}