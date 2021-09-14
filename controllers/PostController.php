<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Post;

class PostController extends Controller
{


    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays posts index page.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function  actionCreate()
    {
        $model = new Post();
        return $this->render('create', [
            'model' => $model,
        ]);
    }
    public function  actionUpdate()
    {
        return $this->render('update');
    }
    public function  actionView()
    {
        return $this->render('view');
    }
    public function  actionDelete()
    {

    }
}
