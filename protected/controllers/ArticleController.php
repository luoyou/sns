<?php
class ArticleController extends Controller{

    public $layout='//layouts/content';

    public function filters(){
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    public function accessRules(){
        return array(
            array('allow',  // allow all users to perform 'index' and 'view' actions
                'actions'=>array('index','view','write'),
                'users'=>array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions'=>array('create','update'),
                'users'=>array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions'=>array('admin','delete'),
                'users'=>array('@'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }

    public function actionIndex(){
        $con['condition'] = 'user_id='.$this->user->id;
        $con['order']     = 'istop DESC,create_time DESC';
        if(isset($_GET['column_id'])){
            $con['condition'] .= ' and column_id = '.$_GET['column_id'];
        }

        $dataProvider=new CActiveDataProvider('Article',array('criteria'=>$con));

        $column = ArticleColumn::model()->findAllByAttributes(array('user_id'=>$this->user->id));
        //$sum    = Article::model()->count(array('user_id'=>$this->user->id));

        $this->render('index',array('list'=>$dataProvider,'column'=>$column,'sum'=>$dataProvider->totalItemCount));
    }

    public function actionWrite(){
        $article = new Article;

        if(isset($_POST['Article'])){
            $article->attributes = $_POST['Article'];
            $article->attributes = $this->user->id;
            if($article->save()){
                $this->redirect(array('Article/Index'));
            }
        }
        $column_list = ArticleColumn::model()->findAllByAttributes(array('user_id'=>$this->user->id));
        $this->render('write',array('column'=>$column_list));
    }

}