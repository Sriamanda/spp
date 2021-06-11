<?php
	class MLogin extends CI_Model{
		function __construct(){
		parent::__construct();
		}

		function GoLogin($username,$password){
			$this->db->select('*');
			$this->db->from('tbl_login');
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$query = $this->db->get();
			if($query -> num_rows() == 1){
				$row = $query->row(); 
    			return $row->id_login;
			}else{
				return false;
			}
		}
		
		
		function getData($table, $field='', $order='', $dasc='DESC', $limit='', $offset='') {
		$this->db->select('*');
		
		$this->db->from($table);

		if(!empty($field)) {
			$this->db->where($field);
		}
		
		if(empty($order)):
			$this->db->order_by('id_login', $dasc);
		else:
			$this->db->order_by($order, $dasc);
		endif;
		
		if(!empty($limit)):
			$this->db->limit($limit,$offset);
		endif;
		
		$get = $this->db->get();
		
		return $get;
	}

	}
?>