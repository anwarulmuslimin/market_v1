<table class="table table-condensed" width="100%">
    <tr>
        <td>Barcode</td>
        <td><input type="text" class="form-control" id="kode" value="<?php echo $model->barang_barcode;?>"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" class="form-control" id="nama" value="<?php echo $model->barang_nama;?>"></td>
    </tr>
    <tr>
        <td>Kategori Barang</td>
        <td>
            <?php $Kategori = Kategori::model()->findAll();?>
            <select id="kategori" id="kategori" class="form-control">
                <option>--Pilih Kategori--</option>
                <?php foreach($Kategori as $kategori){?>
                <option <?php if($kategori->kategori_id==$model->barang_kategori_id){ echo "selected";}?> value="<?php echo $kategori->kategori_id;?>">
                <?php echo $kategori->kategori_nama;?></option>
                <?php } ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>Stok</td>
        <td><input type="text" class="form-control" id="stok" value="<?php echo $harga->harga_barang_stok;?>"></td>
    </tr>
    <tr>
        <td>Harga satuan beli</td>
        <td><input type="text" class="form-control" id="beli" value="<?php echo $harga->harga_barang_beli;?>"></td>
    </tr>
    <tr>
        <td>Harga satuan jual</td>
        <td><input type="text" class="form-control" id="jual" value="<?php echo $harga->harga_barang_jual;?>"></td>
    </tr>
    <input type="hidden" class="form-control" id="id" value="<?php echo $model->barang_id;?>">
    <input type="hidden" class="form-control" id="id_harga" value="<?php echo $harga->harga_barang_id;?>">
</table>