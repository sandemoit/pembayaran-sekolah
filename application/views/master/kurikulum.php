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
                    <a href="" class="btn waves-effect waves-light btn-primary" data-bs-toggle="modal" data-bs-target="#newkelas">+&nbsp; New Kurikulum</a>
                </div>
            </div>
            <div class="table-responsive mt-3">
                <table id="myTable" class="table table-striped border">
                    <thead>
                        <tr>
                            <th>Nama Kurikulum</th>
                            <th>Semester</th>
                            <th>Tahun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kurikulum as $k) : ?>
                            <tr>
                                <td><?= $k['nama']; ?></td>
                                <td><?= $k['semester']; ?></td>
                                <td><?= $k['tahun']; ?></td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-icon-split" data-bs-toggle="modal" data-bs-target="#editmmodal<?= $k['id'] ?>">
                                        <span class="icon text-white-50">
                                            <i class="ti-pencil"></i>
                                        </span>
                                        <span class="text">Edit</span>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-icon-split" data-bs-toggle="modal" data-bs-target="#hapusmodal<?= $k['id'] ?>">
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


<!-- Modal Add -->
<div class="modal fade" id="newkelas" tabindex="-1" role="dialog" aria-labelledby="newkelas" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newkelas">Add New Kelas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo base_url('master/kurikulum') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama Kurikulum</label>
                        <select class="form-control" name="nama" id="nama" type="text">
                            <option value="">-- Pilih kurikulum --</option>
                            <option value="K-2013 Paket">K-2013 Paket</option>
                            <option value="K-2013 SKS">K-2013 SKS</option>
                            <option value="K-2006 (KTSP)">K-2006 (KTSP)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="semester">Semester</label>
                        <select class="form-control" name="semester" id="semester" type="text">
                            <option value="">-- Pilih Semester --</option>
                            <option value="Ganjil">Ganjil</option>
                            <option value="Genap">Genap</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <input type="number" class="form-control" id="tahun" name="tahun">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn waves-effect waves-light btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn waves-effect waves-light btn-info">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal edit -->
<?php foreach ($kurikulum as $k) : ?>
    <div class="modal fade" id="editmmodal<?= $k['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="editmmodal<?= $k['id'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editmmodal<?= $k['id'] ?>">Edit Kelas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?php echo base_url('master/kurikulum') ?>" method="POST">
                    <input type="number" name="id" value="<?= $k['id']; ?>" hidden>
                    <div class="modal-body">
                        <div class="form-group">
                            <select class="form-control" name="nama" id="nama" type="text">
                                <option value="<?= $k['nama'] ?>"><?= $k['nama'] ?></option>
                                <option value="K-2013 Paket">K-2013 Paket</option>
                                <option value="K-2013 SKS">K-2013 SKS</option>
                                <option value="K-2006 (KTSP)">K-2006 (KTSP)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="semester" id="semester" type="text">
                                <option value="<?= $k['semester'] ?>"><?= $k['semester'] ?></option>
                                <option value="Ganjil">Ganjil</option>
                                <option value="Genap">Genap</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="tahun" name="tahun" value="<?= $k['tahun']; ?>" readonly>
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
<?php foreach ($kurikulum as $k) : ?>
    <div class="modal fade" id="hapusmodal<?= $k['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapusmodal<?= $k['id'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusmodal<?= $k['id'] ?>">Sure on Delete?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-danger">Menghapus Data Kurikulum</b></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn waves-effect waves-light btn-info" data-bs-dismiss="modal">Close</button>
                    <a class="btn waves-effect waves-light btn-danger" href="<?= base_url('master/hapuskurikulum/') . $k['id']; ?>">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>