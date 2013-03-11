<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    public $user;

	/**
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */

	public function authenticate()
	{
        $username = strtolower($this->username);
		$user     = User::model()->find('LOWER(username)=?',array($username));

		if(!isset($user)){
			$this->errorCode=self::ERROR_USERNAME_INVALID;
        }else{
            if(!$user->validatePassword($this->password)){
                $this->errorCode=self::ERROR_PASSWORD_INVALID;
            }else{
                $this->setUser($user);
                $this->errorCode = self::ERROR_NONE;
            }
        }

        return $this->errorCode == self::ERROR_NONE;
    }

    public function setUser(CActiveRecord $user){
        $this->user = $user->attributes;
    }

    public function getUser(){
        return $this->user;
    }

}