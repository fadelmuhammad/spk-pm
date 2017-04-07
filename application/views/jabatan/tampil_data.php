<div class="box">
     
                <div class="box-header">
                    <h3 class="box-title">Data Jabatan</h3><br>
                  
                </div><!-- /.box-header -->
                <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr class="info">
        <th>No</th>
        <th>ID Jabatan</th>
        <th>Jabatan</th>
        <th>Keterangan</th>
        <th>Tingkat Jabatan</th>
        <th>Unit Kerja</th>
        <th class="span2">
            <button type="button" class="btn btn-success glyphicon glyphicon-plus" data-toggle="modal" data-target="#modalAddjabatan">Add Jabatan</button>
        </th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    if(isset($data_jabatan)){
        foreach($data_jabatan as $row){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->id_jabatan; ?></td>
                <td><?php echo $row->jabatan; ?></td>
                <td><?php echo $row->ket; ?></td>
                <td><?php echo $row->nama_tingkatjbt; ?></td>
                <td><?php echo $row->nama_unitkerja?></td>

                <td>
                   <a class="btn btn-mini btn btn-primary " href="#modalEditjabatan<?php echo $row->id_jabatan?>" data-toggle="modal"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                <a class="btn btn-mini btn btn-danger " href="<?php echo site_url('jabatan/delete/'.$row->id_jabatan);?>"
               onclick="return confirm('Anda yakin?')"> <i class="glyphicon glyphicon-trash"></i> Hapus</a>
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

<div class="modal fade" id="modalAddjabatan" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Tambah Jabatan</h3>
            </div>
            <div class="modal-body form">
                <form method="post" action="<?php echo site_url('jabatan/insert')?>" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">ID Jabatan</label>
                            <div class="col-md-9">
                                <input name="id_jabatan" placeholder="ID Jabatan" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Jabatan</label>
                            <div class="col-md-9">
                                <input name="jabatan" placeholder="Nama Jabatan" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Keterangan</label>
                            <div class="col-md-9">
                                <input name="ket" placeholder="Keterangan" class="form-control" type="text">
                                <span class="help-block"></span>
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
if(isset($data_jabatan)){
    foreach($data_jabatan as $row){
        ?>
       
    <div class="modal fade" id="modalEditjabatan<?php echo $row->id_jabatan?>" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Edit Jabatan</h3>
            </div>
            <div class="modal-body form">
                <form method="post" action="<?php echo site_url('jabatan/edit')?>" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">ID Jabatan</label>
                            <div class="col-md-9">
                                <input name="id_jabatan" placeholder="ID Jabatan" class="form-control" type="text" value="<?php echo $row->id_jabatan; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Jabatan</label>
                            <div class="col-md-9">
                                <input name="jabatan" placeholder="Nama Jabatan" class="form-control" type="text" value="<?php echo $row->jabatan; ?>">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Keterangan</label>
                            <div class="col-md-9">
                                <input name="ket" placeholder="Keterangan" class="form-control" type="text" value="<?php echo $row->ket; ?>">
                                <span class="help-block"></span>
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