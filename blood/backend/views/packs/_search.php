<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PacksSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="packs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pack_id') ?>

    <?= $form->field($model, 'member_member_id') ?>

    <?= $form->field($model, 'blood_group') ?>

    <?= $form->field($model, 'packed_date') ?>

    <?= $form->field($model, 'expiry_date') ?>

    <?php // echo $form->field($model, 'packed_place_name') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
