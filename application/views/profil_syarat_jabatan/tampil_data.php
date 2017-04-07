<div class="box">
     
                <div class="box-header">
                    <h3 class="box-title">Data Profil Syarat Jabatan</h3><br>
                  
                </div><!-- /.box-header -->
                
                <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr class="info">
        <th>No</th>
        <th>ID Profil Syarat Jabatan</th>
        <th>ID Jabatan Kosong</th>
        <th>Pangkat</th>
        <th>Pendidikan</th>
        <th class="span2">
            
        </th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    if(isset($data_profil_syarat_jabatan)){
        foreach($data_profil_syarat_jabatan as $row){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->id_profilsyaratjbt; ?></td>
                <td><?php echo $row->id_jabatankosong; ?></td>
                <td><?php echo $row->pangkat; ?></td>
                <td><?php echo $row->pendidikan; ?></td>

                <td>
                    <a class="btn btn-mini btn btn-success " href="#modalAddProfileSyaratJabatan" data-toggle="modal"><i class="glyphicon glyphicon-pencil"></i> Input</a>
                   <a class="btn btn-mini btn btn-primary " href="#modalEditProfilSyaratJabatan<?php echo $row->id_profilsyaratjbt?>" data-toggle="modal"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                <a class="btn btn-mini btn btn-danger " href="<?php echo site_url('profil_syarat_jabatan/delete/'.$row->id_profilsyaratjbt);?>"
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

<!-- ============ MODAL INPUT PROFILE SYARAT JABATAN =============== -->

<div class="modal fade" id="modalAddProfileSyaratJabatan" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Input Profile Syarat Jabatan</h3>
            </div>
            <div class="modal-body form">
                <form method="post" action="<?php echo site_url('profil_syarat_jabatan/insert')?>" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">ID Profile Syarat Jabatan</label>
                            <div class="col-md-9">
                                <input name="id_profilsyaratjbt" placeholder="ID Profile Sarat Jabatan" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Pangkat</label>
                            <div class="col-md-9">
                                <input name="pangkat" placeholder="pangkat" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Pendidikan</label>
                            <div class="col-md-9">
                                <input name="pendidikan" placeholder="pendidikan" class="form-control" type="text">
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


<!-- ============ MODAL EDIT PROFILE SYARAT JABATAN =============== -->
<?php
if(isset($data_profil_syarat_jabatan)){
    foreach($data_profil_syarat_jabatan as $row){
        ?>
       
    <div class="modal fade" id="modalEditProfilSyaratJabatan<?php echo $row->id_profilsyaratjbt?>" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Edit Profile Syarat Jabatan</h3>
            </div>
            <div class="modal-body form">
                <form method="post" action="<?php echo site_url('profil_syarat_jabatan/edit')?>" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">ID Profile Syarat Jabatan</label>
                            <div class="col-md-9">
                                <input name="id_profilsyaratjbt" placeholder="ID Profile Syarat Jabatan" class="form-control" type="text" value="<?php echo $row->id_profilsyaratjbt; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Pangkat</label>
                            <div class="col-md-9">
                                <input name="pangkat" placeholder="pangkat" class="form-control" type="text" value="<?php echo $row->pangkat; ?>">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3">Pendidikan</label>
                            <div class="col-md-9">
                                <input name="pendidikan" placeholder="pendidikan" class="form-control" type="text" value="<?php echo $row->pendidikan; ?>">
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
