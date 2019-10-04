<?php

/**
 * This is the model class for table "market".
 *
 * The followings are the available columns in table 'market':
 * @property integer $minimarket_id
 * @property string $minimarket_kode
 * @property string $minimarket_nama
 * @property string $minimarket_type
 * @property string $minimarket_create
 * @property string $minimarket_update
 */
class Market extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'market';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('minimarket_kode, minimarket_nama, minimarket_type, minimarket_create', 'required'),
			array('minimarket_kode', 'length', 'max'=>10),
			array('minimarket_nama, minimarket_type', 'length', 'max'=>100),
			array('minimarket_update', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('minimarket_id, minimarket_kode, minimarket_nama, minimarket_type, minimarket_create, minimarket_update', 'safe', 'on'=>'search'),
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
			'minimarket_id' => 'Minimarket',
			'minimarket_kode' => 'Minimarket Kode',
			'minimarket_nama' => 'Minimarket Nama',
			'minimarket_type' => 'Minimarket Type',
			'minimarket_create' => 'Minimarket Create',
			'minimarket_update' => 'Minimarket Update',
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

		$criteria->compare('minimarket_id',$this->minimarket_id);
		$criteria->compare('minimarket_kode',$this->minimarket_kode,true);
		$criteria->compare('minimarket_nama',$this->minimarket_nama,true);
		$criteria->compare('minimarket_type',$this->minimarket_type,true);
		$criteria->compare('minimarket_create',$this->minimarket_create,true);
		$criteria->compare('minimarket_update',$this->minimarket_update,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Market the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
