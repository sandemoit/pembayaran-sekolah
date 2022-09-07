<section class="portfolio-grid">
    <div class="container">
        <div class="block-title text-center">
            <p class="color-2"><span>Portfolio</span></p>
            <h3>View Some of Our Latest Works <br> <span>& Case Studies for Clients</span></h3>
        </div><!-- /.block-title text-center -->
        <ul class="portfolio-filter list-unstyled post-filter ">
            <li data-filter=".filter-item" class="active"><span>All</span></li>
            <li data-filter=".strategy"><span>Strategy</span></li>
            <li data-filter=".optimization"><span>Optimization</span></li>
            <li data-filter=".advertising"><span>Advertising</span></li>
            <li data-filter=".social"><span>Social</span></li>
        </ul><!-- /.portfolio-filter list-unstyled -->
        <div class="row high-gutters masonary-layout filter-layout">
            <div class="col-lg-4 col-md-6 col-sm-12 filter-item masonary-item  strategy">
                <div class="portfolio-one__single">
                    <div class="portfolio-one__image">
                        <img src="<?= base_url('assets/frontend') ?>/images/portfolio/portfolio-1-1.jpg" alt="">
                        <a class="img-popup" href="<?= base_url('assets/frontend') ?>/images/portfolio/portfolio-1-1.jpg"><i class="fal fa-plus"></i></a>
                    </div><!-- /.portfolio-one__image -->
                    <div class="portfolio-one__content">
                        <h3><a href="<?= site_url('portfolio/portfoliodetail') ?>">Content Strategy</a></h3>
                        <p>Customized SEO services</p>
                    </div><!-- /.portfolio-one__content -->
                </div><!-- /.portfolio-one__single -->
            </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
        </div><!-- /.row -->
        <div class="text-center">
            <a href="#" class="thm-btn portfolio-grid__more-btn"><span>Load More</span></a><!-- /.thm-btn portfolio-grid__more-btn -->
        </div><!-- /.text-center -->
    </div><!-- /.container -->
</section><!-- /.portfolio-grid -->

<?php $this->load->view('template/brand') ?>

<?php $this->load->view('template/kontak') ?>