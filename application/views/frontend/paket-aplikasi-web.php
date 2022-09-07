<section class="service-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="sidebar sidebar__left">

                    <div class="sidebar__single sidebar__category">
                        <ul class="list-unstyled sidebar__category-list">
                            <li>
                                <a href="<?= site_url('layanan/webcustom') ?>">Web Custom</a>
                            </li>
                            <li class="active">
                                <a href="<?= site_url('layanan/paketaplikasiweb') ?>">Paket Aplikasi Web</a>
                            </li>
                            <li>
                                <a href="<?= site_url('layanan/webwp') ?>">Web WP</a>
                            </li>
                        </ul><!-- /.list-unstyled sidebar__category-list -->
                    </div><!-- /.sidebar__single -->
                    <div class="sidebar__single sidebar__contact">
                        <h3 class="sidebar__title">Contact</h3>
                        <ul class="list-unstyled sidebar__contact-list">
                            <li>
                                <i class="fa fa-map-marker-alt"></i>
                                Royal Orville Road Apt. 728 <br> California, USA
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <a href="mailto:Inovexcompany@gmail.com">Inovexcompany@gmail.com</a>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <a href="tel:+88-0-1764867977">+88 (0)1764867977</a>
                            </li>
                        </ul><!-- /.list-unstyled sidebar__category-list -->
                    </div><!-- /.sidebar__single -->
                    <div class="sidebar__single sidebar__brouchers">
                        <h3 class="sidebar__title">Brochures</h3>
                        <ul class="list-unstyled sidebar__category-list">
                            <li>
                                <a href="#">Download Now <i class="far fa-download"></i></a>
                            </li>
                            <li>
                                <a href="#">Characteristics <i class="far fa-file-pdf"></i></a>
                            </li>
                        </ul><!-- /.list-unstyled sidebar__category-list -->
                    </div><!-- /.sidebar__single -->

                </div><!-- /.sidebar -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-8">
                <div class="service-details__main">
                    <div class="service-details__image">
                        <img src="<?= base_url('assets/frontend') ?>/images/services/service-d-1.jpg" alt="">
                    </div><!-- /.service-details__image -->
                    <div class="service-details__content">
                        <h3>Content Marketing</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. </p>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>

                        <ul class="service-details__list list-unstyled">
                            <li><i class="fa fa-check-circle"></i>Labore et dolore magna aliqua</li>
                            <li><i class="fa fa-check-circle"></i>Best Solution of the Year</li>
                            <li><i class="fa fa-check-circle"></i>Labore et dolore magna aliqua</li>
                        </ul><!-- /.service-details__list list-unstyled -->
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?= base_url('assets/frontend') ?>/images/services/service-d-2-1.jpg" alt="">
                            </div><!-- /.col-lg-6 -->
                            <div class="col-md-6">
                                <img src="<?= base_url('assets/frontend') ?>/images/services/service-d-2-2.jpg" alt="">
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                    </div><!-- /.service-details__content -->
                </div><!-- /.service-details__main -->
            </div><!-- /.col-lg-8 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-standard -->

<?php $this->load->view('template/newsletter') ?>