<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MemberSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="member-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'member_id') ?>

    <?= $form->field($model, 'member_name') ?>

    <?= $form->field($model, 'member_age') ?>

    <?= $form->field($model, 'member_gender') ?>

    <?= $form->field($model, 'member_contact_no') ?>

    <?php // echo $form->field($model, 'member_address') ?>

    <?php // echo $form->field($model, 'member_height') ?>

    <?php // echo $form->field($model, 'member_weight') ?>

    <?php // echo $form->field($model, 'member_bloog_group') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
