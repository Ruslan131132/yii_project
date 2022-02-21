<?php

/** @var yii\web\View $this */
/** @var $category - Переданная на представление переменная */

$this->title = 'Post · '. $category->alias
?>

<div class="container">
    <div class="row p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <?= $category->title ?>
    </div>

    <div class="row g-5">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
            Основные блюда
        </h3>


        <div class="row gx-5 text-center">
            <?php foreach (array_slice($category->posts, 0, 12) as $post): //возвращаем максимум 12 постов по этой тематике?>
                <div class="col-lg-4 mb-5">
                    <div class="card">
                        <?= \yii\helpers\Html::img("@web/{$post->img}", [
                            'class' => 'bd-placeholder-img card-img-top',
                            'width' => '100%',
                            'height' => '250',
                            'alt' => $post->name
                        ]);
                        ?>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a class="text-muted" href="<?= yii\helpers\Url::to(['category/view', 'alias' => $post->category->alias]) ?>">
                                    <?= $post->name?>
                                </a>
                            </h5>
                            <p class="card-text"><?= $post->description ?></p>
                            <div class="text-muted d-flex justify-content-between pt-4">
                                <p class="font-weight-light font-italic">3 комментария</p>
                                <a href="<?= yii\helpers\Url::to(['post/view', 'alias' => $post->alias]) ?>" class="text-primary">
                                    Подробнее
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right ms-2">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>