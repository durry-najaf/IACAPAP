<?php defined("C5_EXECUTE") or die("Access Denied."); ?>
<?php if (isset($title) && trim($title) != "") { ?>
    <div class="attend-section"><div class="row"><div class="col-lg-6"><div class="text-section wow animate__fadeIn">
                        <h2><?php echo h($title); ?></h2><?php } ?>
<?php if (isset($desc_1) && trim($desc_1) != "") { ?>
     <p><?php echo h($desc_1); ?></p> </div>
                </div><?php } ?>
<?php if ($img) { ?>
     <div class="col-lg-6"><div class="right-img"><img src="<?php echo $img->getURL(); ?>" alt="<?php echo $img->getTitle(); ?>"/></div>
                </div>
            </div>
        </div></div><?php } ?>