<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Info box -->
<!-- ============================================================== -->
<div class="row g-0">
    <div class="col-lg-3 col-md-6">
        <div class="card border">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <h3><i class="icons-User"></i></h3>
                                <p class="text-muted">TOTAL USER</p>
                            </div>
                            <div class="ms-auto">
                                <h2 class="counter text-primary"><?= $total_user ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card border">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <h3><i class="icons-Students"></i></h3>
                                <p class="text-muted">TOTAL SISWA</p>
                            </div>
                            <div class="ms-auto">
                                <h2 class="counter text-info"><?= $total_siswa ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card border">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <h3><i class="icons-Teacher"></i></h3>
                                <p class="text-muted">TOTAL WALIKELAS</p>
                            </div>
                            <div class="ms-auto">
                                <h2 class="counter text-danger"><?= $total_walikelas ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card border">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <h3><i class="icons-Money-2"></i></h3>
                                <p class="text-muted">TOTAL SISWAW BAYAR</p>
                            </div>
                            <div class="ms-auto">
                                <h2 class="counter text-cyan">Rp </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Info box -->
<!-- ============================================================== -->

<div class="col col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="d-flex m-b-40 align-items-center no-block">
                <h5 class="card-title ">Diagram Keuangan</h5>
                <div class="ms-auto">
                    <ul class="list-inline font-12">
                        <li><i class="fa fa-circle text-cyan"></i> 1 Minggu</li>
                        <li><i class="fa fa-circle text-primary"></i> 1 Bulan</li>
                        <li><i class="fa fa-circle text-purple"></i> 1 Tahun</li>
                    </ul>
                </div>
            </div>
            <div id="morris-area-chart" style="height: 340px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
            </div>
        </div>
    </div>
</div>