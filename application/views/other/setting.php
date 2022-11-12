<div class="col-lg-4 col-xlg-3 col-md-5">
    <div class="card">
        <div class="card-body">
            <center class="m-t-30"> <img src="<?= base_url('assets/img/') . $setting['logo']; ?>" class="img-circle" width="150">
                <h4 class="card-title m-t-10"><?= $setting['nama_sekolah']; ?></h4>
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
            <h6><?= $setting['email_sekolah']; ?></h6> <small class="text-muted p-t-30 db">Phone</small>
            <h6><?= $setting['nohp']; ?></h6> <small class="text-muted p-t-30 db">Address</small>
            <h6><?= $setting['alamat_sekolah']; ?></h6> <small class="text-muted p-t-30 db"></small>
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
            <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#settings" role="tab" aria-selected="true">Setting Sekolah</a> </li>
            <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#pejabat" role="tab" aria-selected="false">Data Pejabat</a> </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="settings" role="tabpanel">
                <div class="card-body">
                    <?php echo form_open_multipart('other/setting'); ?>
                    <div class="form-group">
                        <label class="col-md-12">Nama Sekolah</label>
                        <div class="col-md-12">
                            <input class="form-control" name="nama_sekolah" id="nama_sekolah" type="text" value="<?= $setting['nama_sekolah']; ?>">
                            <?= form_error('nama_sekolah', '<small class="text-danger" pl-3>', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="example-email" class="col-md-12">Alamat Sekolah</label>
                        <div class="col-md-12">
                            <input class="form-control" name="alamat_sekolah" id="alamat_sekolah" type="text" value="<?= $setting['alamat_sekolah']; ?>">
                            <?= form_error('alamat_sekolah', '<small class="text-danger" pl-3>', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Nama kota/kabupaten</label>
                        <div class="col-md-12">
                            <input class="form-control" name="nama_kota" id="nama_kota" type="text" value="<?= $setting['nama_kota']; ?>">
                            <?= form_error('nama_kota', '<small class="text-danger" pl-3>', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">No Telphone</label>
                        <div class="col-md-12">
                            <input class="form-control" name="nohp" id="nohp" type="number" value="<?= $setting['nohp']; ?>">
                            <?= form_error('nohp', '<small class="text-danger" pl-3>', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Alamat E-mail</label>
                        <div class="col-md-12">
                            <input class="form-control" name="email_sekolah" id="email_sekolah" type="text" value="<?= $setting['email_sekolah']; ?>">
                            <?= form_error('email_sekolah', '<small class="text-danger" pl-3>', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group row">
                            <label class="custom-file-label col-sm-2">Picture</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="file" name="logo" id="logo">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success text-white">Update Sekolah</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="tab-pane" id="pejabat" role="tabpanel">
                <div class="card-body">
                    <form class="form-horizontal form-material" action="<?= base_url('other/pejabat'); ?>" method="post">
                        <div class="form-group">
                            <label class="col-md-12">Nama Kepala Sekolah</label>
                            <div class="col-md-12">
                                <input class="form-control" name="kepsek" id="kepsek" type="text" value="<?= $setting['kepsek']; ?>">
                                <?= form_error('kepsek', '<small class="text-danger" pl-3>', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">NIP Kepsek</label>
                            <div class="col-md-12">
                                <input class="form-control" name="nip_kepsek" id="nip_kepsek" type="text" value="<?= $setting['nip_kepsek']; ?>">
                                <?= form_error('nip_kepsek', '<small class="text-danger" pl-3>', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Nama Bendahara</label>
                            <div class="col-md-12">
                                <input class="form-control" name="bendahara" id="bendahara" type="text" value="<?= $setting['bendahara']; ?>">
                                <?= form_error('bendahara', '<small class="text-danger" pl-3>', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">NIP Bendahara</label>
                            <div class="col-md-12">
                                <input class="form-control" name="nip_bendahara" id="nip_bendahara" type="text" value="<?= $setting['nip_bendahara']; ?>">
                                <?= form_error('nip_bendahara', '<small class="text-danger" pl-3>', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-success text-white">Update Pejabat</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>