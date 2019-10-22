<?php

/**
 * This is the model class for table "transaksi_detail".
 *
 * The followings are the available columns in table 'transaksi_detail':
 * @property integer $detail_transaksi_id
 * @property string $detail_transaksi_barcode
 * @property integer $detail_transaksi_transaksi_id
 * @property integer $detail_transaksi_harga_satuan
 * @property integer $detail_transaksi_harga_diskon
 * @property integer $detail_transaksi_diskon
 * @property integer $detail_transaksi_jumlah
 * @property string $detail_transaksi_create
 * @property string $detail_transaksi_update
 */
class TransaksiDetail extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transaksi_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('detail_transaksi_barcode, detail_transaksi_transaksi_id, detail_transaksi_harga_diskon, detail_transaksi_jumlah, detail_transaksi_create, detail_transaksi_update', 'required'),
			array('detail_transaksi_transaksi_id, detail_transaksi_harga_satuan, detail_transaksi_harga_diskon, detail_transaksi_diskon, detail_transaksi_jumlah', 'numerical', 'integerOnly'=>true),
			array('detail_transaksi_barcode', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('detail_transaksi_id, detail_transaksi_barcode, detail_transaksi_transaksi_id, detail_transaksi_harga_satuan, detail_transaksi_harga_diskon, detail_transaksi_diskon, detail_transaksi_jumlah, detail_transaksi_create, detail_transaksi_update', 'safe', 'on'=>'search'),
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
			'detail_transaksi_id' => 'Detail Transaksi',
			'detail_transaksi_barcode' => 'Detail Transaksi Barcode',
			'detail_transaksi_transaksi_id' => 'Detail Transaksi Transaksi',
			'detail_transaksi_harga_satuan' => 'Detail Transaksi Harga Satuan',
			'detail_transaksi_harga_diskon' => 'Detail Transaksi Harga Diskon',
			'detail_transaksi_diskon' => 'Detail Transaksi Diskon',
			'detail_transaksi_jumlah' => 'Detail Transaksi Jumlah',
			'detail_transaksi_create' => 'Detail Transaksi Create',
			'detail_transaksi_update' => 'Detail Transaksi Update',
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

		$criteria->compare('detail_transaksi_id',$this->detail_transaksi_id);
		$criteria->compare('detail_transaksi_barcode',$this->detail_transaksi_barcode,true);
		$criteria->compare('detail_transaksi_transaksi_id',$this->detail_transaksi_transaksi_id);
		$criteria->compare('detail_transaksi_harga_satuan',$this->detail_transaksi_harga_satuan);
		$criteria->compare('detail_transaksi_harga_diskon',$this->detail_transaksi_harga_diskon);
		$criteria->compare('detail_transaksi_diskon',$this->detail_transaksi_diskon);
		$criteria->compare('detail_transaksi_jumlah',$this->detail_transaksi_jumlah);
		$criteria->compare('detail_transaksi_create',$this->detail_transaksi_create,true);
		$criteria->compare('detail_transaksi_update',$this->detail_transaksi_update,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TransaksiDetail the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
