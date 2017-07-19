<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Member;
use yii\helpers\ArrayHelper;
//use dosamigos\datepicker\DatePicker

/* @var $this yii\web\View */
/* @var $model backend\models\Packs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="packs-form">

    <?php $form = ActiveForm::begin(); ?>

    
    <?= $form->field($model, 'member_member_id')->dropDownList(
      ArrayHelper::map(Member::find()->all(),'member_id','member_name'),['prompt'=>'Select Student']
      ) ?>

    <?= $form->field($model, 'blood_group')->dropDownList([ 'A+' => 'A+', 'B+' => 'B+', 'AB+' => 'AB+', 'O+' => 'O+', 'A-' => 'A-', 'B-' => 'B-', 'AB-' => 'AB-', 'O-' => 'O-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'packed_date')->textInput(
/*
      DatePicker::className(),[
        'inline'=>false,
        'clientOptions'=>[
          'autoclose'=>true,
          'format'=>'yyyy-m-d'
        ]
      ]*/
      ) ?>

    <?= $form->field($model, 'expiry_date')->textInput() ?>

    <?= $form->field($model, 'packed_place_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
