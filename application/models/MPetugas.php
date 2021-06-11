<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MPetugas extends CI_Model
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
        $this->db->from('tbl_login as a, petugas as b');
        $this->db->where('a.id_login = `b`.`id_login`');
        $query= $this->db->get();
        return $query->result();
    }

    function GetDataWhere($id,$nilai)
    {
        $this->db->from('tbl_login as a, petugas as b');
        $this->db->where('a.id_login = `b`.`id_login`');
        $this->db->where($id,$nilai);
        $query= $this->db->get();
        return $query;
    }
     function list_login()
     {
        return $this->db->get('tbl_login')->result();
     }
}