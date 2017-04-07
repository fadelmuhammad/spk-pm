<div class="box">
     
                <div class="box-header">
                    <h3 class="box-title">Data User</h3><br>
                  
                </div><!-- /.box-header -->
                <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr class="info">
        <th>No</th>
        <th>ID Tingkat Jabatan</th>
        <th>Nama Tingkat Jabatan</th>
        <th>Eselon</th>
        <th class="span2">
            <button type="button" class="btn btn-success glyphicon glyphicon-plus col-md-5" data-toggle="modal" data-target="#modalAddTingkatJabatan">Add Tingkat Jabatan</button>
        </th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    if(isset($data_tingkat_jabatan)){
        foreach($data_tingkat_jabatan as $row){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->id_tingkatjbt; ?></td>
                <td><?php echo $row->nama_tingkatjbt; ?></td>
                <td><?php echo $row->eselon; ?></td>
                <td>
                   <a class="btn btn-mini btn btn-primary " href="#modalEditTingkatJabatan<?php echo $row->id_tingkatjbt?>" data-toggle="modal"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                <a class="btn btn-mini btn btn-danger " href="<?php echo site_url('tingkat_jabatan/delete/'.$row->id_tingkatjbt);?>"
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

<div class="modal fade" id="modalAddTingkatJabatan" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Tambah Tingkat Jabatan</h3>
            </div>
            <div class="modal-body form">
                <form method="post" action="<?php echo site_url('tingkat_jabatan/insert')?>" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">ID Tingkat Jabatan</label>
                            <div class="col-md-9">
                                <input name="id_tingkatjbt" placeholder="ID Tingkat Jabatan" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Tingkat Jabatan</label>
                            <div class="col-md-9">
                                <input name="nama_tingkatjbt" placeholder="Nama Tingkat Jabatan" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Eselon</label>
                            <div class="col-md-9">
                                <input name="eselon" placeholder="eselon" class="form-control" type="text">
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

<!-- ============ MODAL EDIT USER =============== -->
<?php
if(isset($data_tingkat_jabatan)){
    foreach($data_tingkat_jabatan as $row){
        ?>
       
    <div class="modal fade" id="modalEditTingkatJabatan<?php echo $row->id_tingkatjbt?>" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Edit Tingkat Jabatan</h3>
            </div>
            <div class="modal-body form">
                <form method="post" action="<?php echo site_url('tingkat_jabatan/edit')?>" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">ID Tingkat Jabatan</label>
                            <div class="col-md-9">
                                <input name="id_tingkatjbt" placeholder="ID Tingkat Jabatan" class="form-control" type="text" value="<?php echo $row->id_tingkatjbt; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Tingkat Jabatan</label>
                            <div class="col-md-9">
                                <input name="nama_tingkatjbt" placeholder="Nama Tingkat Jabatan" class="form-control" type="text" value="<?php echo $row->nama_tingkatjbt; ?>" >
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Eselon</label>
                            <div class="col-md-9">
                                <input name="eselon" placeholder="eselon" class="form-control" type="text" value="<?php echo $row->eselon; ?>">
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