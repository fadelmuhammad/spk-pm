<?php


class Model_app extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    
    public function getAllData($table)
    {
        return $this->db->get($table)->result();
    }
    public function getSelectedData($table,$data)
    {
        return $this->db->get_where($table, $data);
    }
    function updateData($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);
    }
    function deleteData($table,$data)
    {
        $this->db->delete($table,$data);
    }
    function insertData($table,$data)
    {
        $this->db->insert($table,$data);
    }
    function manualQuery($q)
    {
        return $this->db->query($q);
    }



    function pegawai(){
        return $this->db->query("SELECT * from pegawai a left join jabatan b on a.id_jabatan=b.id_jabatan 
             ")->result();
    }

    function profil_jabatan(){
        return $this->db->query("SELECT * from faktor a left join aspek b on a.id_aspek=b.id_aspek 
             ")->result();
    }

    function jabatan(){
        return $this->db->query("SELECT * from jabatan a left join tingkat_jabatan b on a.id_tingkatjbt=b.id_tingkatjbt
            left join unitkerja c on a.id_unitkerja=c.id_unitkerja")->result();
    }

    function jabatan_kosong(){
        return $this->db->query("SELECT * from jabatan_kosong a left join jabatan b on a.id_jabatan=b.id_jabatan
            left join tingkat_jabatan c on a.id_tingkatjbt=c.id_tingkatjbt left join unitkerja d on a.id_unitkerja=d.id_unitkerja")->result();
    }

    function profil_syarat_jabatan(){

        return $this->db->query("SELECT * from profil_syarat_jabatan a left join jabatan_kosong b on a.id_jabatankosong=b.id_jabatankosong  left join pangkat
        c on  a.nilai_pangkat=c.nilai_pangkat left join pendidikan d on a.nilai_pendidikan=d.nilai_pendidikan 
             ")->result();   
    }

    

    function profil_syarat_pegawai(){

        return $this->db->query("SELECT * from profil_syarat_pegawai a left join pegawai b on a.id_pegawai=b.id_pegawai left join pangkat
        c on  a.nilai_pangkat=c.nilai_pangkat left join pendidikan d on a.nilai_pendidikan=d.nilai_pendidikan
             ")->result();   
    }


    function seleksi_syarat(){

        return $this->db->query("select hasil_seleksi_syarat.id_hasil, hasil_seleksi_syarat.id_jabatankosong, hasil_seleksi_syarat.id_pegawai,
            hasil_seleksi_syarat.gap, profil_syarat_jabatan.nilai_pangkat, profil_syarat_jabatan.nilai_pendidikan, pegawai.nama,
            profil_syarat_pegawai.nilai_pangkat, profil_syarat_pegawai.nilai_pendidikan from hasil_seleksi_syarat
             join jabatan_kosong on jabatan_kosong.id_jabatankosong=hasil_seleksi_syarat.id_jabatankosong join profil_syarat_jabatan
              on jabatan_kosong.id_jabatankosong=profil_syarat_jabatan.id_jabatankosong join pegawai on 
              pegawai.id_pegawai=hasil_seleksi_syarat.id_pegawai join profil_syarat_pegawai 
              on pegawai.id_pegawai=profil_syarat_pegawai.id_pegawai")->result();
    }

    function test(){

        return $this->db->query("SELECT * from seleksi_syarat a left join pegawai b on a.id_pegawai=b.id_pegawai left join jabatan_kosong c on
             a.id_jabatankosong=c.id_jabatankosong left join jabatan d on b.id_jabatan=d.id_jabatan where status='lulus'")->result();   
    }

    function laporan(){
      return $this->db->query("SELECT * from profilematching a left join jabatan_kosong b on a.id_jabatankosong=b.id_jabatankosong left join jabatan
        c on b.id_jabatan=c.id_jabatan order by jabatan")->result();
    }

    function delete_hasil_seleksi_syarat(){
        $this->db->from('hasil_seleksi_syarat');
        $this->db->truncate();
    }

     function delete_profil_jabatan(){
        $this->db->from('faktor');
        $this->db->truncate();
    }

    function profilematching1()
    {
        return $this->db->query("SELECT 
  b.nama,
  c.aspek,
  d.faktor,
  e.skala,
  d.nilai as target,
  a.nilai,
(a.nilai - d.nilai) as hasil,
  f.bobot,
  d.kelompok
FROM 
  hasil_seleksi_syarat a
  JOIN pegawai b USING(id_pegawai)
  JOIN faktor d USING(id_faktor)
  JOIN aspek c USING(id_aspek)
  JOIN skala e ON e.id_skala=a.nilai
JOIN  bobot f ON f.selisih=(a.nilai-d.nilai)
ORDER BY b.id_pegawai,d.id_faktor")->result();

    }

    function profilematching2()
    {
        return $this->db->query("SELECT 
  b.nama,
  c.aspek,
  SUM(IF(d.kelompok='core',e.bobot,0))/SUM(IF(d.kelompok='core',1,0)) AS core,
  SUM(IF(d.kelompok='secondary',e.bobot,0))/SUM(IF(d.kelompok='secondary',1,0)) AS secondary
FROM 
  hasil_seleksi_syarat a
  JOIN pegawai b USING(id_pegawai)
  JOIN faktor d USING(id_faktor)
  JOIN aspek c USING(id_aspek)
  JOIN bobot e ON e.selisih=(a.nilai-d.nilai)
GROUP BY b.id_pegawai, c.aspek
ORDER BY b.id_pegawai,d.id_faktor")->result();
    }


    function profilematching3()
    {
        return $this->db->query("SELECT
  f.nama,
  f.id_jabatankosong,
  SUM(IF(f.id_aspek=1,f.nilai,0)) AS RJ,
  SUM(IF(f.id_aspek=2,f.nilai,0)) AS Per,
  SUM(IF(f.id_aspek=3,f.nilai,0)) AS KM,
  (
    SUM(IF(f.id_aspek=1,f.nilai*f.persen,0))+
    SUM(IF(f.id_aspek=2,f.nilai*f.persen,0))+
    SUM(IF(f.id_aspek=3,f.nilai*f.persen,0))
  ) AS Hasil
FROM
  (
    SELECT 
      b.nama,
      a.id_jabatankosong,
      c.id_aspek,
      c.prosentase/100 AS persen,
      (SUM(IF(d.kelompok='core',e.bobot,0))/SUM(IF(d.kelompok='core',1,0))*0.6+
       SUM(IF(d.kelompok='secondary',e.bobot,0))/SUM(IF(d.kelompok='secondary',1,0))*0.4) AS nilai  
    FROM
      hasil_seleksi_syarat a
      JOIN pegawai b USING(id_pegawai)
      JOIN faktor d USING(id_faktor)
      JOIN aspek c USING(id_aspek)
      JOIN bobot e ON e.selisih=(a.nilai-d.nilai)
      JOIN jabatan_kosong g USING(id_jabatankosong)

    GROUP BY b.id_pegawai,aspek
    ORDER BY b.id_pegawai
  ) f
GROUP BY f.nama
ORDER BY Hasil DESC")->result();
    }

    
function save($data){
        $this->db->insert('profilematching',$data);
    }
    










    function login($username, $password) {
        //create query to connect user login database
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);

        //get query and processing
        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }

}