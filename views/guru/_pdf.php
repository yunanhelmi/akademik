<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Guru */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Gurus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guru-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Guru'.' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        'nama',
        'alamat',
        'no_telp',
        'email:email',
        'nip',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>
