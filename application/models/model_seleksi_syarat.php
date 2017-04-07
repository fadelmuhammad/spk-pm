
<?php
class model_seleksi_syarat extends ci_model{
    function insert($data){
        $this->db->insert('seleksi_syarat',$data);
    }
    
    function seleksi_syarat($id_jabatankosong){
        return $this->db->query("select pegawai.id_pegawai,pegawai.nama, profil_syarat_pegawai.nilai_pangkat as nilai_pangkat_pegawai,
        profil_syarat_pegawai.nilai_pendidikan as nilai_pendidikan_pegawai, profil_syarat_jabatan.nilai_pangkat as nilai_pangkat_jabatan,
        profil_syarat_jabatan.nilai_pendidikan as nilai_pendidikan_jabatan, (select nilai_pangkat_pegawai - nilai_pangkat_jabatan) as gap_pangkat,
        (select nilai_pendidikan_pegawai - nilai_pendidikan_jabatan) as gap_pendidikan,
        (select gap_pangkat + gap_pendidikan) as gap from jabatan_kosong join profil_syarat_jabatan on jabatan_kosong.id_jabatankosong=profil_syarat_jabatan.id_jabatankosong
         join pegawai join profil_syarat_pegawai on pegawai.id_pegawai=profil_syarat_pegawai.id_pegawai where jabatan_kosong.id_jabatankosong='$id_jabatankosong' group by pegawai.id_pegawai")->result();
    }
    function insert_hasil_seleksi_syarat($data){
        $this->db->insert('hasil_seleksi_syarat',$data);
    }
    function proses_seleksi_syarat($data){
        $this->db->insert('seleksi_syarat',$data);
    }
    function delete_hasil_seleksi_syarat($id_jabatankosong){
        $this->db->where('id_jabatankosong',$id_jabatankosong);
        $this->db->delete('hasil_seleksi_syarat');
    }
    function delete_seleksi_syarat(){
        $this->db->from('seleksi_syarat');
        $this->db->truncate();
    }
    function hasil_seleksi_syarat(){
        
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->join('jabatan','jabatan.id_jabatan=pegawai.id_jabatan');
        $this->db->join('seleksi_syarat','seleksi_syarat.id_pegawai=pegawai.id_pegawai');
        return $this->db->get();
    }

     

}

?>


    

