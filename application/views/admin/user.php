<div class="col-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-lg-flex">
                <div>
                    <h5 class="mb-0">User Management</h5>
                </div>
                <div class="ms-auto my-auto mt-lg-0 mt-4">
                    <div class="ms-auto my-auto">
                        <a href="" class="btn bg-gradient-primary btn-sm mb-0" data-bs-toggle="modal" data-bs-target="#newrolemodal">+&nbsp; New User</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger " role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 10px;">No</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Role</th>
                            <th class="text-center">Status</th>
                            <th class="text-center" style="width: 20%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($user as $u) : ?>
                            <tr>
                                <td class="text-center"><?= $i; ?></td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <img class="avatar avatar-sm me-3" src="<?= base_url('assets/img/profile/') . $u['image']; ?>" alt=""><?= $u['name']; ?>
                                    </div>
                                </td>
                                <td class="text-center"><?= $u['email']; ?></td>
                                <td class="text-center">
                                    <?php if ($u['role_id'] == 1) : ?>
                                        <span class="badge badge-sm bg-gradient-success">Admin</span>
                                    <?php else : ?>
                                        <span class="badge badge-sm bg-gradient-warning">Member</span>
                                    <?php endif ?>
                                </td>
                                <td class="text-center">
                                    <?php if ($u['is_active'] == 1) : ?>
                                        <span class="badge badge-sm bg-gradient-success">Active</span>
                                    <?php else : ?>
                                        <span class="badge badge-sm bg-gradient-danger">Isactive</span>
                                    <?php endif ?>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-danger btn-icon-split" data-bs-toggle="modal" data-bs-target="#hapusmodal<?= $u['id'] ?>">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Delete</span>
                                    </a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<!-- Modal Add -->
<!-- <div class="modal fade" id="newrolemodal" tabindex="-1" role="dialog" aria-labelledby="newrolemodal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newrolemodal">Edit Name Role</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?php echo base_url('admin/role') ?>" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <input class="form-control" type="text" id="role" name="role" placeholder="Role Name">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn bg-gradient-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->

<!-- modal hapus -->
<?php foreach ($user as $u) : ?>
    <div class="modal fade" id="hapusmodal<?= $u['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapusmodal<?= $u['id'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusmodal<?= $u['id'] ?>">Sure on Delete?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-danger">Menghapus Data Akun : <b><?= $u['name']; ?></b></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <a class="btn bg-gradient-danger" href="<?= base_url('admin/userdelete/') . $u['id']; ?>">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>