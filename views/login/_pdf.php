<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Login */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Login', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Login'.' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        'username',
        'password',
        'authKey',
        'accessToken',
        'role',
        'client_id',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>
