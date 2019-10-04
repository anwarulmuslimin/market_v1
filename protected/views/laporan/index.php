
<section class="nav-page">
    <div class="container">
        <div class="row">
            <div class="span7">
                <header class="page-header">
                    <h3>Transaksi<br/>
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
        <div class="span16">
            <div class="btn-group">
                <div class="span3">
                    <input type="text" name="search" id="search" class="form-control">
                </div>
                <a onclick="tampil_data();" class=" btn btn-primary"><i class="icon icon-search"></i> Cari</a>
            </div><br/>

            <div id="Person-1" class="box">
                <div class="box-header">
                    <i class="icon-list icon-medium"></i>
                    <h5>Daftar Pelanggan</h5>
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
    //tampil_data();
    function tampil_data(){
        var search      = $("#search").val();
         $.ajax({
            type        : "POST",
            url         : "<?php echo Yii::app()->createUrl('pelanggan/tampil');?>",
            data        : "search="+search,
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
                url         : "<?php echo Yii::app()->createUrl('pelanggan/remove');?>",
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
            url         : "<?php echo Yii::app()->createUrl('pelanggan/edit');?>",
            data        : "id="+id,
            cache       : false,
            success     :function(html){
                $("#body_data").html(html);
            }
        });
    }
    function simpan(){
        var dataString    = " id="+$("#id").val()+
                        "&nama="+$("#nama").val();
        
        $.ajax({
            type        : "POST",
            url         : "<?php echo Yii::app()->createUrl('pelanggan/updatedata');?>",
            data        : dataString,
            cache       : false,
            success     : function(html){
                tampil_data();
            },
            error : function(html){
                alert('update gagal');
            }
        });
    }
</script>