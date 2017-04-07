<div class="box">
     
                <div class="box-header">
                    <h3 class="box-title">Data Peserta Seleksi Syarat</h3><br>
                  
          
                
        </div><!-- /.box-header -->
                <div class="box-body">
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
    </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    if(isset($pegawai_lulus)){
        foreach($pegawai_lulus->result() as $row){
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

            </tr>
        <?php 
        }
    }
    ?>
    </tbody>
</table>
    </div><!-- /.box-body -->
</div><!-- /.box -->


<!-- ============ MODAL EDIT JABATAN KOSONG =============== -->
<?php
if(isset($pegawai)){
    foreach($pegawai as $row){
        ?>
       
    <div class="modal fade" id="modalEdit<?php echo $row->id_seleksi_syarat?>" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Edit Jabatan Kosong</h3>
            </div>
            <div class="modal-body form">
                <form method="post" action="<?php echo site_url('jabatan_kosong/edit')?>" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">ID Jabatan Kosong</label>
                            <div class="col-md-9">
                                <input name="id_jabatankosong" placeholder="ID Jabatan Kosong" class="form-control" type="text" value="" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Periode</label>
                            <div class="col-md-9">
                                <input name="periode" placeholder="Periode" class="form-control" type="date" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Jabatan</label>
                            <div class="col-md-9">
                                <select name="jabatan" class="form-control">
                                    <option value="">--Pilih Jabatan--</option>
                                    <?php
                                    if(isset($data_jabatan)){
                                        foreach ($data_jabatan as $row) {
                                            ?>
                                            <option value="<?php echo $row->id_jabatan?>"><?php echo $row->jabatan?></option>
                                        <?php
                                        }
                                    }
                                ?>
                                </select>
                            </div>
                        </div>
                         <div class="form-group">
                              <label class="control-label col-md-3">Tingkat Jabatan</label>

                              <div class="col-md-9">
                                <select name="nama_tingkatjbt" class="form-control">
                                <option value="">-- Pilih Tingkat Jabatan --</option>
                                <?php
                            if(isset($data_tingkat_jabatan)){
                                foreach($data_tingkat_jabatan as $row){
                                    ?>
                                    <option value="<?php echo $row->id_tingkatjbt?>"><?php echo $row->nama_tingkatjbt?></option>
                                <?php
                                }
                            }
                            ?>
                              </select>
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="control-label col-md-3">Unit Kerja</label>

                              <div class="col-md-9">
                                <select name="nama_unitkerja" class="form-control">
                                <option value="">-- Pilih Unit Kerja --</option>
                                <?php
                            if(isset($data_unitkerja)){
                                foreach($data_unitkerja as $row){
                                    ?>
                                    <option value="<?php echo $row->id_unitkerja?>"><?php echo $row->nama_unitkerja?></option>
                                <?php
                                }
                            }
                            ?>
                              </select>
                              </div>
                        </div>
                    

                             <h4 class="modal-title">Profil Syarat Jabatan</h4>
                             <br>
                        
                          <div class="form-group">
                              <label class="control-label col-md-3">Pangkat</label>

                              <div class="col-md-9">
                                <select name="nilai_pangkat" class="form-control">
                                <option value="">-- Pilih Pangkat --</option>
                                <?php
                            if(isset($data_pangkat)){
                                foreach($data_pangkat as $row){
                                    ?>
                                    <option value="<?php echo $row->nilai_pangkat?>"><?php echo $row->pangkat?></option>
                                <?php
                                }
                            }
                            ?>
                              </select>
                              </div>
                        </div>

                        <div class="form-group">
                              <label class="control-label col-md-3">Pendidikan</label>

                              <div class="col-md-9">
                                <select name="nilai_pendidikan" class="form-control">
                                <option value="">-- Pilih Pendidikan --</option>
                                <?php
                            if(isset($data_pendidikan)){
                                foreach($data_pendidikan as $row){
                                    ?>
                                    <option value="<?php echo $row->nilai_pendidikan?>"><?php echo $row->pendidikan?></option>
                                <?php
                                }
                            }
                            ?>
                              </select>
                              </div>
                        </div>

                         <h4 class="modal-title">Profil Jabatan : Rekam Jejak</h4>
                             <br>

                            <div class="form-group">
                            <label class="control-label col-md-3">Diklat PIM</label>
                            <div class="col-md-9">
                                <input name="rj01" placeholder="Diklat PIM" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Lama bekerja</label>
                            <div class="col-md-9">
                                <input name="rj02" placeholder="Lama Bekerja" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3">Pengalaman Jabatan</label>
                            <div class="col-md-9">
                                <input name="rj03" placeholder="Pengalaman Jabatan" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3">Usia</label>
                            <div class="col-md-9">
                                <input name="rj04" placeholder="Usia" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                           <div class="form-group">
                            <label class="control-label col-md-3">Diklat Teknis</label>
                            <div class="col-md-9">
                                <input name="rj05" placeholder="Diklat Teknis" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>


                        <h4 class="modal-title">Profil Jabatan : Performance</h4>
                             <br>

                            <div class="form-group">
                            <label class="control-label col-md-3">Komitmen</label>
                            <div class="col-md-9">
                                <input name="pr01" placeholder="Komitmen" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Disiplin</label>
                            <div class="col-md-9">
                                <input name="pr02" placeholder="Disiplin" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3">Kerja Sama</label>
                            <div class="col-md-9">
                                <input name="pr03" placeholder="Kerja Sama" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="control-label col-md-3">Kepemimpinan</label>
                            <div class="col-md-9">
                                <input name="pr04" placeholder="Kepemimpinan" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="control-label col-md-3">Orientasi Pelayanan</label>
                            <div class="col-md-9">
                                <input name="pr05" placeholder="Orientasi Pelayanan" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="control-label col-md-3">Integritas</label>
                            <div class="col-md-9">
                                <input name="pr06" placeholder="Integritas" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="control-label col-md-3">Kualitas Kerja</label>
                            <div class="col-md-9">
                                <input name="pr07" placeholder="Kualitas Kerja" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <h4 class="modal-title">Profil Jabatan : Kompetensi Manajerial</h4>
                             <br>

                            <div class="form-group">
                            <label class="control-label col-md-3">Inovasi</label>
                            <div class="col-md-9">
                                <input name="km01" placeholder="Inovasi" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Fleksibilitas Berfikir</label>
                            <div class="col-md-9">
                                <input name="km02" placeholder="Fleksibilitas Berfikir" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3">Perencanaan</label>
                            <div class="col-md-9">
                                <input name="km03" placeholder="Perencanaan" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3">Pengorganisasian</label>
                            <div class="col-md-9">
                                <input name="km04" placeholder="Pengorganisasian" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                           <div class="form-group">
                            <label class="control-label col-md-3">Komunikasi</label>
                            <div class="col-md-9">
                                <input name="km05" placeholder="Komunikasi" class="form-control" type="text" value="">
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

