<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $user_id
 * @property string $user_nama
 * @property string $user_user
 * @property string $user_password
 * @property string $user_type
 * @property string $user_aktif
 * @property string $user_create
 * @property string $user_update
 * @property integer $user_market_id
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	protected function afterValidate() {
		parent::afterValidate();
			   
		//melakukan enkripsi pada passwod yang di input
		$this->password = $this->encrypt($this->user_password);
   }
	
	public function encrypt($value){
		return md5($value);
   	}
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_nama, user_user, user_password, user_create, user_market_id', 'required'),
			array('user_market_id', 'numerical', 'integerOnly'=>true),
			array('user_nama, user_user, user_password', 'length', 'max'=>100),
			array('user_type', 'length', 'max'=>5),
			array('user_aktif', 'length', 'max'=>1),
			array('user_update', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_id, user_nama, user_user, user_password, user_type, user_aktif, user_create, user_update, user_market_id', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'user_nama' => 'User Nama',
			'user_user' => 'User User',
			'user_password' => 'User Password',
			'user_type' => 'User Type',
			'user_aktif' => 'User Aktif',
			'user_create' => 'User Create',
			'user_update' => 'User Update',
			'user_market_id' => 'User Market',
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('user_nama',$this->user_nama,true);
		$criteria->compare('user_user',$this->user_user,true);
		$criteria->compare('user_password',$this->user_password,true);
		$criteria->compare('user_type',$this->user_type,true);
		$criteria->compare('user_aktif',$this->user_aktif,true);
		$criteria->compare('user_create',$this->user_create,true);
		$criteria->compare('user_update',$this->user_update,true);
		$criteria->compare('user_market_id',$this->user_market_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

}
