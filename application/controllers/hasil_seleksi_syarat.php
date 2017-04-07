<?php
class hasil_seleksi_syarat extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model(array('model_app','model_pegawai','model_seleksi_syarat'));
        check_session();
    }
    
    function index(){
        
        $data=array(
            
           
            'data_jabatan_kosong'=>$this->model_app->jabatan_kosong(),
            'data_jabatan'=>$this->model_app->getAllData('jabatan'),
            'data_tingkat_jabatan'=>$this->model_app->getAllData('tingkat_jabatan'),
            'data_unitkerja'=>$this->model_app->getAllData('unitkerja'),
            'data_hasil_seleksi_syarat'=>$this->model_app->test(),
            'data_faktor'=>$this->model_app->getAllData('faktor'),
            'data_profil_jabatan'=>$this->model_app->profil_jabatan(),
        
            );

        
        $this->template->load('template','hasil_seleksi_syarat/tampil_data',$data);
        
        
    }

     function insert()
    {
         $data=array(
            'id_jabatankosong'=> $this->input->post('id_jabatankosong'),
            'id_pegawai'=> $this->input->post('id_pegawai'),
            'id_faktor'=>$this->input->post('id_faktor1'),
            'nilai'=> $this->input->post('nilai1'));

            $data2= array(
            'id_jabatankosong'=> $this->input->post('id_jabatankosong'),
            'id_pegawai'=> $this->input->post('id_pegawai'),
            'id_faktor'=>$this->input->post('id_faktor2'),
            'nilai'=> $this->input->post('nilai2'));

              $data3= array(
            'id_jabatankosong'=> $this->input->post('id_jabatankosong'),
            'id_pegawai'=> $this->input->post('id_pegawai'),
            'id_faktor'=>$this->input->post('id_faktor3'),
            'nilai'=> $this->input->post('nilai3'));

                $data4= array(
            'id_jabatankosong'=> $this->input->post('id_jabatankosong'),
            'id_pegawai'=> $this->input->post('id_pegawai'),
            'id_faktor'=>$this->input->post('id_faktor4'),
            'nilai'=> $this->input->post('nilai4'));

                  $data5= array(
            'id_jabatankosong'=> $this->input->post('id_jabatankosong'),
            'id_pegawai'=> $this->input->post('id_pegawai'),
            'id_faktor'=>$this->input->post('id_faktor5'),
            'nilai'=> $this->input->post('nilai5'));

                    $data6= array(
            'id_jabatankosong'=> $this->input->post('id_jabatankosong'),
            'id_pegawai'=> $this->input->post('id_pegawai'),
            'id_faktor'=>$this->input->post('id_faktor6'),
            'nilai'=> $this->input->post('nilai6'));

                      $data7= array(
            'id_jabatankosong'=> $this->input->post('id_jabatankosong'),
            'id_pegawai'=> $this->input->post('id_pegawai'),
            'id_faktor'=>$this->input->post('id_faktor7'),
            'nilai'=> $this->input->post('nilai7'));

                        $data8= array(
            'id_jabatankosong'=> $this->input->post('id_jabatankosong'),
            'id_pegawai'=> $this->input->post('id_pegawai'),
            'id_faktor'=>$this->input->post('id_faktor8'),
            'nilai'=> $this->input->post('nilai8'));

                          $data9= array(
            'id_jabatankosong'=> $this->input->post('id_jabatankosong'),
            'id_pegawai'=> $this->input->post('id_pegawai'),
            'id_faktor'=>$this->input->post('id_faktor9'),
            'nilai'=> $this->input->post('nilai9'));

                            $data10= array(
            'id_jabatankosong'=> $this->input->post('id_jabatankosong'),
            'id_pegawai'=> $this->input->post('id_pegawai'),
            'id_faktor'=>$this->input->post('id_faktor10'),
            'nilai'=> $this->input->post('nilai10'));

                              $data11= array(
            'id_jabatankosong'=> $this->input->post('id_jabatankosong'),
            'id_pegawai'=> $this->input->post('id_pegawai'),
            'id_faktor'=>$this->input->post('id_faktor11'),
            'nilai'=> $this->input->post('nilai11'));

                                $data12= array(
            'id_jabatankosong'=> $this->input->post('id_jabatankosong'),
            'id_pegawai'=> $this->input->post('id_pegawai'),
            'id_faktor'=>$this->input->post('id_faktor12'),
            'nilai'=> $this->input->post('nilai12'));

                                  $data13= array(
            'id_jabatankosong'=> $this->input->post('id_jabatankosong'),
            'id_pegawai'=> $this->input->post('id_pegawai'),
            'id_faktor'=>$this->input->post('id_faktor13'),
            'nilai'=> $this->input->post('nilai13'));

                                    $data14= array(
            'id_jabatankosong'=> $this->input->post('id_jabatankosong'),
            'id_pegawai'=> $this->input->post('id_pegawai'),
            'id_faktor'=>$this->input->post('id_faktor14'),
            'nilai'=> $this->input->post('nilai14'));

                                      $data15= array(
            'id_jabatankosong'=> $this->input->post('id_jabatankosong'),
            'id_pegawai'=> $this->input->post('id_pegawai'),
            'id_faktor'=>$this->input->post('id_faktor15'),
            'nilai'=> $this->input->post('nilai15'));

                                        $data16= array(
            'id_jabatankosong'=> $this->input->post('id_jabatankosong'),
            'id_pegawai'=> $this->input->post('id_pegawai'),
            'id_faktor'=>$this->input->post('id_faktor16'),
            'nilai'=> $this->input->post('nilai16'));

                                          $data17= array(
            'id_jabatankosong'=> $this->input->post('id_jabatankosong'),
            'id_pegawai'=> $this->input->post('id_pegawai'),
            'id_faktor'=>$this->input->post('id_faktor17'),
            'nilai'=> $this->input->post('nilai17'));



        $this->db->insert('hasil_seleksi_syarat',$data);
        $this->db->insert('hasil_seleksi_syarat',$data2);

        $this->db->insert('hasil_seleksi_syarat',$data3);
        $this->db->insert('hasil_seleksi_syarat',$data4);

        $this->db->insert('hasil_seleksi_syarat',$data5);
        $this->db->insert('hasil_seleksi_syarat',$data6);

        $this->db->insert('hasil_seleksi_syarat',$data7);
        $this->db->insert('hasil_seleksi_syarat',$data8);

        $this->db->insert('hasil_seleksi_syarat',$data9);
        $this->db->insert('hasil_seleksi_syarat',$data10);

        $this->db->insert('hasil_seleksi_syarat',$data11);
        $this->db->insert('hasil_seleksi_syarat',$data12);

        $this->db->insert('hasil_seleksi_syarat',$data13);
        $this->db->insert('hasil_seleksi_syarat',$data14);

        $this->db->insert('hasil_seleksi_syarat',$data15);
        $this->db->insert('hasil_seleksi_syarat',$data16);

        $this->db->insert('hasil_seleksi_syarat',$data17);
 


        redirect("hasil_seleksi_syarat");
    }

    function delete(){

        $this->model_app->delete_hasil_seleksi_syarat();

        redirect("hasil_seleksi_syarat");
    }

    function profilematching1()
    {
        $data['pm1']=$this->model_app->profilematching1();
         $this->template->load('template','hasil_seleksi_syarat/profilematching1',$data);
    }

    function profilematching2()
    {
        $data['pm2']=$this->model_app->profilematching2();
         $this->template->load('template','hasil_seleksi_syarat/profilematching2',$data);
    }

    function profilematching3()
    {
        $data['pm3']=$this->model_app->profilematching3();
         $this->template->load('template','hasil_seleksi_syarat/profilematching3',$data);
    }

    function save(){

        $data=$this->model_app->profilematching3();

        foreach ($data as $row) {
                # code...
            $data=array(
                'id_jabatankosong'=>$row->id_jabatankosong,
                'nama'=>$row->nama,
                'RJ'=>$row->RJ,
                'Per'=>$row->Per,
                'KM'=>$row->KM,
                'hasil'=>$row->Hasil
                );
                
        $this->model_app->save($data);

         

     }

      $this->model_seleksi_syarat->delete_seleksi_syarat();
      $this->model_app->delete_hasil_seleksi_syarat();


     redirect("hasil_seleksi_syarat/laporan");
    }

    function laporan(){

        $data['laporan']=$this->model_app->laporan();
        $this->template->load('template','hasil_seleksi_syarat/laporan',$data);

    }
}

