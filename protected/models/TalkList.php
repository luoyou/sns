<?php

/**
 * This is the model class for table "{{talk_list}}".
 *
 * The followings are the available columns in table '{{talk_list}}':
 * @property integer $id
 * @property integer $user_id
 * @property integer $talk_id
 * @property integer $comment_id
 * @property integer $comment_count
 * @property integer $create_time
 */
class TalkList extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TalkList the static model class
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
		return '{{talk_list}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('user_id, talk_id, comment_id, comment_count, create_time', 'required'),
			array('user_id, talk_id, comment_id, comment_count, create_time', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, talk_id, comment_id, comment_count, create_time', 'safe', 'on'=>'search'),
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
            'user' => array(self::BELONGS_TO, 'User', 'user_id'),
            'content' => array(self::BELONGS_TO , 'Talk' , 'talk_id'),
            'talk_comment' => array(self::HAS_MANY,'TalkComment','list_id',
                                   'order'=>'talk_comment.create_time DESC'
                                   ),
			'talk_comment_count' => array(self::STAT,'TalkComment','list_id'),
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
			'talk_id' => 'Talk',
			'comment_id' => 'Comment',
			'comment_count' => 'Comment Count',
			'create_time' => 'Create Time',
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
		$criteria->compare('talk_id',$this->talk_id);
		$criteria->compare('comment_id',$this->comment_id);
		$criteria->compare('comment_count',$this->comment_count);
		$criteria->compare('create_time',$this->create_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    /**
     * insert talk_list
     *
     */
    public function insertTalkList($user_id,$talk_id,$comment_id = 0){
        $talk_list              = new TalkList();
        $talk_list->user_id     = $user_id;
        $talk_list->talk_id     = $talk_id;
        $talk_list->create_time = time();
        $talk_list->comment_id  = $comment_id;
        $talk_list->save();

        return true;
    }
}