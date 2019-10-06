<table class="table table-hover tablesorter">
    <thead>
        <tr><b>
            <th>No</th>
            <th>Barcode</th>
            <th>Nama Barang</th>
            <th>Harga</th>	
            <th>Jumlah</th>	</b>
        </tr>
    </thead>
    <tbody>
       <?php $urut = 1;
            foreach($dataTransaksi as $data){?>
        <tr>
            <td><?php echo $urut++;?></td>
            <td><?php echo $data->transasi_temp_barcode;?></td>
            <td><?php echo $data->getNamaBarang($data->transasi_temp_barcode);?></td>
            <td style="text-align:right"><?php echo $data->transaksi_temp_harga_satuan;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $data->transaksi_temp_jumlah;?></td>
            <td></td>
        </tr>
        <?php } ?>
    </tbody>
</table>