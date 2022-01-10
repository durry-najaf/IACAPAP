<?php defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="form-group">
    <?php
    if (isset($icon) && $icon > 0) {
        $icon_o = File::getByID($icon);
        if (!is_object($icon_o)) {
            unset($icon_o);
        }
    } ?>
    <?php echo $form->label($view->field('icon'), t("Icon")); ?>
    <?php echo isset($btFieldsRequired) && in_array('icon', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo Core::make("helper/concrete/asset_library")->image('ccm-b-benefits_cards-icon-' . $identifier_getString, $view->field('icon'), t("Choose Image"), $icon_o); ?>
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
    <?php echo Core::make('editor')->outputBlockEditModeEditor($view->field('desc_1'), $desc_1); ?>
</div>