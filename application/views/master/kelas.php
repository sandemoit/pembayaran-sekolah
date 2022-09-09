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
                    <a href="" class="btn waves-effect waves-light btn-primary" data-bs-toggle="modal" data-bs-target="#newkelas">+&nbsp; New Kelas</a>
                </div>
            </div>
            <div class="table-responsive mt-3">
                <table id="myTable" class="table table-striped border">
                    <thead>
                        <tr>
                            <th>Nama Kelas</th>
                            <th>Kurikulum</th>
                            <th>Semester</th>
                            <th>Tahun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kelas as $k) : ?>
                            <tr>
                                <td><?= $k['nama_kelas']; ?></td>
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
            <form action="<?php echo base_url('master/kelas') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" placeholder="Nama Kelas">
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="id_kurikulum" id="id_kurikulum" type="text">
                            <option value="">-- Pilih kurikulum --</option>
                            <?php foreach ($kurikulums as $k) : ?>
                                <option value="<?= $k['id'] ?>"><?= $k['nama'] . '&nbsp;| Semester ' . $k['semester'] . '&nbsp;| Tahun ' . $k['tahun'] ?></option>
                            <?php endforeach; ?>
                        </select>
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
<?php foreach ($kelas as $k) : ?>
    <div class="modal fade" id="editmmodal<?= $k['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="editmmodal<?= $k['id'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editmmodal<?= $k['id'] ?>">Edit Kelas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?php echo base_url('master/editKelas') ?>" method="POST">
                    <input type="number" name="id" value="<?= $k['id']; ?>" hidden>
                    <input type="number" name="id_kurikulum" value="<?= $k['id_kurikulum']; ?>" hidden>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="<?= $k['nama_kelas']; ?>">
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
<?php foreach ($kelas as $k) : ?>
    <div class="modal fade" id="hapusmodal<?= $k['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapusmodal<?= $k['id'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusmodal<?= $k['id'] ?>">Sure on Delete?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-danger">Menghapus Data</b></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn waves-effect waves-light btn-info" data-bs-dismiss="modal">Close</button>
                    <a class="btn waves-effect waves-light btn-danger" href="<?= base_url('master/hapuskelas/') . $k['id']; ?>">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>