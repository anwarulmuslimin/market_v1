
<section class="nav-page">
    <div class="container">
        <div class="row">
            <div class="span7">
                <header class="page-header">
                    <h3>Master<br/>
                        <small>Minimarket</small>
                    </h3>
                </header>
            </div>
            <div class="span9">
                <!-- <ul class="nav nav-pills">
                    <li>
                        
                            <a href="#" rel="tooltip" data-placement="left" title="Create New Person">
                                <i class="icon-group icon-large"></i>
                            </a>
                        
                    </li>
                </ul> -->
            </div>
        </div>
    </div>
</section>

<section class="page container">
    <div class="row">
        <div class="span4">
            <div class="blockoff-right">
                <?php   $this->renderPartial('_form', array('model'=>$model)); ?>
            </div>
        </div>
        <div class="span12">
        
            <div id="Person-1" class="box">
                <div class="box-header">
                    <i class="icon-list icon-medium"></i>
                    <h5>Daftar Minimarket</h5>
                </div>
                <div class="box-content box-table" id="list_data">
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
				</table>
                </div>
			</div>    
        </div>
    </div>
</section>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body" id="body_data">
        
      </div>
      <div class="modal-footer">
          <a onclick="simpan();" class="btn btn-peimary" data-dismiss="modal">Simpan</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script type="text/javascript">
    tampil_data();
    function tampil_data(){
         $.ajax({
            type        : "POST",
            url         : "<?php echo Yii::app()->createUrl('barang/tampil');?>",
            cache       : false,
            success     :function(html){
               $("#list_data").html(html);
            }
        });
    }

    function hapus(id){
        if (confirm('Apakah anda akan melanjutkan menghapus?')) {
            $.ajax({
                type        : "POST",
                url         : "<?php echo Yii::app()->createUrl('barang/remove');?>",
                data        : "id="+id,
                cache       : false,
                success     :function(html){
                    tampil_data();
                }
            });
        }else{
            return false;
        }
    }

    function edit(id){
        $.ajax({
            type        : "POST",
            url         : "<?php echo Yii::app()->createUrl('barang/edit');?>",
            data        : "id="+id,
            cache       : false,
            success     :function(html){
                $("#body_data").html(html);
            }
        });
    }
    function simpan(){
        var dataString    = " id="+$("#id").val()+
                        "&id_harga="+$("#id_harga").val()+
                        "&kode="+$("#kode").val()+
                        "&nama="+$("#nama").val()+
                        "&jual="+$("#jual").val()+
                        "&beli="+$("#beli").val()+
                        "&stok="+$("#stok").val()+
                        "&kategori="+$("#kategori").val();
            
        $.ajax({
            type        : "POST",
            url         : "<?php echo Yii::app()->createUrl('barang/updatedata');?>",
            data        : dataString,
            cache       : false,
            success     : function(html){
                alert(html);
                tampil_data();
            },
            error : function(html){
                alert('Gagal update data');
            }
        });
    }
</script>