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
                    <a href="<?= site_url('siswa'); ?>" onclick="return confirm('Silahkan pilih siswa yang ingin ditambahkan data transaksi');" class="btn waves-effect waves-light btn-primary">+&nbsp; New Transaksi</a>
                </div>
            </div>
            <div class="table-responsive mt-3">
                <table id="myTable" class="table table-striped border">
                    <thead>
                        <tr>
                            <th>Nama Siswa</th>
                            <th>NIK</th>
                            <th>Bulan/Tahun Bayar</th>
                            <th>Jumlah Bayar (Rp)</th>
                            <th>Status</th>
                            <th>Waktu Transaksi</th>
                            <th>Sisa</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($transaksi as $t) : ?>
                            <tr>
                            <tr>
                                <td><?= $t['nama_siswa']; ?></td>
                                <td><?= $t['nik']; ?></td>
                                <td><?= $t['bulan_bayar']; ?> - <?= $t['tahun_bayar']; ?></td>
                                <td>
                                    <?php $angka = $t['jmlh_bayar'];
                                    $rupiah = "Rp " . number_format($angka, 2, ',', '.');
                                    echo $rupiah;
                                    ?>
                                </td>
                                <td><?= $t['status']; ?></td>
                                <td><?= date('d m Y', $t['tgl_bayar']); ?></td>
                                <td><?php $angka = $t['sisa'];
                                    $rupiah = "Rp " . number_format($angka, 2, ',', '.');
                                    echo $rupiah;
                                    ?>
                                </td>
                                <td class="text-center">
                                    <!-- detail transaksi -->
                                    <a href="#" class="btn btn-info btn-icon-split" data-bs-toggle="modal" data-bs-target="#detail<?= $t['id'] ?>">
                                        <span class="icon text-white-50">
                                            <i class="ti-book"></i>
                                        </span>
                                        <span class="text">Detail Transaksi</span>
                                    </a>
                                    <!-- cetak invoice -->
                                    <a href="<?= site_url('siswa/invoice/') . $t['id'] ?>" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="ti-printer"></i>
                                        </span>
                                        <span class="text">Invoice</span>
                                    </a>
                                    <!-- delete -->
                                    <a href="#" class="btn btn-danger btn-icon-split" data-bs-toggle="modal" data-bs-target="#hapusmodal<?= $t['id'] ?>">
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
<?php foreach ($transaksi as $t) : ?>
    <div class="modal fade" id="detail<?= $t['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="detail<?= $t['id'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detail<?= $t['id'] ?>">Detail Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="<?= base_url('siswa/editsiswa'); ?>">
                    <div class="modal-body">
                        <h4>Nama Siswa :</h4>
                        <p class="text-danger"><b><?= $t['nama_siswa']; ?></b></p>
                        <h4>Jumlah Bayar :</h4>
                        <p class="text-danger"><b>
                                <?php $angka = $t['jmlh_bayar'];
                                $rupiah = "Rp " . number_format($angka, 2, ',', '.');
                                echo $rupiah;
                                ?>
                            </b></p>
                        <h4>Untuk Pembayaran Bulan :</h4>
                        <p class="text-danger"><b><?= $t['bulan_bayar']; ?></b></p>
                        <h4>JUntuk Pembayaran Tahun :</h4>
                        <p class="text-danger"><b><?= $t['tahun_bayar']; ?></b></p>
                        <h4>Status Pembayaran :</h4>
                        <p class="text-success"><b><?= $t['status']; ?></b></p>
                        <h4>Tanggal Pembayaran :</h4>
                        <p class="text-danger"><b><?= date('d F Y', $t['tgl_bayar']); ?></b></p>
                        <h4>Petugas yang melakukan Pembayaran :</h4>
                        <p class="text-danger"><b><?= $t['nama_petugas']; ?></b></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- modal hapus -->
<?php foreach ($transaksi as $t) : ?>
    <div class="modal fade" id="hapusmodal<?= $t['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapusmodal<?= $t['id'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusmodal<?= $t['id'] ?>">Sure on Delete?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-danger">Menghapus Data id : <b><?= $t['id'] ?></b></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn waves-effect waves-light btn-info" data-bs-dismiss="modal">Close</button>
                    <a class="btn waves-effect waves-light btn-danger" href="<?= base_url('siswa/hapustransaksi/') . $t['id']; ?>">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>