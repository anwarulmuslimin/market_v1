<table class="table table-condensed" width="100%">
    <tr>
        <td>Kode</td>
        <td><input type="text" class="form-control" name="kode" id="kode" value="<?php echo $model->minimarket_kode;?>"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" class="form-control" name="nama" id="nama" value="<?php echo $model->minimarket_nama;?>"></td>
    </tr>
    <tr>
        <td>Tingkat</td>
        <td><input type="text" class="form-control" name="tingkat" id="tingkat" value="<?php echo $model->minimarket_type;?>"></td>
    </tr>
    <input type="text" class="form-control" name="id_market" id="id_market" value="<?php echo $model->minimarket_id;?>">
</table>