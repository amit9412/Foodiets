<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DeliveryPersonnel $model */

$this->title = 'Update Delivery Personnel: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Delivery Personnels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="delivery-personnel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
