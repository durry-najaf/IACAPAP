<?php defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="form-group">
    <?php echo $form->label($view->field('code'), t("code")); ?>
    <?php echo isset($btFieldsRequired) && in_array('code', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo $form->textarea($view->field('code'), $code, array (
  'rows' => 5,
)); ?>
</div>

<div class="form-group">
    <?php echo $form->label($view->field('quick'), t("quick")); ?>
    <?php echo isset($btFieldsRequired) && in_array('quick', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo $form->textarea($view->field('quick'), $quick, array (
  'rows' => 5,
)); ?>
</div>

<div class="form-group">
    <?php echo $form->label($view->field('what'), t("what you see")); ?>
    <?php echo isset($btFieldsRequired) && in_array('what', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo Core::make('editor')->outputBlockEditModeEditor($view->field('what'), $what); ?>
</div>