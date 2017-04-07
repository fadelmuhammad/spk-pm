<?php
class seleksi_syarat extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model(array('model_app','model_pegawai','model_seleksi_syarat'));
        check_session();
    }
    
    function index(){
        
        $data=array(
            
            'data_jabatan_kosong'=>$this->model_app->getAllData('jabatan_kosong'),
            'data_jabatan_kosong'=>$this->model_app->jabatan_kosong(),
            'data_jabatan'=>$this->model_app->getAllData('jabatan'),
            'data_tingkat_jabatan'=>$this->model_app->getAllData('tingkat_jabatan'),
            'data_unitkerja'=>$this->model_app->getAllData('unitkerja'),
            'data_profil_syarat_jabatan'=>$this->model_app->profil_syarat_jabatan('profil_syarat_jabatan'),
            'data_bobot_rj_jabatan'=>$this->model_app->bobot_rj_jabatan('bobot_rj_jabatan'),
            'data_bobot_per_jabatan'=>$this->model_app->bobot_per_jabatan('bobot_per_jabatan'),
            'data_bobot_km_jabatan'=>$this->model_app->bobot_km_jabatan('bobot_km_jabatan'),
            'data_pangkat'=>$this->model_app->getAllData('pangkat'),
            'data_pendidikan'=>$this->model_app->getAllData('pendidikan'),
            'data_seleksi_syarat'=>$this->model_seleksi_syarat->seleksi_syarat(),
            'data_hasil_seleksi_syarat'=>$this->model_app->getAllData('hasil_seleksi_syarat'),
            'data_test'=>$this->model_app->getAllData('seleksi_syarat'),


        );
        $this->template->load('template','seleksi_syarat/tampil_data',$data);
        
        
    }
    function tampil_data(){
            //menghapus data yg pernah diisi sebelumnya yg id_jabatankosong sama
            $this->model_seleksi_syarat->delete_seleksi_syarat();
             $this->model_app->delete_hasil_seleksi_syarat();
            
            //proses seleksi pegawai yg lulus
            $id_jabatankosong=$this->uri->segment(3);
            $pegawai=$this->model_seleksi_syarat->seleksi_syarat($id_jabatankosong);
            $status="";
            foreach ($pegawai as $pegawai_item) {
                # code...
                if ($pegawai_item->gap >= -2) {
                    # code...
                    $status="lulus";
                }
                else{
                    $status="tidak lulus";
                }
                $data['id_pegawai']=$pegawai_item->id_pegawai;
                $data['id_jabatankosong']=$id_jabatankosong;
                $data['gap_pendidikan']=$pegawai_item->gap_pendidikan;
                $data['gap_pangkat']=$pegawai_item->gap_pangkat;
                $data['gap']=$pegawai_item->gap;
                $data['status']=$status;
                
                $this->model_seleksi_syarat->proses_seleksi_syarat($data);
            }
            //menampilkan pegawai yg lulus seleksi
            $data['pegawai_lulus']=$this->model_seleksi_syarat->hasil_seleksi_syarat();
            $this->template->load('template','seleksi_syarat/tampil_data_lulus',$data);
    }
}