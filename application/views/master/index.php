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
                    <a href="" class="btn waves-effect waves-light btn-primary" data-bs-toggle="modal" data-bs-target="#newiuran">+&nbsp; New Iuran</a>
                </div>
            </div>
            <div class="table-responsive mt-3">
                <table id="myTable" class="table table-striped border">
                    <thead>
                        <tr>
                            <th>Jumlah Lunas Bayar</th>
                            <th>Pembayaran Bulanan</th>
                            <th>Tahun</th>
                            <th widht>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($iuran as $i) : ?>
                            <tr>
                                <td>
                                    <?php $angka = $i['jmlh_bayar_lunas'];
                                    $rupiah = "Rp " . number_format($angka, 2, ',', '.');
                                    echo $rupiah;
                                    ?>
                                </td>
                                <td><?= $i['bulan_bayar']; ?></td>
                                <td><?= $i['tahun']; ?></td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-icon-split" data-bs-toggle="modal" data-bs-target="#editmmodal<?= $i['id'] ?>">
                                        <span class="icon text-white-50">
                                            <i class="ti-pencil"></i>
                                        </span>
                                        <span class="text">Edit</span>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-icon-split" data-bs-toggle="modal" data-bs-target="#hapusmodal<?= $i['id'] ?>">
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
<div class="modal fade" id="newiuran" tabindex="-1" role="dialog" aria-labelledby="newiuran" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newiuran">Add New Iuran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo base_url('master') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <select name="bulan_bayar" id="bulan_bayar" class="form-control">
                            <option value="">Select Mon</option>
                            <?php
                            $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                            $jlh_bln = count($bulan);
                            for ($c = 0; $c < $jlh_bln; $c += 1) {
                                echo "<option value=$bulan[$c]> $bulan[$c] </option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" id="jmlh_bayar_lunas" name="jmlh_bayar_lunas" placeholder="Jumlah Bayar Lunas (Rp)">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="number" id="tahun" name="tahun" maxlength="4" placeholder="Tahun">
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
<?php foreach ($iuran as $i) : ?>
    <div class="modal fade" id="editmmodal<?= $i['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="editmmodal<?= $i['id'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editmmodal<?= $i['id'] ?>">Edit Iuran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?php echo base_url('master/editiuran') ?>" method="POST">
                    <div class="modal-body">
                        <input class="form-control" type="hidden" id="id" name="id" value="<?= $i['id']; ?>">
                        <div class="form-group">
                            <input type="text" class="form-control" id="bulan_bayar" name="bulan_bayar" value="<?= $i['bulan_bayar']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="jmlh_bayar_lunas" name="jmlh_bayar_lunas" value="<?= $i['jmlh_bayar_lunas']; ?>">
                            <?= form_error('jmlh_bayar_lunas', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="tahun" name="tahun" maxlength="4" value="<?= $i['tahun']; ?>" readonly>
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
<?php foreach ($iuran as $i) : ?>
    <div class="modal fade" id="hapusmodal<?= $i['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapusmodal<?= $i['id'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusmodal<?= $i['id'] ?>">Sure on Delete?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-danger">Menghapus Data</b></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn waves-effect waves-light btn-info" data-bs-dismiss="modal">Close</button>
                    <a class="btn waves-effect waves-light btn-danger" href="<?= base_url('master/hapusiuran/') . $i['id']; ?>">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>