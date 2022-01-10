<?php defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="form-group">
    <?php
    if (isset($Icon) && $Icon > 0) {
        $Icon_o = File::getByID($Icon);
        if (!is_object($Icon_o)) {
            unset($Icon_o);
        }
    } ?>
    <?php echo $form->label($view->field('Icon'), t("Icon")); ?>
    <?php echo isset($btFieldsRequired) && in_array('Icon', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo Core::make("helper/concrete/asset_library")->image('ccm-b-servicesbox-Icon-' . $identifier_getString, $view->field('Icon'), t("Choose Image"), $Icon_o); ?>
</div>

<div class="form-group">
    <?php echo $form->label($view->field('Tiltle'), t("Tiltle")); ?>
    <?php echo isset($btFieldsRequired) && in_array('Tiltle', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo $form->text($view->field('Tiltle'), $Tiltle, array (
  'maxlength' => 255,
)); ?>
</div>

<div class="form-group">
    <?php echo $form->label($view->field('Description_1'), t("Description")); ?>
    <?php echo isset($btFieldsRequired) && in_array('Description_1', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo $form->text($view->field('Description_1'), $Description_1, array (
  'maxlength' => 255,
)); ?>
</div>

<?php $cta_ContainerID = 'btServicesbox-cta-container-' . $identifier_getString; ?>
<div class="ft-smart-link" id="<?php echo $cta_ContainerID; ?>">
	<div class="form-group">
		<?php echo $form->label($view->field('cta'), t("CTA")); ?>
	    <?php echo isset($btFieldsRequired) && in_array('cta', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
	    <?php echo $form->select($view->field('cta'), $cta_Options, $cta, array (
  'class' => 'form-control ft-smart-link-type',
)); ?>
	</div>
	
	<div class="form-group">
		<div class="ft-smart-link-options hidden" style="padding-left: 10px;">
			<div class="form-group">
				<?php echo $form->label($view->field('cta_Title'), t("Title")); ?>
			    <?php echo $form->text($view->field('cta_Title'), $cta_Title, []); ?>		
			</div>
			
			<div class="form-group hidden" data-link-type="page">
			<?php echo $form->label($view->field('cta_Page'), t("Page")); ?>
            <small class="required"><?php echo t('Required'); ?></small>
            <?php echo Core::make("helper/form/page_selector")->selectPage($view->field('cta_Page'), $cta_Page); ?>
		</div>

		<div class="form-group hidden" data-link-type="url">
			<?php echo $form->label($view->field('cta_URL'), t("URL")); ?>
            <small class="required"><?php echo t('Required'); ?></small>
            <?php echo $form->text($view->field('cta_URL'), $cta_URL, []); ?>
		</div>

		<div class="form-group hidden" data-link-type="relative_url">
			<?php echo $form->label($view->field('cta_Relative_URL'), t("URL")); ?>
            <small class="required"><?php echo t('Required'); ?></small>
            <?php echo $form->text($view->field('cta_Relative_URL'), $cta_Relative_URL, []); ?>
		</div>

		<div class="form-group hidden" data-link-type="file">
			<?php
			if ($cta_File > 0) {
				$cta_File_o = File::getByID($cta_File);
				if (!is_object($cta_File_o)) {
					unset($cta_File_o);
				}
			} ?>
		    <?php echo $form->label($view->field('cta_File'), t("File")); ?>
            <small class="required"><?php echo t('Required'); ?></small>
            <?php echo Core::make("helper/concrete/asset_library")->file('ccm-b-servicesbox-cta_File-' . $identifier_getString, $view->field('cta_File'), t("Choose File"), $cta_File_o); ?>	
		</div>

		<div class="form-group hidden" data-link-type="image">
			<?php
			if ($cta_Image > 0) {
				$cta_Image_o = File::getByID($cta_Image);
				if (!is_object($cta_Image_o)) {
					unset($cta_Image_o);
				}
			} ?>
			<?php echo $form->label($view->field('cta_Image'), t("Image")); ?>
            <small class="required"><?php echo t('Required'); ?></small>
            <?php echo Core::make("helper/concrete/asset_library")->image('ccm-b-servicesbox-cta_Image-' . $identifier_getString, $view->field('cta_Image'), t("Choose Image"), $cta_Image_o); ?>
		</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	Concrete.event.publish('btServicesbox.cta.open', {id: '<?php echo $cta_ContainerID; ?>'});
	$('#<?php echo $cta_ContainerID; ?> .ft-smart-link-type').trigger('change');
</script>