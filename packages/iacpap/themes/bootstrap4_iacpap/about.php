<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $view->inc('elements/header.php'); ?>
<div class="page-header">
            <div class="container">
                <div class="heading-section wow animate__pulse">
                    <h1>SHAPING THE FUTURE</h5>
                        <h4>05 - 09 DECEMBER 2022</h3>
                </div>
            </div>
        </div>
        <div class="upcoming-section wow animate__fadeInLeft">
            <div class="container">
            <?php $a = new Area('UPCOMING IACAPAP'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?>
            </div>
        </div>
        <?php $a = new Area('About'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?>

        </div>
        <div class="about-organisation-section">
            <div class="container">
            <?php $a = new Area('About 2'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?>
            <div class="container">
            <?php $a = new Area('History'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?>
</div>
                    <div class="slider">
                        <div class="carousel-wrap">
                            <div class="owl-carousel">
                                <div class="item"><img src="<?php echo $view->getThemePath() ?>/images/slide1.jpg"></div>
                                <div class="item"><img src="<?php echo $view->getThemePath() ?>/images/slide2.jpg"></div>
                                <div class="item"><img src="<?php echo $view->getThemePath() ?>/images/slide3.jpg"></div>
                                <div class="item"><img src="<?php echo $view->getThemePath() ?>/images/slide1.jpg"></div>
                                <div class="item"><img src="<?php echo $view->getThemePath() ?>/images/slide2.jpg"></div>
                                <div class="item"><img src="<?php echo $view->getThemePath() ?>/images/slide3.jpg"></div>
                                <div class="item"><img src="<?php echo $view->getThemePath() ?>/images/slide1.jpg"></div>
                                <div class="item"><img src="<?php echo $view->getThemePath() ?>/images/slide2.jpg"></div>
                                <div class="item"><img src="<?php echo $view->getThemePath() ?>/images/slide3.jpg"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-cards-section">
            <div class="container">
                <div class=" wow animate__zoomIn">
                <?php $a = new Area('bottom-cards-section'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?>
                </div>
            </div>
        </div>
        <div class="history-section">
            <div class="container">
            <?php $a = new Area('OVERSIGHT COMMITTEE'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?>
                <div class="slider">
                    <div class="carousel-wrap">
                        <div class="owl-carousel">
                            <div class="item">
                                <div class="team-member">
                                    <img src="<?php echo $view->getThemePath() ?>/images/team-1.jpg" alt="">
                                    <div class="text-content">
                                        <p>Name Here</p>
                                        <small>Designation</small>
                                    </div>

                                </div>
                            </div>
                            <div class="item">
                                <div class="team-member">
                                    <img src="<?php echo $view->getThemePath() ?>/images/team-2.jpg" alt="">
                                    <div class="text-content">
                                        <p>Name Here</p>
                                        <small>Designation</small>
                                    </div>

                                </div>
                            </div>
                            <div class="item">
                                <div class="team-member">
                                    <img src="<?php echo $view->getThemePath() ?>/images/team-3.jpg" alt="">
                                    <div class="text-content">
                                        <p>Name Here</p>
                                        <small>Designation</small>
                                    </div>

                                </div>
                            </div>
                            <div class="item">
                                <div class="team-member">
                                    <img src="<?php echo $view->getThemePath() ?>/images/team-4.jpg" alt="">
                                    <div class="text-content">
                                        <p>Name Here</p>
                                        <small>Designation</small>
                                    </div>

                                </div>
                            </div>
                            <div class="item">
                                <div class="team-member">
                                    <img src="<?php echo $view->getThemePath() ?>/images/team-1.jpg" alt="">
                                    <div class="text-content">
                                        <p>Name Here</p>
                                        <small>Designation</small>
                                    </div>

                                </div>
                            </div>
                            <div class="item">
                                <div class="team-member">
                                    <img src="<?php echo $view->getThemePath() ?>/images/team-2.jpg" alt="">
                                    <div class="text-content">
                                        <p>Name Here</p>
                                        <small>Designation</small>  
                                    </div>

                                </div>
                            </div>
                            <div class="item">
                                <div class="team-member">
                                    <img src="<?php echo $view->getThemePath() ?>/images/team-3.jpg" alt="">
                                    <div class="text-content">
                                        <p>Name Here</p>
                                        <small>Designation</small>
                                    </div>

                                </div>
                            </div>
                            <div class="item">
                                <div class="team-member">
                                    <img src="<?php echo $view->getThemePath() ?>/images/team-4.jpg" alt="">
                                    <div class="text-content">
                                        <p>Name Here</p>
                                        <small>Designation</small>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hosted-section">
        <?php $a = new Area('hosted section'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?>
        </div>
    <?php $view->inc('elements/footer.php') ?>