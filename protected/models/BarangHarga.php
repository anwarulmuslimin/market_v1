<?php

/**
 * This is the model class for table "barang_harga".
 *
 * The followings are the available columns in table 'barang_harga':
 * @property integer $harga_id
 * @property integer $harga_barang_id
 * @property string $harga_barang_stok
 * @property string $harga_barang_jumlah
 * @property string $harga_barang_total
 * @property double $harga_barang_beli
 * @property double $harga_barang_jual
 * @property string $harga_barang_create
 * @property string $harga_barang_update
 */
class BarangHarga extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'barang_harga';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('harga_barang_id, harga_barang_stok, harga_barang_jumlah, harga_barang_total, harga_barang_beli, harga_barang_jual, harga_barang_create', 'required'),
			array('harga_barang_id', 'numerical', 'integerOnly'=>true),
			array('harga_barang_beli, harga_barang_jual', 'numerical'),
			array('harga_barang_stok, harga_barang_jumlah, harga_barang_total', 'length', 'max'=>20),
			array('harga_barang_update', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('harga_id, harga_barang_id, harga_barang_stok, harga_barang_jumlah, harga_barang_total, harga_barang_beli, harga_barang_jual, harga_barang_create, harga_barang_update', 'safe', 'on'=>'search'),
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
			'nama_barang'    => array(self::BELONGS_TO, 'Barang', 'harga_barang_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'harga_id' => 'Harga',
			'harga_barang_id' => 'Harga Barang',
			'harga_barang_stok' => 'Harga Barang Stok',
			'harga_barang_jumlah' => 'Harga Barang Jumlah',
			'harga_barang_total' => 'Harga Barang Total',
			'harga_barang_beli' => 'Harga Barang Beli',
			'harga_barang_jual' => 'Harga Barang Jual',
			'harga_barang_create' => 'Harga Barang Create',
			'harga_barang_update' => 'Harga Barang Update',
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

		$criteria->compare('harga_id',$this->harga_id);
		$criteria->compare('harga_barang_id',$this->harga_barang_id);
		$criteria->compare('harga_barang_stok',$this->harga_barang_stok,true);
		$criteria->compare('harga_barang_jumlah',$this->harga_barang_jumlah,true);
		$criteria->compare('harga_barang_total',$this->harga_barang_total,true);
		$criteria->compare('harga_barang_beli',$this->harga_barang_beli);
		$criteria->compare('harga_barang_jual',$this->harga_barang_jual);
		$criteria->compare('harga_barang_create',$this->harga_barang_create,true);
		$criteria->compare('harga_barang_update',$this->harga_barang_update,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BarangHarga the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
