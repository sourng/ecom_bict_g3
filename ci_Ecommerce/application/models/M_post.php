
<?php
class PostModel extends CI_Model {
 
 function getPosts(){
  $this->db->select("post_id,post_title,post_content"); 
  $this->db->from('post_tbl');
  $query = $this->db->get();
  return $query->result();
 }
 
}
?>