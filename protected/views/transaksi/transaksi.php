
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

<section class="page container" onkeydown="myFunction();">
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
                        <button id="simpan" rel="tooltip" title="Simpan Sebagai pembelian" class="btn btn-success"><i class="icon-shopping-cart"></i> Simpan</button>
                            <a title="Ctrl+Shift+F" role="button" class="btn" data-toggle="modal"><i class="icon-search"></i> Cari</a>
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
            <h1 style="color:#1f3a4d;" id="jml_belanja" name="jml_belanja"></h1>
        </div>
            <input type="hidden" id="urut" value="<?php echo $urut_hold;?>">
            <input type="hidden" id="total_dibayar" name="total_dibayar">
            <input type="hidden" id="petugas" value="<?php echo $petugas;?>">
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
        background-color:#143238;
        color:#78f12d;
        height:250px;
        overflow:auto;
        border-radius: 5px 5px 5px 5px;
        box-shadow: 0px 0px 4px #143238;
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
                total_belanja();
               $("#list_data").html(html);
            }
        });
    }

    function total_belanja(){
        $.ajax({
            type        : "POST",
            url         : "<?php echo Yii::app()->createUrl('transaksi/total_belanja');?>",
            cache       : false,
            success     : function(html){
                total_dibayar();
                $("#jml_belanja").html(html);
            }
        });
    }

    function total_dibayar(){
        
        $.ajax({
            type        : "POST",
            url         : "<?php echo Yii::app()->createUrl('transaksi/total_dibayar');?>",
            cache       : false,
            success     : function(html){
               
                $("#total_dibayar").val(html);
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
               // alert(html);
				$("#status").html(html);
			},
			error:function(html){
                alert(html);
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
        $.ajax({
            type: "POST",
            url: "<?php echo Yii::app()->createUrl('transaksi/simpanpembeliantemp');?>",
            data: dataString,
            cache: false,
            success:function(html){
                $('#kode_barang').focus();
                tampil_data();
                total_belanja();
            },
            error:function(html){
                alert('gagal menambahkan barang ke daftar belanja');
                tampil_data();
                total_belanja();
            }
        });
    }

    function bayar()
    {
        var urut        = $("#urut").val();
        var petugas     = $("#petugas").val();
        var total       = $("#total_dibayar").val();
        var dataString  = "urut_hold="+urut+"&petugas="+petugas+"&total="+total;
        alert(dataString);
        $.ajax({
            type: "POST",
            url: "<?php echo Yii::app()->createUrl('transaksi/bayartunai');?>",
            data: dataString,
            cache: false,
            success:function(html){
                alert(html);
                $('#kode_barang').focus();
            },
            error:function(html){
                alert('gagal memproses transaksi pembayaran');
            }
        });
    }

    function myFunction(){
        
        /*if(event.keyCode == 9){
            event.preventDefault()
            alert('Tab');
        } */

        if(event.keyCode == 16){
            event.preventDefault()
            alert('Shift');
        }

        if(event.keyCode == 17){
            event.preventDefault()
            alert('Ctrl');
        }

        if(event.keyCode == 18){
            event.preventDefault()
            alert('Alt');
        }


        if(event.keyCode == 27){
            event.preventDefault()
            alert('Escape');
        }

        if(event.keyCode == 33){
            event.preventDefault()
            alert('Page Up');
        }

        if(event.keyCode == 34){
            event.preventDefault()
            alert('Page Down');
        }

        if(event.keyCode == 35){
            event.preventDefault()
            alert('End');
        }
        
        if(event.keyCode == 36){
            event.preventDefault()
            alert('Home');
        }

        if(event.keyCode == 37){
            event.preventDefault()
            alert('Left Arrow');
        }

        if(event.keyCode == 38){
            event.preventDefault()
            alert('Up Arrow');
        }

        if(event.keyCode == 39){
            event.preventDefault()
            alert('Rigt Arrow');
        }

        if(event.keyCode == 40){
            event.preventDefault()
            alert('Down Arrow');
        }
    }
</script>