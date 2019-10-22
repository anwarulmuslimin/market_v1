<table class="table table-hover tablesorter" width="100%">
    <thead>
        <tr><b>
            <th width="5%">No</th>
            <th width="20%">Barcode</th>
            <th width="30%">Nama Barang</th>
            <th width="15%">Harga</th>	
            <th width="10%">Qty</th>
            <th width="20%">Sub Total</th>
        </b>
        </tr>
    </thead>
    <tbody>
       <?php $urut = 1;
            foreach($dataTransaksi as $data){?>
        <tr>
            <td><?php echo $urut++;?></td>
            <td><?php echo $data->transasi_temp_barcode;?></td>
            <td><?php echo $data->getNamaBarang($data->transasi_temp_barcode);?></td>
            <td style="text-align:right"><?php echo $this->uang($data->transaksi_temp_harga_satuan);?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $data->transaksi_temp_jumlah;?></td>
            <td><?php echo $this->uang($data->transaksi_temp_harga_total);?></td>
            <td></td>
        </tr>
            
        <?php } ?>
           
    </tbody>
</table>