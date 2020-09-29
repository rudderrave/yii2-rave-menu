<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model ravesoft\menu\models\MenuLink */

$this->title = Yii::t('rave/menu', 'Create Menu Link');
$this->params['breadcrumbs'][] = ['label' => Yii::t('rave/menu', 'Menus'), 'url' => ['/menu/default/index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="menu-link-create">
    <h3 class="lte-hide-title"><?= Html::encode($this->title) ?></h3>
    <?= $this->render('_form', compact('model')) ?>
</div>