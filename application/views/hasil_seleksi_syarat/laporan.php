<div class="box">
     
                <div class="box-header">
                    
                  
          
                
        </div><!-- /.box-header -->
                <div class="box-body" id="div1">
                <h3 class="box-title">Laporan Hasil Penilaian Profile Matching</h3><br>
        <table class="table table-bordered table-striped">
    <thead>
    <tr class="info">
        <th>No</th>
        <th>Nama</th>
        <th>Jabatan Kosong</th>
        <th>RJ</th>
        <th>Per</th>
        <th>KM</th>
        <th>Hasil</th>
     

    </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    if(isset($laporan)){
        foreach($laporan as $row){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->jabatan; ?></td>
                <td><?php echo $row->RJ?></td>
                <td><?php echo $row->Per?></td>
                <td><?php echo $row->KM ?></td>
                 <td><?php echo $row->hasil ?></td>

                                
            </tr>
        <?php 
        }
    }
    ?>
    </tbody>
</table>

    

    </div><!-- /.box-body -->
</div><!-- /.box -->

 <button onclick="printContent('div1')" class="btn btn-primary glyphicon glyphicon-print">Print</button>


</div>
<script>
    
    function printContent(el){
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }
</script>

