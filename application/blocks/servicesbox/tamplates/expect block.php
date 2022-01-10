<?php defined("C5_EXECUTE") or die("Access Denied."); ?>
<?php if ($icon) { ?>
    <div class="expect-section"><div class="expect-card"><div class="icon"><img src="<?php echo $icon->getURL(); ?>" alt="<?php echo $icon->getTitle(); ?>"/></div><?php } ?>
<?php if (isset($title) && trim($title) != "") { ?>
    <h3><?php echo h($title); ?></h3><?php } ?>
<?php if (isset($desc_1) && trim($desc_1) != "") { ?>
    <p><?php echo h($desc_1); ?></p><?php } ?>
<?php
if (trim($btn_URL) != "") { ?>
    <small><?php
	$btn_Attributes = [];
	$btn_Attributes['href'] = $btn_URL;
	$btn_AttributesHtml = join(' ', array_map(function ($key) use ($btn_Attributes) {
		return $key . '="' . $btn_Attributes[$key] . '"';
	}, array_keys($btn_Attributes)));
	echo sprintf('<a %s>%s</a>', $btn_AttributesHtml, $btn_Title); ?></small></div><?php
} ?>
<style>
.expect-section .expect-card small a {
    font-size: 18px;
    color: #ea9169;
    margin-top: 50px;
}
.expect-section .expect-card:hover small a{
	color:#fff;
	}
</style>