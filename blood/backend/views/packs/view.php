<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Packs */

$this->title = $model->pack_id;
$this->params['breadcrumbs'][] = ['label' => 'Packs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="packs-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pack_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pack_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'pack_id',
            'member_member_id',
            'blood_group',
            'packed_date',
            'expiry_date',
            'packed_place_name',
        ],
    ]) ?>

</div>
