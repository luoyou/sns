<?php

class UserController extends Controller
{

	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','test','image','AjaxAvatar'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
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

	public function actionView()
	{
        $this->pageTitle = '个人资料';
		$this->render('view',array(
			'model'=>$this->loadModel($this->user->id),
            'extend'=>UserExtend::model()->findByAttributes(array('user_id'=>$this->user->id)),
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

    public function actionTest(){
        $ext_path = Yii::app()->baseUrl.'/extends/avatar/';
        $pic_path = Yii::app()->baseUrl.'/images/user/pic/';
        $uid  = 1;
        $swfObj = '<object name="c_avatar" type="application/x-shockwave-flash" width="720" height="420" id="c_avatar_miniblog1" align="middle" data="'.$ext_path.'c_avatar.swf">'.
            '<param name="allowScriptAccess" value="always" />'.
            '<param name="allowfullscreen" value="true" />'.
            '<param name="AllowNetworking" value="all" />'.
            '<param name="quality" value="high" />'.
            '<param name="bgcolor" value="#ffffff" />'.
            '<param name="menu" value="false" />'.
            '<param name="flashvars" value="policy_file_url='.$ext_path.'crossdomain.xml&big_avatar_url='.$pic_path.$uid.'_big.jpg&middle_avatar_url='.$pic_path.$uid.'_middle.jpg&little_avatar_url='.$pic_path.$uid.'_small.jpg&big_avatar_name='.$uid.'_big&middle_avatar_name='.$uid .'_middle&little_avatar_name='.$uid.'_small&url_params=" />'.
            '</object>';

        $this->renderPartial('test',array('swfObj'=>$swfObj));
    }

    public function actionImage(){
        echo json_encode(array('name'=>'login_bg.jpg','success'=>1));
    }

    public function actionAjaxAvatar(){
        if($this->avatar('big')&&$this->avatar('middle')&&$this->avatar('little')){
            echo 200;
        }else{
            echo 400;
        }
    }

    public function avatar($type){
        $avatar = base64_decode($_POST[$type.'_avatar']);
        $name   = $_POST[$type.'_avatar_name'].$_POST['image_type'];
        $file   = fopen(Yii::app()->basePath."/../images/user/pic/".$name,"w");
        $status = fwrite($file,$avatar);
        fclose($file);
        return $status;
    }

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
