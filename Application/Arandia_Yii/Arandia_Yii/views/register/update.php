<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Register */

$this->title = 'Update Register: ' . ' ' . $model->id_number;
$this->params['breadcrumbs'][] = ['label' => 'Registers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_number, 'url' => ['view', 'id' => $model->id_number]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="register-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
