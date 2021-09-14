<?php
require_once "database.php";
class Mobil{
	function __construct(){
		$this->db = new Database();
	}
	
	function tampilData($table, $where = null){
		return $this->db->select($table, $where);
	}

	function tambahData($table, $rows){
		$this->db->insert($table, $rows);
	}

	function hapusData($table, $where){
		$this->db->delete($table, $where);
	}

	function editData($table, $field, $where){
		$this->db->update($table, $field, $where);
	}
	
}