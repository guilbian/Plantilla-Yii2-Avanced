<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pais */

$this->title = Yii::t('app', 'Create Pais');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pais'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pais-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
