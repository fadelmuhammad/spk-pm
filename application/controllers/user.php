<?php

class user extends CI_Controller
{
    function __construct() {
        parent::__construct();
        
        $this->load->model('model_app');
        check_session();
    }
    
    function index()
    {
         $data=array(
            
            'data_user'=>$this->model_app->getAllData('user'),
        );

        $this->template->load('template','user/tampil_data',$data);
    }
    
    function insert()
    {
         $data=array(
            'id_user'=> $this->input->post('id_user'),
            'nama_user'=> $this->input->post('nama_user'),
            'username'=>$this->input->post('username'),
            'password'=>md5($this->input->post('password')),
            'level'=>$this->input->post('level'),
        );
        $this->model_app->insertData('user',$data);
        redirect("user");
    }
    
    function edit()
    {
       $id['id_user'] = $this->input->post('id_user');
        $data=array(
            'nama_user'=> $this->input->post('nama_user'),
            'username'=>$this->input->post('username'),
            'password'=>md5($this->input->post('password')),
            'level'=>$this->input->post('level'),
        );
        $this->model_app->updateData('user',$data,$id);
        redirect("user");;
    }
    
    function delete()
    {
        $id['id_user'] = $this->uri->segment(3);
        $this->model_app->deleteData('user',$id);
        redirect("user");
    }
}

