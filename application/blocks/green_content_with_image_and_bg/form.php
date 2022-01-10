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
    <?php echo Core::make("helper/concrete/asset_library")->image('ccm-b-green_content_with_image_and_bg-bgimg-' . $identifier_getString, $view->field('bgimg'), t("Choose Image"), $bgimg_o); ?>
</div>

<div class="form-group">
    <?php echo $form->label($view->field('blacktitle'), t("Black Title")); ?>
    <?php echo isset($btFieldsRequired) && in_array('blacktitle', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo $form->text($view->field('blacktitle'), $blacktitle, array (
  'maxlength' => 255,
)); ?>
</div>

<div class="form-group">
    <?php echo $form->label($view->field('greentitle'), t("Green Title")); ?>
    <?php echo isset($btFieldsRequired) && in_array('greentitle', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo $form->text($view->field('greentitle'), $greentitle, array (
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

<div class="form-group">
    <?php
    if (isset($img) && $img > 0) {
        $img_o = File::getByID($img);
        if (!is_object($img_o)) {
            unset($img_o);
        }
    } ?>
    <?php echo $form->label($view->field('img'), t("Image")); ?>
    <?php echo isset($btFieldsRequired) && in_array('img', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo Core::make("helper/concrete/asset_library")->image('ccm-b-green_content_with_image_and_bg-img-' . $identifier_getString, $view->field('img'), t("Choose Image"), $img_o); ?>
</div>