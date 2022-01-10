<?php defined("C5_EXECUTE") or die("Access Denied."); ?>
<?php if ($icon) { ?>
    <div class="cardSec"><div class="row rowSec1"><div class="card mb-4 mb-sm-4"> <div class="row">
                                        <div class="col-md-2"><div class="iconImg mt-2"><img src="<?php echo $icon->getURL(); ?>" alt="<?php echo $icon->getTitle(); ?>"/></div></div><?php } ?>
<?php if (isset($title) && trim($title) != "") { ?>
    <div class="col-md-10"><div class="titleCards mt-3"><h5><?php echo h($title); ?></h5></div><?php } ?>
<?php if (isset($desc_1) && trim($desc_1) != "") { ?>
    <div class="descCards"><?php echo $desc_1; ?> 
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div><?php } ?>
						
                        <style>
                        .row.rowSec1 .card.mb-4.mb-sm-4 {
    border: 1px solid #dedede !important;
    border-radius: 5px !important;
	padding:10px
}
.card.mb-4.mb-sm-4 {
    width: 95% !important;
    margin: 15px auto !important;
}
                        </style>