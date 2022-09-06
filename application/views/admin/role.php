<div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger " role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>
            <h4 class="card-title">Role Management</h4>
            <div class="ms-auto my-auto mt-lg-0 mt-3 mb-1">
                <div class="ms-auto my-auto">
                    <a href="" class="btn waves-effect waves-light btn-primary" data-bs-toggle="modal" data-bs-target="#newrolemodal">+&nbsp; New Role</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($role as $r) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><span class="label label-info"><span><?= $r['role']; ?></span></span>
                                <td><a href="<?= base_url('admin/admin/roleaccess/') . $r['id']; ?>" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fa fa-gear"></i>
                                        </span>
                                        <span class="text">Access</span>
                                    </a>
                                    <a href="" class="btn btn-warning btn-icon-split" data-bs-toggle="modal" data-bs-target="#editrolemodal<?= $r['id'] ?>">
                                        <span class="icon text-white-50">
                                            <i class="ti-pencil"></i>
                                        </span>
                                        <span class="text">Edit</span>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-icon-split" data-bs-toggle="modal" data-bs-target="#hapusmodal<?= $r['id'] ?>">
                                        <span class="icon text-white-50">
                                            <i class="ti-trash"></i>
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


<!-- Modal Add -->
<div class="modal fade" id="newrolemodal" tabindex="-1" role="dialog" aria-labelledby="newrolemodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newrolemodal">Edit Name Role</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url('admin/admin/role') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input class="form-control" type="text" id="role" name="role" placeholder="Role Name">
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
<?php foreach ($role as $r) : ?>
    <div class="modal fade" id="editrolemodal<?= $r['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="editrolemodal<?= $r['id'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editrolemodal<?= $r['id'] ?>">Edit Role Name</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo base_url('admin/admin/edit') ?>" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <input class="form-control" type="hidden" id="id" name="id" value="<?= $r['id']; ?>">
                            <input class="form-control" type="text" id="role" name="role" value="<?= $r['role']; ?>">
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
<?php foreach ($role as $r) : ?>
    <div class="modal fade" id="hapusmodal<?= $r['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapusmodal<?= $r['id'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusmodal<?= $r['id'] ?>">Sure on Delete?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-danger">Menghapus Data Role : <b><?= $r['role']; ?></b></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn waves-effect waves-light btn-info" data-bs-dismiss="modal">Close</button>
                    <a class="btn waves-effect waves-light btn-danger" href="<?= base_url('admin/admin/delete/') . $r['id']; ?>">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>