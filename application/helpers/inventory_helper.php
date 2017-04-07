<?php

function currency_format($number)
{
    return "Rp ". number_format($number,2,',','.');
}

function check_session()
{
	$CI =& get_instance();
	$session=$CI->session->userdata('status_login');

	if($session!='LOGIN')
	{
		redirect('auth/login');
	}
}

function check_session_login()
{
    $CI=& get_instance();
    $session=$CI->session->userdata('status_login');
    
    if($session=='LOGIN')
    {
        redirect('dashboard');
    }

}


    function tanggal()
{
    return date('Y-m-d H:i:s');
}




    function check_stok_material($id_material)
    {
        $CI =& get_instance();
        $qa="select sum(jumlah_material) as jumlah_supply from detail_supply where id_material='$id_material'";
        $qb="select sum(jumlah_material_keluar) as jumlah_out from detail_material_keluar where id_material='$id_material'";
        $supply=$CI->db->query($qa)->row_array();
        $material_keluar=$CI->db->query($qb)->row_array();

        $hasil=$supply['jumlah_supply']-$material_keluar['jumlah_out'];

        
        return $hasil;



    }

    function check_stok_produk($id_produk)
    {
        $CI =& get_instance();
        $qa="select sum(jumlah_produksi) as jumlah_in from produksi where id_produk='$id_produk'";
        $qb="select sum(jumlah_produk_keluar) as jumlah_out from detail_produk_keluar where id_produk='$id_produk'";
        $produksi=$CI->db->query($qa)->row_array();
        $produk_keluar=$CI->db->query($qb)->row_array();

        return $produksi['jumlah_in']-$produk_keluar['jumlah_out'];


    }

