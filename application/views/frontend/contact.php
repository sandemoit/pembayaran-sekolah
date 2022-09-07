<section class="contact-two">
    <img src="<?= base_url('assets/frontend') ?>/images/shapes/bg-shape-1-1.png" class="contact-two__bg-shape-1" alt="">
    <img src="<?= base_url('assets/frontend') ?>/images/shapes/bg-shape-1-2.png" class="contact-two__bg-shape-2" alt="">
    <img src="<?= base_url('assets/frontend') ?>/images/shapes/bg-shape-1-3.png" class="contact-two__bg-shape-3" alt="">


    <div class="contact-two__bubble-1"></div><!-- /.contact-two__bubble-1 -->
    <div class="contact-two__bubble-2"></div><!-- /.contact-two__bubble-2 -->
    <div class="contact-two__bubble-3"></div><!-- /.contact-two__bubble-3 -->
    <div class="contact-two__bubble-4"></div><!-- /.contact-two__bubble-4 -->
    <div class="contact-two__bubble-5"></div><!-- /.contact-two__bubble-5 -->
    <div class="contact-two__bubble-6"></div><!-- /.contact-two__bubble-6 -->
    <div class="contact-two__bubble-7"></div><!-- /.contact-two__bubble-7 -->
    <div class="contact-two__bubble-8"></div><!-- /.contact-two__bubble-8 -->

    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="contact-two__info">
                    <h3>Contact Details</h3>
                    <div class="contact-two__info-single">
                        <div class="contact-two__info-icon">
                            <i class="fa fa-map-marker"></i>
                        </div><!-- /.contact-two__info-icon -->
                        <div class="contact-two__info-content">
                            <h4>Location</h4>
                            <p>Royal Orville Road Apt. 728 <br> California, USA</p>
                        </div><!-- /.contact-two__info-content -->
                    </div><!-- /.contact-two__info-single -->
                    <div class="contact-two__info-single">
                        <div class="contact-two__info-icon">
                            <i class="fa fa-phone"></i>
                        </div><!-- /.contact-two__info-icon -->
                        <div class="contact-two__info-content">
                            <h4>Phone</h4>
                            <p><a href="tel:(720).661.2231">(720).661.2231</a> <br> <a href="tel:(720).661.2231">(720).661.2231</a></p>
                        </div><!-- /.contact-two__info-content -->
                    </div><!-- /.contact-two__info-single -->
                    <div class="contact-two__info-single">
                        <div class="contact-two__info-icon">
                            <i class="fa fa-envelope"></i>
                        </div><!-- /.contact-two__info-icon -->
                        <div class="contact-two__info-content">
                            <h4>Email Infomation</h4>
                            <p><a href="mailto:inovex.inc@company.com">inovex.inc@company.com</a> <br><a href="mailto:inovex.inc@companySolution.com">inovex.inc@companySolution.com</a>
                            </p>
                        </div><!-- /.contact-two__info-content -->
                    </div><!-- /.contact-two__info-single -->
                </div><!-- /.contact-two__info -->
            </div><!-- /.col-xl-5 -->
            <div class="col-xl-7">
                <div class="contact-two__form-wrap">
                    <h3>Ready to Get Started?</h3>

                    <form action="<?= base_url('assets/frontend') ?>/inc/sendemail.php" class="contact-one__form">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Your Name*">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <input type="text" placeholder="Email*">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <input type="text" placeholder="Phone">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <input type="text" placeholder="Subject">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-12">
                                <textarea name="message" placeholder="Massage"></textarea><!-- /# -->
                            </div><!-- /.col-md-12 -->
                            <div class="col-md-12 text-left">
                                <button type="submit" class="thm-btn contact-one__btn">Send Now</button>
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                    </form><!-- /.contact-one__form -->

                </div><!-- /.contact-two__form-wrap -->
            </div><!-- /.col-xl-7 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-two -->


<section class="contact-map__block">
    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="google-map__contact-page" allowfullscreen></iframe>
    </div><!-- /.container -->
</section><!-- /.contact-map__block -->


<?php $this->load->view('template/newsletter'); ?>