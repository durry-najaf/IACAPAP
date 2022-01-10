<?php
use Concrete\Core\Multilingual\Page\Section\Section;

defined('C5_EXECUTE') or die("Access Denied.");

$ms = Section::getBySectionOfSite($c);

$homelink = DIR_REL . '/';
if (is_object($ms)) {
    $lang = $ms->getLanguage();
    $nav = Core::make("helper/navigation");
    $homelink = $nav->getCollectionUrl($ms);
}

$footerSiteTitle = new GlobalArea('Footer Site Title');
$footerSocial = new GlobalArea('Footer Social');
$footerSiteTitleBlocks = $footerSiteTitle->getTotalBlocksInArea();
$footerSocialBlocks = $footerSocial->getTotalBlocksInArea();
$displayFirstSection = $footerSiteTitleBlocks > 0 || $footerSocialBlocks > 0 || $c->isEditMode();

?>
   <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo $view->getThemePath() ?>/images/logo-2.png" alt="">
                    <h5>CHILD AND ADOLESCENT MENTAL HEALTH:</h5>
                    <h5>SHAPING THE FUTURE!</h5>
                    <h5>05 - 09 DECEMBER 2022</h5>
                </div>
                <div class="col-md-6">
                    <div class="contect">
                        <button class="btn btn-primary orange-btn">CONTACT</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <p>2021 ICAPAP. All Rights Reserved </p>
        </div>
    </div>

    
<?php echo $assets->javascript(array(
    'lib/tether.js',
    'bootstrap/util.js',
    'bootstrap/tooltip.js',
	
)); ?>
<?php View::element('footer_required'); ?>
<?php echo $assets->javascript(array(
	'bootstrap/popover.js',
	'bootstrap/alert.js',
	'bootstrap/button.js',
	'bootstrap/carousel.js',
	'bootstrap/collapse.js',
	'bootstrap/dropdown.js',
	'bootstrap/modal.js',
	'bootstrap/scrollspy.js',
	'bootstrap/tab.js',
	
)); ?>
</body>
</html>
