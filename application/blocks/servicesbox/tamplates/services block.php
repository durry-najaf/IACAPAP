<?php defined("C5_EXECUTE") or die("Access Denied."); ?>
<?php if ($Icon) { ?>
<div class="service-box ">
 <div class="icon"><img src="<?php echo $Icon->getURL(); ?>" alt="<?php echo $Icon->getTitle(); ?>"/></div><?php } ?>
<?php if (isset($Tiltle) && trim($Tiltle) != "") { ?>
    <h5><?php echo h($Tiltle); ?></h5><?php } ?>
<?php if (isset($Description_1) && trim($Description_1) != "") { ?>
    <p><?php echo h($Description_1); ?></p><?php } ?>
<?php
if (trim($cta_URL) != "") { ?>
    <button class="btn btn-primary"><?php
	$cta_Attributes = [];
	$cta_Attributes['href'] = $cta_URL;
	$cta_AttributesHtml = join(' ', array_map(function ($key) use ($cta_Attributes) {
		return $key . '="' . $cta_Attributes[$key] . '"';
	}, array_keys($cta_Attributes)));
	echo sprintf('<a %s>%s</a>', $cta_AttributesHtml, $cta_Title); ?></button></div><?php
} ?>