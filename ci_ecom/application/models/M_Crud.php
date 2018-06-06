<?php 
class M_Crud extends CI_Model {
        public function __construct()
        {
                
                $this->load->database();
        }

       
/**
	 * Returns the record by one field
	 *
	 */
	function get_by_sql($sql, $option=false)
	{
		$query	= $this->db->query($sql);
		
		if($option == 'trace')
			print_r($this->db->queries);		
			
		if(!empty($query))
		{
			$results = array();
			if ( $query->num_rows() > 0 )
				$results = $query->result_array();
			return $results;	
		}
	}
	   
	   
	   
        public function get_last_ten_items()
        {
                $query = $this->db->get('items', 10);
                return $query->result();
        }

        public function insert_entry()
        {
                $this->title    = $_POST['title']; // please read the below note
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->insert('entries', $this);
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }
        public  function form_insert(){   
            $this->art_id    = $_GET['id']; 
            $this->view_location    = $_GET['lo']; 
            $this->view_device    = $_GET['de']; 
            $this->view_ip    = $_GET['ip'];
            $this->view_time    = $_GET['t']; 
            $this->db->insert('tbl_articles_views', $this);
          }

}