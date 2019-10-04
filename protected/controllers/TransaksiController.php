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
		$this->render('transaksi',array(
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
		echo "Rp. 89.600,00";
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
		$petugas 					= 1;
		
		$kode_barang 				= $_POST['kode_barang'];
		$jml 						= $_POST['jml'];
		$cek_data 					= TransaksiTemp::model()->findByAttributes(array('transasi_temp_barcode'=>$kode_barang,'transaksi_temp_user_id'=>$petugas));
		
		if(isset($cek_data)){
			$jumlah_akhir 			= $cek_data->transaksi_temp_jumlah + $jml;
			TransaksiTemp::model()->updateAll(array( 'transaksi_temp_jumlah' => $jumlah_akhir ), 'transasi_temp_barcode = "'.$kode_barang.'" AND transaksi_temp_user_id = "'.$petugas.'"' );
		}else{
			$new_temp 							= new TransaksiTemp;
			$new_temp->transaksi_temp_urut 	= 1;
			$new_temp->transaksi_temp_user_id 	= $petugas;
			$new_temp->transasi_temp_barcode 		= $kode_barang;
			$new_temp->transaksi_temp_jumlah 		= $jml;
			$new_temp->transaksi_temp_urut 		= 1;
			$new_temp->transaksi_temp_harga_satuan= 3000;
			$new_temp->transaksi_temp_harga_diskon= 3000;
			$new_temp->transaksi_temp_diskon		= 0;
			$new_temp->transaksi_temp_create		= date('Y-m-d H:i:s');
			$new_temp->transaksi_temp_update		= date('Y-m-d H:i:s');
			$new_temp->save();
		}				
		
	}
}
