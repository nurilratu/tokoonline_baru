<?php
/**
* 
*/
class M_crud extends CI_Model
{
	function view($table)
	{
		return $this->db->get($table);
	}

	function input($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function edit($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	function update($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function delete($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

}
?>