<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
// $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <?php include('head.php') ?>

</head>

<body data-sidebar="dark">
    <?php $this->beginBody() ?>
    <div id="layout-wrapper">

        <?php include('header.php') ?>

        <?php include('left-sidebar.php') ?>

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <?= $content ?>
                </div>
            </div>
        </div>

        <?php include('footer.php') ?>
    </div>

    <?php $this->endBody() ?>
</body>
<?php include('scripts.php') ?>

</html>
<?php $this->endPage() ?>