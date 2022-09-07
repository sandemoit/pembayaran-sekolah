<section class="blog-grid">
    <div class="container">
        <div class="row high-gutters">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="blog-one__single">
                    <div class="blog-one__image">
                        <img src="<?= base_url('assets/frontend') ?>/images/blog/blog-1-1.jpg" alt="">
                        <a href="<?= site_url('blog/blogdetail') ?>"><i class="fal fa-plus"></i></a>
                    </div><!-- /.blog-one__image -->
                    <div class="blog-one__content">
                        <div class="blog-one__meta">
                            <a>Sara dodly</a>
                            <span>-</span>
                            <a>Mar 15, 2020</a>
                        </div><!-- /.blog-one__meta -->
                        <h3><a href="<?= site_url('blog/blogdetail') ?>">Additional Services that will Grow Your...</a></h3>
                        <a href="<?= site_url('blog/blogdetail') ?>" class="thm-btn blog-one__btn"><span>Read More</span></a>
                        <!-- /.thm-btn blog-one__btn -->
                    </div><!-- /.blog-one__content -->
                </div><!-- /.blog-one__single -->
            </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
        </div><!-- /.row -->

        <div class="post-pagination">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#"><i class="far fa-angle-right"></i></a>
        </div><!-- /.post-pagination -->
    </div><!-- /.container -->
</section><!-- /.blog-grid -->

<?php $this->load->view('template/newsletter'); ?>