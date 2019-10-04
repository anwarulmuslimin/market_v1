<?php

/**
 * This is the model class for table "log_user".
 *
 * The followings are the available columns in table 'log_user':
 * @property integer $log_id
 * @property integer $log_user_id
 * @property string $log_aksi
 * @property string $log_deskripsi
 * @property string $log_create
 * @property string $log_update
 */
class Userlog extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'log_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('log_user_id, log_deskripsi, log_create', 'required'),
			array('log_user_id', 'numerical', 'integerOnly'=>true),
			array('log_aksi', 'length', 'max'=>6),
			array('log_update', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('log_id, log_user_id, log_aksi, log_deskripsi, log_create, log_update', 'safe', 'on'=>'search'),
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
			'log_id' => 'Log',
			'log_user_id' => 'Log User',
			'log_aksi' => 'Log Aksi',
			'log_deskripsi' => 'Log Deskripsi',
			'log_create' => 'Log Create',
			'log_update' => 'Log Update',
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

		$criteria->compare('log_id',$this->log_id);
		$criteria->compare('log_user_id',$this->log_user_id);
		$criteria->compare('log_aksi',$this->log_aksi,true);
		$criteria->compare('log_deskripsi',$this->log_deskripsi,true);
		$criteria->compare('log_create',$this->log_create,true);
		$criteria->compare('log_update',$this->log_update,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Userlog the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
