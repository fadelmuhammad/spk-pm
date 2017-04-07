<?php

class auth extends CI_Controller
{
    
    function __construct() {
        parent::__construct();
        
        $this->load->model('model_user');
    }
            
    function login()
    {
        
        if(isset($_POST['submit']))
        {
            $username=  $this->input->post('username');
            $password=  $this->input->post('password');
            $login=$this->model_user->login($username,$password);

            if($login->num_rows()>0)
            {
                $r=$login->row_array();
                
                $data=array('status_login'=>'LOGIN',
                    'id_user'=>$r['id_user'],
                    'username'=>$r['username'],
                    'nama_user'=>$r['nama_user'],
                    'level'=>$r['level']);
                
                $this->session->set_userdata($data);
               
                $this->db->where('username',$username);
                date_default_timezone_set('Asia/Jakarta');
                $this->db->update('user',array('last_login'=>date('Y-m-d H:i:s')));
                
                redirect('dashboard');
            }
            else
            {
                redirect('auth/login');
            }
                
        }
        else 
        {
            check_session_login();
              $this->load->view('login');
        }
      
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
  
}

