<?= $this->extend('admin/main'); ?>

<?= $this->section('menu'); ?>

<div class="scrollbar-sidebar">
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
            <li class="app-sidebar__heading"></li>
            <li>
                <a href="<?= base_url('/admin'); ?>">
                    <i class="metismenu-icon pe-7s-rocket"></i>
                    Dashboard
                </a>
            </li>
            <li class="app-sidebar__heading">Administrator</li>
            <?php if (session()->get('userRole') == 1 || session()->get('userRole') == 0) { ?>
                <li class="mm-active">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Masters
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul class="mm-show">
                        <?php if (session()->get('userLevel') == 0) { ?>
                            <li>
                                <a href="<?= base_url('/admin/user'); ?>" class="mm-active">
                                    <i class="metismenu-icon"></i>
                                    User
                                </a>
                            </li>
                        <?php } ?>
                        <li>
                            <a href="<?= base_url('/admin/penumpang'); ?>">
                                <i class="metismenu-icon">
                                </i>Penumpang
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('/admin/kategori'); ?>">
                                <i class="metismenu-icon">
                                </i>Kategori
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('/admin/rute'); ?>">
                                <i class="metismenu-icon">
                                </i>Rute
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('/admin/kapal'); ?>">
                                <i class="metismenu-icon">
                                </i>Kapal
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('/admin/jadwal'); ?>">
                                <i class="metismenu-icon">
                                </i>Jadwal
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-car"></i>
                        Transactions
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?= base_url('/admin/pemesanan'); ?>">
                                <i class="metismenu-icon">
                                </i>Pemesanan Tiket
                            </a>
                        </li>
                    </ul>
                </li>
            <?php } ?>
            <?php if (session()->get('userRole') == 2 || session()->get('userRole') == 0) { ?>
                <li>
                    <a href="<?= base_url('/admin/report') ?>">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Report
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-user icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Data User
                        <div class="page-title-subheading">This is a page for managing user data.
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <div class="d-inline-block dropdown">
                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fa fa-info fa-w-20"></i>
                            </span>
                            Info
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-inbox"></i>
                                        <span>
                                            Tambah
                                        </span>
                                        <div class="ml-auto badge badge-pill badge-info"> </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-book"></i>
                                        <span>
                                            Edit
                                        </span>
                                        <div class="ml-auto badge badge-pill badge-primary"> </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-picture"></i>
                                        <span>
                                            Hapus
                                        </span>
                                        <div class="ml-auto badge badge-pill badge-danger"> </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-book"></i>
                                        <span>
                                            Report
                                        </span>
                                        <div class="ml-auto badge badge-pill badge-success"> </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <?php if (session()->getFlashdata('success')) { ?>
                <div class="alert alert-success icons-alert m-2">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo session()->getFlashdata('success'); ?>
                </div>
            <?php } else if (session()->getFlashdata('failed')) { ?>
                <div class="alert alert-danger icons-alert m-2">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo session()->getFlashdata('failed'); ?>
                </div>
            <?php } ?>
            <div class="app-main__inner">
                <div class="box-body">
                    <button data-toggle="modal" data-target="#addModal" class="btn btn-outline-info btn-lg col-md-2 mb-2">
                        <span class="btn-icon-wrapper pr-2 opacity-7" aria-hidden="true">
                            <i class="fa fa-plus fa-w-20"></i>
                        </span>
                        Tambah
                    </button>
                    <a href="<?= base_url('/admin/user/laporan'); ?>" target="__blank" class="btn btn-outline-success btn-lg col-md-2 mb-2">
                        <span class="btn-icon-wrapper pr-2 opacity-7" aria-hidden="true">
                            <i class="fa fa-print fa-w-20"></i>
                        </span>
                        Laporan
                    </a>
                    <br><br>
                    <div class="container">
                        <table id="datatable" name="datatable" class="table table-simple datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Email</th>
                                    <th>Nama</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;
                                foreach ($user as $row) : $no++ ?>
                                    <tr>
                                        <td> <?= $no; ?></td>
                                        <td> <?= $row['userEmail']; ?></td>
                                        <td> <?= $row['userNama']; ?></td>
                                        <td>
                                            <?php if ($row['userRole'] == 1) { ?>
                                                <span class="badge bg-primary text-light">Admin</span>
                                            <?php } else if ($row['userRole'] == 0) { ?>
                                                <span class="badge bg-info text-light">Super Admin</span>
                                            <?php } else if ($row['userRole'] == 2) { ?>
                                                <span class="badge bg-success text-light">Pimpinan</span>
                                            <?php } ?>
                                        <td style="text-align: center;">
                                            <a href="#" data-toggle="modal" data-target="#editModal<?= $row['userId']; ?>" class="btn-transition btn btn-outline-primary btn-update">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn-transition btn btn-outline-danger btn-delete" data-toggle="modal" data-target="#deleteModal<?= $row['userId']; ?>">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('modal'); ?>

<div id="addModal" class="modal fade" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="">Form Tambah User</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/user/save'); ?>" method="POST" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?= old('email'); ?>" required placeholder="Masukan email">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('email'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?= old('nama'); ?>" required placeholder="Masukan nama">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password" required placeholder="Masukan password">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('password'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Role</label>
                                    <select name="level" id="level" required class="form-control <?= ($validation->hasError('level')) ? 'is-invalid' : ''; ?>">
                                        <option value="1">Admin</option>
                                        <option value="0">Super Admin</option>
                                        <option value="2">Pimpinan</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('level'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="float-right">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-info">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php foreach ($user as $row) : ?>
    <form action="<?= base_url('admin/user/edit'); ?>" enctype="multipart/form-data" method="POST">
        <?= csrf_field(); ?>
        <div class="modal fade" id="editModal<?= $row['userId']; ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title">Form Edit User</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <input type="hidden" name="id" id="id" value="<?= $row['userId']; ?>">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" readonly class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?= $row['userEmail']; ?>" required placeholder="Masukan email">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('email'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?= $row['userNama']; ?>" required placeholder="Masukan nama">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" readonly class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password" value="<?= $row['userPassword']; ?>" required placeholder="Masukan password">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('password'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Level</label>
                                    <select name="level" id="level" required class="form-control <?= ($validation->hasError('level')) ? 'is-invalid' : ''; ?>">
                                        <?php if ($row['userRole'] == 1) { ?>
                                            <option selected value="1">Admin</option>
                                            <option value="0">Super Admin</option>
                                            <option value="2">Pimpinan</option>
                                        <?php } else if ($row['userRole'] == 0) { ?>
                                            <option selected value="0">Super Admin</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Pimpinan</option>
                                        <?php } else if ($row['userRole'] == 2) { ?>
                                            <option selected value="2">Pimpinan</option>
                                            <option value="0">Super Admin</option>
                                            <option value="1">Admin</option>
                                        <?php } ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('level'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary mt-2 mb-2" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary mt-2 mb-2 mr-2">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form action="<?= base_url('admin/user/delete'); ?>" enctype="multipart/form-data" method="POST">
        <?= csrf_field(); ?>
        <div class="modal" tabindex="-1" id="deleteModal<?= $row['userId']; ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" required value="<?= $row['userId']; ?>" />
                        <h6>Yakin ingin menghapus data ini?</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-primary mt-2 mb-2 mr-2">Yakin</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php endforeach; ?>

<?= $this->endSection(); ?>