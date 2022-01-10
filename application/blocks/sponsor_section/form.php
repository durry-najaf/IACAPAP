<?php defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="form-group">
    <?php echo $form->label($view->field('title'), t("Title") . ' <i class="fa fa-question-circle launch-tooltip" data-original-title="' . t("title") . '"></i>'); ?>
    <?php echo isset($btFieldsRequired) && in_array('title', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo $form->textarea($view->field('title'), $title, array (
  'rows' => 5,
)); ?>
</div>

<div class="form-group">
    <?php echo $form->label($view->field('Description_1'), t("Description")); ?>
    <?php echo isset($btFieldsRequired) && in_array('Description_1', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo $form->text($view->field('Description_1'), $Description_1, array (
  'maxlength' => 255,
)); ?>
</div>