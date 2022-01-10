<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $view->inc('elements/header.php'); ?>
<div class="hero-section-outer">
        <div class="container">
            <div class="hero-section wow animate__fadeInLeft">
                <div class="dateSection">
                <h1>CHILD AND ADOLESCENT MENTAL HEALTH :</h1>
                    <h1>SHAPING THE FUTURE</h1>
                        <h4>05 - 09 DECEMBER 2022</h4>
                        </div>
            </div>
        </div>
    </div>
    <div class="services ">
        <div class="container position-relative">
        <?php 
			   		$a = new Area('Service Boxes');
		   			$a->display($c); ?>
            <div class="row wow animate__slideInDown position-absolute serBox">
               

                

            <div class=" service-inner-section wow animate__fadeInLeft">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="left-content">
                            <h3>PROGRAM OVERVIEW</h3>
                            <h1>Child & Adolescent Mental Health: Shaping The Future</h1>
                            <h6>
                                With the advent of modern technology, child mental health is on the verge of witnessing a revolution. Harnessing modern technology will indeed change every aspect of mental health practice and offer exceptional opportunities for patients, families, and
                                the community at large. With advancements in brain imaging, genomics and personalized medicine, psychiatric diagnosis will become more specific and treatments more personalized, shaping the way for better outcomes. The
                                spread of Telepsychiatry will allow access to patients who otherwise had no access to treatment.

                            </h6>
                            <button class="btn btn-primary orange-btn">Read More</button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-img">
                        <iframe width="500" height="500" src="https://www.youtube.com/embed/pg8iFHvswX0?autoplay=1&mute=1&loop=1" class="rounded-circle">
</iframe>
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
                        <h3>COUNTDOWN TO CONFERENCE</h3>
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
                        <h3>Message from the Conference Chair</h3>
                    </div>
                   	<div class="row wow fadeInUp"  data-wow-duration="3s">
                    <div class="col-xs-12 col-md-6">
                    <p class="addReadMore showlesscontent">As’salam Alaikum <br /><br />Greetings to IACAPAP members and colleagues from all over the world. <br /><br />
                    It gives me immense pleasure to welcome you all to the 25th World Congress of IACAPAP , which will be held in Dubai in 2022. This congress will discuss extremely important and timely child and adolescent mental health topics in a remarkable and unique destination, Dubai, the city of future.  The Congress will serve as a global hub for scientists, clinicians, from all over the world to present their work, and discuss latest advances under the theme of “ Child and Adolescent Mental Health : Shaping the Future”. 
                    </p>
                    </div>
                    <div class="col-xs-12 col-md-6"><p><br />The topic of mental health has never been more important. As the world is going through this pandemic that is causing significant distress especially on vulnerable populations such as children.  Although we live in unprecedented and unpredictable times, we are hopeful that with the consorted efforts to combat COVID-19 we will be able to welcome you all in person for the congress , to enjoy the scientific content , collaborate with colleagues and enjoy the beautiful city of Dubai ! <br /><br />Let us join hands to enhance the future of our children and youth. We look forward to welcoming you all to our city, your city, Dubai.  <br />

                    </p>
                    </div>
                    <div class="col-lg-12">
                    	<p><br />Dr. Ammar Albanna  <br />
Conference Chair <br />
25th World Congress of IACAPAP - Dubai 2022<br />
<a href="https://www.iacapap2022.com">www.iacapap2022.com</a></p>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="left-bg wow animate__pulse">
                        <div class="expect-card">
                            <div class="icon">
                                <img src="<?php echo $view->getThemePath() ?>/images/4.png" alt="">
                            </div>
                            <h3>Lorem Ipsum</h3>
                            <p>
                                Lorem Ipsum has been the industry's standard dummy ever since the 1500s, when an unknown printer
                            </p>
                            <small>Read More</small>
                        </div>
                        <div class="expect-card">
                            <div class="icon">
                                <img src="<?php echo $view->getThemePath() ?>/images/5.png">
                            </div>
                            <h3>Lorem Ipsum</h3>
                            <p>
                                Lorem Ipsum has been the industry's standard dummy ever since the 1500s, when an unknown printer
                            </p>
                            <small>Read More</small>
                        </div>
                        <img class="bg-img" style="left:-10px" src="<?php echo $view->getThemePath() ?>/images/lines.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right-bg wow animate__pulse">
                        <div class="expect-card">
                            <div class="icon">
                                <img src="<?php echo $view->getThemePath() ?>/images/6.png" alt="">
                            </div>
                            <h3>Lorem Ipsum</h3>
                            <p>
                                Lorem Ipsum has been the industry's standard dummy ever since the 1500s, when an unknown printer
                            </p>
                            <small>Read More</small>
                        </div>
                        <div class="expect-card">
                            <div class="icon">
                                <img src="<?php echo $view->getThemePath() ?>/images/7.png" alt="">
                            </div>
                            <h3>Lorem Ipsum</h3>
                            <p>
                                Lorem Ipsum has been the industry's standard dummy ever since the 1500s, when an unknown printer
                            </p>
                            <small>Read More</small>
                        </div>
                        <img class="bg-img" style="right:-10px" src="<?php echo $view->getThemePath() ?>/images/lines.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-par wow animate__fadeInRight">
                        <h1>Here’s What To Expect</h1>
                        <p>The 25th World Congress of the International Association for Child and Adolescent Psychiatry and Allied Professions (IACAPAP) will be held from December 05th- 9th 2022 in Dubai, United Arab Emirates.</p>

                        <p>
                            The congress will serve as a global hub for scientists and clinicians from all over the world to present their work and latest advancements in the flied under the theme of “Child and Adolescent Mental Health: Shaping The Future.”
                        </p>
                        <button class="btn orange-btn btn-primary">
                                View All
                            </button>
                    </div>
                </div>
            </div>
        </div>
        
        <img src="<?php echo $view->getThemePath() ?>/images/bg-3.png" class="main-bg wow animate__backInLeft"  data-wow-duration="2s" alt="">
    </div>
    <div class="Workshops-section">
        <div class="container">
            <div class="row wow animate__bounce">
                <div class="col-lg-12">
                    <div class="heading">
                        <h3>Workshops</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="left-card">
                        <div class="text-area">
                            <h3>Lorem Ipsum Dummy</h3>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                            <button class="btn btn-primary">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-card">
                        <div class="text-area">
                            <h3>Lorem Ipsum Dummy</h3>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                            <button class="btn btn-primary">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="topics-section wow animate__bounceInDown">
        <div class="topics-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h3>Scientific Topics</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card-box">
                        <div class="img-box"><img src="<?php echo $view->getThemePath() ?>/images/Informationof-Registration.jpg" alt=""></div>
                    </div>
                    <div class="text-box">
                        <div class="expect-card">
                            <div class="icon">
                                <img src="<?php echo $view->getThemePath() ?>/images/11.png" alt="">
                            </div>
                            <h3>Informationof Registration</h3>
                            <p>
                                Lorem Ipsum has been the industry's standard dummy ever since the 1500s, when an unknown printer
                            </p>
                            <small>Discover Now</small>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="card-box">
                        <div class="img-box"><img src="<?php echo $view->getThemePath() ?>/images/Online-Registration.jpg" alt=""></div>
                    </div>
                    <div class="text-box">
                        <div class="expect-card">
                            <div class="icon">
                                <img src="<?php echo $view->getThemePath() ?>/images/12.png" alt="">
                            </div>
                            <h3>Online Registration</h3>
                            <p>
                                Lorem Ipsum has been the industry's standard dummy ever since the 1500s, when an unknown printer
                            </p>
                            <small>Discover Now</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card-box">
                        <div class="img-box"><img src="<?php echo $view->getThemePath() ?>/images/Registration-T&C.jpg" alt=""></div>
                    </div>
                    <div class="text-box">
                        <div class="expect-card">
                            <div class="icon">
                                <img src="<?php echo $view->getThemePath() ?>/images/13.png" alt="">
                            </div>
                            <h3>Registration T&C</h3>
                            <p>
                                Lorem Ipsum has been the industry's standard dummy ever since the 1500s, when an unknown printer
                            </p>
                            <small>Discover Now</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="attend-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-section wow animate__fadeIn">
                        <h2>Who Should Attend?</h2>
                        <p>Open for members of IACAPAP only. If you are a member of Full Member organisation, please contact your national organisation to obtain the webinar registration link.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-img"><img src="<?php echo $view->getThemePath() ?>/images/Who-Should-Attend.jpg" alt=""></div>
                </div>
            </div>
        </div>

    </div>
    <div class="regionally-section">
        <div class="container wow animate__fadeIn">
            <h3>Regionally Pertinent Topics</h3>
            <p>
                The number of children suffering around the globe has increased exponentially over the last decades. Tragically, the domestic and military conflicts that are rampant in many areas are exploiting children in unprecedented numbers. Children are forced into
                hard labour, military combat, the sex slave trade, and suicide. Many others bear witness to abject poverty, inhumane living conditions and unfathomable violence. In short, there is a generation of traumatized and neglected victims who
                have been deprived of their basic rights as a child. United Nations and its supporting affiliates cannot come close to handling the magnitude of this problem. Efforts will be required by all governmental and nongovernmental agencies to
                assess and provide the resources required to tackle this issue globally. By strategically planning meetings, IACAPAP can play a role in bringing attention to this monumental issue by being visible in the most affected areas. This will
                lend greater opportunity to directing resources from regional governments and organizations to the mental health sector, as it deals with the daunting task of rebuilding the lives of so many young, innocent, voiceless victims.
            </p>
        </div>
    </div>
    <div class="sponsor-section">
        <div class="container">
            <h2>
                Become A Sponsor
            </h2>
            <h4>
                If you are interested in becoming a sponsor or exhibitor at IACAPAP 2022, contact us on: IACAPAP2022@dwtc.com
            </h4>
        </div>
    </div>
    <div class="hosted-section">
        <div class="container">
            <img src="<?php echo $view->getThemePath() ?>/images/host.png" style="width: 100%;" alt="">
        </div>
    </div>

    <?php $view->inc('elements/footer.php') ?>