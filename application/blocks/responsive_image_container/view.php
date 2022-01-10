<?php defined("C5_EXECUTE") or die("Access Denied."); ?>
<?php if ($img) { ?>
    <div class="container"><?php
$img_tag = Core::make('html/image', [$img])->getTag();
$img_tag->alt($img->getTitle());
$img_tag->addClass('img-fluid');
echo $img_tag;
?></div><?php } ?>