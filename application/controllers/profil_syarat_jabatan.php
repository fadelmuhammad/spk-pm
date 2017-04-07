<?php

class profil_syarat_jabatan extends CI_Controller
{
    function __construct() {
        parent::__construct();
        
        $this->load->model('model_app');
        check_session();
    }
    
    function index()
    {
         $data=array(
            
            'data_profil_syarat_jabatan'=>$this->model_app->getAllData('profil_syarat_jabatan'),
            'data_tingkat_jabatan'=>$this->model_app->getAllData('tingkat_jabatan'),
            'data_unitkerja'=>$this->model_app->getAllData('unitkerja'),
            'data_jabatan_kosong'=>$this->model_app->getAllData('jabatan_kosong')
        );

        $this->template->load('template','profil_syarat_jabatan/tampil_data',$data);
    }
    
    function insert()
    {
         $data=array(
            'id_profilsyaratjbt'=> $this->input->post('id_profilsyaratjbt'),
            'id_jabatankosong'=> $this->input->post('id_jabatankosong'),
            'pangkat'=> $this->input->post('pangkat'),
            'pendidikan'=>$this->input->post('pendidikan'),
        );
        $this->model_app->insertData('profil_syarat_jabatan',$data);
        redirect("jabatan_kosong");
    }
    
    function edit()
    {
       $id['id_profilsyaratjbt'] = $this->input->post('id_profilsyaratjbt');
        $data=array(
            'pangkat'=> $this->input->post('pangkat'),
            'pendidikan'=>$this->input->post('pendidikan'),
            
        );
        $this->model_app->updateData('profil_syarat_jabatan',$data,$id);
        redirect("profil_syarat_jabatan");;
    }
    
    function delete()
    {
        $id['id_profilsyaratjbt'] = $this->uri->segment(3);
        $this->model_app->deleteData('profil_syarat_jabatan',$id);
        redirect("profil_syarat_jabatan");
    }
}

