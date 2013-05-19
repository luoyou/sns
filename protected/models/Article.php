<?php

/**
 * This is the model class for table "{{article}}".
 *
 * The followings are the available columns in table '{{article}}':
 * @property integer $id
 * @property integer $user_id
 * @property integer $column_id
 * @property string $title
 * @property string $content
 * @property integer $istop
 * @property integer $create_time
 * @property integer $update_time
 */
class Article extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Article the static model class
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
		return '{{article}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('user_id, column_id, title, content, istop, create_time, update_time', 'required'),
			array('user_id, column_id, create_time, update_time', 'numerical', 'integerOnly'=>true),
			array('istop, private','boolean'),
            array('title', 'length', 'max'=>32),
            array('content','safe'),
			array('id, user_id, column_id, title, content, istop, private, create_time, update_time', 'safe', 'on'=>'search'),
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

    public function scopes(){
        return array(
            'sort'=>array('order'=>'istop DESC,create_time DESC'),
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
			'column_id' => 'Column',
			'title' => 'Title',
			'content' => 'Content',
			'istop' => 'Istop',
			'private' => '私密',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
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
		$criteria->compare('column_id',$this->column_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('istop',$this->istop);
		$criteria->compare('private',$this->private);
		$criteria->compare('create_time',$this->create_time);
		$criteria->compare('update_time',$this->update_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    public function beforeSave(){
        if($this->isNewRecord){
            $this->create_time = time();
            $this->user_id = Yii::app()->user->id;
        }else{
            $this->update_time = time();
        }

        parent::beforeSave();
        return true;
    }
}