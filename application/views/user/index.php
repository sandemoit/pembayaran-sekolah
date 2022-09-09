<div class="col-lg-4 col-xlg-3 col-md-5">
    <div class="card">
        <div class="card-body">
            <center class="m-t-30"> <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-circle" width="150">
                <h4 class="card-title m-t-10"><?= $user['name']; ?></h4>
                <h6 class="card-subtitle">Member Since <?= date('d F Y', $user['date_created']); ?></h6>
                <!-- <div class="row text-center justify-content-md-center">
                    <div class="col-6"><a href="javascript:void(0)" class="link"><i class="icon-people"></i>
                            <font class="font-medium">254</font>
                        </a></div>
                    <div class="col-6"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i>
                            <font class="font-medium">54</font>
                        </a></div>
                </div> -->
            </center>
        </div>
        <div>
            <hr>
        </div>
        <div class="card-body"> <small class="text-muted">Email address </small>
            <h6><?= $user['email']; ?></h6> <small class="text-muted p-t-30 db">Phone</small>
            <h6><?= $user['nohp']; ?></h6> <small class="text-muted p-t-30 db">Address</small>
            <h6>Indonesia</h6>
            <div class="map-box">
                <iframe src="<?= $user['maps']; ?>" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen=""></iframe>
            </div>
            <!-- <small class="text-muted p-t-30 db">Social Profile</small>
            <br>
            <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
            <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
            <button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button> -->
        </div>
    </div>
</div>
<div class="col-lg-8 col-xlg-9 col-md-7">
    <?= $this->session->flashdata('message'); ?>
    <div class="card">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs profile-tab" role="tablist">
            <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#settings" role="tab" aria-selected="true">Settings</a> </li>
            <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#changepassword" role="tab" aria-selected="false">Change Password</a> </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="settings" role="tabpanel">
                <div class="card-body">
                    <?php echo form_open_multipart('user'); ?>
                    <div class="form-group">
                        <label class="col-md-12">Full Name</label>
                        <div class="col-md-12">
                            <input class="form-control" name="name" id="name" type="text" value="<?= $user['name']; ?>">
                            <?= form_error('name', '<small class="text-danger" pl-3>', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="example-email" class="col-md-12">Email</label>
                        <div class="col-md-12">
                            <input class="form-control" name="email" id="email" type="text" value="<?= $user['email']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Phone No</label>
                        <div class="col-md-12">
                            <input class="form-control" name="nohp" id="nohp" type="number" value="<?= $user['nohp']; ?>">
                            <?= form_error('nohp', '<small class="text-danger" pl-3>', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Link GMaps</label>
                        <div class="col-md-12">
                            <input class="form-control" name="maps" id="maps" type="text" value="<?= $user['maps']; ?>">
                            <?= form_error('maps', '<small class="text-danger" pl-3>', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group row">
                            <label class="custom-file-label col-sm-2">Picture</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="file" name="image" id="image">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success text-white">Update Profile</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="tab-pane" id="changepassword" role="tabpanel">
                <div class="card-body">
                    <form class="form-horizontal form-material" action="<?= base_url('user/changepassword'); ?>" method="post">
                        <div class="form-group">
                            <label class="col-md-12">Password</label>
                            <div class="col-md-12">
                                <input class="form-control" id="current_password" name="current_password" type="password" placeholder="Current Password">
                                <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Password</label>
                            <div class="col-md-12">
                                <input class="form-control" id="new_password1" name="new_password1" type="password" placeholder="New Password">
                                <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Password</label>
                            <div class="col-md-12">
                                <input class="form-control" name="new_password2" name="new_password2" type="password" placeholder="Konfirmasi Password">
                                <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-success text-white">Update Profile</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>