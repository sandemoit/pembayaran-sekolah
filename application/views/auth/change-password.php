<section id="wrapper">
    <div class="login-register" style="background-image:url(<?= base_url('assets') ?>/img/background/login-register.jpg);">
        <div class="login-box card">
            <div class="card-body">
                <?php echo $this->session->flashdata('message') ?>
                <form class="form-horizontal form-material" id="loginform" action="<?php echo site_url('auth/changepassword') ?>">
                    <h3 class="box-title m-b-20">Recover Password</h3>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input type="password" class="form-control form-control-lg" placeholder="Enter New Password" id="password1" name="password1">
                            <?= form_error('password1', '<small class="text-danger" pl-3>', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <<input type="password" class="form-control form-control-lg" placeholder="Confirmation New Password" id="password2" name="password2">
                                <?= form_error('password2', '<small class="text-danger" pl-3>', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group text-center p-b-10">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg w-100 text-uppercase waves-effect waves-light text-white" type="submit">Change Password</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>