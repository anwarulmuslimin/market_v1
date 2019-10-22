<?php

class TransaksiController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/app';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	// public function accessRules()
	// {
	// 	return array(
	// 		array('allow',  // allow all users to perform 'index' and 'view' actions
	// 			'actions'=>array('index','view'),
	// 			'users'=>array('*'),
	// 		),
	// 		array('allow', // allow authenticated user to perform 'create' and 'update' actions
	// 			'actions'=>array('create','update'),
	// 			'users'=>array('@'),
	// 		),
	// 		array('allow', // allow admin user to perform 'admin' and 'delete' actions
	// 			'actions'=>array('admin','delete'),
	// 			'users'=>array('admin'),
	// 		),
	// 		array('deny',  // deny all users
	// 			'users'=>array('*'),
	// 		),
	// 	);
	// }

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Transaksi;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Transaksi']))
		{
			$model->attributes=$_POST['Transaksi'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->transaksi_id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Transaksi']))
		{
			$model->attributes=$_POST['Transaksi'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->transaksi_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
	//	$dataProvider=new CActiveDataProvider('Transaksi');
		$petugas = 1;
		$urut_hold = 1; 
		$this->render('transaksi',array(
			'petugas' => $petugas,
			'urut_hold' => $urut_hold,
			//'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Transaksi('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Transaksi']))
			$model->attributes=$_GET['Transaksi'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Transaksi the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Transaksi::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Transaksi $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='transaksi-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionDetail()
	{
		$user_id 			= 1;
		$cr_temp 			= new CDbCriteria;
		$cr_temp->condition = "transaksi_temp_user_id=$user_id";
		$transaksi_temp 	= TransaksiTemp::model()->findAll($cr_temp); 	
		$this->renderpartial('detail_transaksi',['dataTransaksi'=>$transaksi_temp]);
	}

	public function actionTotal_belanja()
	{
		$petugas 		= 1;
		
		$resource_sum 	= Yii::app()->db->createCommand()
						->select('sum(transaksi_temp_harga_total) as total')
						->from('transaksi_temp')
						->where('transaksi_temp_user_id = '.$petugas)
						->queryRow();
	  
		echo $this->Rupiah($resource_sum['total']);

	}

	public function actionTotal_dibayar()
	{
		$petugas 		= 1;
		
		$resource_sum 	= Yii::app()->db->createCommand()
						->select('sum(transaksi_temp_harga_total) as total')
						->from('transaksi_temp')
						->where('transaksi_temp_user_id = '.$petugas)
						->queryRow();
	  
		echo $resource_sum['total'];

	}

	public function actionCaribarang()
	{
		$kode_barang 		= $_POST['kode_barang'];
		
		$cr_kode 			= new CDbCriteria;
		$cr_kode->condition = "barang_barcode=$kode_barang";
		$model 				= Barang::model()->find($cr_kode);
		
		if($model->barang_barcode){
			$html = '';
			$html.= '<script type="text/javascript">';
			$html.= '$("#nama_barang").val("'.$model->barang_nama.'");';
			$html.= '$("#jml_barang").val('.$model->getBarangStok($model->barang_id).');';
			$html.= '$("#jml_beli").focus();';
			$html.= '</script>';
		}else{
			$html.='
				<div class="alert"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Kesalahan!</strong>  Kode barang tidak ditemukan</div>
			';
		}

		echo $html;
	}

	public function actionSimpanpembeliantemp()
	{
		$petugas 		= 1;
		
		$kode_barang 	= $_POST['kode_barang'];
		$jml 			= $_POST['jml'];
		$cek_data 		= TransaksiTemp::model()->findByAttributes(array('transasi_temp_barcode'=>$kode_barang,'transaksi_temp_user_id'=>$petugas));
		$dataBarang 	= Barang::model()->findByAttributes(array('barang_barcode'=>$kode_barang));
		$harga 			= $dataBarang->getHargaJual($dataBarang->barang_id);
		$cek_stok 		= BarangHarga::model()->findByAttributes(array('harga_barang_id'=> $dataBarang->barang_id));
		$stok_akhir 	= $cek_stok->harga_barang_stok - $jml;
		$id_barang 		= $dataBarang->barang_id;
		$cr 			= new CDbCriteria;
		$cr->condition 	= 'harga_barang_id='.$id_barang;
		$HrgaBarang 	= BarangHarga::model()->find($cr);
		
		if(isset($cek_data)){
			$harga_total	= $harga*$jml;
			$jumlah_akhir 	= $cek_data->transaksi_temp_jumlah + $jml;
			$rupiah_akhir 	= $cek_data->transaksi_temp_harga_total + $harga_total;
			if($cek_stok->harga_barang_stok >= $jumlah_akhir){

				TransaksiTemp::model()->updateAll(array( 'transaksi_temp_jumlah' => $jumlah_akhir,'transaksi_temp_harga_total' =>$rupiah_akhir ), 'transasi_temp_barcode = "'.$kode_barang.'" AND transaksi_temp_user_id = "'.$petugas.'"' );
				
				$HrgaBarang->harga_barang_stok 	= $stok_akhir ;
				$HrgaBarang->save();
			}
		}else{
			if($cek_stok->harga_barang_stok >= $jml){
				$new_temp 								= new TransaksiTemp;
				$new_temp->transaksi_temp_urut 			= 1;
				$new_temp->transaksi_temp_user_id 		= $petugas;
				$new_temp->transasi_temp_barcode 		= $kode_barang;
				$new_temp->transaksi_temp_jumlah 		= $jml;
				$new_temp->transaksi_temp_urut 			= 1;
				$new_temp->transaksi_temp_harga_satuan	= $harga;
				$new_temp->transaksi_temp_harga_diskon  = 0;
				$new_temp->transaksi_temp_diskon		= 0;
				$new_temp->transaksi_temp_harga_total   = $harga*$jml;
				$new_temp->transaksi_temp_create		= date('Y-m-d H:i:s');
				$new_temp->transaksi_temp_update		= date('Y-m-d H:i:s');
				if($new_temp->save()){
					$HrgaBarang->harga_barang_stok 	= $stok_akhir ;
					$HrgaBarang->save();
				}
			}
		}				
		
	}

	public function actionBayartunai()
	{
		$urut 		= $_POST['urut_hold'];
		$petugas	= $_POST['petugas'];
		$total		= $_POST['total'];
		$cr_trx 			= new CDbCriteria;
		$cr_trx->condition 	= "transaksi_temp_urut='$urut' and transaksi_temp_user_id='$petugas'";
		$TempTransaksi 		= TransaksiTemp::model()->findAll($cr_trx);
		
		$simpan 						= new Transaksi;
		$simpan->transaksi_harga 		= $total;
		$simpan->transaksi_diskon 		= 0;
		$simpan->transaksi_harga_diskon = 0;
		$simpan->transaksi_user_id 		= $petugas;
		$simpan->transaksi_create 		= date('Y-m-d H:i:s');
		$simpan->transaksi_update 		= date('Y-m-d H:i:s');
		if($simpan->save()){
			$id_transaksi = $simpan->transaksi_id;
		}
	
		foreach($TempTransaksi as $data){
			$simpan_detail 									=  new TransaksiDetail;
			$simpan_detail->detail_transaksi_barcode		= $data->transasi_temp_barcode;
			$simpan_detail->detail_transaksi_transaksi_id	= $id_transaksi;
			$simpan_detail->detail_transaksi_harga_satuan	= $data->transaksi_temp_harga_satuan;
			$simpan_detail->detail_transaksi_harga_diskon	= $data->transaksi_temp_harga_diskon;
			$simpan_detail->detail_transaksi_diskon			= $data->transaksi_temp_diskon;
			$simpan_detail->detail_transaksi_jumlah			= $data->transaksi_temp_jumlah;
			$simpan_detail->detail_transaksi_create			= date('Y-m-d H:i:s');
			$simpan_detail->detail_transaksi_update			= date('Y-m-d H:i:s');
			$simpan_detail->save();
		}
	}
}
