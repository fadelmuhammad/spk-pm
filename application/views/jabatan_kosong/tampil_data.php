<div class="box">
     
                <div class="box-header">
                    <h3 class="box-title">Data Jabatan Kosong</h3><br>
                  
          
                
        </div><!-- /.box-header -->
                <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr class="info">
        <th>No</th>
        <th>ID Jabatan Kosong</th>
        <th>Jabatan</th>
        <th>Tingkat Jabatan</th>
        <th>Unit Kerja</th>
        <th>Periode</th>
        <th class="span2">
            <button type="button" class="btn btn-success glyphicon glyphicon-plus" data-toggle="modal" data-target="#modalAddJabatanKosong">Add Jabatan Kosong</button>
        </th>
        <th>Profil Syarat Jabatan</th>
        <th>Seleksi syarat</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    if(isset($data_jabatan_kosong)){
        foreach($data_jabatan_kosong as $row){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->id_jabatankosong; ?></td>
                <td><?php echo $row->jabatan; ?></td>
                <td><?php echo $row->nama_tingkatjbt; ?></td>
                <td><?php echo $row->nama_unitkerja?></td>
                <td><?php echo $row->periode; ?></td>

                <td>
                    <a class="btn btn-mini btn btn-primary " href="#modalEditJabatanKosong<?php echo $row->id_jabatankosong?>" data-toggle="modal"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                    <a class="btn btn-mini btn btn-danger " href="<?php echo site_url('jabatan_kosong/delete/'.$row->id_jabatankosong);?>"
                    onclick="return confirm('Anda yakin?')"> <i class="glyphicon glyphicon-trash"></i>Delete</a>
                </td>
                <td>
                    
                    
                    <a class="btn btn-mini btn btn-primary " href="#modalView<?php echo $row->id_jabatankosong?>" data-toggle="modal">
                    <i class="glyphicon glyphicon-list-alt"></i> View</a>
                </td>
                <td>
                    <a class="btn btn-mini btn btn-success " href="<?php echo site_url('seleksi_syarat/tampil_data/'.$row->id_jabatankosong);?>" data-toggle="modal"> <i class="glyphicon glyphicon-list-alt"></i> Seleksi Syarat</a>
                </td>


            </tr>

        <?php }
    }
    ?>

    </tbody>
</table>
    </div><!-- /.box-body -->
</div><!-- /.box -->

<!-- ============ MODAL ADD JABATAN KOSONG =============== -->

<div class="modal fade" id="modalAddJabatanKosong" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Jabatan Kosong</h4>
            </div>
            <div class="modal-body form">
                <form method="post" action="<?php echo site_url('jabatan_kosong/insert')?>" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">ID Jabatan Kosong</label>
                            <div class="col-md-9">
                                <input name="id_jabatankosong" placeholder="ID Jabatan Kosong" class="form-control" type="text">
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
                         
                        <div class="form-group">
                            <label class="control-label col-md-3">Periode</label>
                            <div class="col-md-9">
                                <input name="periode" placeholder="Periode" class="form-control" type="date">
                                <span class="help-block"></span>
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


                    </div>
                    <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
                </form>
            </div>
           
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog <--></-->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

<!-- ============ MODAL EDIT JABATAN KOSONG =============== -->
<?php
if(isset($data_jabatan_kosong)){
    foreach($data_jabatan_kosong as $row){
        ?>
       
    <div class="modal fade" id="modalEditJabatanKosong<?php echo $row->id_jabatankosong?>" role="dialog">
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
                                <input name="id_jabatankosong" placeholder="ID Jabatan Kosong" class="form-control" type="text" value="<?php echo $row->id_jabatankosong; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Periode</label>
                            <div class="col-md-9">
                                <input name="periode" placeholder="Periode" class="form-control" type="date" value="<?php echo $row->periode; ?>">
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



<!-- ============ MODAL VIEW SYARAT JABATAN =============== -->
<?php
if(isset($data_profil_syarat_jabatan)){
    foreach($data_profil_syarat_jabatan as $row){
        ?>
       
    <div class="modal fade" id="modalView<?php echo $row->id_jabatankosong?>" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Profile Syarat Jabatan</h3>
            </div>
            <div class="modal-body form">
                <form method="post" action="<?php echo site_url('profil_syarat_jabatan/edit')?>" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        
                                <input name="id_profilsyaratjbt" placeholder="ID Profile Syarat Jabatan" class="form-control" type="hidden" value="<?php echo $row->id_profilsyaratjbt; ?>" readonly>
                                
                        <div class="form-group">
                            <label class="control-label col-md-3">Pangkat</label>
                            <div class="col-md-9">
                                <input name="nilai_pangkat" placeholder="pangkat" class="form-control" type="text" value="<?php echo $row->pangkat; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3">Pendidikan</label>
                            <div class="col-md-9">
                                <input name="nilai_pendidikan" placeholder="pendidikan" class="form-control" type="text" value="<?php echo $row->pendidikan; ?>" readonly>
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
