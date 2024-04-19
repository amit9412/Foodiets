<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\SuperAdmin $model */

$this->title = 'Create Super Admin';
$this->params['breadcrumbs'][] = ['label' => 'Super Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="super-admin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
