<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dropdown_m extends CI_Model {


        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function dropdown_menu()
        {
        	$this->db->select('*,menu.m_id as menu_id, menu_item.m_id as menu_item_id');
        	$this->db->from('menu');
        	$this->db->join('menu_item','menu.m_id = menu_item.m_id','left');
        	$this->db->group_by('m_name');
        	$this->db->order_by('menu_id');
        	$query=$this->db->get();
        	return $query->result();
        } 

        public function dropdown_menu_item()
        {
        	$this->db->select('*'); 
        	$this->db->from('menu_item');
        	$query = $this->db->get();
        	return $query->result();

        }
    }