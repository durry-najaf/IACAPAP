<?php defined("C5_EXECUTE") or die("Access Denied."); ?>
<?php if ($bgimg) { ?>
    <?php
$bg=$bgimg->getURL();
?><?php } ?>
<?php if (isset($title) && trim($title) != "") { ?>
    <div class="regionally-section" style="background-image:url(<?php echo $bg;?>)"><div class="container"><h3><?php echo h($title); ?></h3><?php } ?>
<?php if (isset($desc_1) && trim($desc_1) != "") { ?>
    <p><?php echo h($desc_1); ?></p></div></div><?php } ?>