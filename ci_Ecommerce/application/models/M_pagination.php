<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_pagination extends CI_Model{
    /*
     * Get posts
     */
    function getRows($params = array()){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('category','products.category_id = category.category_id');
        //$this->db->join('sub_category','category.category_id = sub_category.category_id','products.sub_id = sub_category.sub_id');
     
       // $this->db->from('products');

        if(array_key_exists("id",$params)){
            $this->db->where('id',$params['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $this->db->count_all_results();
            }else{
                $query = $this->db->get();
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }

        //return fetched data
        return $result;
    }
}