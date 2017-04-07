<?php

class model_user extends CI_Model
{
    function login($username,$password)
    {
        
        return $this->db->get_where('user',array('username'=>$username,'password'=>md5($password)));
          
    }
    
    function tampil_data()
    {
        return $this->db->get('user');
    }
    
    function insert_data($data)
    {
        $this->db->insert('user',$data);
    }

    function get_one($id)
    {
        $get = array('id_user' => $id );
        return $this->db->get_where('user',$get);
    }

    function edit_data($data, $id)
    {
        $this->db->where('id_user', $id);
        $this->db->update('user', $data);
    }

    function delete_data($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }
    
}



        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
         