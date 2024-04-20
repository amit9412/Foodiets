<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\SuperAdmin $model */

$this->title = 'Update Super Admin: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Super Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="super-admin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
