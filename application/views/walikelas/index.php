<div class="col-12">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <?= $this->session->flashdata('message'); ?>
                </div>
            </div>
            <div>
                <h5 class="mb-2">Table <?= $title; ?></h5>
            </div>
            <div class="ms-auto my-auto mt-lg-0 mt-4">
                <div class="ms-auto my-auto">
                    <a href="<?= site_url('walikelas/tambahwalikelas') ?>" class="btn waves-effect waves-light btn-primary">+&nbsp; New Kelas</a>
                    <a href="" class="btn waves-effect waves-light btn-success" data-bs-toggle="modal" data-bs-target="#tambah">+&nbsp; Upload Excel</a>
                </div>
            </div>
            <div class="table-responsive mt-3">
                <table id="myTable" class="table table-striped border">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Kelas Binaan</th>
                            <th>E-mail</th>
                            <th>No Handphone</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($walikelas as $w) : ?>
                            <tr>
                                <td><?= $w['name']; ?></td>
                                <td><?= $w['nip']; ?></td>
                                <td><?= $w['nama_kelas']; ?></td>
                                <td><?= $w['email']; ?></td>
                                <td><?= $w['nohp']; ?></td>
                                <td>
                                    <a href="#" class="btn btn-danger btn-icon-split" data-bs-toggle="modal" data-bs-target="#hapusmodal<?= $w['id'] ?>">
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

<!-- modal hapus -->
<?php foreach ($walikelas as $w) : ?>
    <div class="modal fade" id="hapusmodal<?= $w['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapusmodal<?= $w['id'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusmodal<?= $w['id'] ?>">Sure on Delete?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-danger">Menghapus Data User : <b><?= $w['name'] ?></b></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn waves-effect waves-light btn-info" data-bs-dismiss="modal">Close</button>
                    <a class="btn waves-effect waves-light btn-danger" href="<?= base_url('walikelas/hapuswalikelas/') . $w['email']; ?>">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal Add -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambah" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambah">Upload File Excel Walikelas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url('walikelas/import_excel') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Pilih File Excel</label>
                        <input type="file" name="fileExcel">
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

<!-- hapus -->
<?php foreach ($walikelas as $w) : ?>
    <div class="modal fade" id="hapusmodal<?= $w['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapusmodal<?= $w['id'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusmodal<?= $w['id'] ?>">Sure on Delete?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-danger">Menghapus Data User : <b><?= $w['name'] ?></b></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn waves-effect waves-light btn-info" data-bs-dismiss="modal">Close</button>
                    <a class="btn waves-effect waves-light btn-danger" href="<?= base_url('walikelas/hapuswalikelas/') . $w['email']; ?>">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>