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
                        <?php if (session()->get('userRole') == 0) { ?>
                            <li>
                                <a href="<?= base_url('/admin/user'); ?>">
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
                            <a href="<?= base_url('/admin/jadwal'); ?>" class="mm-active">
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
                        <i class="fa fa-calendar-check icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Data Jadwal
                        <div class="page-title-subheading">This is a page for managing jadwal data.
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
                    <a href="<?= base_url('/admin/jadwal/laporan'); ?>" target="__blank" class="btn btn-outline-success btn-lg col-md-2 mb-2">
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
                                    <th>Nama Kapal</th>
                                    <th>Rute</th>
                                    <th>Jadwal</th>
                                    <th>Keterangan</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;
                                foreach ($jadwal as $row) : $no++ ?>
                                    <tr>
                                        <td> <?= $row['kapalNama']; ?></td>
                                        <td> <?= $row['ruteAsal']; ?> - <?= $row['ruteTujuan']; ?></td>
                                        <td> <?= $row['jadwalTanggal']; ?> - <?= $row['jadwalJam']; ?></td>
                                        <td> <?= $row['jadwalKeterangan']; ?></td>
                                        <td>Rp. <?= $row['jadwalHarga']; ?></td>
                                        <td style="text-align: center;">
                                            <a href="#" data-toggle="modal" data-target="#editModal<?= $row['jadwalId']; ?>" class="btn-transition btn btn-outline-primary btn-update">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn-transition btn btn-outline-danger btn-delete" data-toggle="modal" data-target="#deleteModal<?= $row['jadwalId']; ?>">
                                                <i class="fa fa-ban"></i>
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
                <h6 class="modal-title" id="">Form Tambah Jadwal</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/jadwal/save'); ?>" method="POST" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Kapal</label>
                                    <select name="kapal" id="kapal" required class="form-control <?= ($validation->hasError('kapal')) ? 'is-invalid' : ''; ?>">
                                        <?php foreach ($kapal as $row) : ?>
                                            <option value="<?= $row['kapalId']; ?>"><?= $row['kapalNama']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('kapal'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Rute</label>
                                    <select name="rute" id="rute" required class="form-control <?= ($validation->hasError('rute')) ? 'is-invalid' : ''; ?>">
                                        <?php foreach ($rute as $row) : ?>
                                            <option value="<?= $row['ruteId']; ?>"><?= $row['ruteAsal']; ?> - <?= $row['ruteTujuan']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('kapal'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input type="date" id="tanggal" name="tanggal" class="form-control <?= ($validation->hasError('tanggal')) ? 'is-invalid' : ''; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('tanggal'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Jam Berangkat</label>
                                    <input type="time" id="jam" name="jam" class="form-control <?= ($validation->hasError('jam')) ? 'is-invalid' : ''; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('jam'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Harga</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    <input type="text" class="form-control" name="harga" placeholder="0" onkeypress="return onlyNumber(event)">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea class="form-control <?= ($validation->hasError('keterangan')) ? 'is-invalid' : ''; ?>" rows="4" id="keterangan" name="keterangan" required placeholder="Masukan keterangan"></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('keterangan'); ?>
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

<?php foreach ($jadwal as $row) : ?>
    <form action="<?= base_url('admin/jadwal/edit'); ?>" enctype="multipart/form-data" method="POST">
        <?= csrf_field(); ?>
        <div class="modal fade" id="editModal<?= $row['jadwalId']; ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title">Form Edit Jadwal</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id" value="<?= $row['jadwalId']; ?>">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Kapal</label>
                                    <select name="kapal" id="kapal" required class="form-control <?= ($validation->hasError('kapal')) ? 'is-invalid' : ''; ?>">
                                        <?php foreach ($kapal as $rowsatu) : ?>
                                            <?php if ($row['jadwalKapal'] == $row['kapalId']) { ?>
                                                <option selected value="<?= $rowsatu['kapalId']; ?>"><?= $rowsatu['kapalNama']; ?></option>
                                            <?php } else { ?>
                                                <option value="<?= $rowsatu['kapalId']; ?>"><?= $rowsatu['kapalNama']; ?></option>
                                            <?php } ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('kapal'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Rute</label>
                                    <select name="rute" id="rute" required class="form-control <?= ($validation->hasError('rute')) ? 'is-invalid' : ''; ?>">
                                        <?php foreach ($rute as $rowsatu) : ?>
                                            <?php if ($row['jadwalRute'] == $row['ruteId']) { ?>
                                                <option selected value="<?= $rowsatu['ruteId']; ?>"><?= $rowsatu['ruteAsal']; ?> - <?= $rowsatu['ruteTujuan']; ?></option>
                                            <?php } else { ?>
                                                <option value="<?= $rowsatu['ruteId']; ?>"><?= $rowsatu['ruteAsal']; ?> - <?= $rowsatu['ruteTujuan']; ?></option>
                                            <?php } ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('kapal'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input type="date" id="tanggal" name="tanggal" value="<?= $row['jadwalTanggal']; ?>" class="form-control <?= ($validation->hasError('tanggal')) ? 'is-invalid' : ''; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('tanggal'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Jam Berangkat</label>
                                    <input type="time" id="jam" name="jam" value="<?= $row['jadwalJam']; ?>" class="form-control <?= ($validation->hasError('jam')) ? 'is-invalid' : ''; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('jam'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Harga Dewasa</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?= $row['jadwalHarga']; ?>" name="harga" placeholder="0" onkeypress="return onlyNumber(event)">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea class="form-control <?= ($validation->hasError('keterangan')) ? 'is-invalid' : ''; ?>" rows="4" id="keterangan" name="keterangan" required placeholder="Masukan keterangan"><?= $row['jadwalKeterangan']; ?></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('keterangan'); ?>
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
    <form action="<?= base_url('admin/jadwal/delete'); ?>" enctype="multipart/form-data" method="POST">
        <?= csrf_field(); ?>
        <div class="modal" tabindex="-1" id="deleteModal<?= $row['jadwalId']; ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Jadwal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" required value="<?= $row['jadwalId']; ?>" />
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

<script>
    function onlyNumber(event) {
        var angka = (event.which) ? event.which : event.keyCode
        if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
            return false;
        return true;
    }
</script>

<?= $this->endSection(); ?>