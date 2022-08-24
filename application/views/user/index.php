<div class="main-content position-relative max-height-vh-100 h-100">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-4  mb-lg-0 mb-4">
                <div class="card card-profile">
                    <img src="<?= base_url('assets') ?>/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
                    <div class="row justify-content-center">
                        <div class="col-4 col-lg-4 order-lg-2">
                            <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                                <a href="javascript:;">
                                    <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="rounded-circle img-fluid border border-2 border-white">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-0">
                        <div class="d-flex justify-content-center mt-3">
                            <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block">Coming Soon</a>
                            <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-block d-lg-none"><i class="ni ni-email-83"></i></a>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="text-center mt-4">
                            <h5>
                                <?= $user['name']; ?>
                            </h5>
                            <div class="h6 font-weight-300">
                                <i class="ni location_pin mr-2"></i><?= $user['email']; ?>
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>Member Since <?= date('d F Y', $user['date_created']); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8  mb-lg-0 mb-5">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Edit Profile</p>
                            <a class="btn btn-primary btn-sm ms-auto" type="submit" href="#">Save Changes</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">User Information</p>
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Name</label>
                                        <input class="form-control" name="name" id="name" type="text" value="lucky.jesse">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Email address</label>
                                        <input class="form-control" name="email" id="email" type="text" value="jesse@example.com">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Password</label>
                                        <input class="form-control" name="password1" id="password1" type="password" value="Jesse">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Konfirmasi Password</label>
                                        <input class="form-control" name="password2" name="password2" type="password" value="Lucky">
                                        <span><small class="text-danger">Kosongkan jika tidak merubah password</small></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>