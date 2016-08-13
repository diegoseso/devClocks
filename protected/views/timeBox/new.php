
<div class="form">
<?php $form = $this->beginWidget('CActiveForm'); ?>

    <?php echo $form->errorSummary( $model ); ?>

    <div class="row">
        <?php echo $form->label( $model, 'description' ); ?>
        <?php echo $form->textField( $model, 'description' ); ?>
    </div>
    <div class="row">
        <?php echo $form->label( $model, 'tags' ); ?>
        <?php echo $form->textField( $model, 'tags' ); ?>
    </div>
    <div class="row">
        <?php echo $form->label( $model, 'duration' ); ?>
        <?php echo $form->textField( $model, 'duration' ); ?>
    </div>
    <div class="row submit">
        <?php echo CHtml::submitButton('New'); ?>
    </div>

<?php

$this->endWidget();
?>
