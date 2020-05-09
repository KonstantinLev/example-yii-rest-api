<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\User */
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <?= Html::a(Html::encode($model->username), ['view', 'id' => $model->id]) ?>
    </div>
    <div class="panel-body">
        <ul>
            <li><?=$model->email?></li>
            <li><?=$model->status?></li>
            <li><?=$model->created_at?></li>
        </ul>
    </div>
</div>