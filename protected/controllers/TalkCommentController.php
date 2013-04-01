<?php

class TalkCommentController extends Controller
{
	public function filters(){
		return array(
			'accessControl', // perform access control for CRUD operations
			'ajaxOnly', // we only allow deletion via POST request
		);
	}

	public function accessRules()
	{
		return array(
		);
	}

}