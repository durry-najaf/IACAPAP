<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $view->inc('elements/header.php'); ?>
<div class="hero-section-outer">
        <div class="container">
            <div class="hero-section wow animate__fadeInLeft">
                <div class="dateSection">
                <h2>CHILD AND ADOLESCENT MENTAL HEALTH :</h4>
                    <h1>SHAPING THE FUTURE</h5>
                        <h4>05 - 09 DECEMBER 2022</h3>
                        </div>
            </div>
        </div>
    </div>
    <div class="services ">
        <div class="container position-relative">
            <div class="wow animate__slideInDown serBox">
            <?php $a = new Area('Services'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?>
            </div>

            <div class=" service-inner-section wow animate__fadeInLeft">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="container">
                    <?php $a = new Area('Program'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-img embed-responsive embed-responsive-1by1">
                        <iframe width="500" height="500" src="https://www.youtube.com/embed/pg8iFHvswX0?autoplay=1&mute=1&loop=1" class="rounded-circle embed-responsive-item">
</iframe>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="expect-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading wow bounceInUp">
                    <?php $a = new Area('countdown'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?>
                    </div>
                    <div id="countdown" class="count-down timer">
                        <div>
                            03
                            <br> DAYS
                        </div> 
                        <div>
                            :
                        </div>
                        <div>
                            17
                            <br> HOURS
                        </div>
                        <div>
                            :
                        </div>
                        <div>
                            37
                            <br> MINUTES
                        </div>
                        <div>
                            :
                        </div>
                        <div>
                            32
                            <br> SECONDS
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="heading wow fadeInUp"  data-wow-duration="3s" >
                    <?php $a = new Area('Message'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?>
                </div>
                </div>
                <div class="row">
                <div class="col-lg-3">
                    <div class="left-bg wow animate__pulse">
                    <?php $a = new Area('expect1'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?>
                    <?php $a = new Area('expect2'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?>
                        <img class="bg-img" style="left:-10px" src="<?php echo $view->getThemePath() ?>/images/lines.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right-bg wow animate__pulse">
                    <?php $a = new Area('expect3'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?>
                    <?php $a = new Area('expect4'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?>
                        <img class="bg-img" style="right:-10px" src="<?php echo $view->getThemePath() ?>/images/lines.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-par wow animate__fadeInRight">
                    <?php $a = new Area('expect text area'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?>
                        
                    </div>
                </div>
                </div>
            </div>
        </div>
        
        <img src="<?php echo $view->getThemePath() ?>/images/bg-3.png" class="main-bg wow animate__backInLeft"  data-wow-duration="2s" alt="">
    </div>
 
   <div class="container">
        <div class="wow animate__bounce">
            <?php $a = new Area('workshop'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?>
            </div>
        </div>
    <div class="topics-section wow animate__bounceInDown">
        <div class="topics-inner">
            <div class="container"><?php $a = new Area('Scientific heading'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?><?php $a = new Area('Scientific'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?></div>
        
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                <?php $a = new Area('Scientific card 1'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?>

                </div>
                <div class="col-lg-4">
                <?php $a = new Area('Scientific card 2'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?>
                </div>
                <div class="col-lg-4">
                <?php $a = new Area('Scientific card 3'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="attend-section">
        <div class="container">
            
            <?php $a = new Area('attend section'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?>
           
        </div>

    </div>
    
        <div class="wow animate__fadeIn">
        <?php $a = new Area('Regionally'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?>
        </div>
    
    <div class="wow animate__fadeIn">
    <?php $a = new Area('sponsor section'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?>
    </div>
    </div>

    <?php $view->inc('elements/footer.php') ?>