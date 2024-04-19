<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DeliveryPersonnel $model */

$this->title = 'Create Delivery Personnel';
$this->params['breadcrumbs'][] = ['label' => 'Delivery Personnels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="delivery-personnel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
