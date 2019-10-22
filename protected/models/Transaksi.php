<?php

/**
 * This is the model class for table "transaksi".
 *
 * The followings are the available columns in table 'transaksi':
 * @property integer $transaksi_id
 * @property string $transaksi_harga
 * @property integer $transaksi_diskon
 * @property string $transaksi_harga_diskon
 * @property integer $transaksi_pelanggan_id
 * @property integer $transaksi_user_id
 * @property string $transaksi_akun
 * @property string $transaksi_create
 * @property string $transaksi_update
 */
class Transaksi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transaksi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('transaksi_harga, transaksi_harga_diskon, transaksi_user_id, transaksi_create, transaksi_update', 'required'),
			array('transaksi_diskon, transaksi_pelanggan_id, transaksi_user_id', 'numerical', 'integerOnly'=>true),
			array('transaksi_harga, transaksi_harga_diskon', 'length', 'max'=>20),
			array('transaksi_akun', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('transaksi_id, transaksi_harga, transaksi_diskon, transaksi_harga_diskon, transaksi_pelanggan_id, transaksi_user_id, transaksi_akun, transaksi_create, transaksi_update', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'transaksi_id' => 'Transaksi',
			'transaksi_harga' => 'Transaksi Harga',
			'transaksi_diskon' => 'Transaksi Diskon',
			'transaksi_harga_diskon' => 'Transaksi Harga Diskon',
			'transaksi_pelanggan_id' => 'Transaksi Pelanggan',
			'transaksi_user_id' => 'Transaksi User',
			'transaksi_akun' => 'Transaksi Akun',
			'transaksi_create' => 'Transaksi Create',
			'transaksi_update' => 'Transaksi Update',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('transaksi_id',$this->transaksi_id);
		$criteria->compare('transaksi_harga',$this->transaksi_harga,true);
		$criteria->compare('transaksi_diskon',$this->transaksi_diskon);
		$criteria->compare('transaksi_harga_diskon',$this->transaksi_harga_diskon,true);
		$criteria->compare('transaksi_pelanggan_id',$this->transaksi_pelanggan_id);
		$criteria->compare('transaksi_user_id',$this->transaksi_user_id);
		$criteria->compare('transaksi_akun',$this->transaksi_akun,true);
		$criteria->compare('transaksi_create',$this->transaksi_create,true);
		$criteria->compare('transaksi_update',$this->transaksi_update,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Transaksi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
