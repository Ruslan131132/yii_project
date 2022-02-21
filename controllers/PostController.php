<?php

namespace app\controllers;

use app\models\Post;
use yii\web\Controller;
use yii\web\Request;

class PostController extends Controller {

    /**
     */
    public function actionView($alias) {
        $post = Post::find()
            ->where(['alias' => $alias])
            ->one();

        if(!$post)
            $this->render('error');

        //генерируем два следующих поста
        $next_posts = Post::find()
            ->where(['>', 'id', $post->id])
            ->limit(2)->all();

        if (count($next_posts) == 1)
            $next_posts = [$next_posts[0], Post::find()->one()];

        if (!$next_posts)
            $next_posts = Post::find()->limit(2)->all();

       return $this->render('view', [
           'post' => $post,
           'next_posts' => $next_posts
       ]);
    }

}