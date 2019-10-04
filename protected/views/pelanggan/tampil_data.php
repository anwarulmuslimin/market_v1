<table class="table table-hover tablesorter">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nomor Kartu</th>
            <th>Tipe Kartu</th>	
            <th>Action</th>	
        </tr>
    </thead>
    <tbody>
        <?php   $no =1;
                foreach($dataPelanggan as $data){?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $data->pelanggan_nama;?></td>
            <td><?php echo $data->pelanggan_kartu_id;?></td>
            <td><?php echo $data->pelanggan_kategori;?></td>
            <td>
                <div class="btn-group">
                    <a class="btn btn-primary btn-small" onclick="edit(<?php echo $data->pelanggan_id;?>);" data-toggle="modal" data-target="#myModal" title="Edit"><i class="icon icon-white icon-pencil"></i></a>
                    <a class="btn btn-danger btn-small" onclick="hapus(<?php echo $data->pelanggan_id;?>);" title="Hapus"><i class="icon icon-white icon-remove"></i></a>
                </div>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>
