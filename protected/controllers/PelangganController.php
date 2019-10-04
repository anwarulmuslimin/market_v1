<?php

class PelangganController extends Controller
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
		$model=new Pelanggan;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pelanggan']))
		{
			$model->attributes=$_POST['Pelanggan'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->pelanggan_id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionStore()
	{
		$model=new Pelanggan;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pelanggan']))
		{
			$model->attributes=$_POST['Pelanggan'];
			if($model->save())
				$this->redirect(array('index'));
		}

		$this->redirect(array('index'));
	}

	public function actionEdit()
	{
		$id = $_POST['id'];
		$model=$this->loadModel($id);
		$this->renderpartial('form_edit',array('model'=>$model));
	}

	public function actionUpdatedata()
	{
		$id 		= $_POST['id'];
		$nama 		= $_POST['nama'];

		$dataPelanggan = Pelanggan::model()->findBypk($id);
		
		if($dataPelanggan){
			$dataPelanggan->pelanggan_nama 		= $nama;
			$dataPelanggan->pelanggan_update 	= date('Y-m-d H:i:s');
			$dataPelanggan->save();
		}
	}

	public function actionRemove()
	{
		$id  = $_POST['id'];
		$this->loadModel($id)->delete();
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

		if(isset($_POST['Pelanggan']))
		{
			$model->attributes=$_POST['Pelanggan'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->pelanggan_id));
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
		$model=new Pelanggan;
		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Pelanggan('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Pelanggan']))
			$model->attributes=$_GET['Pelanggan'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Pelanggan the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Pelanggan::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Pelanggan $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pelanggan-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionTampil()
	{
		$search 		= $_POST['search'];
		$dataPelanggan = Pelanggan::model()->findAll();
		
		$this->renderpartial('tampil_data',array(
			'dataPelanggan'=>$dataPelanggan
		));
	}
}