<?php

/**
 * This is the model class for table "{{user_extend}}".
 *
 * The followings are the available columns in table '{{user_extend}}':
 * @property integer $id
 * @property integer $user_id
 * @property string $telephone
 * @property string $mobilephone
 * @property string $education
 * @property string $job
 * @property string $interest
 * @property string $description
 * @property integer $create_time
 * @property string $check_question
 * @property string $check_answer
 */
class UserExtend extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserExtend the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{user_extend}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, telephone, mobilephone, education, job, interest, description, create_time, check_question, check_answer', 'required'),
			array('user_id, create_time', 'numerical', 'integerOnly'=>true),
			array('telephone', 'length', 'max'=>12),
			array('mobilephone', 'length', 'max'=>11),
			array('education, job', 'length', 'max'=>10),
			array('interest', 'length', 'max'=>20),
			array('description', 'length', 'max'=>140),
			array('check_question', 'length', 'max'=>60),
			array('check_answer', 'length', 'max'=>6),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, telephone, mobilephone, education, job, interest, description, create_time, check_question, check_answer', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'telephone' => '固定电话',
			'mobilephone' => '移动电话',
			'education' => '教育',
			'job' => '工作',
			'interest' => '兴趣爱好',
			'description' => '自我描述',
			'create_time' => 'Create Time',
			'check_question' => 'Check Question',
			'check_answer' => 'Check Answer',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('telephone',$this->telephone,true);
		$criteria->compare('mobilephone',$this->mobilephone,true);
		$criteria->compare('education',$this->education,true);
		$criteria->compare('job',$this->job,true);
		$criteria->compare('interest',$this->interest,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('create_time',$this->create_time);
		$criteria->compare('check_question',$this->check_question,true);
		$criteria->compare('check_answer',$this->check_answer,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}