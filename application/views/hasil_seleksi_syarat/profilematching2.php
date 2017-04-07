<div class="box">
     
                <div class="box-header">
                    <h3 class="box-title">Profile Matching step 2</h3><br>
                  
          
                
        </div><!-- /.box-header -->
                <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr class="info">
        <th>No</th>
        <th>Nama</th>
        <th>Aspek</th>
        <th>Core</th>
        <th>Secondary</th>
     

    </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    if(isset($pm2)){
        foreach($pm2 as $row){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->aspek?></td>
                <td><?php echo $row->core ?></td>
                <td><?php echo $row->secondary ?></td>
                                
            </tr>
        <?php 
        }
    }
    ?>
    </tbody>
</table>
    
    <a class="btn btn-mini btn btn-primary " href="<?php echo site_url('hasil_seleksi_syarat/profilematching1')?>" data-toggle="modal"><i class="glyphicon glyphicon-step-backward"></i>Back</a>
    <a class="btn btn-mini btn btn-primary " href="<?php echo site_url('hasil_seleksi_syarat/profilematching3')?>" data-toggle="modal"><i class="glyphicon glyphicon-step-forward"></i>Final Step Profile Matching</a>

    </div><!-- /.box-body -->
</div><!-- /.box -->


