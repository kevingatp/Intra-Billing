<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Billing */

$this->title = 'Create Billing';
$this->params['breadcrumbs'][] = ['label' => 'Billings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="billing-create">

    <h2><!-- Html::encode($this->title) --></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
