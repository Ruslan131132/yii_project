<?php

namespace app\controllers;

use app\models\Post;
use Yii;
use app\models\LoginForm;
use yii\base\BaseObject;
use yii\web\Controller;

class MainController extends Controller {

    public function actionIndex() {
        $posts = Post::find()->limit(12)->all();
        $last_posts = Post::find()->orderBy('created_at DESC')->limit(3)->all();
        return $this->render('index', [
            'posts' => $posts,
            'last_posts' => $last_posts
        ]);
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionError() {
        return $this->render('error');
    }
}