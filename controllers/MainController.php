<?php

namespace app\controllers;

use app\models\Post;
use yii\base\Controller;

class MainController extends Controller {

    public function actionIndex() {
        $posts = Post::find()->all();
        return $this->render('index', [
            'posts' => $posts
        ]);
    }

    public function actionError() {
//        $posts = Post::find()->all();
        return $this->render('error');
    }
}