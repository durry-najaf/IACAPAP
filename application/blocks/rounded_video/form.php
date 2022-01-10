<?php defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="form-group">
    <?php echo $form->label($view->field('roundedvideo'), t("rounded video")); ?>
    <?php echo isset($btFieldsRequired) && in_array('roundedvideo', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo $form->text($view->field('roundedvideo'), $roundedvideo, array (
  'maxlength' => 255,
)); ?>
</div>