<?php

/**
 * This is the model class for table "{{article_list}}".
 *
 * The followings are the available columns in table '{{article_list}}':
 * @property integer $id
 * @property integer $user_id
 * @property integer $article_id
 * @property integer $type
 * @property integer $read_count
 * @property integer $comment_count
 * @property integer $create_time
 */
class ArticleList extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ArticleList the static model class
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
		return '{{article_list}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, article_id, type, read_count, comment_count, create_time', 'required'),
			array('user_id, article_id, type, read_count, comment_count, create_time', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, article_id, type, read_count, comment_count, create_time', 'safe', 'on'=>'search'),
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
			'article_id' => 'Article',
			'type' => 'Type',
			'read_count' => 'Read Count',
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
		$criteria->compare('article_id',$this->article_id);
		$criteria->compare('type',$this->type);
		$criteria->compare('read_count',$this->read_count);
		$criteria->compare('comment_count',$this->comment_count);
		$criteria->compare('create_time',$this->create_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}