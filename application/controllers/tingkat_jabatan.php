<?php

class tingkat_jabatan extends CI_Controller
{
    function __construct() {
        parent::__construct();
        
        $this->load->model('model_app');
        check_session();
    }
    
    function index()
    {
         $data=array(
            
            'data_tingkat_jabatan'=>$this->model_app->getAllData('tingkat_jabatan'),
        );

        $this->template->load('template','tingkat_jabatan/tampil_data',$data);
    }
    
    function insert()
    {
         $data=array(
            'id_tingkatjbt'=> $this->input->post('id_tingkatjbt'),
            'nama_tingkatjbt'=> $this->input->post('nama_tingkatjbt'),
            'eselon'=>$this->input->post('eselon'),
            
        );
        $this->model_app->insertData('tingkat_jabatan',$data);
        redirect("tingkat_jabatan");
    }
    
    function edit()
    {
       $id['id_tingkatjbt'] = $this->input->post('id_tingkatjbt');
        $data=array(
            'nama_tingkatjbt'=> $this->input->post('nama_tingkatjbt'),
            'eselon'=>$this->input->post('eselon'),
        );
        $this->model_app->updateData('tingkat_jabatan',$data,$id);
        redirect("tingkat_jabatan");;
    }
    
    function delete()
    {
        $id['id_tingkatjbt'] = $this->uri->segment(3);
        $this->model_app->deleteData('tingkat_jabatan',$id);
        redirect("tingkat_jabatan");
    }
}

