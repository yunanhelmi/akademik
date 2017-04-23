<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Login */

$this->title = 'Update User: ' . ' ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Login', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="login-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
