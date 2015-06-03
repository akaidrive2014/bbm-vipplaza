<?php echo $this->renderPartial('menu');?>
    <h1>Put Sku</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('contact'); ?>
    </div>

<?php else: ?>

    <p>
        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
    </p>

    <div class="form">

        <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'putsku-form',
            'enableClientValidation'=>true,
            'clientOptions'=>array(
                'validateOnSubmit'=>true,
            ),
        )); ?>

        <p class="note">Fields with <span class="required">*</span> are required.</p>

        <?php echo $form->errorSummary($model); ?>

        <div class="row">
            <?php echo $form->labelEx($model,'file_name'); ?>
            <?php echo $form->textField($model,'file_name',array('size'=>35)); ?>.txt
            <?php echo $form->error($model,'file_name'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'slug'); ?>
            <?php echo $form->textField($model,'slug',array('size'=>50)); ?>.html
            <?php echo $form->error($model,'slug'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'periode'); ?>
            <?php echo $form->textField($model,'periode',array('size'=>35)); ?>.txt
            <?php echo $form->error($model,'periode'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'sku_list'); ?>
            <?php echo $form->textArea($model,'sku_list',array('rows'=>6, 'cols'=>50)); ?>
            <?php echo $form->error($model,'sku_list'); ?>
        </div>


        <div class="row buttons">
            <?php echo CHtml::submitButton('Submit'); ?>
        </div>

        <?php $this->endWidget(); ?>

    </div><!-- form -->

<?php endif; ?>