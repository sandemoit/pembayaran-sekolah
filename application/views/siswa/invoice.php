<div class="row">
    <div class="col-md-12">
        <div class="card card-body printableArea">
            <?php foreach ($invoice as $i) : ?>
                <h3><b>INVOICE</b> <span class="pull-right">#<?= $i['id'] ?></span></h3>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="pull-left">
                            <address>
                                <h3> &nbsp;<b class="text-danger">SMPN 2 LEMBAK</b></h3>
                                <p class="text-muted m-l-5">Silaberanti,
                                    <br /> Kecamatan Seberang Ulu I,
                                    <br /> Kota Palembang,
                                    <br /> Sumatera Selatan 30116
                                </p>
                            </address>
                        </div>
                        <div class="pull-right text-end">
                            <address>
                                <h3>To,</h3>
                                <h4 class="font-bold"><?= $i['nama_siswa'] ?></h4>
                                <p class="text-muted m-l-30"><?= $i['alamat_ortu'] ?>
                                </p>
                                <p class="m-t-30"><b>Tanggal Invoice :</b> <i class="ti-calendar"></i> <?= date('d M Y') ?></p>
                            </address>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive m-t-40" style="clear: both;">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Bulan Bayar</th>
                                        <th class="text-end">Tahun</th>
                                        <th class="text-end">Tanggal Bayar</th>
                                        <th class="text-end">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1 ?>
                                    <?php foreach ($invoice as $i) : ?>
                                        <tr>
                                            <td class="text-center"><?= $no ?></td>
                                            <td> <?= $i['bulan_bayar'] ?> </td>
                                            <td class="text-end"><?= $i['tahun_bayar'] ?> </td>
                                            <td class="text-end"> <?= date('d M Y', $i['tgl_bayar']) ?> </td>
                                            <td class="text-end">
                                                <?php $angka = $i['jmlh_bayar'];
                                                $rupiah = "Rp " . number_format($angka, 2, ',', '.');
                                                echo $rupiah;
                                                ?>
                                            </td>
                                        </tr>
                                        <?php $no++ ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="pull-right m-t-30 text-end">
                            <p>Sub - Total pembayaran: Rp. 13,848</p>
                            <p>PPN : Rp. 0 </p>
                            <hr>
                            <h3><b>Total :</b> Rp. 13,848</h3>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        <div class="text-end">
                            <button id="print" class="btn btn-success text-white" type="submit"><i class="ti-printer"></i> Print </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>