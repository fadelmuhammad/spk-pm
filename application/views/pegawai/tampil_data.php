<div class="box">
     
                <div class="box-header">
                    <h3 class="box-title">Data Pegawai</h3><br>
                  
                </div><!-- /.box-header -->
                <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr class="info">
        <th>No</th>
        <th>Kode Pegawai</th>
        <th>Nama </th>
        <th>NIP</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Agama</th>
        <th>jenis_kelamin</th>
        <th>Jabatan</th>

        <th class="span2">
     
            <button type="button" class="btn btn-success glyphicon glyphicon-plus" data-toggle="modal" data-target="#modalAddPegawai"> Tambah Pegawai</button>
        
        </th>
        <th>Profil Syarat Pegawai</th>
          </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    if(isset($data_pegawai)){
        foreach($data_pegawai as $row){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->id_pegawai; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->nip; ?></td>
                <td><?php echo $row->tempat_lahir; ?></td>
                 <td><?php echo $row->tgl_lahir; ?></td>
                 <td><?php echo $row->alamat; ?></td>
                 <td><?php echo $row->agama; ?></td>
                 <td><?php echo $row->jenis_kelamin; ?></td>
                 <td><?php echo $row->jabatan; ?></td>
                <td>
                
                   <a class="btn btn-mini btn btn-primary"  href="#modalEditPegawai<?php echo $row->id_pegawai?>" data-toggle="modal"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                <a class="btn btn-mini btn btn-danger" href="<?php echo site_url('pegawai/delete/'.$row->id_pegawai);?>"
               onclick="return confirm('Anda yakin?')"> <i class="glyphicon glyphicon-trash"></i> Hapus</a>
         
                </td>
                <td>
                    
                    
                    <a class="btn btn-mini btn btn-primary " href="#modalView<?php echo $row->id_pegawai?>" data-toggle="modal">
                    <i class="glyphicon glyphicon-list-alt"></i> View</a>
                </td>
            </tr>

        <?php }
    }
    ?>

    </tbody>
</table>
    </div><!-- /.box-body -->
</div><!-- /.box -->

<!-- ============ MODAL ADD USER =============== -->

<div class="modal fade" id="modalAddPegawai" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Tambah Pegawai</h3>
            </div>
            <div class="modal-body form">
                <form method="post" action="<?php echo site_url('pegawai/insert')?>" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                         <div class="form-group">
                            <label class="control-label col-md-3">Id Pegawai</label>
                            <div class="col-md-9">
                                <input name="id_pegawai" placeholder="Id Pegawai" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama</label>
                            <div class="col-md-9">
                                <input name="nama" placeholder="Nama" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">NIP</label>
                            <div class="col-md-9">
                                <input name="nip" placeholder="NIP" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Tempat Lahir</label>
                            <div class="col-md-9">
                                <input name="tempat_lahir" placeholder="Tempat Lahir" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Tanggal Lahir</label>
                            <div class="col-md-9">
                                <input name="tgl_lahir" placeholder="Tanggal Lahir" class="form-control" type="date">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Alamat</label>
                            <div class="col-md-9">
                                <input name="alamat" placeholder="Alamat" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Agama</label>
                            <div class="col-md-9">
                                <input name="agama" placeholder="Agama" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Jenis Kelamin</label>
                            <div class="col-md-9">
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="">--Pilih Jenis Kelamin--</option>
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                              <label class="control-label col-md-3">Jabatan</label>

                              <div class="col-md-9">
                                <select name="jabatan" class="form-control">
                                <option value="">-- Pilih Jabatan --</option>
                                <?php
                            if(isset($data_jabatan)){
                                foreach($data_jabatan as $row){
                                    ?>
                                    <option value="<?php echo $row->id_jabatan?>"><?php echo $row->jabatan?></option>
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

<!-- ============ MODAL EDIT USER =============== -->
<?php
if(isset($data_pegawai)){
    foreach($data_pegawai as $row){
        ?>
       
    <div class="modal fade" id="modalEditPegawai<?php echo $row->id_pegawai?>" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Edit Pegawai</h3>
            </div>
            <div class="modal-body form">
                <form method="post" action="<?php echo site_url('pegawai/edit')?>" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Id Pegawai</label>
                            <div class="col-md-9">
                                <input name="id_pegawai" placeholder="Id Pegawai" class="form-control" type="text" value="<?php echo $row->id_pegawai; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama</label>
                            <div class="col-md-9">
                                <input name="nama" placeholder="Nama" class="form-control" type="text" value="<?php echo $row->nama; ?>">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">NIP</label>
                            <div class="col-md-9">
                                <input name="nip" placeholder="NIP" class="form-control" type="text" value="<?php echo $row->nip; ?>">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Tempat Lahir</label>
                            <div class="col-md-9">
                                <input name="tempat_lahir" placeholder="Tempat Lahir" class="form-control" type="text" value="<?php echo $row->tempat_lahir; ?>">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Tanggal Lahir</label>
                            <div class="col-md-9">
                                <input name="tgl_lahir" placeholder="Tanggal Lahir" class="form-control" type="date" value="<?php echo $row->tgl_lahir; ?>">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Alamat</label>
                            <div class="col-md-9">
                                <input name="alamat" placeholder="Alamat" class="form-control" type="text" value="<?php echo $row->alamat; ?>">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Agama</label>
                            <div class="col-md-9">
                                <input name="agama" placeholder="Agama" class="form-control" type="text" value="<?php echo $row->agama; ?>">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Jenis Kelamin</label>
                            <div class="col-md-9">
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="">--Pilih Jenis Kelamin--</option>
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                              <label class="control-label col-md-3">Jabatan</label>

                              <div class="col-md-9">
                                <select name="jabatan" class="form-control">
                                <option value="">-- Pilih Jabatan --</option>
                                <?php
                            if(isset($data_jabatan)){
                                foreach($data_jabatan as $row){
                                    ?>
                                    <option value="<?php echo $row->id_jabatan?>"><?php echo $row->jabatan?></option>
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

<!-- ============ MODAL VIEW SYARAT PEGAWAI =============== -->
<?php
if(isset($data_profil_syarat_pegawai)){
    foreach($data_profil_syarat_pegawai as $row){
        ?>
       
    <div class="modal fade" id="modalView<?php echo $row->id_pegawai?>" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Profile Syarat Pegawai </h3>
            </div>
            <div class="modal-body form">
                <form method="post" action="<?php echo site_url('pegawai/edit')?>" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                       
                         <input name="id_psp" placeholder="ID Profile Syarat Jabatan" class="form-control" type="hidden" value="<?php echo $row->id_psp; ?>" readonly>
                                
                        </div>
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
                                <input name="nilai_pangkat" placeholder="pendidikan" class="form-control" type="text" value="<?php echo $row->pendidikan; ?>" readonly>
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

