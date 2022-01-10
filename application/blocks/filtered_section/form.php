<?php defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="form-group">
    <?php echo $form->label($view->field('titleone'), t("Title 1")); ?>
    <?php echo isset($btFieldsRequired) && in_array('titleone', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo $form->textarea($view->field('titleone'), $titleone, array (
  'rows' => 5,
)); ?>
</div>

<div class="form-group">
    <?php echo $form->label($view->field('titletwo'), t("Title 2")); ?>
    <?php echo isset($btFieldsRequired) && in_array('titletwo', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo $form->text($view->field('titletwo'), $titletwo, array (
  'maxlength' => 255,
)); ?>
</div>

<div class="form-group">
    <?php echo $form->label($view->field('orangetitle'), t("Orange Title")); ?>
    <?php echo isset($btFieldsRequired) && in_array('orangetitle', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo $form->text($view->field('orangetitle'), $orangetitle, array (
  'maxlength' => 255,
)); ?>
</div>