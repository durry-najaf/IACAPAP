<?php defined("C5_EXECUTE") or die("Access Denied."); ?>
<?php if (isset($roundedvideo) && trim($roundedvideo) != "") { ?>
    <?php $c = Page::getCurrentPage();
    if ($c->isEditMode()) {
        ?><div style="width: 500px; height: 500px; display: table;" class="ccm-edit-mode-disabled-item">
            <span style="display: table-cell; vertical-align: middle;">
                <?php echo t('Vimeo Video disabled in edit mode.'); ?>
            </span>
        </div><?php
    }
    else {
        ?><iframe src="https://player.vimeo.com/video/<?php echo $roundedvideo; ?>?portrait=0&title=0&byline=0&autoplay=1&loop=1" width="500" height="500" frameborder webkitallowfullscreen mozallowfullscreen allowfullscreen class="responsive-embed rounded-circle"></iframe><?php
    } ?></iframe><?php } ?>