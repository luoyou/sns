<?php

class TalkController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','transmit'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Talk;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Talk']))
		{
			$model->attributes=$_POST['Talk'];
			if($model->save())
                if(Yii::app()->request->isAjaxRequest){
                    $data = array('pic'=>$this->user->pic,
                                  'name'=>$this->user->nickname,
                                  'content'=>$_POST['Talk']['content'],
                                );
                    echo json_encode($data);
                    return;
                }else{
                    $this->redirect(array('view','id'=>$model->id));
                }
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 *
	 *transmit talk
	 */
	public function actionTransmit(){
		if(isset($_POST['transmit_id'])){
			$temp_id = $_POST['transmit_id'];
	        if(TalkList::model()->insertTalkList($this->user->id,$temp_id)){
				$model = $this->loadModel($temp_id);
				$data  = array('pic'=>$this->user->pic,
                              'name'=>$this->user->nickname,
                              'content'=>$model->content,
                              );
                echo json_encode($data);
			}
		}
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Talk::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='talk-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

}
