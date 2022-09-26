<div class="col-12">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <?= $this->session->flashdata('message'); ?>
                </div>
            </div>
            <div>
                <h5 class="mb-2">Table <?= $title; ?></h5>
            </div>
            <div class="ms-auto my-auto mt-lg-0 mt-4">
                <div class="ms-auto my-auto">
                    <a href="<?= site_url('siswa/tambahsiswa') ?>" class="btn waves-effect waves-light btn-primary">+&nbsp; New Siswa</a>
                </div>
            </div>
            <div class="table-responsive mt-3">
                <table id="myTable" class="table table-striped border">
                    <thead>
                        <tr>
                            <th>Nama Siswa</th>
                            <th>Jenis Kelamin</th>
                            <th>NIK</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($siswa as $s) : ?>
                            <tr>
                                <th><?= $s['nama_siswa']; ?></th>
                                <th><?= $s['jenis_kelamin']; ?></th>
                                <th><?= $s['nik']; ?></th>
                                <th><?= $s['nama_kelas']; ?></th>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-icon-split" data-bs-toggle="modal" data-bs-target="#transaksi<?= $s['nik'] ?>">
                                        <span class="icon text-white-50">
                                            <i class="icons-Money-2"></i>
                                        </span>
                                        <span class="text">Input Transaksi Siswa</span>
                                    </a>
                                    <a href="#" class="btn btn-info btn-icon-split" data-bs-toggle="modal" data-bs-target="#detail<?= $s['nik'] ?>">
                                        <span class="icon text-white-50">
                                            <i class="icons-Students"></i>
                                        </span>
                                        <span class="text">Detail Siswa</span>
                                    </a>
                                    <a href="#" class="btn btn-warning btn-icon-split" data-bs-toggle="modal" data-bs-target="#editmmodal<?= $s['nik'] ?>">
                                        <span class="icon text-white-50">
                                            <i class="ti-pencil"></i>
                                        </span>
                                        <span class="text">Edit</span>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-icon-split" data-bs-toggle="modal" data-bs-target="#hapusmodal<?= $s['nik'] ?>">
                                        <span class="icon text-white-50">
                                            <i class="ti-trash"></i>
                                        </span>
                                        <span class="text">Delete</span>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal detail -->
<?php foreach ($siswa as $s) : ?>
    <div class="modal fade" id="detail<?= $s['nik'] ?>" tabindex="-1" role="dialog" aria-labelledby="detail<?= $s['nik'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detail<?= $s['nik'] ?>">Detail Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="<?= base_url('siswa/editsiswa'); ?>">
                    <div class="modal-body">
                        <h4>Nomor Induk Keluarga (NIK) :</h4>
                        <p class="text-danger"><b><?= $s['nik']; ?></b></p>
                        <h4>Nomor kartu keluarag (NOK) :</h4>
                        <p class="text-danger"><b><?= $s['nok']; ?></b></p>
                        <h4>Nama :</h4>
                        <p class="text-danger"><b><?= $s['nama_siswa']; ?></b></p>
                        <h4>Jenis Kelamin :</h4>
                        <p class="text-danger"><b><?= $s['jenis_kelamin']; ?></b></p>
                        <h4>Kelas :</h4>
                        <p class="text-danger"><b><?= $s['nama_kelas']; ?></b></p>
                        <h4>Nama Ayah :</h4>
                        <p class="text-danger"><b><?= $s['nama_ayah']; ?></b></p>
                        <h4>Nama Ibu :</h4>
                        <p class="text-danger"><b><?= $s['nama_ibu']; ?></b></p>
                        <h4>Alamat orang tua :</h4>
                        <p class="text-danger"><b><?= $s['alamat_ortu']; ?></b></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal edit -->
<?php foreach ($siswa as $s) : ?>
    <div class="modal fade" id="editmmodal<?= $s['nik'] ?>" tabindex="-1" role="dialog" aria-labelledby="editmmodal<?= $s['nik'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editmmodal<?= $s['nik'] ?>">Edit Data Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="<?= base_url('siswa/editsiswa'); ?>">
                    <div class="row">
                        <div class="col-6">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="nik">Nomor Induk Kependudakan (NIK)</label>
                                    <input type="text" class="form-control" id="nik" name="nik" value="<?= $s['nik']; ?>" maxlength="16" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="nok">Nomor KK (NOK)</label>
                                    <input type="text" class="form-control" id="nok" name="nok" maxlength="16" value="<?= $s['nok']; ?>">
                                    <?= form_error('nok', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="nama_siswa">Nama Siswa</label>
                                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="<?= $s['nama_siswa']; ?>">
                                    <?= form_error('nama_siswa', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" type="text">
                                        <option value="<?= $s['jenis_kelamin']; ?>" selected><?= $s['jenis_kelamin']; ?></option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="kelas_id">Kelas</label>
                                    <select class="form-control" id="kelas_id" name="kelas_id" type="text">
                                        <option value="<?= $s['kelas_id']; ?>"><?= $s['nama_kelas']; ?></option>
                                        <?php foreach ($kelas as $k) : ?>
                                            <option value="<?= $k['id']; ?>"><?= $k['nama_kelas']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nama_ayah">Nama Ayah</label>
                                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?= $s['nama_ayah']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="nama_ibu">Nama Ibu</label>
                                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?= $s['nama_ibu']; ?>">
                                    <?= form_error('nama_ibu', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="alamat_ortu">Alamat Lengkap Orang Tua</label>
                                    <textarea class="form-control" id="alamat_ortu" name="alamat_ortu" rows="3"><?= $s['alamat_ortu']; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn waves-effect waves-light btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn waves-effect waves-light btn-info">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal transaksi -->
<?php foreach ($siswa as $s) : ?>
    <div class="modal fade" id="transaksi<?= $s['nik'] ?>" tabindex="-1" role="dialog" aria-labelledby="transaksi<?= $s['nik'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="transaksi<?= $s['nik'] ?>">Edit Data Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="<?= base_url('siswa'); ?>">
                    <input type="number" name="id" value="<?= $s['id']; ?>" hidden>
                    <input type="text" name="nama_petugas" value="<?= $user['name']; ?>" hidden>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama_siswa">Nama Siswa</label>
                            <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" value="<?= $s['nama_siswa']; ?>" disabled>
                        </div>
                        <div class=" form-group">
                            <label for="jenis_kelamin">Untuk Pembayaran Bulan</label>
                            <select class="form-control" name="bulan_bayar" id="bulan_bayar" type="text">
                                <option value="">-- Pilih Bulan --</option>
                                <?php foreach ($iuran as $i) : ?>
                                    <option value="<?= $i['bulan_bayar'] ?>"><?= $i['bulan_bayar'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Untuk Pembayaran Tahun</label>
                            <select class="form-control" name="tahun_bayar" id="tahun_bayar" type="text">
                                <option value="">-- Pilih Tahun --</option>
                                <?php foreach ($iuran as $i) : ?>
                                    <option value="<?= $i['tahun'] ?>"><?= $i['tahun'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama_siswa">Jumlah Bayar</label>
                            <input type="number" class="form-control" name="jmlh_bayar" id="jmlh_bayar">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn waves-effect waves-light btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn waves-effect waves-light btn-info">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- modal hapus -->
<?php foreach ($siswa as $s) : ?>
    <div class="modal fade" id="hapusmodal<?= $s['nik'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapusmodal<?= $s['nik'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusmodal<?= $s['nik'] ?>">Sure on Delete?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-danger">Menghapus Data NIK : <b><?= $s['nik'] ?></b></p>
                    <p class="text-danger">Menghapus Data NAMA : <b><?= $s['nama_siswa'] ?></b></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn waves-effect waves-light btn-info" data-bs-dismiss="modal">Close</button>
                    <a class="btn waves-effect waves-light btn-danger" href="<?= base_url('siswa/hapussiswa/') . $s['nik']; ?>">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>