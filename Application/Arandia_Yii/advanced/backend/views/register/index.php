<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RegisterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Registers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="register-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Register', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'lastname',
            'firstname',
            'middlename',
            'address',
            // 'birthday',
            // 'birthplace',
            // 'gender',
            // 'age',
            // 'contact_number',
            // 'grade_level',
            // 'previous_school',
            // 'father_name',
            // 'father_occupation',
            // 'mother_name',
            // 'mother_occupation',
            // 'guardian',
            // 'relation',
            // 'telephone_number',
            // 'username',
            // 'password',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
