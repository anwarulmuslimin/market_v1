<?php

/**
 * This is the model class for table "barang_pembelian".
 *
 * The followings are the available columns in table 'barang_pembelian':
 * @property integer $pembelian_id
 * @property string $pembelian_barang_barcode
 * @property double $pembelian_jumlah
 * @property string $pembelian_create
 * @property string $pembelian_update
 * @property integer $pembelian_user_id
 */
class BarangPembelian extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'barang_pembelian';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pembelian_barang_barcode, pembelian_jumlah, pembelian_create, pembelian_user_id', 'required'),
			array('pembelian_user_id', 'numerical', 'integerOnly'=>true),
			array('pembelian_jumlah', 'numerical'),
			array('pembelian_barang_barcode', 'length', 'max'=>100),
			array('pembelian_update', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pembelian_id, pembelian_barang_barcode, pembelian_jumlah, pembelian_create, pembelian_update, pembelian_user_id', 'safe', 'on'=>'search'),
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
			'pembelian_id' => 'Pembelian',
			'pembelian_barang_barcode' => 'Pembelian Barang Barcode',
			'pembelian_jumlah' => 'Pembelian Jumlah',
			'pembelian_create' => 'Pembelian Create',
			'pembelian_update' => 'Pembelian Update',
			'pembelian_user_id' => 'Pembelian User',
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

		$criteria->compare('pembelian_id',$this->pembelian_id);
		$criteria->compare('pembelian_barang_barcode',$this->pembelian_barang_barcode,true);
		$criteria->compare('pembelian_jumlah',$this->pembelian_jumlah);
		$criteria->compare('pembelian_create',$this->pembelian_create,true);
		$criteria->compare('pembelian_update',$this->pembelian_update,true);
		$criteria->compare('pembelian_user_id',$this->pembelian_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BarangPembelian the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
