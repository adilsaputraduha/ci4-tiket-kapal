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
            <li>
                <a href="#">
                    <i class="metismenu-icon pe-7s-diamond"></i>
                    Masters
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul>
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
            <li class="mm-active">
                <a href="#">
                    <i class="metismenu-icon pe-7s-car"></i>
                    Transactions
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul class="mm-show">
                    <li class="mm-active">
                        <a href="<?= base_url('/admin/pemesanan'); ?>">
                            <i class="metismenu-icon">
                            </i>Pemesanan Tiket
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
                        <i class="fa fa-file-invoice icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Tambah Pemesanan Tiket
                        <div class="page-title-subheading">This is a page for managing tambah pemesanan tiket.
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
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Invoice</label>
                                    <input type="text" readonly id="invoice" name="invoice" value="<?= $kode; ?>" class="form-control <?= ($validation->hasError('invoice')) ? 'is-invalid' : ''; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('invoice'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input type="date" id="tanggalpemesanan" name="tanggalpemesanan" class="form-control <?= ($validation->hasError('tanggalpemesanan')) ? 'is-invalid' : ''; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('tanggalpemesanan'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Penumpang</label>
                                <div class="input-group">
                                    <input type="hidden" name="idpenumpang" id="idpenumpang" class="form-control idpenumpang">
                                    <input type="text" class="form-control namapenumpang" readonly name="namapenumpang" id="namapenumpang">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" data-toggle="modal" data-target="#cariPenumpang">Cari</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <label>Rute</label>
                                <div class="input-group">
                                    <input type="hidden" class="form-control idrute" name="idrute" id="idrute">
                                    <input type="text" class="form-control rute" name="rute" id="rute" readonly>
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" data-toggle="modal" data-target="#cariJadwal">Cari</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Kapal</label>
                                    <input type="text" readonly id="kapal" name="kapal" class="form-control kapal <?= ($validation->hasError('kapal')) ? 'is-invalid' : ''; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('kapal'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Jadwal</label>
                                    <input type="text" readonly id="jadwal" name="jadwal" class="form-control jadwal <?= ($validation->hasError('jadwal')) ? 'is-invalid' : ''; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('jadwal'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Jumlah</label>
                                    <input type="text" id="jumlah" name="jumlah" value="1" onkeypress="return onlyNumber(event)" class="form-control <?= ($validation->hasError('jumlah')) ? 'is-invalid' : ''; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('jumlah'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <label>Aksi</label>
                                    <button class="btn btn-success" name="btntambah" id="btntambah" onclick="ajaxSave()">+</button>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="datatable" name="datatable" class="table table-simple datatable">
                                    <thead>
                                        <tr>
                                            <th>Invoice</th>
                                            <th>Tanggal</th>
                                            <th>Penumpang</th>
                                            <th>Total Tiket</th>
                                            <th>Total Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="coba">
                                        <?php $no = 0;
                                        foreach ($pemesanan as $row) : $no++ ?>
                                            <tr>
                                                <td> <?= $row['pemesananInvoice']; ?></td>
                                                <td> <?= $row['pemesananTanggal']; ?></td>
                                                <td> <?= $row['penumpangNama']; ?></td>
                                                <td> <?= $row['pemesananTotalTiket']; ?></td>
                                                <td> <?= $row['pemesananTotalHarga']; ?></td>
                                                <td style="text-align: center;">
                                                    <a href="#" data-toggle="modal" data-target="#editModal<?= $row['pemesananInvoice']; ?>" class="btn-transition btn btn-outline-primary btn-update">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="#" class="btn-transition btn btn-outline-danger btn-delete" data-toggle="modal" data-target="#deleteModal<?= $row['pemesananInvoice']; ?>">
                                                        <i class="fa fa-ban"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('modal'); ?>

<div id="cariPenumpang" class="modal" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="">Data Penumpang</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="datatabledua" name="datatabledua" class="table table-simple datatabledua">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No. Hp</th>
                            <th>Jenkel</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0;
                        foreach ($penumpang as $row) : $no++ ?>
                            <tr>
                                <td> <?= $no; ?></td>
                                <td> <?= $row['penumpangNama']; ?></td>
                                <td> <?= $row['penumpangNoHp']; ?></td>
                                <td>
                                    <?php if ($row['penumpangJenkel'] == 1) { ?>
                                        <span class="badge bg-primary text-light">Laki-Laki</span>
                                    <?php } else if ($row['penumpangJenkel'] == 0) { ?>
                                        <span class="badge bg-info text-light">Perempuan</span>
                                    <?php } ?>
                                </td>
                                <td style="text-align: center;">
                                    <a class="btn-transition btn btn-outline-primary btn-choosesatu" data-id="<?= $row['penumpangId']; ?>" data-nama="<?= $row['penumpangNama']; ?>">
                                        <i class=" fa fa-edit"></i>
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

<div id="cariJadwal" class="modal fade" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="">Data Jadwal</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="datatabletiga" name="datatabletiga" class="table table-simple datatabletiga">
                    <thead>
                        <tr>
                            <th>Nama Kapal</th>
                            <th>Rute</th>
                            <th>Jadwal</th>
                            <th>Harga Dewasa</th>
                            <th>Harga Anak</th>
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
                                <td>Rp. <?= $row['jadwalHargaDewasa']; ?></td>
                                <td>Rp. <?= $row['jadwalHargaAnak']; ?></td>
                                <td style="text-align: center;">
                                    <a class="btn-transition btn btn-outline-primary btn-choosedua" data-id="<?= $row['jadwalId']; ?>" data-asal="<?= $row['ruteAsal']; ?>" data-tujuan="<?= $row['ruteTujuan']; ?>" data-kapal="<?= $row['kapalNama']; ?>" data-tanggal="<?= $row['jadwalTanggal']; ?>" data-jam="<?= $row['jadwalJam']; ?>">
                                        <i class="fa fa-edit"></i>
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

<script>
    $(function() {
        $("#datatabledua").DataTable({
            responsive: true,
            autoWidth: false,
        });
        $("#datatabletiga").DataTable({
            responsive: true,
            autoWidth: false,
        });
    });

    $(document).ready(function() {
        $(".btn-choosesatu").click(function() {
            const idpenumpang = $(this).data('id');
            const namapenumpang = $(this).data('nama');
            $('.idpenumpang').val(idpenumpang);
            $('.namapenumpang').val(namapenumpang);


            $("#cariPenumpang").removeClass("in");
            $(".modal-backdrop").remove();
            $('body').removeClass('modal-open');
            $('body').css('padding-right', '');
            $("#cariPenumpang").hide();
        });

        $(".btn-choosedua").click(function() {
            const id = $(this).data('id');
            const asal = $(this).data('asal');
            const tujuan = $(this).data('tujuan');
            const kapal = $(this).data('kapal');
            const tanggal = $(this).data('tanggal');
            const jam = $(this).data('jam');
            $('.idjadwal').val(id);
            $('.rute').val(asal + " - " + tujuan);
            $('.kapal').val(kapal);
            $('.jadwal').val(tanggal + " " + jam);

            $("#cariJadwal").removeClass("in");
            $(".modal-backdrop").remove();
            $('body').removeClass('modal-open');
            $('body').css('padding-right', '');
            $("#cariJadwal").hide();
        });
    });
</script>

<script>
    function onlyNumber(event) {
        var angka = (event.which) ? event.which : event.keyCode
        if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
            return false;
        return true;
    }

    function reload() {
        $.ajax({
            url: "<?= base_url('spt/apiindex'); ?>",
            beforeSend: function(f) {
                $('#coba').html(`<div class="text-center">
                Mencari data...
                </div>`);
            },
            success: function(data) {
                $('#coba').html(data);
            }
        })
        $.ajax({
            url: "<?= base_url('spt/apiindexmodal'); ?>",
            success: function(data) {
                $('#coba2').html(data);
            }
        })
    }

    function ajaxSave() {
        $.ajax({
            url: "<?= base_url('spt/apisave'); ?>",
            type: "POST",
            data: $("#formTambah").serialize(),
            success: function(data) {
                reload();
                $('#nip').val('');
                $('#nama').val('');
            }
        });
    }
</script>

<?= $this->endSection(); ?>