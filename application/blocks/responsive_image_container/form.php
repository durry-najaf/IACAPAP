<?php defined("C5_EXECUTE") or die("Access Denied."); ?>

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
    <?php echo Core::make("helper/concrete/asset_library")->image('ccm-b-responsive_image_container-img-' . $identifier_getString, $view->field('img'), t("Choose Image"), $img_o); ?>
</div>