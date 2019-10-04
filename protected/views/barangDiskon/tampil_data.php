<table class="table table-hover tablesorter">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Tingkat</th>	
            <th>Action</th>	
        </tr>
    </thead>
    <tbody>
        <?php foreach($dataMarket as $data){?>
        <tr>
            <td><?php echo $data->minimarket_id;?></td>
            <td><?php echo $data->minimarket_kode;?></td>
            <td><?php echo $data->minimarket_nama;?></td>
            <td><?php echo $data->minimarket_type;?></td>
            <td>
                <div class="btn-group">
                    <a class="btn btn-primary btn-small" onclick="edit(<?php echo $data->minimarket_id;?>);" data-toggle="modal" data-target="#myModal" title="Edit"><i class="icon icon-white icon-pencil"></i></a>
                    <a class="btn btn-danger btn-small" onclick="hapus(<?php echo $data->minimarket_id;?>);" title="Hapus"><i class="icon icon-white icon-remove"></i></a>
                </div>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>
