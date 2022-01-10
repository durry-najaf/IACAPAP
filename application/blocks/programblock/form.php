<?php defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="form-group">
    <?php echo $form->label($view->field('blacktitle'), t("Black Title")); ?>
    <?php echo isset($btFieldsRequired) && in_array('blacktitle', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo $form->text($view->field('blacktitle'), $blacktitle, array (
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

<div class="form-group">
    <?php echo $form->label($view->field('description_1'), t("Description")); ?>
    <?php echo isset($btFieldsRequired) && in_array('description_1', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo $form->textarea($view->field('description_1'), $description_1, array (
  'rows' => 5,
)); ?>
</div>

<?php $buttontitle_ContainerID = 'btProgramblock-buttontitle-container-' . $identifier_getString; ?>
<div class="ft-smart-link" id="<?php echo $buttontitle_ContainerID; ?>">
	<div class="form-group">
		<?php echo $form->label($view->field('buttontitle'), t("Button Title")); ?>
	    <?php echo isset($btFieldsRequired) && in_array('buttontitle', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
	    <?php echo $form->select($view->field('buttontitle'), $buttontitle_Options, $buttontitle, array (
  'class' => 'form-control ft-smart-link-type',
)); ?>
	</div>
	
	<div class="form-group">
		<div class="ft-smart-link-options hidden" style="padding-left: 10px;">
			<div class="form-group">
				<?php echo $form->label($view->field('buttontitle_Title'), t("Title")); ?>
			    <?php echo $form->text($view->field('buttontitle_Title'), $buttontitle_Title, []); ?>		
			</div>
			
			<div class="form-group hidden" data-link-type="page">
			<?php echo $form->label($view->field('buttontitle_Page'), t("Page")); ?>
            <small class="required"><?php echo t('Required'); ?></small>
            <?php echo Core::make("helper/form/page_selector")->selectPage($view->field('buttontitle_Page'), $buttontitle_Page); ?>
		</div>

		<div class="form-group hidden" data-link-type="url">
			<?php echo $form->label($view->field('buttontitle_URL'), t("URL")); ?>
            <small class="required"><?php echo t('Required'); ?></small>
            <?php echo $form->text($view->field('buttontitle_URL'), $buttontitle_URL, []); ?>
		</div>

		<div class="form-group hidden" data-link-type="relative_url">
			<?php echo $form->label($view->field('buttontitle_Relative_URL'), t("URL")); ?>
            <small class="required"><?php echo t('Required'); ?></small>
            <?php echo $form->text($view->field('buttontitle_Relative_URL'), $buttontitle_Relative_URL, []); ?>
		</div>

		<div class="form-group hidden" data-link-type="file">
			<?php
			if ($buttontitle_File > 0) {
				$buttontitle_File_o = File::getByID($buttontitle_File);
				if (!is_object($buttontitle_File_o)) {
					unset($buttontitle_File_o);
				}
			} ?>
		    <?php echo $form->label($view->field('buttontitle_File'), t("File")); ?>
            <small class="required"><?php echo t('Required'); ?></small>
            <?php echo Core::make("helper/concrete/asset_library")->file('ccm-b-programblock-buttontitle_File-' . $identifier_getString, $view->field('buttontitle_File'), t("Choose File"), $buttontitle_File_o); ?>	
		</div>

		<div class="form-group hidden" data-link-type="image">
			<?php
			if ($buttontitle_Image > 0) {
				$buttontitle_Image_o = File::getByID($buttontitle_Image);
				if (!is_object($buttontitle_Image_o)) {
					unset($buttontitle_Image_o);
				}
			} ?>
			<?php echo $form->label($view->field('buttontitle_Image'), t("Image")); ?>
            <small class="required"><?php echo t('Required'); ?></small>
            <?php echo Core::make("helper/concrete/asset_library")->image('ccm-b-programblock-buttontitle_Image-' . $identifier_getString, $view->field('buttontitle_Image'), t("Choose Image"), $buttontitle_Image_o); ?>
		</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	Concrete.event.publish('btProgramblock.buttontitle.open', {id: '<?php echo $buttontitle_ContainerID; ?>'});
	$('#<?php echo $buttontitle_ContainerID; ?> .ft-smart-link-type').trigger('change');
</script>