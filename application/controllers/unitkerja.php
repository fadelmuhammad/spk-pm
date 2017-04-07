<?php

class unitkerja extends CI_Controller
{
    function __construct() {
        parent::__construct();
        
        $this->load->model('model_app');
        check_session();
    }
    
    function index()
    {
         $data=array(
            
            'data_unitkerja'=>$this->model_app->getAllData('unitkerja'),
        );

        $this->template->load('template','unitkerja/tampil_data',$data);
    }
    
    function insert()
    {
         $data=array(
            'id_unitkerja'=> $this->input->post('id_unitkerja'),
            'nama_unitkerja'=> $this->input->post('nama_unitkerja'),
            'jenis_unitkerja'=>$this->input->post('jenis_unitkerja'),
            
        );
        $this->model_app->insertData('unitkerja',$data);
        redirect("unitkerja");
    }
    
    function edit()
    {
       $id['id_unitkerja'] = $this->input->post('id_unitkerja');
        $data=array(
            'nama_unitkerja'=> $this->input->post('nama_unitkerja'),
            'jenis_unitkerja'=>$this->input->post('jenis_unitkerja'),
        );
        $this->model_app->updateData('unitkerja',$data,$id);
        redirect("unitkerja");;
    }
    
    function delete()
    {
        $id['id_unitkerja'] = $this->uri->segment(3);
        $this->model_app->deleteData('unitkerja',$id);
        redirect("unitkerja");
    }
}

