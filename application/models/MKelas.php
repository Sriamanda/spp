<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MKelas extends CI_Model
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
        $this->db->from('kompetensi_keahlian as a, kelas as b');
        $this->db->where('a.id_kk = `b`.`id_kk`');
        $query= $this->db->get();
        return $query->result();
    }

    function GetDataWhere($id,$nilai)
    {
        $this->db->from('kompetensi_keahlian as a, kelas as b');
        $this->db->where('a.id_kk = `b`.`id_kk`');
        $this->db->where($id,$nilai);
        $query= $this->db->get();
        return $query;
    }
     function list_kk()
     {
        return $this->db->get('kompetensi_keahlian')->result();
     }
}