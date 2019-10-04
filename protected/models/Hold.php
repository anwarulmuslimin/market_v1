<?php

/**
 * This is the model class for table "hold".
 *
 * The followings are the available columns in table 'hold':
 * @property integer $hold_id
 * @property integer $hold_transaksi_temp_urut
 * @property integer $hold_user_id
 * @property string $hold_created_at
 * @property string $hold_updated_at
 */
class Hold extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hold';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hold_transaksi_temp_urut, hold_user_id, hold_created_at, hold_updated_at', 'required'),
			array('hold_transaksi_temp_urut, hold_user_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('hold_id, hold_transaksi_temp_urut, hold_user_id, hold_created_at, hold_updated_at', 'safe', 'on'=>'search'),
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
			'hold_id' => 'Hold',
			'hold_transaksi_temp_urut' => 'Hold Transaksi Temp Urut',
			'hold_user_id' => 'Hold User',
			'hold_created_at' => 'Hold Created At',
			'hold_updated_at' => 'Hold Updated At',
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

		$criteria->compare('hold_id',$this->hold_id);
		$criteria->compare('hold_transaksi_temp_urut',$this->hold_transaksi_temp_urut);
		$criteria->compare('hold_user_id',$this->hold_user_id);
		$criteria->compare('hold_created_at',$this->hold_created_at,true);
		$criteria->compare('hold_updated_at',$this->hold_updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Hold the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
