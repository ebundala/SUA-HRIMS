<?php

class Form_model extends CI_Model{
  
    public function insertRecord()
    {

        //$this->load->helper('url');       
    
        $data = array(
            'title' => $this->input->post('title'),            
            'text' => $this->input->post('text')
        );
    
        return $this->db->insert('items', $data);

    }
   

    public function listRecords(){

        return $this->db->get("items");
    }


}