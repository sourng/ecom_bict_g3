<?php
class Cart_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_all(){
        $query=$this->db->query("SELECT p.*
                                 FROM products p 
                                 ORDER BY p.id ASC");
        return $query->result_array();
    }
    // Insert customer details in "customer" table in database.
    public function insert_customer($data)
    {
        $this->db->insert('customers', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    // Insert order date with customer id in "orders" table in database.
    public function insert_order($data)
    {
        $this->db->insert('orders', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    // Insert ordered product detail in "order_detail" table in database.
    public function insert_order_detail($data)
    {
        $this->db->insert('order_detail', $data);
    }
}