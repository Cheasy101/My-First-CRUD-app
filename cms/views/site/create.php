<?php

use yii\helpers\html;
use yii\widgets\ActiveForm;
use app\models\Posts;

/** @var yii\web\View $this */

$this->title = 'My CRUD app';
?>

<div class="site-index">

    <h1>Создайте заметку</h1>

    <div class="body-content">
        <?php $form = ActiveForm::begin() ?>
        <div class="row">
            <div class="Form-group">
                <div class="col-lg-6">
                    <?=
                    $form->field($post, 'title'); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="Form-group">
                <div class="col-lg-6">
                    <?= $form->field($post, 'description') -> textarea(['rows' => '6']); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="Form-group">
                <div class="col-lg-6">
<!--                    //todo потом можно попробовать поменять "марки" категорий на более подхожящие-->
                    <?php $items = ['Срочное' => 'Срочное','Важное' => 'Важное','Напоминание' => 'Напоминание',]; ?>
                    <?= $form->field($post, 'category') -> dropDownList($items,['prompt' => 'Выберите пожалуйста']); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="Form-group">
                <div class="col-lg-6">
                    <div class="col-lg-3" style="margin-top: 10px ">
                    <?= Html::submitButton('Создать заметку', ['class' => 'btn btn-primary']); ?>
                    </div>
                    <div class="col-lg-2" >
                        <a style="margin-top: 10px " href="<?php echo  yii::$app->homeUrl;?>" class="btn btn-primary" >Обратно</a>
                    </div>
                </div>
            </div>
        </div>

        <?php ActiveForm::end() ?>
    </div>
</div>
