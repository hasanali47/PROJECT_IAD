<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PacksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Packs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="packs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Packs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pack_id',
            'memberMember.member_name',
            'blood_group',
            'packed_date',
            'expiry_date',
            // 'packed_place_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
