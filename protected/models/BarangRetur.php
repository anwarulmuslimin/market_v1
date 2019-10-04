<?php

/**
 * This is the model class for table "barang_retur".
 *
 * The followings are the available columns in table 'barang_retur':
 * @property integer $retur_id
 * @property integer $retur_barang_id
 * @property double $retur_jumlah
 * @property string $retur_type
 * @property string $retur_alasan
 * @property string $retur_create
 * @property string $retur_update
 * @property integer $retur_user_id
 */
class BarangRetur extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'barang_retur';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('retur_barang_id, retur_jumlah, retur_type, retur_alasan, retur_create, retur_user_id', 'required'),
			array('retur_barang_id, retur_user_id', 'numerical', 'integerOnly'=>true),
			array('retur_jumlah', 'numerical'),
			array('retur_type', 'length', 'max'=>20),
			array('retur_update', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('retur_id, retur_barang_id, retur_jumlah, retur_type, retur_alasan, retur_create, retur_update, retur_user_id', 'safe', 'on'=>'search'),
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
			'retur_id' => 'Retur',
			'retur_barang_id' => 'Retur Barang',
			'retur_jumlah' => 'Retur Jumlah',
			'retur_type' => 'Retur Type',
			'retur_alasan' => 'Retur Alasan',
			'retur_create' => 'Retur Create',
			'retur_update' => 'Retur Update',
			'retur_user_id' => 'Retur User',
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

		$criteria->compare('retur_id',$this->retur_id);
		$criteria->compare('retur_barang_id',$this->retur_barang_id);
		$criteria->compare('retur_jumlah',$this->retur_jumlah);
		$criteria->compare('retur_type',$this->retur_type,true);
		$criteria->compare('retur_alasan',$this->retur_alasan,true);
		$criteria->compare('retur_create',$this->retur_create,true);
		$criteria->compare('retur_update',$this->retur_update,true);
		$criteria->compare('retur_user_id',$this->retur_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BarangRetur the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
