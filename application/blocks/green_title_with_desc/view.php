<?php defined("C5_EXECUTE") or die("Access Denied."); ?>
<?php if (isset($title) && trim($title) != "") { ?>
    <div class="ourStory"><div class="textSec">
                        <h3><?php echo h($title); ?></h3><?php } ?>
<?php if (isset($desc_1) && trim($desc_1) != "") { ?>
    <?php echo $desc_1; ?></div>
                </div><?php } ?>