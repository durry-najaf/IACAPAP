<?php defined("C5_EXECUTE") or die("Access Denied."); ?>
<?php if (isset($blacktitle) && trim($blacktitle) != "") { ?>
    <div class="upcoming-sections"><div class="left-content"> <h3><?php echo h($blacktitle); ?></h3><?php } ?>
<?php if (isset($orangetitle) && trim($orangetitle) != "") { ?>
    <h1><?php echo h($orangetitle); ?></h1><?php } ?>
<?php if (isset($description_1) && trim($description_1) != "") { ?>
    <h6><?php echo h($description_1); ?></h6><?php } ?>
<?php
if (trim($buttontitle_URL) != "") { ?>
     <button class="btn btn-primary orange-btn"><?php
	$buttontitle_Attributes = [];
	$buttontitle_Attributes['href'] = $buttontitle_URL;
	$buttontitle_AttributesHtml = join(' ', array_map(function ($key) use ($buttontitle_Attributes) {
		return $key . '="' . $buttontitle_Attributes[$key] . '"';
	}, array_keys($buttontitle_Attributes)));
	echo sprintf('<a %s>%s</a>', $buttontitle_AttributesHtml, $buttontitle_Title); ?></button>
                        </div>
                    </div></div><?php
} ?>
<style>
button.btn.btn-primary.orange-btn a {
    color: #fff;
}
.upcoming-sections .left-content h3 {
    font-weight: bold;
    font-size: 24px;
}
.upcoming-sections .left-content h1 {
    line-height: 44px;
    font-weight: bold;
    font-size: 30px;
    color: #ec9069;
}
.upcoming-sections .left-content h6 {
    font-size: 16px;
    line-height: 30px;
}
</style>