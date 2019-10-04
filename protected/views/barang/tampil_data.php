<table class="table table-hover tablesorter">
    <thead>
        <tr>
            <th>No</th>
            <th>Barcode</th>
            <th>Nama</th>
            <th>Kategori</th>	
            <th>Stok</th>	
            <th>Action</th>	
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1;
        foreach($dataBarang as $data){?>

        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $data->barang_barcode;?></td>
            <td><?php echo $data->barang_nama;?></td>
            <td><?php echo $data->kategori->kategori_nama;?></td>
            <td><?php echo $this->getStokBarang($data->barang_id)?></td>
            <td>
                <div class="btn-group">
                    <a class="btn btn-primary btn-small" onclick="edit(<?php echo $data->barang_id;?>);" data-toggle="modal" data-target="#myModal" title="Edit"><i class="icon icon-white icon-pencil"></i></a>
                    <a class="btn btn-danger btn-small" onclick="hapus(<?php echo $data->barang_id;?>);" title="Hapus"><i class="icon icon-white icon-remove"></i></a>
                </div>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>
