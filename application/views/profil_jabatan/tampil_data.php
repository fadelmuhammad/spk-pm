<div class="box">
     
                <div class="box-header">
                    <h3 class="box-title">Profil Jabatan</h3><br>
                  
                </div><!-- /.box-header -->
                <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr class="info">
        <th>No</th>
        <th>ID Faktor</th>
        <th>ID Aspek</th>
        <th>Faktor</th>
        <th>Nilai</th>
        <th>Kelompok</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    if(isset($data_profil_jabatan)){
        foreach($data_profil_jabatan as $row){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->id_faktor; ?></td>
                <td><?php echo $row->aspek; ?></td>
                <td><?php echo $row->faktor; ?></td>
                <td><?php echo $row->nilai; ?></td>
                <td><?php echo $row->kelompok?></td>

                <td>
                   <a class="btn btn-mini btn btn-primary " href="#modalEditFaktor<?php echo $row->id_faktor?>" data-toggle="modal"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                </td>
            </tr>

        <?php }
    }
    ?>

    </tbody>
</table>
    </div><!-- /.box-body -->
</div><!-- /.box -->


<!-- ============ MODAL EDIT FAKTOR =============== -->
<?php
if(isset($data_profil_jabatan)){
    foreach($data_profil_jabatan as $row){
        ?>
       
    <div class="modal fade" id="modalEditFaktor<?php echo $row->id_faktor?>" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Setting Profil Jabatan</h3>
            </div>
            <div class="modal-body form">
                <form method="post" action="<?php echo site_url('profil_jabatan/edit')?>" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                       
                                <input name="id_faktor" placeholder="ID Jabatan" class="form-control" type="hidden" value="<?php echo $row->id_faktor; ?>" readonly>
                                
                        

                        <div class="form-group">
                            <label class="control-label col-md-3">Nilai</label>
                            <div class="col-md-9">
                                <input name="nilai" placeholder="Keterangan" class="form-control" type="text" value="<?php echo $row->nilai; ?>">
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