<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $view->inc('elements/header.php'); ?>
<body class="contact">
<div class="aboutDubai">
        
            <div class="container"><?php $a = new Area('Contact us main'); $a->setAreaGridMaximumColumns(12); $a->display($c); ?></div>
</div>

    <div class="formSec">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col">
                                <div class="formHead">
                                    <h3>Contact us</h3>
                                </div>
                                <div class="contactForm">
                                    <form class="contactUs">
                                        <div class="form-group">

                                            <input type="text" class="form-control" id="formGroupName" placeholder="Your Name*">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="formGroupEmail" placeholder="Your Email*">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="formGroupCountry" placeholder="Your Country*">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="formGroupProfession" placeholder="Your Profession*">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="formGroupSubject" placeholder="Subject*">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="exampleFormControlMessage" rows="7" placeholder="Your Message*"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-green btnSend">SEND</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col">
                                <div class="addressArea">
                                    <div class="locHead">
                                        <h3>Location</h3>
                                    </div>
                                </div>
                                <div class="conIconTxt">
                                    <div class="conLoc">
                                        <div class="row">
                                            <div class="col-md-1"><span class="iconSpac"><img src="<?php echo $this->getThemePath(); ?>/images/locIcon.png" alt="" /></span></div><div class="col-md-11"><span class="conDesc"> Lorem ipsum dummy adress for dummy text liverpool street, 8, Dubai</span></div>
                                        </div> 
                                        
                                    </div>
                                    <div class="conTel">
                                    <div class="row">
                                            <div class="col-md-1"><span class="iconSpac"><img src="<?php echo $this->getThemePath(); ?>/images/telIcon.png" alt="" /></span></div>
                                        <div class="col-md-11"><span class="conDesc">888-888-888</span></div>
                                    </div>
</div>
<div class="row">
<div class="col-md-1"><span class="iconSpac"><img src="<?php echo $this->getThemePath(); ?>/images/messIcon.png" alt="" /></span></div>
                                        <div class="col-md-11"><span class="conDesc">example@mail.com</span></div>
                                    </div>
</div>
                                </div>
                                <div class="conMap">
                                    <div class="mapHead">
                                        <h3>MAP</h3>
                                    </div>
                                    <div class="mapIframe">
                                        <div class="mapouter">
                                            <div class="gmap_canvas"><iframe width="350" height="320" id="gmap_canvas" src="https://maps.google.com/maps?q=uae&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br>
                                                <style>
                                                    .mapouter {
                                                        position: relative;
                                                        text-align: right;
                                                        height: 320px;
                                                        width: 350px;
                                                        max-width: 100%;
                                                    }
                                                </style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                                                <style>
                                                    .gmap_canvas {
                                                        overflow: hidden;
                                                        background: none!important;
                                                        height: 320px;
                                                        width: 350px;
                                                        max-width: 100%;
                                                    }
                                                </style>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="getInTouch">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="getHead text-center">
                            <h2>GET IN TOUCH</h2>
                        </div>
                        <div class="socialIcons d-flex justify-content-center">
                            <div class="fb"><img src="<?php echo $this->getThemePath(); ?>/images/fb.png" alt=""></div>
                            <div class="twitter"><img src="<?php echo $this->getThemePath(); ?>/images/twitter.png" alt=""></div>
                            <div class="insta"><img src="<?php echo $this->getThemePath(); ?>/images/insta.png" alt=""></div>
                            <div class="yt"><img src="<?php echo $this->getThemePath(); ?>/images/yt.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
</body>
 <?php $view->inc('elements/footer.php') ?>