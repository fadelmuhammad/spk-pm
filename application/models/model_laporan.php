<?php


class model_laporan extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    

    function daftar_laporan($tanggal1,$tanggal2) {
        $this->db->select('*');
        $this->db->from('supply');
         $this->db->join('detail_supply','detail_supply.id_supply=supply.id_supply');
         $this->db->join('material','detail_supply.id_material=material.id_material');
         $this->db->join('supplier','supplier.id_supplier=supply.id_supply');
         $this->db->where("supply.tgl_terima BETWEEN '$tanggal1' and '$tanggal2'");
         $query = $this->db->get();
         return $query->result();
        
    }

    function getDataSupply($tanggal1,$tanggal2){
        return $this->db->query("SELECT * from supply a
                left join supplier b on a.id_supplier=b.id_supplier
                where tgl_terima between '$tanggal1' and '$tanggal2'")->result();
    }

    function getMaterialSupply($tanggal1,$tanggal2){
        return $this->db->query("
                select * from detail_supply a
                left join material b on a.id_material=b.id_material left join supply c on a.id_supply=c.id_supply left join supplier d on c.id_supplier=d.id_supplier
                where tgl_terima between '$tanggal1' and '$tanggal2'")->result();
    }

    function produksi($tanggal1,$tanggal2){
        return $this->db->query("SELECT * from produksi a left join shift b on a.id_shift=b.id_shift 
            left join produk c on a.id_produk=c.id_produk where tgl_produksi between '$tanggal1' and '$tanggal2'")->result();
    }

     function getProdukKeluar($tanggal1,$tanggal2){
        return $this->db->query("
                select * from detail_produk_keluar a
                left join produk b on a.id_produk=b.id_produk left join produk_keluar c on a.id_produk_keluar=c.id_produk_keluar
                where tgl_produk_keluar between '$tanggal1' and '$tanggal2'")->result();
    }

}