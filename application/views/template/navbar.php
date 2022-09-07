<nav class="main-nav-one stricky">
    <div class="container-fluid">
        <div class="inner-container">
            <div class="logo-box">
                <a href="<?= site_url('') ?>">
                    <img src="<?= base_url('assets/frontend') ?>/images/logo-1-1.png" alt="">
                </a>
                <a href="#" class="side-menu__toggler"><i class="fa fa-bars"></i></a>
            </div><!-- /.logo-box -->
            <div class="main-nav__main-navigation">
                <ul class="main-nav__navigation-box">
                    <li>
                        <a href="<?= site_url('') ?>">Home</a>
                    </li>

                    <li>
                        <a href="<?= site_url('about') ?>">About</a>
                    </li>

                    <li class="dropdown">
                        <a href="#">Layanan</a>
                        <ul>
                            <li><a href="<?= site_url('layanan/webcustom') ?>">Web Custom</a></li>
                            <li><a href="<?= site_url('layanan/paketaplikasiweb') ?>">Paket Aplikas Web</a></li>
                            <li><a href="<?= site_url('layanan/webwp') ?>">Web WP</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?= site_url('') ?>">Product</a>
                    </li>

                    <li>
                        <a href="<?= site_url('portfolio') ?>">Portfolio</a>
                    </li>

                    <li>
                        <a href="<?= site_url('blog') ?>">Blog</a>
                    </li>

                </ul><!-- /.main-nav__navigation-box -->
            </div><!-- /.main-nav__main-navigation -->
            <div class="main-nav__right">
                <a href="#" class="search-popup__toggler main-nav__search"><i class="far fa-search"></i></a>
                <a href="<?= site_url('contact') ?>" class="thm-btn main-nav-one__btn"><span>Contact Us</span></a>
                <!-- /.thm-btn main-nav-one__btn -->
            </div><!-- /.main-nav__right -->
        </div><!-- /.inner-container -->
    </div><!-- /.container-fluid -->
</nav><!-- /.main-nav-one -->