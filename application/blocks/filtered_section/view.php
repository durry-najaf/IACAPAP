<?php defined("C5_EXECUTE") or die("Access Denied."); ?>
<?php echo $bID; ?>
<?php if (isset($titleone) && trim($titleone) != "") { ?>
    <div class="hero-section-outer">
        <div class="container">
            <div class="hero-section wow animate__fadeInLeft">
                <div class="dateSection"><h1><?php echo h($titleone); ?></h1><?php } ?>
<?php if (isset($titletwo) && trim($titletwo) != "") { ?>
    <h1><?php echo h($titletwo); ?></h1><?php } ?>
<?php if (isset($orangetitle) && trim($orangetitle) != "") { ?>
    <h4><?php echo h($orangetitle); ?></h4>
                        </div>
            </div>
        </div>
    </div><?php } ?>