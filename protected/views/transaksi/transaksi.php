
<section class="nav-page">
    <div class="container">
        <div class="row">
            <div class="span4">
                <header class="page-header">
                    <h3>Transaksi<br/>
                        <small>Minimarket</small>
                    </h3>
                </header>
            </div>
            <div class="span12">
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
        <div class="span10">
            <div id="search-list">
                <table>
                    <tr>
                        <td style="padding-top:8px;"><input id="kode_barang" rel="tooltip" title="Kode Barang" type="text" class="span2" placeholder="Kode Barang"></td>
                        <td style="padding-top:8px;"><input id="nama_barang" rel="tooltip" title="Nama Barang" type="text" class="span4" placeholder="Nama Barang" readonly ></td>
                        <td style="padding-top:8px;"><input id="jml_barang" rel="tooltip" title="Stock" type="text" style="text-align:center;width:50px;"  placeholder="Stock" readonly ></td>
                        <td style="padding-top:8px;"><input id="jml_beli" onkeypress="return isNumberKey(event)" rel="tooltip" title="Jumlah Beli" type="text" style="text-align:center;width:50px;" placeholder="0">
                        </td>
                        <td>
                        <div class="btn-group">
                        <button id="simpan" rel="tooltip" title="Simpan Sebagai pembelian" class="btn"><i class="icon-shopping-cart"></i> Simpan</button>
                            <a href="#MyModalcariBarang" title="Ctrl+Shift+F" role="button" class="btn" data-toggle="modal"><i class="icon-search"></i> Cari</a>
                            </div>
                        </td>
                    </tr>
                </table>                    
            </div><br/>
            <div id="status"></div>
            <div id="transasi-list">
                <div class="daftars" id="list_data"></div>
			</div>    
        </div>
        <div class="span2">
            &nbsp;
        </div>
        <div class="span4">
            <div class="blockoff-left">
            <legend style="text-align:center;font-weight:bold">Total Bayar</legend><br>
            <h1 style="color:#1f3a4d;" id="jml_belanja"></h1>
        </div>
            <a class=" btn btn-success btn-large" onclick="bayar();"><i class="icon icon-money"></i> Bayar</a><br/>&nbsp;
            <a class=" btn btn-danger btn-large" onclick="hold();"><i class="icon icon-arrow-left"></i> Tunda</a>
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
<style>
    .daftars{
        background-color:black;
        color:white;
        height:250px;
        overflow:auto;
        border-radius: 5px 5px 5px 5px;
        box-shadow: 0px 0px 4px black;
    }
    .btn-large{
        margin-left:0px;
        width:250px;
        height:32px;
        font-size:24px;
        font-weight:bold;
    }
    </style>
<script type="text/javascript">
$('#kode_barang').focus();
    tampil_data();
    $('#kode_barang').bind('keypress', function(e) {
		if(e.keyCode==13){
			cariBarang($('#kode_barang').val());
		}
	});
    $('#jml_beli').bind('keypress', function(e) {
		if(e.keyCode==13){
			simpantemp();
		}
	});	

    $('#simpan').bind('keypress', function(e) {
		if(e.keyCode==13){
			simpantemp();
		}
	});	
    function tampil_data(){
        var search      = $("#search").val();
         $.ajax({
            type        : "POST",
            url         : "<?php echo Yii::app()->createUrl('transaksi/detail');?>",
            data        : "search="+search,
            cache       : false,
            success     :function(html){
               $("#list_data").html(html);
                total_belanja();
            }
        });
    }

    function total_belanja(){
        $.ajax({
            type        : "POST",
            url         : "<?php echo Yii::app()->createUrl('transaksi/total_belanja');?>",
            cache       : false,
            success     : function(html){
                $("#jml_belanja").html(html);
            }
        });
    }

    function cariBarang(kode_barang){	
		
		$.ajax({
			type        : "POST",
			url         : "<?php echo Yii::app()->createUrl('transaksi/caribarang');?>",
			data        : "kode_barang="+kode_barang,
			cache       : false,
			success     : function(html){
				$("#status").html(html);
			},
			error:function(html){
				$("#status").html(html);
			}
		});
	}

    function simpantemp(){
	
        var jmlbarang 	= parseInt($('#jml_barang').val());
        var jmlbeli 	= parseInt($('#jml_beli').val());
        
        if(jmlbarang > 0){
            if(jmlbeli <= jmlbarang){
                if(jmlbeli > 0){
                    simpanbarang($('#kode_barang').val(),jmlbeli);
                    $('#kode_barang').val('');
                    $('#jml_barang').val('');
                    $('#nama_barang').val('');
                    $('#jml_beli').val('');
                    $('#nis').focus();
                }else{
                    alert('Masukkan Jumlah Pembelian!');
                }
            }else{
                alert('Stok Barang Tidak Mencukupi!');
            }
        }else{
            alert('Stok Barang Kosong!');
            $('#kode_barang').val('');
            $('#jml_barang').val('');
            $('#nama_barang').val('');
            $('#jml_beli').val('');
            $('#kode_barang').focus();
        }
    }

    function simpanbarang(kode_barang,jml){

        var dataString 	= "kode_barang="+kode_barang+"&jml="+jml;
     //  alert(dataString);
        $.ajax({
            type: "POST",
            url: "<?php echo Yii::app()->createUrl('transaksi/simpanpembeliantemp');?>",
            data: dataString,
            cache: false,
            success:function(html){
                alert(html);
                tampil_data();
            },
            error:function(html){
                alert(html);
                tampil_data();
            }
        });
        }
</script>