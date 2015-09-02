<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RegisterSearch */
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

            'id_number',
            'lastname',
            'firstname',
            'middlename',
            'address',
            // 'birthday',
            // 'birthplace',
            // 'gender',
            // 'age',
            // 'contact_num',
            // 'grade_level',
            // 'prev_school',
            // 'father_name',
            // 'father_occupation',
            // 'mother_name',
            // 'mother_occupation',
            // 'emerg_name',
            // 'relation',
            // 'tel_num',
            // 'username',
            // 'password',
            // 'usertype',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
