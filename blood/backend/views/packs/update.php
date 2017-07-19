<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Packs */

$this->title = 'Update Packs: ' . $model->pack_id;
$this->params['breadcrumbs'][] = ['label' => 'Packs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pack_id, 'url' => ['view', 'id' => $model->pack_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="packs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
