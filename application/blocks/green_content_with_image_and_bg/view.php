<?php defined("C5_EXECUTE") or die("Access Denied."); ?>
<?php if ($bgimg) { ?>
    <?php
$bg=$bgimg->getURL();
?><?php } ?>
<?php if (isset($blacktitle) && trim($blacktitle) != "") { ?>
    <div class="about-section" style="background-image:url(<?php echo $bg;?>)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-section wow animate__fadeInRight">
                            <h6><?php echo h($blacktitle); ?></h6><?php } ?>
<?php if (isset($greentitle) && trim($greentitle) != "") { ?>
    <h2><?php echo h($greentitle); ?></h2><?php } ?>
<?php if (isset($desc_1) && trim($desc_1) != "") { ?>
    <p><?php echo h($desc_1); ?></p></div>
                    </div><?php } ?>
<?php if ($img) { ?>
    <div class="col-lg-6 wow animate__backInDown">
                        <div class="right-img"><?php
$img_tag = Core::make('html/image', [$img])->getTag();
$img_tag->alt($img->getTitle());
$img_tag->addClass('img-fluid');
echo $img_tag;
?></div>
                    </div>
                </div>
            </div><?php } ?>