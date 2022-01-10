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
    <?php echo Core::make("helper/concrete/asset_library")->image('ccm-b-explore_card-img-' . $identifier_getString, $view->field('img'), t("Choose Image"), $img_o); ?>
</div>

<div class="form-group">
    <?php echo $form->label($view->field('title'), t("Title")); ?>
    <?php echo isset($btFieldsRequired) && in_array('title', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo $form->text($view->field('title'), $title, array (
  'maxlength' => 255,
)); ?>
</div>

<div class="form-group">
    <?php echo $form->label($view->field('btn'), t("Button")); ?>
    <?php echo isset($btFieldsRequired) && in_array('btn', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo Core::make("helper/form/page_selector")->selectPage($view->field('btn'), $btn); ?>
</div>

<div class="form-group">
    <?php echo $form->label($view->field('btn_text'), t("Button") . " " . t("Text")); ?>
    <?php echo $form->text($view->field('btn_text'), $btn_text, []); ?>
</div>