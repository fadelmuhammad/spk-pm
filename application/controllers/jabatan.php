<?php

class jabatan extends CI_Controller
{
    function __construct() {
        parent::__construct();
        
        $this->load->model('model_app');
        check_session();
    }
    
    function index()
    {
         $data=array(
            
            'data_jabatan'=>$this->model_app->getAllData('jabatan'),
            'data_jabatan'=>$this->model_app->jabatan(),
            'data_tingkat_jabatan'=>$this->model_app->getAllData('tingkat_jabatan'),
            'data_unitkerja'=>$this->model_app->getAllData('unitkerja'),
        );

        $this->template->load('template','jabatan/tampil_data',$data);
    }
    
    function insert()
    {
         $data=array(
            'id_jabatan'=> $this->input->post('id_jabatan'),
            'jabatan'=> $this->input->post('jabatan'),
            'ket'=>$this->input->post('ket'),
            'id_tingkatjbt'=> $this->input->post('nama_tingkatjbt'),
            'id_unitkerja'=> $this->input->post('nama_unitkerja'),
            
            

            
        );
        $this->model_app->insertData('jabatan',$data);
        redirect("jabatan");
    }
    
    function edit()
    {
       $id['id_jabatan'] = $this->input->post('id_jabatan');
        $data=array(
            'jabatan'=> $this->input->post('jabatan'),
            'ket'=>$this->input->post('ket'),
            'id_tingkatjbt'=> $this->input->post('nama_tingkatjbt'),
            'id_unitkerja'=> $this->input->post('nama_unitkerja'),
            
        );
        $this->model_app->updateData('jabatan',$data,$id);
        redirect("jabatan");;
    }
    
    function delete()
    {
        $id['id_jabatan'] = $this->uri->segment(3);
        $this->model_app->deleteData('jabatan',$id);
        redirect("jabatan");
    }
}

