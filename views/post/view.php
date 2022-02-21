<?php

/** @var yii\web\View $this */
/** @var $post - Переданная на представление переменная */

$this->title = 'Post · '. $post->alias
?>

<div class="container">
    <div class="row p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <?= $post->header ?>
        <div class="col-md-6 d-none d-md-block p-0">
            <?= \yii\helpers\Html::img("@web/{$post->img}", ['class' => 'img-fluid']) ?>
        </div>
    </div>

    <div class="row g-5">
        <div class="col-md-8">
            <article class="blog-post">
                <?= $post->body ?>
            </article>
        </div>

        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4">
                    <h4 class="fst-italic">Следующие статьи</h4>
                </div>
                <div class="row">
                    <?php foreach ($next_posts as $post): ?>
                        <div class="col-sm-6 col-md-12 px-md-5 my-md-3">
                            <div class="card">
                                <?= \yii\helpers\Html::img("@web/{$post->img}", [
                                    'class' => 'bd-placeholder-img card-img-top',
                                    'width' => '100%',
                                    'height' => '180',
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
    </div>
</div>