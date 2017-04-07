<?php

class pegawai extends CI_Controller
{
    function __construct() {
        parent::__construct();
        
        $this->load->model('model_app');
        check_session();

       
    }
    
    function index()
    {
        
        $data=array(
            'data_pegawai'=>$this->model_app->getAllData('pegawai'),
            'data_pegawai'=>$this->model_app->pegawai(),
            'data_jabatan'=>$this->model_app->getAllData('jabatan'),
            'data_profil_syarat_pegawai'=>$this->model_app->profil_syarat_pegawai('profil_syarat_pegawai'),
            'data_pangkat'=>$this->model_app->getAllData('pangkat'),
            'data_pendidikan'=>$this->model_app->getAllData('pendidikan'),
        );
            $this->template->load('template','pegawai/tampil_data',$data);

    }
    
    function insert()
    {
       


        $data=array(
            'id_pegawai'=> $this->input->post('id_pegawai'),
            'nama'=> $this->input->post('nama'),
            'nip'=>$this->input->post('nip'),
            'tempat_lahir'=>$this->input->post('tempat_lahir'),
            'tgl_lahir'=>$this->input->post('tgl_lahir'),
            'alamat'=> $this->input->post('alamat'),
            'agama'=> $this->input->post('agama'),
            'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
            'id_jabatan'=>$this->input->post('jabatan'),
              );


            $data1=array(
            'id_pegawai'=> $this->input->post('id_pegawai'),
            'id_psp'=> $this->input->post('id_psp'),
            'nilai_pangkat'=>$this->input->post('nilai_pangkat'),
            'nilai_pendidikan'=> $this->input->post('nilai_pendidikan'),
      


        );

          

        $this->model_app->insertData('pegawai',$data);
         $this->model_app->insertData('profil_syarat_pegawai',$data1);
         redirect("pegawai");

    }
    
    function edit()
    {
       
        $id['id_pegawai'] = $this->input->post('id_pegawai');
         $data=array(
            'nama'=> $this->input->post('nama'),
            'nip'=>$this->input->post('nip'),
            'tempat_lahir'=>$this->input->post('tempat_lahir'),
            'tgl_lahir'=>$this->input->post('tgl_lahir'),
            'alamat'=> $this->input->post('alamat'),
            'agama'=> $this->input->post('agama'),
            'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
            'id_jabatan'=>$this->input->post('jabatan'),
            

        );

            $id1['id_psp'] = $this->input->post('id_psp');
            $data1=array(
            'nilai_pangkat'=>$this->input->post('nilai_pangkat'),
            'nilai_pendidikan'=> $this->input->post('nilai_pendidikan'),

        );

        $this->model_app->updateData('pegawai',$data,$id);
        $this->model_app->updateData('profil_syarat_pegawai',$data1,$id,$id1);
       
        redirect("pegawai");;
    }
    
    function delete()
    {
        $id['id_pegawai'] = $this->uri->segment(3);
        $this->model_app->deleteData('pegawai',$id);
         $this->model_app->deleteData('profil_syarat_pegawai',$id);
          
        redirect("pegawai");
    }
}

