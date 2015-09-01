<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Register */

$this->title = $model->id_number;
$this->params['breadcrumbs'][] = ['label' => 'Registers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="register-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_number], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_number], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_number',
            'lastname',
            'firstname',
            'middlename',
            'address',
            'birthday',
            'birthplace',
            'gender',
            'age',
            'contact_number',
            'grade_level',
            'previous_school',
            'father_name',
            'father_occupation',
            'mother_name',
            'mother_occupation',
            'emergency_contact',
            'relation',
            'telephone_number',
            'username',
            'password',
            'usertype',
        ],
    ]) ?>

</div>
