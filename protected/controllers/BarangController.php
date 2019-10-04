<?php

class BarangController extends Controller
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
		$model=new Barang;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		echo 'test';
		if(isset($_POST['Barang']))
		{
			$model->attributes=$_POST['Barang'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->barang_id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionStore()
	{
		$model=new Barang;

		if(isset($_POST['Barang']))
		{
			$model->attributes=$_POST['Barang'];
			if($model->save()){
				$id_barang 		= $model->barang_id;
				$jumlah_barang 	= $_POST['jumlah_barang'];
				$harga_beli 	= $_POST['harga_beli'];
				$harga_jual 	= $_POST['harga_jual'];
				$modHargaBarang = new BarangHarga;
				$modHargaBarang->harga_barang_id 		= $id_barang;
				$modHargaBarang->harga_barang_stok 		= $jumlah_barang;
				$modHargaBarang->harga_barang_jumlah 	= $jumlah_barang;
				$modHargaBarang->harga_barang_total 	= $jumlah_barang;
				$modHargaBarang->harga_barang_jual 		= $harga_jual;
				$modHargaBarang->harga_barang_beli 		= $harga_beli;
				$modHargaBarang->harga_barang_create	= date('Y-m-d H:i:s');
				$modHargaBarang->harga_barang_update	= date('Y-m-d H:i:s');
				$modHargaBarang->save();
				$this->redirect(array('index'));
			}
		}
		$this->redirect(array('index'));
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

		if(isset($_POST['Barang']))
		{
			$model->attributes=$_POST['Barang'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->barang_id));
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
		//$dataProvider=new CActiveDataProvider('Market');
		$model=new Barang;
		$this->render('index',array(
			'model' =>$model,
			//'dataProvider'=>$dataProvider,
			//'dataKategori'=>$dataKategori
		));
	}
	
	public function actionEdit()
	{
		$id = $_POST['id'];
		$cr_barang 				= new CDbCriteria;
		$cr_barang->condition 	= "barang_id='".$id."'";
		$model = Barang::model()->find($cr_barang);

		$cr_harga 				= new CDbCriteria;
		$cr_harga->condition 	= "harga_barang_id='".$model->barang_id."'";
		$harga_barang 			= BarangHarga::model()->find($cr_harga);
		
		$this->renderpartial('form_edit',array('model'=>$model,'harga'=>$harga_barang));
	}

	public function actionTampil()
	{
		 $dataBarang = Barang::model()->findAll();
		
		$this->renderpartial('tampil_data',array(
			'dataBarang'=>$dataBarang
		));
	}

	public function actionUpdatedata()
	{
		$id 		= $_POST['id'];
		$id_harga	= $_POST['id_harga'];
		$kode 		= $_POST['kode'];
		$nama 		= $_POST['nama'];
		$stok 		= $_POST['stok'];
		$jual 		= $_POST['jual'];
		$beli 		= $_POST['beli'];
		$kategori 	= $_POST['kategori'];

		$cr_barang 				= new CDbCriteria;
		$cr_barang->condition 	= "barang_id='".$id."'";
		$dataBarang = Barang::model()->find($cr_barang);
		
		if($dataBarang){
			$dataBarang->barang_barcode 		= $kode;
			$dataBarang->barang_nama 			= $nama;
			$dataBarang->barang_kategori_id 	= $kategori;
			$dataBarang->barang_update 			= date('Y-m-d H:i:s');
			if($dataBarang->save()){
				$cr_harga 				= new CDbCriteria;
				$cr_harga->condition 	= "harga_barang_id='".$id_harga."'";
				$HargaBarang = BarangHarga::model()->find($cr_harga);
				$HargaBarang->harga_barang_stok 		= $stok;
				$HargaBarang->harga_barang_jual 		= $jual;
				$HargaBarang->harga_barang_beli 		= $beli;
				$HargaBarang->harga_barang_update 		= date('Y-m-d H:i:s');
				$HargaBarang->save();
				echo 'Berhasil di update';
			}
		}
	}

	public function actionRemove()
	{
		$id  = $_POST['id'];
		$this->loadModel($id)->delete();
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Barang('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Barang']))
			$model->attributes=$_GET['Barang'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Barang the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Barang::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Barang $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='barang-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
