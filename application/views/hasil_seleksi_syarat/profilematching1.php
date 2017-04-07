<div class="box">
     
                <div class="box-header">
                    <h3 class="box-title">Profile Matching step 1</h3><br>
                  
          
                
        </div><!-- /.box-header -->
                <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr class="info">
        <th>No</th>
        <th>Nama</th>
        <th>Aspek</th>
        <th>Faktor</th>
        <th>Skala</th>
        <th>Target</th>
        <th>Nilai</th>
        <th>Hasil</th>
        <th>Bobot</th>
        <th>Kelompok</th>

    </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    if(isset($pm1)){
        foreach($pm1 as $row){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->aspek?></td>
                <td><?php echo $row->faktor ?></td>
                <td><?php echo $row->skala?></td>
                <td><?php echo $row->target?></td>
                    <td><?php echo $row->nilai?></td>
                    <td><?php echo $row->hasil?></td>
                    <td><?php echo $row->bobot?></td>
                    <td><?php echo $row->kelompok?></td>                
            </tr>
        <?php 
        }
    }
    ?>
    </tbody>
</table>

    <a class="btn btn-mini btn btn-primary " href="<?php echo site_url('hasil_seleksi_syarat/profilematching2')?>" data-toggle="modal"><i class="glyphicon glyphicon-step-forward"></i>Next Profile Matching Step</a>

    </div><!-- /.box-body -->
</div><!-- /.box -->


