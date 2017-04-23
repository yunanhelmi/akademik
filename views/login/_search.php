<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LoginSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-login-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true, 'placeholder' => 'Username']) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true, 'placeholder' => 'Password']) ?>

    <?= $form->field($model, 'authKey')->textInput(['maxlength' => true, 'placeholder' => 'AuthKey']) ?>

    <?= $form->field($model, 'accessToken')->textInput(['maxlength' => true, 'placeholder' => 'AccessToken']) ?>

    <?php /* echo $form->field($model, 'role')->textInput(['maxlength' => true, 'placeholder' => 'Role']) */ ?>

    <?php /* echo $form->field($model, 'client_id')->textInput(['maxlength' => true, 'placeholder' => 'Client']) */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
