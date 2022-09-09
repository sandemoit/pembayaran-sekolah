<div class="col-12">
    <div class="card">
        <div class="card-body">
            <?= $this->session->flashdata('message'); ?>
            <h4 class="card-title"><?= $title; ?></h4>
            <form method="post" action="<?= base_url('siswa/tambahsiswa'); ?>">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="nik" name="nik" placeholder="Enter Name here">
                            <label for="tb-fname">Nomor Induk Kependudakan (NIK)</label>
                            <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="nok" name="nok" placeholder="Enter Name here">
                            <label for="tb-email">Nomor KK (NOK)</label>
                            <?= form_error('nok', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="tb-fname" id="nama_siswa" name="nama_siswa" placeholder="Enter Name here">
                            <label for="tb-fname">Nama Siswa</label>
                            <?= form_error('nama_siswa', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Enter Name here">
                            <label for="tb-email">Nama Ayah</label>
                            <?= form_error('nama_ayah', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Enter Name here">
                            <label for="tb-email">Nama Ibu</label>
                            <?= form_error('nama_ibu', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <select class="custom-select form-control" id="kelas_id" name="kelas_id" type="text">
                                <option value="">-- Pilih kelas --</option> -->
                                <?php foreach ($kelas as $k) : ?>
                                    <option value="<?= $k['id']; ?>"><?= $k['nama_kelas']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('kelas_id', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki">
                            <label class="form-check-label" for="customCheck1">Laki - laki</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan">
                            <label class="form-check-label" for="customCheck1">Perempuan</label>
                        </div>
                        <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <textarea class="form-control" id="alamat_ortu" name="alamat_ortu" rows="3" placeholder="Enter Name here"></textarea>
                            <label for="tb-email">Alamat</label>
                            <?= form_error('alamat_ortu', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-md-flex align-items-center mt-3">
                            <div class="ms-auto mt-3 mt-md-0">
                                <button type="submit" class="btn btn-primary text-white">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>