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
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo $post->title;?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo $post->description;?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo $post->category;?>
            </li>
        </ul>

        <div class="row">
            <a style="margin-top: 10px " href="<?php echo  yii::$app->homeUrl;?>" class="btn "  size="20px">Обратно</a>
<!--            не получилось нормально стилизовать -->
        </div>

    </div>
</div>
