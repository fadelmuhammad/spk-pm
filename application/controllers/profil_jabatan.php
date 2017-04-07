<?php

class profil_jabatan extends CI_Controller
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
            'data_profil_jabatan'=>$this->model_app->profil_jabatan(),
        );

        $this->template->load('template','profil_jabatan/tampil_data',$data);
    }

    function insert()
    {

        $this->model_app->delete_profil_jabatan();


         $data=array(
            'id_faktor'=> $this->input->post('id_faktor1'),
            'id_aspek'=> $this->input->post('id_aspek1'),
            'faktor'=>$this->input->post('faktor1'),
            'nilai'=> $this->input->post('nilai1'),
            'kelompok'=> $this->input->post('kelompok1'));

          $data2=array(
            'id_faktor'=> $this->input->post('id_faktor2'),
            'id_aspek'=> $this->input->post('id_aspek2'),
            'faktor'=>$this->input->post('faktor2'),
            'nilai'=> $this->input->post('nilai2'),
            'kelompok'=> $this->input->post('kelompok2'));

 $data3=array(
            'id_faktor'=> $this->input->post('id_faktor3'),
            'id_aspek'=> $this->input->post('id_aspek3'),
            'faktor'=>$this->input->post('faktor3'),
            'nilai'=> $this->input->post('nilai3'),
            'kelompok'=> $this->input->post('kelompok3'));
  $data4=array(
            'id_faktor'=> $this->input->post('id_faktor4'),
            'id_aspek'=> $this->input->post('id_aspek4'),
            'faktor'=>$this->input->post('faktor4'),
            'nilai'=> $this->input->post('nilai4'),
            'kelompok'=> $this->input->post('kelompok4'));
   $data5=array(
            'id_faktor'=> $this->input->post('id_faktor5'),
            'id_aspek'=> $this->input->post('id_aspek5'),
            'faktor'=>$this->input->post('faktor5'),
            'nilai'=> $this->input->post('nilai5'),
            'kelompok'=> $this->input->post('kelompok5'));
    $data6=array(
            'id_faktor'=> $this->input->post('id_faktor6'),
            'id_aspek'=> $this->input->post('id_aspek6'),
            'faktor'=>$this->input->post('faktor6'),
            'nilai'=> $this->input->post('nilai6'),
            'kelompok'=> $this->input->post('kelompok6'));
     $data7=array(
            'id_faktor'=> $this->input->post('id_faktor7'),
            'id_aspek'=> $this->input->post('id_aspek7'),
            'faktor'=>$this->input->post('faktor7'),
            'nilai'=> $this->input->post('nilai7'),
            'kelompok'=> $this->input->post('kelompok7'));
      $data8=array(
            'id_faktor'=> $this->input->post('id_faktor8'),
            'id_aspek'=> $this->input->post('id_aspek8'),
            'faktor'=>$this->input->post('faktor8'),
            'nilai'=> $this->input->post('nilai8'),
            'kelompok'=> $this->input->post('kelompok8'));
       $data9=array(
            'id_faktor'=> $this->input->post('id_faktor9'),
            'id_aspek'=> $this->input->post('id_aspek9'),
            'faktor'=>$this->input->post('faktor9'),
            'nilai'=> $this->input->post('nilai9'),
            'kelompok'=> $this->input->post('kelompok9'));
        $data10=array(
            'id_faktor'=> $this->input->post('id_faktor10'),
            'id_aspek'=> $this->input->post('id_aspek10'),
            'faktor'=>$this->input->post('faktor10'),
            'nilai'=> $this->input->post('nilai1'),
            'kelompok'=> $this->input->post('kelompok10'));
         $data11=array(
            'id_faktor'=> $this->input->post('id_faktor11'),
            'id_aspek'=> $this->input->post('id_aspek11'),
            'faktor'=>$this->input->post('faktor11'),
            'nilai'=> $this->input->post('nilai11'),
            'kelompok'=> $this->input->post('kelompok11'));
          $data12=array(
            'id_faktor'=> $this->input->post('id_faktor12'),
            'id_aspek'=> $this->input->post('id_aspek12'),
            'faktor'=>$this->input->post('faktor12'),
            'nilai'=> $this->input->post('nilai12'),
            'kelompok'=> $this->input->post('kelompok12'));
           $data13=array(
            'id_faktor'=> $this->input->post('id_faktor13'),
            'id_aspek'=> $this->input->post('id_aspek13'),
            'faktor'=>$this->input->post('faktor13'),
            'nilai'=> $this->input->post('nilai13'),
            'kelompok'=> $this->input->post('kelompok13'));
            $data14=array(
            'id_faktor'=> $this->input->post('id_faktor14'),
            'id_aspek'=> $this->input->post('id_aspek14'),
            'faktor'=>$this->input->post('faktor14'),
            'nilai'=> $this->input->post('nilai14'),
            'kelompok'=> $this->input->post('kelompok14'));
             $data15=array(
            'id_faktor'=> $this->input->post('id_faktor15'),
            'id_aspek'=> $this->input->post('id_aspek15'),
            'faktor'=>$this->input->post('faktor15'),
            'nilai'=> $this->input->post('nilai15'),
            'kelompok'=> $this->input->post('kelompok15'));
              $data16=array(
            'id_faktor'=> $this->input->post('id_faktor16'),
            'id_aspek'=> $this->input->post('id_aspek16'),
            'faktor'=>$this->input->post('faktor16'),
            'nilai'=> $this->input->post('nilai16'),
            'kelompok'=> $this->input->post('kelompok16'));
               $data17=array(
            'id_faktor'=> $this->input->post('id_faktor17'),
            'id_aspek'=> $this->input->post('id_aspek17'),
            'faktor'=>$this->input->post('faktor17'),
            'nilai'=> $this->input->post('nilai17'),
            'kelompok'=> $this->input->post('kelompok17'));

            


        $this->db->insert('faktor',$data);
        $this->db->insert('faktor',$data2);

        $this->db->insert('faktor',$data3);
        $this->db->insert('faktor',$data4);

        $this->db->insert('faktor',$data5);
        $this->db->insert('faktor',$data6);

        $this->db->insert('faktor',$data7);
        $this->db->insert('faktor',$data8);

        $this->db->insert('faktor',$data9);
        $this->db->insert('faktor',$data10);

        $this->db->insert('faktor',$data11);
        $this->db->insert('faktor',$data12);

        $this->db->insert('faktor',$data13);
        $this->db->insert('faktor',$data14);

        $this->db->insert('faktor',$data15);
        $this->db->insert('faktor',$data16);

        $this->db->insert('faktor',$data17);
 


        redirect("hasil_seleksi_syarat");
    }
    
    
    
   
}

