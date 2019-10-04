<?php

/**
 * This is the model class for table "kategori".
 *
 * The followings are the available columns in table 'kategori':
 * @property integer $kategori_id
 * @property string $kategori_nama
 * @property integer $kategori_market_id
 * @property string $kategori_create
 * @property string $kategori_update
 */
class Kategori extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kategori';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kategori_nama, kategori_market_id, kategori_create', 'required'),
			array('kategori_market_id', 'numerical', 'integerOnly'=>true),
			array('kategori_nama', 'length', 'max'=>100),
			array('kategori_update', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kategori_id, kategori_nama, kategori_market_id, kategori_create, kategori_update', 'safe', 'on'=>'search'),
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
			'kategori_id' => 'Kategori',
			'kategori_nama' => 'Kategori Nama',
			'kategori_market_id' => 'Kategori Market',
			'kategori_create' => 'Kategori Create',
			'kategori_update' => 'Kategori Update',
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

		$criteria->compare('kategori_id',$this->kategori_id);
		$criteria->compare('kategori_nama',$this->kategori_nama,true);
		$criteria->compare('kategori_market_id',$this->kategori_market_id);
		$criteria->compare('kategori_create',$this->kategori_create,true);
		$criteria->compare('kategori_update',$this->kategori_update,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kategori the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
