<?php

/**
 * This is the model class for table "{{user}}".
 *
 * The followings are the available columns in table '{{user}}':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $pic
 * @property string $nickname
 * @property string $user_sign
 * @property string $name
 * @property string $english_name
 * @property integer $gender
 * @property integer $birthday
 * @property integer $horoscope
 * @property integer $blood_type
 * @property integer $current_live_id
 * @property integer $hometown_id
 */
class User extends CActiveRecord
{
    public $re_password;

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('username, password, pic, nickname, user_sign, name, english_name, gender, birthday, horoscope, blood_type, current_live_id, hometown_id', 'required'),
			array('gender, birthday, horoscope, blood_type, current_live_id, hometown_id', 'numerical', 'integerOnly'=>true),
			array('username, password,re_password, pic', 'length', 'max'=>32),
			array('nickname', 'length', 'max'=>16),
			array('user_sign', 'length', 'max'=>64),
			array('name', 'length', 'max'=>6),
			array('english_name', 'length', 'max'=>12),
            array('password', 'compare', 'compareAttribute'=>'re_password'),
			array('id, username, password,re_password, pic, nickname, user_sign, name, english_name, gender, birthday, horoscope, blood_type, current_live_id, hometown_id', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'username' => '用户名',
			'password' => '密码',
            're_password' => '重复密码',
			'pic' => '头像',
			'nickname' => '昵称',
			'user_sign' => '个性签名',
			'name' => '姓名',
			'english_name' => '英文名',
			'gender' => '性别',
			'birthday' => '生日',
			'horoscope' => '星座',
			'blood_type' => '血型',
			'current_live_id' => '当前居住地',
			'hometown_id' => '家乡',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('pic',$this->pic,true);
		$criteria->compare('nickname',$this->nickname,true);
		$criteria->compare('user_sign',$this->user_sign,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('english_name',$this->english_name,true);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('birthday',$this->birthday);
		$criteria->compare('horoscope',$this->horoscope);
		$criteria->compare('blood_type',$this->blood_type);
		$criteria->compare('current_live_id',$this->current_live_id);
		$criteria->compare('hometown_id',$this->hometown_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    /**
     * @param $password
     * @return bool
     */
    public function validatePassword($password){
        return $this->encrypt($password) === $this->password;
    }

    /**
     * encrypt md5()
     * @param $password
     * @return string
     */
    public function encrypt($password){
        return md5($password);
    }

    public $sex = array('男','女');

    public $constellation = array('白羊座','金牛座','双子座','巨蟹座','狮子座','处女座','天秤座','天蝎座','射手座','摩羯座','水平座','双鱼座');

    public $blood = array('A型','B型','O型','AB型','其他');
}