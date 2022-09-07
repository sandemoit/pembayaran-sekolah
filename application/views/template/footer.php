<footer class="site-footer">
    <div class="particles-snow" id="footer-snow"></div><!-- /#footer-snow.particles-snow -->

    <img src="<?= base_url('assets/frontend') ?>/images/shapes/footer-shape-1-1.png" class="site-footer__bg-shape-1" alt="">
    <img src="<?= base_url('assets/frontend') ?>/images/shapes/footer-shape-1-2.png" class="site-footer__bg-shape-2" alt="">
    <img src="<?= base_url('assets/frontend') ?>/images/shapes/footer-shape-1-3.png" class="site-footer__bg-shape-3" alt="">
    <img src="<?= base_url('assets/frontend') ?>/images/shapes/footer-shape-1-4.png" class="site-footer__bg-shape-4" alt="">
    <div class="site-footer__upper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget footer-widget__about">
                        <h3 class="footer-widget__title">About</h3>
                        <p>Sandemo.id merupakan penyedia layanan digital merketing dan web design di Palembang, Indonesia.</p>
                        <div class="footer-widget__social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div><!-- /.footer-widget__social -->
                    </div><!-- /.footer-widget footer-widget__about -->
                </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget footer-widget__contact">
                        <h3 class="footer-widget__title">Contact</h3>
                        <ul class="list-unstyled footer-widget__links-list">
                            <li><a href="#">Jl. Zainal Abidin Labuhan ratu Gg. Harapan 1 No. 18 Bandar Lampung</a></li>
                            <li><a href="#">083160901108</a></li>
                            <li><a href="#">swidodo.com@gmail.com</a></li>
                            <li><a href="#">Jam Kerja: 09.00 - 17.00 WIB</a></li>
                        </ul><!-- /.list-unstyled footer-widget__links-list -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget footer-widget__links__2">
                        <h3 class="footer-widget__title">E-Commerce</h3>
                        <ul class="list-unstyled footer-widget__links-list">
                            <li><a href="#">Facebook Page</a></li>
                            <li><a href="#">Shopee</a></li>
                            <li><a href="#">Toko Pedia</a></li>
                        </ul><!-- /.list-unstyled footer-widget__links-list -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget footer-widget__links__1">
                        <h3 class="footer-widget__title">Services</h3>
                        <ul class="list-unstyled footer-widget__links-list">
                            <p>Untuk request penawaran sebaiknya via email. Kami hanya bisa dihubungi pada hari dan jam kerja, diluar itu silahkan melalui email.</p>
                        </ul><!-- /.list-unstyled footer-widget__links-list -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->

    </div><!-- /.site-footer__upper -->
    <div class="site-footer__bottom">
        <div class="container">
            <p>© <?= date('Y') ?> copyright all right reserved</p>
            <a href="index.html"><img src="<?= base_url('assets/frontend') ?>/images/logo-1-1.png" alt=""></a>
            <ul class="list-unstyled site-footer__bottom-menu">
                <li><a href="#">Privace & Policy.</a></li>
                <li><a href="#">Faq.</a></li>
                <li><a href="#">Terms.</a></li>
            </ul><!-- /.list-unstyled site-footer__bottom-menu -->
        </div><!-- /.container -->
    </div><!-- /.site-footer__bottom -->

</footer><!-- /.site-footer -->



</div><!-- /.page-wrapper -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

<div class="side-menu__block">

    <a href="#" class="side-menu__toggler side-menu__close-btn"><i class="fa fa-times"></i>
        <!-- /.fa fa-close --></a>

    <div class="side-menu__block-overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div><!-- /.side-menu__block-overlay -->
    <div class="side-menu__block-inner ">

        <a href="index.html" class="side-menu__logo"><img src="<?= base_url('assets/frontend') ?>/images/logo-1-1.png" alt=""></a>
        <nav class="mobile-nav__container">
            <!-- content is loading via js -->
        </nav>
        <p class="side-menu__block__copy">(c) <?= date('Y') ?> <a href="https://sandemo.id">Sandemo</a> - All rights reserved.</p>
        <div class="side-menu__social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-google-plus"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-pinterest-p"></i></a>
        </div>
    </div><!-- /.side-menu__block-inner -->
</div><!-- /.side-menu__block -->

<div class="search-popup">
    <div class="search-popup__overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div><!-- /.search-popup__overlay -->
    <div class="search-popup__inner">
        <form action="#" class="search-popup__form">
            <input type="text" name="search" placeholder="Type here to Search....">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div><!-- /.search-popup__inner -->
</div><!-- /.search-popup -->

<!-- template scripts -->
<script src="<?= base_url('assets/frontend') ?>/js/jquery.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/bootstrap-select.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/isotope.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/jquery.ajaxchimp.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/jquery.circleType.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/waypoints.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/jquery.counterup.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/jquery.lettering.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/jquery.validate.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/TweenMax.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/wow.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/swiper.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/particles.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/particel-config.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/theme.js"></script>
</body>

</html>