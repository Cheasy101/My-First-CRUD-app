<?php

use yii\helpers\html;

/** @var yii\web\View $this */

$this->title = 'My CRUD app';
?>
<div class="site-index">
<?php if(Yii::$app->session->hasFlash('message')) ?>
    <div class="alert alert-dismissible alert-success">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <?echo Yii::$app->session->getFlash('message')?>
    </div>

    <div> </div>




    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Добро пожаловать в мои заметки!</h1>
<!--        //при желании можно менять цвета прямо здесь-->
    </div>

    <div class="row">
        <span style="margin-bottom: 20px"  ><?= Html::a('Создать заметку',['/site/create'],['class' => 'btn btn-primary'])?> </span>
    </div>

    <div class="body-content">

        <div class="row">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Тема</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Тип Заметки</th>
                    <th scope="col">Действие</th>
                </tr>
                </thead>
                <tbody>
                <?php if (count($posts) > 0): ?>
                <?php foreach ($posts as $post): ?>
                <tr class="table-active">
                    <th scope="row"> <?php echo $post->id;?> </th>
                    <td><?php echo $post->title;?></td>
                    <td><?php echo $post->description;?></td>
                    <td><?php echo $post->category;?></td>
                    <td>
                        <span><?= Html::a('Просмотр',['view','id'=> $post->id], ['class' => 'btn btn-primary']) ?></span>
                        <span><?= Html::a('Изменить',['update','id'=> $post->id], ['class' => 'btn btn-default']) ?></span>
                        <span><?= Html::a('Удалить',['delete','id'=> $post->id], ['class' => 'btn btn-danger']) ?></span>
<!--                        почему-то у лейблов стили слетели, а у батнов все работает-->
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php else: ?>
                <tr>
                    <td>No records found!</td>
                </tr>
                <?php  endif; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
