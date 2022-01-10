<?php defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="form-group">
    <?php
    if (isset($image) && $image > 0) {
        $image_o = File::getByID($image);
        if (!is_object($image_o)) {
            unset($image_o);
        }
    } ?>
    <?php echo $form->label($view->field('image'), t("Image")); ?>
    <?php echo isset($btFieldsRequired) && in_array('image', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo Core::make("helper/concrete/asset_library")->image('ccm-b-responsive_img_container-image-' . $identifier_getString, $view->field('image'), t("Choose Image"), $image_o); ?>
</div>