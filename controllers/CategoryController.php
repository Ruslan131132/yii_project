<?php

namespace app\controllers;

use app\models\Category;
use app\models\Post;
use yii\web\Controller;
use yii\web\Request;

class CategoryController extends Controller {

    /**
     */
    public function actionView($alias) {

        $category = Category::find()
            ->where(['alias' => $alias])
            ->one();

        if(!$category)
            $this->render('error');


        return $this->render('view', [
            'category' => $category,
        ]);
    }

}