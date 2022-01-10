<?php defined("C5_EXECUTE") or die("Access Denied."); ?>
<?php if ($image) { ?>
    <div class="container"><?php
$image_tag = Core::make('html/image', [$image])->getTag();
$image_tag->alt($image->getTitle());
echo $image_tag;
?></div><?php } ?>