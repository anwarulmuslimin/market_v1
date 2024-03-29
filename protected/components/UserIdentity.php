<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;

	/**
	 * Authenticates a user.
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		// $user=User::model()->find('LOWER(username)=?',array(strtolower($this->username)));
		// if($user===null)
		// 	$this->errorCode=self::ERROR_USERNAME_INVALID;
		// else if(!$user->validatePassword($this->password))
		// 	$this->errorCode=self::ERROR_PASSWORD_INVALID;
		// else
		// {
		// 	$this->_id=$user->id;
		// 	$this->username=$user->username;
		// 	$this->errorCode=self::ERROR_NONE;
		// }
		// return $this->errorCode==self::ERROR_NONE;
		
		$model 	= new User;
  		$user	= $model->findByAttributes(array('user_user'=>$this->username));
                if($user===null){
                    $this->errorCode=self::ERROR_USERNAME_INVALID;
                }else{
                    if($user->user_password !== $user->encrypt($this->password)){
						
                        $this->errorCode=self::ERROR_PASSWORD_INVALID;
                    }else{
						Yii::app()->session;
    					Yii::app()->session['userid'] = $user->user_id;
						$this->_id=$user->user_id;
						$this->username=$user->user_nama;
						$this->errorCode=self::ERROR_NONE;
				
                    }
                }
  		return !$this->errorCode;
	}

	/**
	 * @return integer the ID of the user record
	 */
	public function getId()
	{
		return $this->_id;
	}
}