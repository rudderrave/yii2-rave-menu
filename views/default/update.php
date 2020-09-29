<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model ravesoft\menu\models\Menu */

$this->title = Yii::t('rave', 'Update "{item}"', ['item' => $model->title]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('rave/menu', 'Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', compact('model')) ?>

</div>
