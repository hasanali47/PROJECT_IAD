<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Packs */

$this->title = 'Create Packs';
$this->params['breadcrumbs'][] = ['label' => 'Packs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="packs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
