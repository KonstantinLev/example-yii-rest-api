<?php

use common\rbac\Rbac;
use yii\helpers\Html;
use frontend\widgets\LastUserPosts;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <?php if (Yii::$app->user->can(Rbac::MANAGE_PROFILE, ['user' => $model])): ?>
        <p class="pull-right">
            <?= Html::a('Profile', ['profile/index'], ['class' => 'btn btn-primary']) ?>
        </p>
    <?php endif; ?>

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

    <p class="pull-right">
        <?= Html::a('Create Post', ['user-posts/create', 'user_id' => $model->id], ['class' => 'btn btn-success']) ?>
    </p>

    <h2>My Recent Posts</h2>

    <?= LastUserPosts::widget([
        'user' => $model,
    ]) ?>

</div>