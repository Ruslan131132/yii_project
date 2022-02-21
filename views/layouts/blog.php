<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use yii\helpers\Html;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="fontawesome-i2svg-active fontawesome-i2svg-complete">
    <head>
        <base href="/">
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <meta name="description" content="Blog Site">
        <meta name="author" content="Ruslan Khasanshin">
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <!-- Body -->
    <body data-aos-easing="ease" data-aos-duration="600" data-aos-delay="0">
    <?php $this->beginBody() ?>
        <div id="layoutDefault">
            <div id="layoutDefault_content">
                <main>
                    <!-- Navbar-->
                    <nav class="navbar navbar-marketing navbar-expand-lg bg-transparent navbar-light bg-white">
                        <div class="container px-5">
                            <a class="navbar-brand text-primary" href="index.html">Японская кухня БЛОГ</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                                    <line x1="3" y1="12" x2="21" y2="12"></line>
                                    <line x1="3" y1="6" x2="21" y2="6"></line>
                                    <line x1="3" y1="18" x2="21" y2="18"></line>
                                </svg>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto me-lg-5">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html">Главная</a>
                                    </li>
                                    <li class="nav-item dropdown dropdown-xl no-caret">
                                        <a class="nav-link dropdown-toggle" id="navbarDropdownDemos" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Курс
                                            <svg class="svg-inline--fa fa-chevron-right fa-w-10 dropdown-arrow" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up me-lg-n25 me-xl-n15" aria-labelledby="navbarDropdownDemos">
                                            <div class="row g-0">
                                                <div class="col-lg-5 p-lg-3 bg-img-cover overlay overlay-primary overlay-70 d-none d-lg-block" style="background-image: url('assets/img/backgrounds/bg-dropdown-xl.jpeg')">
                                                    <div class="d-flex h-100 w-100 align-items-center justify-content-center">
                                                        <div class="text-white text-center z-1">
                                                            <div class="mb-3">Большой выбор рецептов на любой случай</div>
                                                            <a class="btn btn-white btn-sm text-primary fw-500" href="https://www.justonecookbook.com/recipes/">Посмотреть</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 p-lg-5">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <h6 class="dropdown-header text-primary">Закуски</h6>
                                                            <a class="dropdown-item" href="https://www.justonecookbook.com/edamame/">Эдамаме</a>
                                                            <a class="dropdown-item" href="https://www.justonecookbook.com/gluten-free-karaage/">Курица карааге</a>
                                                            <a class="dropdown-item">Гёдза</a>
                                                            <div class="dropdown-divider border-0"></div>
                                                            <h6 class="dropdown-header text-primary">Напитки</h6>
                                                            <a class="dropdown-item" href="https://www.justonecookbook.com/japanese-iced-coffee/">Кофе со льдом</a>
                                                            <a class="dropdown-item" href="https://www.justonecookbook.com/amazake/">Амазаке</a>
                                                            <a class="dropdown-item" href="https://www.justonecookbook.com/iced-green-tea-latte/">Латте с чаем</a>
                                                            <div class="dropdown-divider border-0"></div>
                                                            <h6 class="dropdown-header text-primary">Завтрак</h6>
                                                            <a class="dropdown-item" href="https://www.justonecookbook.com/ogura-toast/">Ogura Toast</a>
                                                            <a class="dropdown-item" href="https://www.justonecookbook.com/banana-bread/">Банановый хлеб</a>
                                                            <div class="dropdown-divider border-0"></div>
                                                            <h6 class="dropdown-header text-primary">Десерты</h6>
                                                            <a class="dropdown-item" href="https://www.justonecookbook.com/cherry-blossom-madeleines/">Мадлен с вишней</a>
                                                            <a class="dropdown-item" href="https://www.justonecookbook.com/yuzu-sorbet/">Сорбет Юдзу</a>
                                                            <a class="dropdown-item" href="https://www.justonecookbook.com/dorayaki-japanese-red-bean-pancake/">Дораяки</a>
                                                            <div class="dropdown-divider border-0"></div>
                                                            <h6 class="dropdown-header text-primary">Супы</h6>
                                                            <a class="dropdown-item" href="https://www.justonecookbook.com/chanko-nabe-sumo-stew/">Чанко Набэ</a>
                                                            <a class="dropdown-item" href="https://www.justonecookbook.com/corn-potage/">Кукурузный суп</a>
                                                            <div class="dropdown-divider border-0"></div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <h6 class="dropdown-header text-primary">Главное блюдо</h6>
                                                            <a class="dropdown-item" href="https://www.justonecookbook.com/chicken-teriyaki/">Цыпленок терияки</a>
                                                            <a class="dropdown-item" href="https://www.justonecookbook.com/miso-chicken/">Курица Мисо</a>
                                                            <a class="dropdown-item" href="https://www.justonecookbook.com/poke-bowl/">Поке Боул</a>
                                                            <div class="dropdown-divider border-0"></div>
                                                            <h6 class="dropdown-header text-primary">Салаты</h6>
                                                            <a class="dropdown-item" href="https://www.justonecookbook.com/japanese-potato-salad/">Картофельный салат</a>
                                                            <a class="dropdown-item" href="https://www.justonecookbook.com/ume-miso-dressing/">Уме мисо соус</a>
                                                            <a class="dropdown-item" href="https://www.justonecookbook.com/shabu-shabu-salad/">Шабу Шабу</a>
                                                            <a class="dropdown-item" href="https://www.justonecookbook.com/crab-salad-with-ponzu-mayonnaise-dressing/">Кани</a>
                                                            <div class="dropdown-divider border-0"></div>
                                                            <h6 class="dropdown-header text-primary">Гарнир</h6>
                                                            <a class="dropdown-item" href="https://www.justonecookbook.com/pickled-cucumber/">Маринованные огурцы</a>
                                                            <a class="dropdown-item" href="https://www.justonecookbook.com/agedashi-tofu-2/">Агедаси тофу</a>
                                                            <a class="dropdown-item" href="https://www.justonecookbook.com/spinach-with-sesame-sauce/">Шпинат гомаэ</a>
                                                            <div class="dropdown-divider border-0"></div>
                                                            <h6 class="dropdown-header text-primary">Закуски</h6>
                                                            <a class="dropdown-item" href="https://www.justonecookbook.com/nikuman-steamed-pork-buns/">Никуман</a>
                                                            <a class="dropdown-item" href="https://www.justonecookbook.com/sata-andagi/">Сата Андаги</a>
                                                            <a class="dropdown-item" href="https://www.justonecookbook.com/spinach-with-sesame-sauce/">пирог Муси-пан</a>
                                                            <a class="dropdown-item" href="https://www.justonecookbook.com/steamed-cake/">Кани</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown dropdown-xl no-caret">
                                        <a class="nav-link dropdown-toggle" id="navbarDropdownPages" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Страницы
                                            <svg class="svg-inline--fa fa-chevron-right fa-w-10 dropdown-arrow" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end me-lg-n20 me-xl-n15 animated--fade-in-up" aria-labelledby="navbarDropdownPages">
                                            <div class="row g-0">
                                                <div class="col-lg-4 p-lg-5">
                                                    <h6 class="dropdown-header text-primary">Company</h6>
                                                    <a class="dropdown-item" href="page-basic.html">Basic Page</a>
                                                    <a class="dropdown-item" href="page-company-about.html">About</a>
                                                    <a class="dropdown-item" href="page-company-pricing.html">Pricing</a>
                                                    <a class="dropdown-item" href="page-company-contact.html">Contact</a>
                                                    <a class="dropdown-item" href="page-company-team.html">Team</a>
                                                    <a class="dropdown-item" href="page-company-terms.html">Terms</a>
                                                    <div class="dropdown-divider border-0"></div>
                                                    <h6 class="dropdown-header text-primary">Support</h6>
                                                    <a class="dropdown-item" href="page-help-center.html">Help Center</a>
                                                    <a class="dropdown-item" href="page-help-knowledgebase.html">Knowledgebase</a>
                                                    <a class="dropdown-item" href="page-help-message-center.html">Message Center</a>
                                                    <a class="dropdown-item" href="page-help-support-ticket.html">Support Ticket</a>
                                                    <div class="dropdown-divider border-0 d-lg-none"></div>
                                                </div>
                                                <div class="col-lg-4 p-lg-5">
                                                    <h6 class="dropdown-header text-primary">Careers</h6>
                                                    <a class="dropdown-item" href="page-careers-overview.html">Careers List</a>
                                                    <a class="dropdown-item" href="page-careers-listing.html">Position Details</a>
                                                    <div class="dropdown-divider border-0"></div>
                                                    <h6 class="dropdown-header text-primary">Blog</h6>
                                                    <a class="dropdown-item" href="page-blog-overview.html">Overview</a>
                                                    <a class="dropdown-item" href="page-blog-post.html">Post</a>
                                                    <a class="dropdown-item" href="page-blog-archive.html">Archive</a>
                                                    <div class="dropdown-divider border-0"></div>
                                                    <h6 class="dropdown-header text-primary">Portfolio</h6>
                                                    <a class="dropdown-item" href="page-portfolio-grid.html">Grid</a>
                                                    <a class="dropdown-item" href="page-portfolio-large-grid.html">Large Grid</a>
                                                    <a class="dropdown-item" href="page-portfolio-masonry.html">Masonry</a>
                                                    <a class="dropdown-item" href="page-portfolio-case-study.html">Case Study</a>
                                                    <a class="dropdown-item" href="page-portfolio-project.html">Project</a>
                                                    <div class="dropdown-divider border-0 d-lg-none"></div>
                                                </div>
                                                <div class="col-lg-4 p-lg-5">
                                                    <h6 class="dropdown-header text-primary">Error</h6>
                                                    <a class="dropdown-item" href="page-error-400.html">400 Error</a>
                                                    <a class="dropdown-item" href="page-error-401.html">401 Error</a>
                                                    <a class="dropdown-item" href="page-error-404-1.html">404 Error (Option 1)</a>
                                                    <a class="dropdown-item" href="page-error-404-2.html">404 Error (Option 2)</a>
                                                    <a class="dropdown-item" href="page-error-500.html">500 Error</a>
                                                    <a class="dropdown-item" href="page-error-503.html">503 Error</a>
                                                    <a class="dropdown-item" href="page-error-504.html">504 Error</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown no-caret">
                                        <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Диета
                                            <svg class="svg-inline--fa fa-chevron-right fa-w-10 dropdown-arrow" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="navbarDropdownDocs">
                                            <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-ui-kit-pro/quickstart" target="_blank">
                                                <div class="icon-stack bg-primary-soft text-primary me-4">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book-open">
                                                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="small text-gray-500">Documentation</div>
                                                    Usage instructions and reference
                                                </div>
                                            </a>
                                            <div class="dropdown-divider m-0"></div>
                                            <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-ui-kit-pro/components" target="_blank">
                                                <div class="icon-stack bg-primary-soft text-primary me-4">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code">
                                                        <polyline points="16 18 22 12 16 6"></polyline>
                                                        <polyline points="8 6 2 12 8 18"></polyline>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="small text-gray-500">Components</div>
                                                    Code snippets and reference
                                                </div>
                                            </a>
                                            <div class="dropdown-divider m-0"></div>
                                            <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-ui-kit-pro/changelog" target="_blank">
                                                <div class="icon-stack bg-primary-soft text-primary me-4">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                                        <polyline points="14 2 14 8 20 8"></polyline>
                                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                                        <polyline points="10 9 9 9 8 9"></polyline>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="small text-gray-500">Changelog</div>
                                                    Updates and changes
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown no-caret">
                                        <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Тип блюда
                                            <svg class="svg-inline--fa fa-chevron-right fa-w-10 dropdown-arrow" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="navbarDropdownDocs">
                                            <a class="dropdown-item py-3" href="https://www.justonecookbook.com/tags/rice-donburi/" target="_blank">
                                                <div class="icon-stack bg-primary-soft text-primary me-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book-open">
                                                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="small text-gray-500">Рис + Донбури</div>
                                                    Обширная коллекция приготовления
                                                </div>
                                            </a>
                                            <div class="dropdown-divider m-0"></div>
                                            <a class="dropdown-item py-3" href="https://www.justonecookbook.com/tags/party-food/" target="_blank">
                                                <div class="icon-stack bg-primary-soft text-primary me-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code">
                                                        <polyline points="16 18 22 12 16 6"></polyline>
                                                        <polyline points="8 6 2 12 8 18"></polyline>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="small text-gray-500">Еда для вечеринок</div>
                                                    Популярные крылышки терияки и гёдза !
                                                </div>
                                            </a>
                                            <div class="dropdown-divider m-0"></div>
                                            <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-ui-kit-pro/changelog" target="_blank">
                                                <div class="icon-stack bg-primary-soft text-primary me-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                                        <polyline points="14 2 14 8 20 8"></polyline>
                                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                                        <polyline points="10 9 9 9 8 9"></polyline>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="small text-gray-500">Суши</div>
                                                    От California Roll до Temaki Sushi
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <?=
                                    Yii::$app->user->isGuest ? (
                                        Html::tag(
                                                'a',
                                                'Войти' . '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right ms-2">
                                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                                            <polyline points="12 5 19 12 12 19"></polyline>
                                                        </svg>',

                                                [
                                                    'class' => 'btn fw-500 ms-lg-4 btn-primary',
                                                    'href' => \yii\helpers\Url::to(['main/login'])
                                                ]
                                        )
                                    ) : (
                                        '<div class="flex-shrink-0 dropdown">
                                            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">'
                                                . \yii\helpers\Html::img("@web/". Yii::$app->user->identity->img, [
                                                    'class' => 'rounded-circle',
                                                    'width' => '32',
                                                    'height' => '32',
                                                    'alt' => 'Avatar'
                                                ])
                                                .
                                        '<strong class="d-none d-sm-inline"> ' .  Yii::$app->user->identity->name . '</strong>
                                            </a>
                                            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                                                <li><a class="dropdown-item" href="#">'.  Yii::$app->user->identity->email . '</a></li>
                                                <li><a class="dropdown-item" href="#">Настройки</a></li>
                                                <li><a class="dropdown-item" href="#">Профиль</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" href="'.\yii\helpers\Url::to(['main/logout']).'">Выйти</a></li>
                                            </ul>
                                        </div>'
                                    )
                                ?>
                            </div>
                        </div>
                    </nav>

                    <?= $content ?>
                </main>
            </div>
            <div id="layoutDefault_footer">
                <footer class="footer pt-10 pb-5 mt-auto bg-light footer-light">
                    <div class="container px-5">
                        <div class="row gx-5">
                            <div class="col-lg-3">
                                <div class="footer-brand">БЛОГ</div>
                                <div class="mb-3">Японская кухня</div>
                                <div class="icon-list-social mb-5">
                                    <a class="icon-list-social-link" href="#!">
                                        <svg class="svg-inline--fa fa-instagram fa-w-14" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                                        </svg>
                                    </a>
                                    <a class="icon-list-social-link" href="#!">
                                        <svg class="svg-inline--fa fa-facebook fa-w-16" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path>
                                        </svg>
                                    </a>
                                    <a class="icon-list-social-link" href="#!">
                                        <svg class="svg-inline--fa fa-github fa-w-16" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path>
                                        </svg>
                                    </a>
                                    <a class="icon-list-social-link" href="#!">
                                        <svg class="svg-inline--fa fa-twitter fa-w-16" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="row gx-5">
                                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                        <div class="text-uppercase-expanded text-xs mb-4">Культура</div>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2">
                                                <a href="#!">РАЗВЛЕЧЕНИЯ</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="#!">СТОЛОВАЯ</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="#!">ТРАДИЦИИ</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="#!">ВАСЁКУ 101</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                        <div class="text-uppercase-expanded text-xs mb-4">Узнайте больше</div>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2">
                                                <a href="#!">ПУТЕШЕСТВОВАТЬ</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="#!">СКЛАД</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="#!">ИНСТРУКЦИИ</a>
                                            </li>
                                            <li>
                                                <a href="#!">МЕРЧ</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                                        <div class="text-uppercase-expanded text-xs mb-4">Подробности</div>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2">
                                                <a href="#!">ДОСТУПНОСТЬ</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="#!">РАЗРЕШЕНИЯ НА СОДЕРЖАНИЕ</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="#!">ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="#!">УСЛОВИЯ</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="text-uppercase-expanded text-xs mb-4">Узнать больше</div>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2">
                                                <a href="#!">О НАС</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="#!">СОТРУДНИЧАТЬ</a>
                                            </li>
                                            <li>
                                                <a href="#!">ЧАСТО ЗАДАВАЕМЫЕ ВОПРОСЫ</a>
                                            </li>
                                            <li>
                                                <a href="#!">КОНТАКТЫ</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-5">
                        <div class="row gx-5 align-items-center">
                            <div class="col-md-6 small">Copyright © Проект Yii · Руслан</div>
                            <div class="col-md-6 text-md-end small">
                                <a href="#!">Политика конфиденциальности</a>
                                ·
                                <a href="#!">Условия &amp; Положения</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <sb-customizer project="sb-ui-kit-pro" _nghost-iob-c10="" ng-version="11.1.2">
        </sb-customizer>
    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>