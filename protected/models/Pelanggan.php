<?php

/**
 * This is the model class for table "pelanggan".
 *
 * The followings are the available columns in table 'pelanggan':
 * @property integer $pelanggan_id
 * @property string $pelanggan_nama
 * @property string $pelanggan_kartu_id
 * @property string $pelanggan_kategori
 * @property string $pelanggan_create
 * @property string $pelanggan_update
 * @property integer $pelanggan_user_id
 */
class Pelanggan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pelanggan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pelanggan_nama, pelanggan_kartu_id, pelanggan_kategori, pelanggan_create, pelanggan_user_id', 'required'),
			array('pelanggan_user_id', 'numerical', 'integerOnly'=>true),
			array('pelanggan_nama, pelanggan_kartu_id', 'length', 'max'=>100),
			array('pelanggan_kategori', 'length', 'max'=>20),
			array('pelanggan_update', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pelanggan_id, pelanggan_nama, pelanggan_kartu_id, pelanggan_kategori, pelanggan_create, pelanggan_update, pelanggan_user_id', 'safe', 'on'=>'search'),
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
			'pelanggan_id' => 'Pelanggan',
			'pelanggan_nama' => 'Pelanggan Nama',
			'pelanggan_kartu_id' => 'Pelanggan Kartu',
			'pelanggan_kategori' => 'Pelanggan Kategori',
			'pelanggan_create' => 'Pelanggan Create',
			'pelanggan_update' => 'Pelanggan Update',
			'pelanggan_user_id' => 'Pelanggan User',
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

		$criteria->compare('pelanggan_id',$this->pelanggan_id);
		$criteria->compare('pelanggan_nama',$this->pelanggan_nama,true);
		$criteria->compare('pelanggan_kartu_id',$this->pelanggan_kartu_id,true);
		$criteria->compare('pelanggan_kategori',$this->pelanggan_kategori,true);
		$criteria->compare('pelanggan_create',$this->pelanggan_create,true);
		$criteria->compare('pelanggan_update',$this->pelanggan_update,true);
		$criteria->compare('pelanggan_user_id',$this->pelanggan_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pelanggan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
