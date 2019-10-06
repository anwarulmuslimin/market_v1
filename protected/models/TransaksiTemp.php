<?php

/**
 * This is the model class for table "transaksi_temp".
 *
 * The followings are the available columns in table 'transaksi_temp':
 * @property integer $transaksi_temp_urut
 * @property string $transasi_temp_barcode
 * @property string $transaksi_temp_harga_satuan
 * @property string $transaksi_temp_harga_diskon
 * @property string $transaksi_temp_diskon
 * @property string $transaksi_temp_jumlah
 * @property integer $transaksi_temp_user_id
 * @property string $transaksi_temp_create
 * @property string $transaksi_temp_update
 */
class TransaksiTemp extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transaksi_temp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('transaksi_temp_urut, transaksi_temp_user_id', 'numerical', 'integerOnly'=>true),
			array('transasi_temp_barcode', 'length', 'max'=>100),
			array('transaksi_temp_harga_satuan, transaksi_temp_harga_diskon, transaksi_temp_diskon, transaksi_temp_jumlah', 'length', 'max'=>20),
			array('transaksi_temp_create, transaksi_temp_update', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('transaksi_temp_urut, transasi_temp_barcode, transaksi_temp_harga_satuan, transaksi_temp_harga_diskon, transaksi_temp_diskon, transaksi_temp_jumlah, transaksi_temp_user_id, transaksi_temp_create, transaksi_temp_update', 'safe', 'on'=>'search'),
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
			'transaksi_temp_urut' => 'Transaksi Temp Urut',
			'transasi_temp_barcode' => 'Transasi Temp Barcode',
			'transaksi_temp_harga_satuan' => 'Transaksi Temp Harga Satuan',
			'transaksi_temp_harga_diskon' => 'Transaksi Temp Harga Diskon',
			'transaksi_temp_diskon' => 'Transaksi Temp Diskon',
			'transaksi_temp_jumlah' => 'Transaksi Temp Jumlah',
			'transaksi_temp_user_id' => 'Transaksi Temp User',
			'transaksi_temp_create' => 'Transaksi Temp Create',
			'transaksi_temp_update' => 'Transaksi Temp Update',
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

		$criteria->compare('transaksi_temp_urut',$this->transaksi_temp_urut);
		$criteria->compare('transasi_temp_barcode',$this->transasi_temp_barcode,true);
		$criteria->compare('transaksi_temp_harga_satuan',$this->transaksi_temp_harga_satuan,true);
		$criteria->compare('transaksi_temp_harga_diskon',$this->transaksi_temp_harga_diskon,true);
		$criteria->compare('transaksi_temp_diskon',$this->transaksi_temp_diskon,true);
		$criteria->compare('transaksi_temp_jumlah',$this->transaksi_temp_jumlah,true);
		$criteria->compare('transaksi_temp_user_id',$this->transaksi_temp_user_id);
		$criteria->compare('transaksi_temp_create',$this->transaksi_temp_create,true);
		$criteria->compare('transaksi_temp_update',$this->transaksi_temp_update,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TransaksiTemp the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getNamaBarang($id){
		$Barang = Barang::model()->findByAttributes(array('barang_barcode'=>$id));
		return $Barang->barang_nama;
	}

	public function getHargaBarang($id){
		$Barang = Barang::model()->findByAttributes(array('barang_barcode'=>$id));
		return $Barang->barang_nama;
	}
}
