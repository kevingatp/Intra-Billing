<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;
use kartik\builder\Form;

/* @var $this yii\web\View */
/* @var $model app\models\Billing */
/* @var $form yii\widgets\ActiveForm */

$form = ActiveForm::begin(['type' => ActiveForm::TYPE_VERTICAL]);
?>

<div class="billing-form">

    <div class="billing-header"><h2>FORM - ADD BILLING</h2></div>
    <?php

    echo Form::widget([
        'model' => $model,
        'form' => $form,
        'columns' => 2,
        'compactGrid' => true,
        'attributes' => [
            'item_name' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Insert the item name, e.g: Ban Luar Bridgestone']],
            'item_total' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Insert the total item, e.g: 1']],            
        ]
    ]);

    echo Form::widget([
        'model' => $model,
        'form' => $form,
        'columns' => 3,
        'compactGrid' => true,
        'attributes' => [
            'item_code' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Insert the item code, e.g: G611 T 11 R22.5 Tubeless']],
            'total_price' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Insert the total price, e.g: 4000000', 'id' => 'total-price-id']],
            'invoice' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Insert the invoice number, e.g: 7821972191']]            
        ]
    ]);

    echo Form::widget([
        'model' => $model,
        'form' => $form,
        'columns' => 2,
        'compactGrid' => true,
        'attributes' => [
            'driver' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Insert the driver name, e.g: Kevin Pardosi']],
            'fleet' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Insert the bus license plate, e.g: BK 2019 MDN', 'id' => 'license-plate-id']],
        ]
    ]);

    echo Form::widget([
        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'compactGrid' => true,
        'attributes' => [
            'note' => ['type' => Form::INPUT_TEXTAREA, 'options' => ['placeholder' => 'Insert the driver name, e.g: Kevin Pardosi']]
        ]
    ]);

    echo '<div class="text-right">'
    . Html::resetButton('<i class="glyphicon glyphicon-refresh"></i> Reset',
            [
                'class' => 'btn btn-default'
            ]
    )
    . ' '
    . Html::submitButton('<i class="glyphicon glyphicon-floppy-save"></i> Submit',
            [
                'class' => 'btn btn-primary', 'id' => 'btn-create-bp'
            ]
    )
    . '</div>';
    ActiveForm::end();
    ?>
</div>
