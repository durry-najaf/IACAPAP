<?php defined("C5_EXECUTE") or die("Access Denied."); ?>
<?php
if (trim($link_URL) != "") { ?>
    <div class="btn btn-primary btnWrapper"<?php
	$link_Attributes = [];
	$link_Attributes['href'] = $link_URL;
	$link_AttributesHtml = join(' ', array_map(function ($key) use ($link_Attributes) {
		return $key . '="' . $link_Attributes[$key] . '"';
	}, array_keys($link_Attributes)));
	echo sprintf('<a %s>%s</a>', $link_AttributesHtml, $link_Title); ?></div><?php
} ?>
<style>

.btnWrapper{
    background: #ec9069;
    border: none;
    border-bottom: 3px solid #c3683f;
    height: 52px;
    width: 169px;
}
.btnWrapper:hover{
    background: #c3683f;
    border: none;
    border-bottom: 3px solid #c3683f;
    color: #f5f5f5;
}
.btn.btn-primary.btnWrapper {
    padding: 14px;
}
</style>