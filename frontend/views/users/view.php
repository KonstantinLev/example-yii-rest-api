<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <p class="pull-right">
        <?= Html::a('Profile', ['profile/index'], ['class' => 'btn btn-primary']) ?>
    </p>

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="panel panel-default">
        <div class="panel-body">
            <ul>
                <li><?=$model->email?></li>
                <li><?=$model->status?></li>
                <li><?=$model->created_at?></li>
            </ul>
        </div>
    </div>

</div>