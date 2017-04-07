<div class="box">
     
                <div class="box-header">
                    <h3 class="box-title">Profile Matching step 3</h3><br>
                  
          
                
        </div><!-- /.box-header -->
                <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr class="info">
        <th>No</th>
        <th>Nama</th>
        <th>RJ</th>
        <th>Per</th>
        <th>KM</th>
        <th>Hasil</th>
     

    </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    if(isset($pm3)){
        foreach($pm3 as $row){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->RJ?></td>
                <td><?php echo $row->Per?></td>
                <td><?php echo $row->KM ?></td>
                 <td><?php echo $row->Hasil ?></td>

                                
            </tr>
        <?php 
        }
    }
    ?>
    </tbody>
</table>
<a class="btn btn-mini btn btn-primary " href="<?php echo site_url('hasil_seleksi_syarat/profilematching2')?>" data-toggle="modal"><i class="glyphicon glyphicon-step-backward"></i>Back</a>
    <a class="btn btn-mini btn btn-primary " href="<?php echo site_url('hasil_seleksi_syarat/save')?>" data-toggle="modal"><i class="glyphicon glyphicon-save"></i>Save</a>

    </div><!-- /.box-body -->
</div><!-- /.box -->




