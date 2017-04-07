<div class="box">
     
                <div class="box-header">
                    <h3 class="box-title">Data Peserta Seleksi Syarat Yang Lulus</h3><br>
                  
          
                
        </div><!-- /.box-header -->
                <div class="box-body">
                 <a class="btn btn-mini btn btn-danger " href="<?php echo site_url('hasil_seleksi_syarat/delete')?>" data-toggle="modal"><i class="glyphicon glyphicon-off"></i>Delete History</a>
                 <br>
                 <br>
        <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr class="info">
        <th>No</th>
        <th>NIP</th>
        <th>Nama Pegawai</th>
        <th>Jabatan</th>
        <th>Gap Pangkat</th>
        <th>Gap Pendidikan</th>
        <th>Gap</th>
         <th>Keterangan</th>
         <th><a class="btn btn-mini btn btn-success " href="#modalEdit" data-toggle="modal"><i class="glyphicon glyphicon-tasks"></i> New Rule</a></td></th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    if(isset($data_hasil_seleksi_syarat)){
        foreach($data_hasil_seleksi_syarat as $row){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->nip; ?></td>
                <td><?php echo $row->nama?></td>
                <td><?php echo $row->jabatan?></td>
                <td><?php echo $row->gap_pangkat ?></td>
                <td><?php echo $row->gap_pendidikan?></td>
                <td><?php echo $row->gap?></td>
                <td>
                 <?php
                     switch ($row->gap) {
                         case '-3':
                             # code...
                             echo "Memenuhi Syarat Kekurangan 3 Tingkat";
                             break;
                         case '-2':
                             # code...
                             echo "Memenuhi Syarat Kekurangan 2 Tingkat";
                             break;
                         case '-1':
                             # code...
                             echo "Memenuhi Syarat Kekurangan 1 Tingkat";
                             break;
                         case '0':
                             # code...
                             echo "Memenuhi Syarat Minimal";
                             break;
                         case '1':
                             # code...
                             echo "Memenuhi Syarat Kelebihan 1 Tingkat";
                             break;
                         case '2':
                             # code...
                             echo "Memenuhi Syarat Kelebihan 2 Tingkat";
                             break;
                         case '3':
                             # code...
                             echo "Memenuhi Syarat Kelebihan 3 Tingkat";
                             break;
                         case '4':
                             # code...
                             $status="Memenuhi Syarat Kelebihan 4 Tingkat";
                             echo $status;
                             break;
                         case '5':
                             # code...
                             $status="Memenuhi Syarat Kelebihan 5 Tingkat";
                             echo $status;
                             break;
                          case '6':
                             # code...
                             $status="Memenuhi Syarat Kelebihan 6 Tingkat";
                             echo $status;
                             break;
                          case '7':
                             # code...
                             $status="Memenuhi Syarat Kelebihan 7 Tingkat";
                             echo $status;
                             break;          
                         default:
                             # code...
                             $status="Tidak Memenuhi Syarat";
                             echo $status;
                             break;
                    }
                ?>
                </td>
             <td><a class="btn btn-mini btn btn-success " href="#modalEdit<?php echo $row->id_seleksi_syarat?>" data-toggle="modal"><i class="glyphicon glyphicon-pencil"></i> Input Nilai</a></td>

            </tr>
        <?php 
        }
    }
    ?>
    </tbody>
</table>
    </div><!-- /.box-body -->
</div><!-- /.box -->

<a class="btn btn-mini btn btn-primary " href="<?php echo site_url('hasil_seleksi_syarat/profilematching1')?>" data-toggle="modal"><i class="glyphicon glyphicon-play-circle"></i>Process Profile Matching</a>


<!-- ============ MODAL INPUT NILAI =============== -->
<?php
if(isset($data_hasil_seleksi_syarat)){
    foreach($data_hasil_seleksi_syarat as $row){
        ?>
       
    <div class="modal fade" id="modalEdit<?php echo $row->id_seleksi_syarat?>" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Input Nilai Pegawai</h3>
            </div>
            <div class="modal-body form">
                <form method="post" action="<?php echo site_url('hasil_seleksi_syarat/insert')?>" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <input name="id_jabatankosong" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_jabatankosong ?>" readonly>
                        <input name="id_pegawai" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_pegawai ?>" readonly>
                         <input name="id_faktor1" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="1" readonly>
                                
                            <h4 class="modal-title">Profil Jabatan : Rekam Jejak</h4>
                             <br>

                            <div class="form-group">
                            <label class="control-label col-md-3">Diklat PIM</label>
                            <div class="col-md-9">
                                <input name="nilai1" placeholder="Diklat PIM" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <input name="id_jabatankosong" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_jabatankosong ?>" readonly>
                        <input name="id_pegawai" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_pegawai ?>" readonly>
                         <input name="id_faktor2" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="2" readonly>
                         <div class="form-group">
                            <label class="control-label col-md-3">Lama bekerja</label>
                            <div class="col-md-9">
                                <input name="nilai2" placeholder="Lama Bekerja" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

    
                        <input name="id_jabatankosong" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_jabatankosong ?>" readonly>
                        <input name="id_pegawai" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_pegawai ?>" readonly>
                         <input name="id_faktor3" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="3" readonly>
                        <div class="form-group">
                            <label class="control-label col-md-3">Pengalaman Jabatan</label>
                            <div class="col-md-9">
                                <input name="nilai3" placeholder="Pengalaman Jabatan" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <input name="id_jabatankosong" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_jabatankosong ?>" readonly>
                        <input name="id_pegawai" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_pegawai ?>" readonly>
                         <input name="id_faktor4" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="4" readonly>
                        <div class="form-group">
                            <label class="control-label col-md-3">Usia</label>
                            <div class="col-md-9">
                                <input name="nilai4" placeholder="Usia" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <input name="id_jabatankosong" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_jabatankosong ?>" readonly>
                        <input name="id_pegawai" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_pegawai ?>" readonly>
                         <input name="id_faktor5" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="5" readonly>
                           <div class="form-group">
                            <label class="control-label col-md-3">Diklat Teknis</label>
                            <div class="col-md-9">
                                <input name="nilai5" placeholder="Diklat Teknis" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>


                        <h4 class="modal-title">Profil Jabatan : Performance</h4>
                             <br>

                        <input name="id_jabatankosong" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_jabatankosong ?>" readonly>
                        <input name="id_pegawai" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_pegawai ?>" readonly>
                         <input name="id_faktor6" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="6" readonly>
                            <div class="form-group">
                            <label class="control-label col-md-3">Komitmen</label>
                            <div class="col-md-9">
                                <input name="nilai6" placeholder="Komitmen" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        
                        <input name="id_jabatankosong" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_jabatankosong ?>" readonly>
                        <input name="id_pegawai" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_pegawai ?>" readonly>
                         <input name="id_faktor7" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="7" readonly>
                        <div class="form-group">
                            <label class="control-label col-md-3">Disiplin</label>
                            <div class="col-md-9">
                                <input name="nilai7" placeholder="Disiplin" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <input name="id_jabatankosong" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_jabatankosong ?>" readonly>
                        <input name="id_pegawai" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_pegawai ?>" readonly>
                         <input name="id_faktor8" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="8" readonly>
                        <div class="form-group">
                            <label class="control-label col-md-3">Kerja Sama</label>
                            <div class="col-md-9">
                                <input name="nilai8" placeholder="Kerja Sama" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <input name="id_jabatankosong" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_jabatankosong ?>" readonly>
                        <input name="id_pegawai" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_pegawai ?>" readonly>
                         <input name="id_faktor9" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="9" readonly>
                         <div class="form-group">
                            <label class="control-label col-md-3">Kepemimpinan</label>
                            <div class="col-md-9">
                                <input name="nilai9" placeholder="Kepemimpinan" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <input name="id_jabatankosong" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_jabatankosong ?>" readonly>
                        <input name="id_pegawai" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_pegawai ?>" readonly>
                         <input name="id_faktor10" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="10" readonly>
                         <div class="form-group">
                            <label class="control-label col-md-3">Orientasi Pelayanan</label>
                            <div class="col-md-9">
                                <input name="nilai10" placeholder="Orientasi Pelayanan" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <input name="id_jabatankosong" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_jabatankosong ?>" readonly>
                        <input name="id_pegawai" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_pegawai ?>" readonly>
                         <input name="id_faktor11" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="11" readonly>
                         <div class="form-group">
                            <label class="control-label col-md-3">Integritas</label>
                            <div class="col-md-9">
                                <input name="nilai11" placeholder="Integritas" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <input name="id_jabatankosong" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_jabatankosong ?>" readonly>
                        <input name="id_pegawai" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_pegawai ?>" readonly>
                         <input name="id_faktor12" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="12" readonly>
                         <div class="form-group">
                            <label class="control-label col-md-3">Kualitas Kerja</label>
                            <div class="col-md-9">
                                <input name="nilai12" placeholder="Kualitas Kerja" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <h4 class="modal-title">Profil Jabatan : Kompetensi Manajerial</h4>
                             <br>

                        <input name="id_jabatankosong" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_jabatankosong ?>" readonly>
                        <input name="id_pegawai" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_pegawai ?>" readonly>
                         <input name="id_faktor13" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="13" readonly>
                            <div class="form-group">
                            <label class="control-label col-md-3">Inovasi</label>
                            <div class="col-md-9">
                                <input name="nilai13" placeholder="Inovasi" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <input name="id_jabatankosong" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_jabatankosong ?>" readonly>
                        <input name="id_pegawai" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_pegawai ?>" readonly>
                         <input name="id_faktor14" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="14" readonly>
                        <div class="form-group">
                            <label class="control-label col-md-3">Fleksibilitas Berfikir</label>
                            <div class="col-md-9">
                                <input name="nilai14" placeholder="Fleksibilitas Berfikir" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>


                        <input name="id_jabatankosong" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_jabatankosong ?>" readonly>
                        <input name="id_pegawai" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_pegawai ?>" readonly>
                         <input name="id_faktor15" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="15" readonly>
                        <div class="form-group">
                            <label class="control-label col-md-3">Perencanaan</label>
                            <div class="col-md-9">
                                <input name="nilai15" placeholder="Perencanaan" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <input name="id_jabatankosong" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_jabatankosong ?>" readonly>
                        <input name="id_pegawai" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_pegawai ?>" readonly>
                         <input name="id_faktor16" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="16" readonly>
                        <div class="form-group">
                            <label class="control-label col-md-3">Pengorganisasian</label>
                            <div class="col-md-9">
                                <input name="nilai16" placeholder="Pengorganisasian" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <input name="id_jabatankosong" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_jabatankosong ?>" readonly>
                        <input name="id_pegawai" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="<?php echo $row->id_pegawai ?>" readonly>
                         <input name="id_faktor17" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="17" readonly>
                           <div class="form-group">
                            <label class="control-label col-md-3">Komunikasi</label>
                            <div class="col-md-9">
                                <input name="nilai17" placeholder="Komunikasi" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
                </form>
            </div>
           
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
    <?php }
}
?>

<!-- ============ MODAL NEW RULE  =============== -->

       
    <div class="modal fade" id="modalEdit" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Input Rule Profil Jabatan</h3>
            </div>
            <div class="modal-body form">
                <form method="post" action="<?php echo site_url('profil_jabatan/insert')?>" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <input name="id_faktor1" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="1" readonly>
                        <input name="id_aspek1" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="1" readonly>
                         <input name="faktor1" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="Diklat Penjenjangan" readonly>
                                
                            <h4 class="modal-title">Profil Jabatan : Rekam Jejak</h4>
                             <br>

                            <div class="form-group">
                            <label class="control-label col-md-3">Diklat PIM</label>
                            <div class="col-md-9">
                                <input name="nilai1" placeholder="Diklat PIM" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <input name="kelompok1" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="core" readonly>

                        <input name="id_faktor2" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="2" readonly>
                        <input name="id_aspek2" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="1" readonly>
                         <input name="faktor2" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="Lama Bekerja" readonly>
                         <div class="form-group">
                            <label class="control-label col-md-3">Lama bekerja</label>
                            <div class="col-md-9">
                                <input name="nilai2" placeholder="Lama Bekerja" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <input name="kelompok2" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="secondary" readonly>

    
                        <input name="id_faktor3" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="3" readonly>
                        <input name="id_aspek3" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="1" readonly>
                         <input name="faktor3" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="Pengalaman Jabatan" readonly>
                        <div class="form-group">
                            <label class="control-label col-md-3">Pengalaman Jabatan</label>
                            <div class="col-md-9">
                                <input name="nilai3" placeholder="Pengalaman Jabatan" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <input name="kelompok3" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="core" readonly>

                        <input name="id_faktor4" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="4" readonly>
                        <input name="id_aspek4" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="1" readonly>
                         <input name="faktor4" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="Usia" readonly>
                        <div class="form-group">
                            <label class="control-label col-md-3">Usia</label>
                            <div class="col-md-9">
                                <input name="nilai4" placeholder="Usia" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <input name="kelompok4" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="secondary" readonly>

                        <input name="id_faktor5" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="5" readonly>
                        <input name="id_aspek5" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="1" readonly>
                         <input name="faktor5" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="Diklat Teknis" readonly>
                           <div class="form-group">
                            <label class="control-label col-md-3">Diklat Teknis</label>
                            <div class="col-md-9">
                                <input name="nilai5" placeholder="Diklat Teknis" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <input name="kelompok5" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="core" readonly>


                        <h4 class="modal-title">Profil Jabatan : Performance</h4>
                             <br>

                        <input name="id_faktor6" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="6" readonly>
                        <input name="id_aspek6" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="2" readonly>
                         <input name="faktor6" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="Komitmen Terhadap Organisasi" readonly>
                            <div class="form-group">
                            <label class="control-label col-md-3">Komitmen</label>
                            <div class="col-md-9">
                                <input name="nilai6" placeholder="Komitmen" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <input name="kelompok6" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="core" readonly>
                        
                         <input name="id_faktor7" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="7" readonly>
                        <input name="id_aspek7" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="2" readonly>
                         <input name="faktor7" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="Disiplin" readonly>
                        <div class="form-group">
                            <label class="control-label col-md-3">Disiplin</label>
                            <div class="col-md-9">
                                <input name="nilai7" placeholder="Disiplin" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>
                          <input name="kelompok7" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="core" readonly>

                         <input name="id_faktor8" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="8" readonly>
                        <input name="id_aspek8" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="2" readonly>
                         <input name="faktor8" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="Kerja Sama" readonly>
                        <div class="form-group">
                            <label class="control-label col-md-3">Kerja Sama</label>
                            <div class="col-md-9">
                                <input name="nilai8" placeholder="Kerja Sama" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <input name="kelompok8" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="secondary" readonly>

                        <input name="id_faktor9" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="9" readonly>
                        <input name="id_aspek9" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="2" readonly>
                         <input name="faktor9" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="Kepemimpinan" readonly>
                         <div class="form-group">
                            <label class="control-label col-md-3">Kepemimpinan</label>
                            <div class="col-md-9">
                                <input name="nilai9" placeholder="Kepemimpinan" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <input name="kelompok9" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="core" readonly>

                        <input name="id_faktor10" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="10" readonly>
                        <input name="id_aspek10" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="2" readonly>
                         <input name="faktor10" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="Orientasi Pelayanan" readonly>
                         <div class="form-group">
                            <label class="control-label col-md-3">Orientasi Pelayanan</label>
                            <div class="col-md-9">
                                <input name="nilai10" placeholder="Orientasi Pelayanan" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <input name="kelompok10" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="secondary" readonly>

                        <input name="id_faktor11" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="11" readonly>
                        <input name="id_aspek11" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="2" readonly>
                         <input name="faktor11" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="Integritas" readonly>
                         <div class="form-group">
                            <label class="control-label col-md-3">Integritas</label>
                            <div class="col-md-9">
                                <input name="nilai11" placeholder="Integritas" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <input name="kelompok11" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="secondary" readonly>

                       <input name="id_faktor12" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="12" readonly>
                        <input name="id_aspek12" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="2" readonly>
                         <input name="faktor12" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="Kualitas Kerja" readonly>
                         <div class="form-group">
                            <label class="control-label col-md-3">Kualitas Kerja</label>
                            <div class="col-md-9">
                                <input name="nilai12" placeholder="Kualitas Kerja" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <input name="kelompok12" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="core" readonly>

                        <h4 class="modal-title">Profil Jabatan : Kompetensi Manajerial</h4>
                             <br>

                       <input name="id_faktor13" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="13" readonly>
                        <input name="id_aspek13" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="3" readonly>
                         <input name="faktor13" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="Inovasi" readonly>
                            <div class="form-group">
                            <label class="control-label col-md-3">Inovasi</label>
                            <div class="col-md-9">
                                <input name="nilai13" placeholder="Inovasi" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <input name="kelompok13" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="core" readonly>

                         <input name="id_faktor14" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="14" readonly>
                        <input name="id_aspek14" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="3" readonly>
                         <input name="faktor14" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="Fleksibilitas Berfikir" readonly>
                        <div class="form-group">
                            <label class="control-label col-md-3">Fleksibilitas Berfikir</label>
                            <div class="col-md-9">
                                <input name="nilai14" placeholder="Fleksibilitas Berfikir" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <input name="kelompok14" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="secondary" readonly>


                       <input name="id_faktor15" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="15" readonly>
                        <input name="id_aspek15" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="3" readonly>
                         <input name="faktor15" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="Perencanaan" readonly>
                        <div class="form-group">
                            <label class="control-label col-md-3">Perencanaan</label>
                            <div class="col-md-9">
                                <input name="nilai15" placeholder="Perencanaan" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <input name="kelompok15" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="core" readonly>

                        <input name="id_faktor16" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="16" readonly>
                        <input name="id_aspek16" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="3" readonly>
                         <input name="faktor16" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="Pengorganisasian" readonly>
                        <div class="form-group">
                            <label class="control-label col-md-3">Pengorganisasian</label>
                            <div class="col-md-9">
                                <input name="nilai16" placeholder="Pengorganisasian" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <input name="kelompok16" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="core" readonly>


                         <input name="id_faktor17" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="17" readonly>
                        <input name="id_aspek17" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="3" readonly>
                         <input name="faktor17" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="Komunikasi" readonly>
                           <div class="form-group">
                            <label class="control-label col-md-3">Komunikasi</label>
                            <div class="col-md-9">
                                <input name="nilai17" placeholder="Komunikasi" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <input name="kelompok17" placeholder="ID Jabatan Kosong" class="form-control" type="hidden" value="secondary" readonly>

                        
                    </div>
                    <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
                </form>
            </div>
           
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
   



