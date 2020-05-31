<?php

use yii\widgets\ActiveForm;

use yii\helpers\Html;

$this->registerCssFile('@web/css/news.css', ['depends' => 'yii\web\YiiAsset']);
$this->registerJsFile('@web/js/basic.js', ['depends' => 'yii\web\YiiAsset']);
?>

<h1 class="test"> <p><strong>Вызов ректора  <i>#остаюсьдома</i></strong> </p></h1>

<h1 class="news"> <p> <li>  Призываю весь коллектив – как студентов, так и сотрудников – принять участие в общем вызове сообщества Эстонского Университета Предпринимательства Майнор.</li></p></h1>
<br>
<?php
echo"<img src=\"https://is.eek.ee/imgs/EEK.svg\"/>";
?>

<br><br>

<?= Html::submitButton('Подробнее >>>', ['class' => 'btn btn-primary ', ]) ?>




<br>
<?php




        echo $new; ?>
    <?php
        echo $ne; ?>





    <?php

    $form = ActiveForm::begin();
    echo '<h4 class="addnews">Добавить новость:</h4>';

    echo $form->field($model, 'new')->label('Заголовок ');
    echo $form->field($model, 'ne')->label('Содержание')->textarea(['rows' => 3]);

    ?>


        <?= Html::submitButton('Опубликовать', ['class' => 'btn btn-primary ', ]) ?>




    <?php ActiveForm::end(); ?>

