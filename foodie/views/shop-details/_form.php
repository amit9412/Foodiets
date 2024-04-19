<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ShopDetails $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="shop-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'owner_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shop_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'landline_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shop_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'GST')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shop_documents')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'certification')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
