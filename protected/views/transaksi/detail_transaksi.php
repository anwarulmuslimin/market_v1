<table class="table table-hover tablesorter">
    <thead>
        <tr>
            <th>No</th>
            <th>Barcode</th>
            <th>Nama Barang</th>
            <th>Harga</th>	
            <th>Jumlah</th>	
            <th>Aksi</th>	
        </tr>
    </thead>
    <tbody>
       <?php $urut = 1;
            foreach($dataTransaksi as $data){?>
        <tr>
            <td><?php echo $urut++;?></td>
            <td><?php echo $data->transasi_temp_barcode;?></td>
            <td><?php echo $data->transasi_temp_barcode;?></td>
            <td><?php echo $data->transaksi_temp_harga_satuan;?></td>
            <td><?php echo $data->transaksi_temp_jumlah;?></td>
            <td></td>
        </tr>
        <?php } ?>
    </tbody>
</table>