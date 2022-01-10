<?php defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="form-group">
    <?php echo $form->label($view->field('orangetitle'), t("Orange Title")); ?>
    <?php echo isset($btFieldsRequired) && in_array('orangetitle', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo $form->text($view->field('orangetitle'), $orangetitle, array (
  'maxlength' => 255,
)); ?>
</div>