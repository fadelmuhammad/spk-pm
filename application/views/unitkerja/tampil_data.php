<div class="box">
     
                <div class="box-header">
                    <h3 class="box-title">Data Unit Kerja</h3><br>
                  
                </div><!-- /.box-header -->
                <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr class="info">
        <th>No</th>
        <th>ID Unit kerja</th>
        <th>Nama Unit Kerja</th>
        <th>Jenis Unit Kerja</th>
        <th class="span2">
            <button type="button" class="btn btn-success glyphicon glyphicon-plus" data-toggle="modal" data-target="#modalAddUnitKerja">Add Unit Kerja</button>
        </th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    if(isset($data_unitkerja)){
        foreach($data_unitkerja as $row){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->id_unitkerja; ?></td>
                <td><?php echo $row->nama_unitkerja; ?></td>
                <td><?php echo $row->jenis_unitkerja; ?></td>
                <td>
                   <a class="btn btn-mini btn btn-primary " href="#modalEditUnitKerja<?php echo $row->id_unitkerja?>" data-toggle="modal"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                <a class="btn btn-mini btn btn-danger " href="<?php echo site_url('unitkerja/delete/'.$row->id_unitkerja);?>"
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

<div class="modal fade" id="modalAddUnitKerja" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Tambah Unit Kerja</h3>
            </div>
            <div class="modal-body form">
                <form method="post" action="<?php echo site_url('unitkerja/insert')?>" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">ID Unit Kerja</label>
                            <div class="col-md-9">
                                <input name="id_unitkerja" placeholder="ID Unit Kerja" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Unit Kerja</label>
                            <div class="col-md-9">
                                <input name="nama_unitkerja" placeholder="Nama Unit Kerja" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Jenis Unit Kerja</label>
                            <div class="col-md-9">
                                <input name="jenis_unitkerja" placeholder="Jenis Unit Kerja" class="form-control" type="text">
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
if(isset($data_unitkerja)){
    foreach($data_unitkerja as $row){
        ?>
       
    <div class="modal fade" id="modalEditUnitKerja<?php echo $row->id_unitkerja?>" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Edit Unit Kerja</h3>
            </div>
            <div class="modal-body form">
                <form method="post" action="<?php echo site_url('unitkerja/edit')?>" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">ID Unit Kerja</label>
                            <div class="col-md-9">
                                <input name="id_unitkerja" placeholder="ID Unit Kerja" class="form-control" type="text" value="<?php echo $row->id_unitkerja; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Unit Kerja</label>
                            <div class="col-md-9">
                                <input name="nama_unitkerja" placeholder="Nama Unit Kerja" class="form-control" type="text" value="<?php echo $row->nama_unitkerja; ?>" >
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Jenis Unit Kerja</label>
                            <div class="col-md-9">
                                <input name="jenis_unitkerja" placeholder="Jenis Unit Kerja" class="form-control" type="text" value="<?php echo $row->jenis_unitkerja; ?>">
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