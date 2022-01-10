<?php defined("C5_EXECUTE") or die("Access Denied."); ?>
<?php if ($bgimg) { ?>
    <?php
$bg=$bgimg->getURL();
?><?php } ?>
<?php if (isset($title) && trim($title) != "") { ?>
    <div class="Workshops-section"> <div class="left-card" style="background-image:url(<?php echo $bg;?>)">
                        <div class="text-area">
                            <h3><?php echo h($title); ?></h3><?php } ?>
<?php if (isset($desc_1) && trim($desc_1) != "") { ?>
     <p><?php echo h($desc_1); ?></p><?php } ?>
<?php
if (trim($btn_URL) != "") { ?>
    <button class="btn btn-primary"><?php
	$btn_Attributes = [];
	$btn_Attributes['href'] = $btn_URL;
	$btn_AttributesHtml = join(' ', array_map(function ($key) use ($btn_Attributes) {
		return $key . '="' . $btn_Attributes[$key] . '"';
	}, array_keys($btn_Attributes)));
	echo sprintf('<a %s>%s</a>', $btn_AttributesHtml, $btn_Title);?></button>
                        </div>
                    </div>
                </div><?php
} ?>
<style>.left-card a {
    color: #fff;
}
.left-card:hover a{color:#000000}
.Workshops-section{min-height:100% !important;}
</style>