<?php

/**
 * This is the model class for table "barang".
 *
 * The followings are the available columns in table 'barang':
 * @property integer $barang_id
 * @property string $barang_barcode
 * @property string $barang_nama
 * @property integer $barang_kategori_id
 * @property string $barang_aktif
 * @property string $barang_diskon
 * @property string $barang_create
 * @property string $barang_update
 * @property string $barang_type
 */
class Barang extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'barang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('barang_barcode, barang_nama, barang_kategori_id, barang_create', 'required'),
			array('barang_kategori_id', 'numerical', 'integerOnly'=>true),
			array('barang_barcode, barang_nama', 'length', 'max'=>100),
			array('barang_aktif, barang_diskon', 'length', 'max'=>1),
			array('barang_type', 'length', 'max'=>3),
			array('barang_update', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('barang_id, barang_barcode, barang_nama, barang_kategori_id, barang_aktif, barang_diskon, barang_create, barang_update, barang_type', 'safe', 'on'=>'search'),
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
			'kategori'    => array(self::BELONGS_TO, 'Kategori', 'barang_kategori_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'barang_id' => 'Barang',
			'barang_barcode' => 'Barcode',
			'barang_nama' => 'Nama Barang',
			'barang_kategori_id' => 'Kategori Barang',
			'barang_aktif' => 'Barang Aktif',
			'barang_diskon' => 'Barang Diskon',
			'barang_create' => 'Barang Create',
			'barang_update' => 'Barang Update',
			'barang_type' => 'Barang Type',
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

		$criteria->compare('barang_id',$this->barang_id);
		$criteria->compare('barang_barcode',$this->barang_barcode,true);
		$criteria->compare('barang_nama',$this->barang_nama,true);
		$criteria->compare('barang_kategori_id',$this->barang_kategori_id);
		$criteria->compare('barang_aktif',$this->barang_aktif,true);
		$criteria->compare('barang_diskon',$this->barang_diskon,true);
		$criteria->compare('barang_create',$this->barang_create,true);
		$criteria->compare('barang_update',$this->barang_update,true);
		$criteria->compare('barang_type',$this->barang_type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Barang the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getHargaJual($id){
		$HargaBarang = BarangHarga::model()->findByAttributes(array('harga_barang_id'=>$id));
		return $HargaBarang->harga_barang_jual;
	}

	public function getHargaBeli($id){
		$HargaBarang = BarangHarga::model()->findByAttributes(array('harga_barang_id'=>$id));
		return $HargaBarang->harga_barang_beli;
	}

	public function getBarangStok($id){
		$HargaBarang = BarangHarga::model()->findByAttributes(array('harga_barang_id'=>$id));
		return $HargaBarang->harga_barang_stok;
	}

	public function getBarangLaku($id){
		$HargaBarang = BarangHarga::model()->findByAttributes(array('harga_barang_id'=>$id));
		return $HargaBarang->harga_barang_jumlah;
	}

}
