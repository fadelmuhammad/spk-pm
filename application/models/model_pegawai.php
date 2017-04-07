<?php
class model_pegawai extends ci_model{

	function select_all_pegawai(){
		$this->db->select('*');
		$this->db->from('pegawai');

		return $this->db->get();
	}
}
?>