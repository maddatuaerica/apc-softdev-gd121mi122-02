<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\teacher;

/* @var $this yii\web\View */
/* @var $model app\models\Subject */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subject-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Subject_code')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'Subject_description')->textInput(['maxlength' => 45]) ?>

	<?= $form->field($model, 'Teacher_id')->dropDownList(
		ArrayHelper::map(Teacher::find()->all(),'Teacher_id','Teacher_lastname'),
		['prompt' =>'Select Teacher']
	)
	?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
