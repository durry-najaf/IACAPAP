<?php defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="form-group">
    <?php
    if (isset($bgimg) && $bgimg > 0) {
        $bgimg_o = File::getByID($bgimg);
        if (!is_object($bgimg_o)) {
            unset($bgimg_o);
        }
    } ?>
    <?php echo $form->label($view->field('bgimg'), t("Background Image")); ?>
    <?php echo isset($btFieldsRequired) && in_array('bgimg', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo Core::make("helper/concrete/asset_library")->image('ccm-b-content_with_bg_img-bgimg-' . $identifier_getString, $view->field('bgimg'), t("Choose Image"), $bgimg_o); ?>
</div>

<div class="form-group">
    <?php echo $form->label($view->field('title'), t("Title")); ?>
    <?php echo isset($btFieldsRequired) && in_array('title', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo $form->text($view->field('title'), $title, array (
  'maxlength' => 255,
)); ?>
</div>

<div class="form-group">
    <?php echo $form->label($view->field('desc_1'), t("Description")); ?>
    <?php echo isset($btFieldsRequired) && in_array('desc_1', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo $form->textarea($view->field('desc_1'), $desc_1, array (
  'rows' => 5,
)); ?>
</div>