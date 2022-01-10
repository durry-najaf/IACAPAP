<?php defined("C5_EXECUTE") or die("Access Denied."); ?>
<?php if ($img) { ?>
    <div class="explorCards">
                        <div class="card position-relative"><img src="<?php echo $img->getURL(); ?>" alt="<?php echo $img->getTitle(); ?>"/><?php } ?>
<?php if (isset($title) && trim($title) != "") { ?>
    <div class="greenBody position-relative ">
                                <div class="card-body bg-green position-absolute">
                                    <div class="txtExp"> <h5 class="card-title text-center text-light"><?php echo h($title); ?></h5>
                                    </div>
<?php } ?>
<?php if (!empty($btn) && ($btn_c = Page::getByID($btn)) && !$btn_c->error && !$btn_c->isInTrash()) {
    ?>
     <div class="btnExp d-flex justify-content-end">
                                        <a href="<?php $btn_c->getCollectionLink() ?>" class="btn btn-dark"><img src="<?php echo $this->getThemePath(); ?>/images/arrow.png" alt=""><?php echo '<a href="' . $btn_c->getCollectionLink() . '">'  . '</a>';
?></a></div></div></div></div></div><?php } ?>