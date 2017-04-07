<?php

class jabatan_kosong extends CI_Controller
{
    function __construct() {
        parent::__construct();
        
        $this->load->model('model_app');
        check_session();
    }
    
    function index()
    {
         $data=array(
            
            'data_jabatan_kosong'=>$this->model_app->getAllData('jabatan_kosong'),
            'data_jabatan_kosong'=>$this->model_app->jabatan_kosong(),
            'data_jabatan'=>$this->model_app->getAllData('jabatan'),
            'data_tingkat_jabatan'=>$this->model_app->getAllData('tingkat_jabatan'),
            'data_unitkerja'=>$this->model_app->getAllData('unitkerja'),
            'data_profil_syarat_jabatan'=>$this->model_app->profil_syarat_jabatan('profil_syarat_jabatan'),
           
            'data_pangkat'=>$this->model_app->getAllData('pangkat'),
            'data_pendidikan'=>$this->model_app->getAllData('pendidikan'),
        );

        $this->template->load('template','jabatan_kosong/tampil_data',$data);
    }
    
    function insert()
    {
         $data=array(
            'id_jabatankosong'=> $this->input->post('id_jabatankosong'),
            'id_jabatan'=> $this->input->post('jabatan'),
            'id_tingkatjbt'=>$this->input->post('nama_tingkatjbt'),
            'id_unitkerja'=> $this->input->post('nama_unitkerja'),
            'periode'=> $this->input->post('periode'),

        );
         $data1=array(
            'id_jabatankosong'=> $this->input->post('id_jabatankosong'),
            'id_profilsyaratjbt'=> $this->input->post('id_profilsyaratjbt'),
            'nilai_pangkat'=>$this->input->post('nilai_pangkat'),
            'nilai_pendidikan'=> $this->input->post('nilai_pendidikan'),

        );


        $this->model_app->insertData('jabatan_kosong',$data);
        $this->model_app->insertData('profil_syarat_jabatan',$data1);
       

        redirect("jabatan_kosong");
    }
    
    function edit()
    {
       $id['id_jabatankosong'] = $this->input->post('id_jabatankosong');
        
        $data=array(
            'id_jabatan'=> $this->input->post('jabatan'),
            'id_tingkatjbt'=>$this->input->post('nama_tingkatjbt'),
            'id_unitkerja'=> $this->input->post('nama_unitkerja'),
            'periode'=> $this->input->post('periode'),

        );

         $id1['id_profilsyaratjbt'] = $this->input->post('id_profilsyaratjbt');
         $data1=array(
            'nilai_pangkat'=>$this->input->post('nilai_pangkat'),
            'nilai_pendidikan'=> $this->input->post('nilai_pendidikan'),

        );



        $this->model_app->updateData('jabatan_kosong',$data,$id);
        $this->model_app->updateData('profil_syarat_jabatan',$data1,$id,$id1);
       
        redirect("jabatan_kosong");;
    }

    
    
    function delete()
    {
        $id['id_jabatankosong'] = $this->uri->segment(3);
        $this->model_app->deleteData('jabatan_kosong',$id);
         $this->model_app->deleteData('profil_syarat_jabatan',$id);
          
        redirect("jabatan_kosong");
    }
}

