<?php

/**
 * This is the model class for table "barang_diskon".
 *
 * The followings are the available columns in table 'barang_diskon':
 * @property integer $diskon_id
 * @property integer $diskon_barang_id
 * @property string $diskon_type
 * @property double $diskon_angka
 * @property string $diskon_aktif
 * @property string $diskon_tgl_awal
 * @property string $diskon_tgl_akhir
 * @property string $diskon_pelanggan_type
 * @property string $diskon_create
 * @property string $diskon_update
 * @property integer $diskon_user_input
 */
class BarangDiskon extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'barang_diskon';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('diskon_barang_id, diskon_angka, diskon_pelanggan_type, diskon_create, diskon_user_input', 'required'),
			array('diskon_barang_id, diskon_user_input', 'numerical', 'integerOnly'=>true),
			array('diskon_angka', 'numerical'),
			array('diskon_type', 'length', 'max'=>7),
			array('diskon_aktif', 'length', 'max'=>1),
			array('diskon_pelanggan_type', 'length', 'max'=>20),
			array('diskon_tgl_awal, diskon_tgl_akhir, diskon_update', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('diskon_id, diskon_barang_id, diskon_type, diskon_angka, diskon_aktif, diskon_tgl_awal, diskon_tgl_akhir, diskon_pelanggan_type, diskon_create, diskon_update, diskon_user_input', 'safe', 'on'=>'search'),
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
			'diskon_id' => 'Diskon',
			'diskon_barang_id' => 'Diskon Barang',
			'diskon_type' => 'Diskon Type',
			'diskon_angka' => 'Diskon Angka',
			'diskon_aktif' => 'Diskon Aktif',
			'diskon_tgl_awal' => 'Diskon Tgl Awal',
			'diskon_tgl_akhir' => 'Diskon Tgl Akhir',
			'diskon_pelanggan_type' => 'Diskon Pelanggan Type',
			'diskon_create' => 'Diskon Create',
			'diskon_update' => 'Diskon Update',
			'diskon_user_input' => 'Diskon User Input',
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

		$criteria->compare('diskon_id',$this->diskon_id);
		$criteria->compare('diskon_barang_id',$this->diskon_barang_id);
		$criteria->compare('diskon_type',$this->diskon_type,true);
		$criteria->compare('diskon_angka',$this->diskon_angka);
		$criteria->compare('diskon_aktif',$this->diskon_aktif,true);
		$criteria->compare('diskon_tgl_awal',$this->diskon_tgl_awal,true);
		$criteria->compare('diskon_tgl_akhir',$this->diskon_tgl_akhir,true);
		$criteria->compare('diskon_pelanggan_type',$this->diskon_pelanggan_type,true);
		$criteria->compare('diskon_create',$this->diskon_create,true);
		$criteria->compare('diskon_update',$this->diskon_update,true);
		$criteria->compare('diskon_user_input',$this->diskon_user_input);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BarangDiskon the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
