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
            <li class="mm-active">
                <a href="#">
                    <i class="metismenu-icon pe-7s-diamond"></i>
                    Masters
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul class="mm-show">
                    <li>
                        <a href="<?= base_url('/admin/user'); ?>">
                            <i class="metismenu-icon"></i>
                            User
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('/admin/penumpang'); ?>">
                            <i class="metismenu-icon">
                            </i>Penumpang
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('/admin/kategori'); ?>" class="mm-active">
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
                        <a href="elements-list-group.html">
                            <i class="metismenu-icon">
                            </i>List Groups
                        </a>
                    </li>
                    <li>
                        <a href="elements-navigation.html">
                            <i class="metismenu-icon">
                            </i>Navigation Menus
                        </a>
                    </li>
                    <li>
                        <a href="elements-utilities.html">
                            <i class="metismenu-icon">
                            </i>Utilities
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
                        <a href="components-tabs.html">
                            <i class="metismenu-icon">
                            </i>Tabs
                        </a>
                    </li>
                    <li>
                        <a href="components-accordions.html">
                            <i class="metismenu-icon">
                            </i>Accordions
                        </a>
                    </li>
                    <li>
                        <a href="components-notifications.html">
                            <i class="metismenu-icon">
                            </i>Notifications
                        </a>
                    </li>
                    <li>
                        <a href="components-modals.html">
                            <i class="metismenu-icon">
                            </i>Modals
                        </a>
                    </li>
                    <li>
                        <a href="components-progress-bar.html">
                            <i class="metismenu-icon">
                            </i>Progress Bar
                        </a>
                    </li>
                    <li>
                        <a href="components-tooltips-popovers.html">
                            <i class="metismenu-icon">
                            </i>Tooltips &amp; Popovers
                        </a>
                    </li>
                    <li>
                        <a href="components-carousel.html">
                            <i class="metismenu-icon">
                            </i>Carousel
                        </a>
                    </li>
                    <li>
                        <a href="components-calendar.html">
                            <i class="metismenu-icon">
                            </i>Calendar
                        </a>
                    </li>
                    <li>
                        <a href="components-pagination.html">
                            <i class="metismenu-icon">
                            </i>Pagination
                        </a>
                    </li>
                    <li>
                        <a href="components-scrollable-elements.html">
                            <i class="metismenu-icon">
                            </i>Scrollable
                        </a>
                    </li>
                    <li>
                        <a href="components-maps.html">
                            <i class="metismenu-icon">
                            </i>Maps
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="metismenu-icon pe-7s-car"></i>
                    Reports
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul>
                    <li>
                        <a href="components-tabs.html">
                            <i class="metismenu-icon">
                            </i>Tabs
                        </a>
                    </li>
                    <li>
                        <a href="components-accordions.html">
                            <i class="metismenu-icon">
                            </i>Accordions
                        </a>
                    </li>
                    <li>
                        <a href="components-notifications.html">
                            <i class="metismenu-icon">
                            </i>Notifications
                        </a>
                    </li>
                    <li>
                        <a href="components-modals.html">
                            <i class="metismenu-icon">
                            </i>Modals
                        </a>
                    </li>
                    <li>
                        <a href="components-progress-bar.html">
                            <i class="metismenu-icon">
                            </i>Progress Bar
                        </a>
                    </li>
                    <li>
                        <a href="components-tooltips-popovers.html">
                            <i class="metismenu-icon">
                            </i>Tooltips &amp; Popovers
                        </a>
                    </li>
                    <li>
                        <a href="components-carousel.html">
                            <i class="metismenu-icon">
                            </i>Carousel
                        </a>
                    </li>
                    <li>
                        <a href="components-calendar.html">
                            <i class="metismenu-icon">
                            </i>Calendar
                        </a>
                    </li>
                    <li>
                        <a href="components-pagination.html">
                            <i class="metismenu-icon">
                            </i>Pagination
                        </a>
                    </li>
                    <li>
                        <a href="components-scrollable-elements.html">
                            <i class="metismenu-icon">
                            </i>Scrollable
                        </a>
                    </li>
                    <li>
                        <a href="components-maps.html">
                            <i class="metismenu-icon">
                            </i>Maps
                        </a>
                    </li>
                </ul>
            </li>
            <li class="app-sidebar__heading">Settings</li>
            <li>
                <a href="#">
                    <i class="metismenu-icon pe-7s-diamond"></i>
                    Landing Page
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul>
                    <li>
                        <a href="elements-buttons-standard.html">
                            <i class="metismenu-icon"></i>
                            Buttons
                        </a>
                    </li>
                    <li>
                        <a href="elements-dropdowns.html">
                            <i class="metismenu-icon">
                            </i>Dropdowns
                        </a>
                    </li>
                    <li>
                        <a href="elements-icons.html">
                            <i class="metismenu-icon">
                            </i>Icons
                        </a>
                    </li>
                    <li>
                        <a href="elements-badges-labels.html">
                            <i class="metismenu-icon">
                            </i>Badges
                        </a>
                    </li>
                    <li>
                        <a href="elements-cards.html">
                            <i class="metismenu-icon">
                            </i>Cards
                        </a>
                    </li>
                    <li>
                        <a href="elements-list-group.html">
                            <i class="metismenu-icon">
                            </i>List Groups
                        </a>
                    </li>
                    <li>
                        <a href="elements-navigation.html">
                            <i class="metismenu-icon">
                            </i>Navigation Menus
                        </a>
                    </li>
                    <li>
                        <a href="elements-utilities.html">
                            <i class="metismenu-icon">
                            </i>Utilities
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="dashboard-boxes.html">
                    <i class="metismenu-icon pe-7s-display2"></i>
                    Dashboard Boxes
                </a>
            </li>
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
                        <i class="fa fa-sitemap icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Data Kategori
                        <div class="page-title-subheading">This is a page for managing category data.
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
                    <a href="<?= base_url('/admin/kategori/laporan'); ?>" target="__blank" class="btn btn-outline-success btn-lg col-md-2 mb-2">
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
                                    <th>Nama</th>
                                    <th>Fasilitas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;
                                foreach ($kategori as $row) : $no++ ?>
                                    <tr>
                                        <td> <?= $no; ?></td>
                                        <td> <?= $row['kategoriNama']; ?></td>
                                        <td> <?= $row['kategoriFasilitas']; ?></td>
                                        <td style="text-align: center;">
                                            <a href="#" data-toggle="modal" data-target="#editModal<?= $row['kategoriId']; ?>" class="btn-transition btn btn-outline-primary btn-update">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn-transition btn btn-outline-danger btn-delete" data-toggle="modal" data-target="#deleteModal<?= $row['kategoriId']; ?>">
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
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="">Form Tambah Kategori</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/kategori/save'); ?>" method="POST" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
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
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Fasilitas</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('fasilitas')) ? 'is-invalid' : ''; ?>" id="fasilitas" name="fasilitas" required placeholder="Masukan fasilitas">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('fasilitas'); ?>
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


<?php foreach ($kategori as $row) : ?>
    <form action="<?= base_url('admin/kategori/edit'); ?>" enctype="multipart/form-data" method="POST">
        <?= csrf_field(); ?>
        <div class="modal fade" id="editModal<?= $row['kategoriId']; ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title">Form Edit Kategori</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <input type="hidden" name="id" id="id" value="<?= $row['kategoriId']; ?>">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?= $row['kategoriNama']; ?>" required placeholder="Masukan nama">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Fasilitas</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('fasilitas')) ? 'is-invalid' : ''; ?>" id="fasilitas" name="fasilitas" value="<?= $row['kategoriFasilitas']; ?>" required placeholder="Masukan fasilitas">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('fasilitas'); ?>
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
    <form action="<?= base_url('admin/kategori/delete'); ?>" enctype="multipart/form-data" method="POST">
        <?= csrf_field(); ?>
        <div class="modal" tabindex="-1" id="deleteModal<?= $row['kategoriId']; ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Kategori</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" required value="<?= $row['kategoriId']; ?>" />
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