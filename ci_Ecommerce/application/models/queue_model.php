<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Queue_model extends CI_Model {

	/**
	 * Constructor
	 *
	 * @access	public
	 */
	public function __construct()
	{
		parent::__construct();
	
	}
	
	/**
	 * Returns the record by one field
	 */
	function get_by_sql($sql)
	{
		$query	= $this->db->query($sql);
		//trace($this->db->queries);		
		if(!empty($query))
		{
			$results = array();
			if ( $query->num_rows() > 0 )
				$results = $query->result_array();
			return $results;	
		}
	}
	
	/**
	 * Insert
	 */	
	function insert($table, $data)
	{   
		$affected_rows	= $this->db->insert($table, $data);
		//trace($this->db->queries);
		return $affected_rows;
	}
	
	/**
	 * Update
	 */	
	function update($table, $data, $where)
	{
		$affected_rows	= $this->db->update($table,$data,$where);		
		//trace($this->db->queries);
		return $affected_rows;
	}
	
	/**
	 * Delete
	 */	
	function delete($table, $data)
	{
		$affected_rows	= $this->db->delete($table, $data);
		//trace($this->db->queries);
		return $affected_rows;
	}

}

/* End of file queue_model.php */
/* Location: ./application/models/queue_model.php */

