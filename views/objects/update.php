<?php

use app\models\Category;
use kartik\file\FileInput;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Objects */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Objects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="objects-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="objects-form">

        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <div class="row">
            <div class="col-md-12">
                <?= FileInput::widget([
                    'model' => $model,
                    'attribute' => 'upload_image',
                    'pluginOptions' => [
                        'initialPreview'=>[
                            Html::img("/uploads/" . $model->image)
                        ],
                        'overwriteInitial'=>true
                    ]
                ]);?>
            </div>
        </div>

        <?= $form->field($model, 'category_ids')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Category::find()->all(), 'id', 'name'),
            'options' => ['placeholder' => 'Select categories ...', 'multiple' => true],
            'pluginOptions' => [
                'tags' => true,
                'tokenSeparators' => [',', ' '],
                'maximumInputLength' => 10
            ],
        ])->label('Categories'); ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
