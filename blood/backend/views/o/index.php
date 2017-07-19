<?php
use yii\helpers\Html;
use yii\grid\GridView;


  ?>

<h1>O</h1>
</p>

<?=
 GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        //'rs_id',
        'memberMember.member_name',

        'blood_group'

    //    ['class' => 'yii\grid\ActionColumn'],
    ],
]); ?>
</div>
