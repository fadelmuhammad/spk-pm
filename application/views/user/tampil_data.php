<div class="box">
     
                <div class="box-header">
                    <h3 class="box-title">Data User</h3><br>
                  
                </div><!-- /.box-header -->
                <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr class="info">
        <th>No</th>
        <th>Kode User</th>
        <th>Nama User</th>
        <th>Username</th>
        <th>Level</th>
        <th>Last Login</th>
        <th class="span2">
            <button type="button" class="btn btn-success glyphicon glyphicon-plus" data-toggle="modal" data-target="#modalAddUser"> Tambah User</button>
        </th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    if(isset($data_user)){
        foreach($data_user as $row){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->id_user; ?></td>
                <td><?php echo $row->nama_user; ?></td>
                <td><?php echo $row->username; ?></td>
                <td><?php echo $row->level; ?></td>
                 <td><?php echo $row->last_login; ?></td>
                <td>
                   <a class="btn btn-mini btn btn-primary" href="#modalEditUser<?php echo $row->id_user?>" data-toggle="modal"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                <a class="btn btn-mini btn btn-danger" href="<?php echo site_url('user/delete/'.$row->id_user);?>"
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

<div class="modal fade" id="modalAddUser" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Tambah User</h3>
            </div>
            <div class="modal-body form">
                <form method="post" action="<?php echo site_url('user/insert')?>" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">ID User</label>
                            <div class="col-md-9">
                                <input name="id_user" placeholder="ID User" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama User</label>
                            <div class="col-md-9">
                                <input name="nama_user" placeholder="Nama User" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Username</label>
                            <div class="col-md-9">
                                <input name="username" placeholder="Username" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Password</label>
                            <div class="col-md-9">
                                <input name="password" placeholder="Password" class="form-control" type="password">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Level</label>
                            <div class="col-md-9">
                                <select name="level" class="form-control">
                                    <option value="">--Select Level--</option>
                                    <option value="mutasi">Mutasi</option>
                                    <option value="penilai">Penilai</option>
                                     <option value="pegawai">Pegawai</option>
                                    <option value="kaban">Kaban</option>
                                </select>
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
if(isset($data_user)){
    foreach($data_user as $row){
        ?>
       
    <div class="modal fade" id="modalEditUser<?php echo $row->id_user?>" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Tambah User</h3>
            </div>
            <div class="modal-body form">
                <form method="post" action="<?php echo site_url('user/edit')?>" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Id User</label>
                            <div class="col-md-9">
                                <input name="id_user" placeholder="Id User" class="form-control" type="text" value="<?php echo $row->id_user; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama User</label>
                            <div class="col-md-9">
                                <input name="nama_user" placeholder="Nama User" class="form-control" type="text" value="<?php echo $row->nama_user; ?>">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Username</label>
                            <div class="col-md-9">
                                <input name="username" placeholder="Username" class="form-control" type="text" value="<?php echo $row->username; ?>">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Password</label>
                            <div class="col-md-9">
                                <input name="password" placeholder="Password" class="form-control" type="password" value="<?php echo $row->username; ?>">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Level</label>
                            <div class="col-md-9">
                                <select name="level" class="form-control" value="<?php echo $row->level; ?>">
                                    <option value="">--Select Level--</option>
                                    <option value="mutasi">Mutasi</option>
                                    <option value="penilai">Penilai</option>
                                     <option value="pegawai">Pegawai</option>
                                    <option value="kaban">Kaban</option>
                                </select>
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