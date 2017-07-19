<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Member */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="member-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'member_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'member_age')->textInput() ?>

    <?= $form->field($model, 'member_gender')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'member_contact_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'member_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'member_height')->textInput() ?>

    <?= $form->field($model, 'member_weight')->textInput() ?>

    <?= $form->field($model, 'member_bloog_group')->dropDownList([ 'O+' => 'O+', 'A+' => 'A+', 'B+' => 'B+', 'AB+' => 'AB+', 'O-' => 'O-', 'A-' => 'A-', 'B-' => 'B-', 'AB-' => 'AB-', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
