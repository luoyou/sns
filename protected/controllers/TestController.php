<?php
class TestController extends Controller{

	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	public function actionIndex(){
		$user = User::model()->findByAttributes(array('username'=>'luo'));
		// $user->english_name = 'dream luo';
		// $user->save();
		
		$user_two = new User;
		$user_two->attributes = $user->attributes;
		$user_two->english_name = 'dream lee';
		$user_two->save();
		var_dump($user_two->attributes);
	}

	public function index(){
		$user = User::model()->findByAttributes(array('username'=>'luo'));

	}

}