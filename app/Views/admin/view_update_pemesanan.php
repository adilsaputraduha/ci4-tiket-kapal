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
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Masters
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
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
                        <li>
                            <a href="<?= base_url('/admin/pemesanan'); ?>" class="mm-active">
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
                        <i class="fa fa-file-invoice icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Update Pemesanan Tiket
                        <div class="page-title-subheading">This is a page for managing update pemesanan tiket.
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
                        <?php
                        foreach ($pemesanan as $row) : ?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Invoice</label>
                                        <input type="text" readonly id="invoice" name="invoice" value="<?= $kode; ?>" class="form-control invoice <?= ($validation->hasError('invoice')) ? 'is-invalid' : ''; ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('invoice'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="date" id="tanggalpemesanan" value="<?= $row['pemesananTanggal']; ?>" name="tanggalpemesanan" class="form-control tanggalpemesanan <?= ($validation->hasError('tanggalpemesanan')) ? 'is-invalid' : ''; ?>">
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
                                        <input type="hidden" name="idpenumpang" value="<?= $row['pemesananPenumpang']; ?>" id="idpenumpang" class="form-control idpenumpang">
                                        <input type="text" class="form-control namapenumpang" value="<?= $row['penumpangNama']; ?>" readonly name="namapenumpang" id="namapenumpang">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary" data-toggle="modal" data-target="#cariPenumpang">Cari</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <br>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <label>Rute</label>
                                <div class="input-group">
                                    <input type="hidden" class="form-control idjadwal" name="idjadwal" id="idjadwal">
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
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="text" readonly id="harga" name="harga" class="form-control harga <?= ($validation->hasError('harga')) ? 'is-invalid' : ''; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('harga'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Jumlah</label>
                                    <input type="text" id="jumlah" name="jumlah" value="1" onkeypress="return onlyNumber(event)" class="form-control jumlah <?= ($validation->hasError('jumlah')) ? 'is-invalid' : ''; ?>">
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
                                            <th>Kapal</th>
                                            <th>Rute</th>
                                            <th>Tanggal</th>
                                            <th>Qty</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="coba">
                                        <?php $no = 0;
                                        foreach ($detail as $row) : $no++ ?>
                                            <tr>
                                                <td> <?= $row['kapalNama']; ?></td>
                                                <td> <?= $row['ruteAsal']; ?> - <?= $row['ruteTujuan']; ?></td>
                                                <td> <?= $row['jadwalTanggal']; ?></td>
                                                <td> <?= $row['detailQty']; ?></td>
                                                <td> Rp. <?= $row['detailHarga']; ?></td>
                                                <td style="text-align: center;">
                                                    <button class="btn-transition btn btn-outline-danger" onclick="ajaxDelete(<?= $row['detailId']; ?>)">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <br><br>
                        <?php
                        foreach ($pemesanan as $row) : ?>
                            <div class="row justify-content-end">
                                <div class="col-lg-4">
                                    <label for="">Total Item :</label>
                                    <input type="text" value="<?= $row['pemesananTotalTiket']; ?>" readonly class="form-control totalitem"></input>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-lg-4">
                                    <label for="">Total Bayar :</label>
                                    <input type="text" value="<?= $row['pemesananTotalHarga']; ?>" readonly class="form-control totalbayar"></input>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <br>
                        <div class="row justify-content-end">
                            <div class="col-lg-4">
                                <a href="<?= base_url('/admin/pemesanan'); ?>" class="btn btn-secondary btn-sm">
                                    Kembali
                                </a>
                                <button class="btn btn-primary btn-sm" onclick="simpanTransaksi()">
                                    Update & Cetak Tiket
                                </button>
                            </div>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
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
                                <td>Rp. <?= $row['jadwalHarga']; ?></td>
                                <td style="text-align: center;">
                                    <a class="btn-transition btn btn-outline-primary btn-choosedua" data-id="<?= $row['jadwalId']; ?>" data-asal="<?= $row['ruteAsal']; ?>" data-tujuan="<?= $row['ruteTujuan']; ?>" data-kapal="<?= $row['kapalNama']; ?>" data-tanggal="<?= $row['jadwalTanggal']; ?>" data-jam="<?= $row['jadwalJam']; ?>" data-harga="<?= $row['jadwalHarga']; ?>">
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
            const harga = $(this).data('harga');
            $('.idjadwal').val(id);
            $('.rute').val(asal + " - " + tujuan);
            $('.kapal').val(kapal);
            $('.jadwal').val(tanggal + " " + jam);
            $('.harga').val(harga);
            $('.jumlah').val(1);

            $("#cariJadwal").removeClass("in");
            $(".modal-backdrop").remove();
            $('body').removeClass('modal-open');
            $('body').css('padding-right', '');
            $("#cariJadwal").hide();
        });
    });
</script>

<script>
    let totalharga = $('.totalbayar').val();
    let qty = $('.totalitem').val();

    function onlyNumber(event) {
        var angka = (event.which) ? event.which : event.keyCode
        if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
            return false;
        return true;
    }

    function hitungTotal() {
        let harga = $('.harga').val()
        let jumlah = $('.jumlah').val()

        let hargaxqty = harga * jumlah

        totalharga = parseInt(totalharga) + parseInt(hargaxqty)
        qty = parseInt(qty) + parseInt(jumlah)

        $('.totalitem').val(qty);
        $('.totalbayar').val(totalharga);
    }

    function hitungTotalHapus(quantity, harga) {
        totalharga = parseInt(totalharga) - parseInt(harga)
        qty = parseInt(qty) - parseInt(quantity)

        $('.totalitem').val(qty);
        $('.totalbayar').val(totalharga);
    }

    function reload() {
        let invoice = $('.invoice').val();

        $.ajax({
            type: "POST",
            url: "<?= base_url('admin/pemesanan/apiindex'); ?>",
            data: {
                invoice: invoice
            },
            beforeSend: function(f) {
                $('#coba').html(`<div class="text-center">
                Mencari data...
                </div>`);
            },
            success: function(response) {
                $('#coba').html(response);
            },
            error: function(xhr, ajaxOption, thrownError) {
                alert(xhr.status + '\n' + thrownError)
            }
        });
    }

    function ajaxSave() {
        let invoice = $('.invoice').val()
        let jadwal = $('.idjadwal').val()
        let harga = $('.harga').val()
        let jumlah = $('.jumlah').val()
        let total = jumlah * harga

        if (jadwal.length == 0) {
            alert('Jadwal tidak boleh kosong')
        } else if (jumlah.length == 0) {
            alert('Jumlah tidak boleh kosong')
        } else {
            $.ajax({
                url: "<?= base_url('admin/pemesanan/apisave'); ?>",
                type: "POST",
                data: {
                    invoice: invoice,
                    jadwal: jadwal,
                    jumlah: jumlah,
                    total: total,
                },
                success: function(data) {
                    reload();
                    hitungTotal();
                    $('.idjadwal').val('');
                    $('.rute').val('');
                    $('.kapal').val('');
                    $('.jadwal').val('');
                    $('.harga').val('');
                    $('.jumlah').val('');
                },
                error: function(xhr, ajaxOption, thrownError) {
                    alert(xhr.status + '\n' + thrownError)
                }
            });
        }
    }

    function ajaxDelete(id) {
        $.ajax({
            url: "<?= base_url('admin/pemesanan/apidelete'); ?>",
            type: "POST",
            data: {
                detailid: id,
            },
            success: function(data) {
                reload();
            },
            error: function(xhr, ajaxOption, thrownError) {
                alert(xhr.status + '\n' + thrownError)
            }
        });
    }

    function simpanTransaksi() {
        let invoice = $('.invoice').val()
        let tanggalpemesanan = $('.tanggalpemesanan').val()
        let idpenumpang = $('.idpenumpang').val()
        let totalitem = $('.totalitem').val()
        let totalbayar = $('.totalbayar').val()

        if (idpenumpang.length == 0) {
            alert('Penumpang tidak boleh kosong')
        } else if (tanggalpemesanan.length == 0) {
            alert('Tanggal tidak boleh kosong')
        } else {
            $.ajax({
                url: "<?= base_url('admin/pemesanan/edittransaction'); ?>",
                type: "POST",
                data: {
                    invoice: invoice,
                    tanggal: tanggalpemesanan,
                    penumpang: idpenumpang,
                    totalitem: totalitem,
                    totalbayar: totalbayar,
                },
                success: function(data) {
                    cetakFaktur(invoice);
                    window.location = "<?= base_url('admin/pemesanan'); ?>";
                },
                error: function(xhr, ajaxOption, thrownError) {
                    alert(xhr.status + '\n' + thrownError)
                }
            });
        }
    }

    function cetakFaktur(invoice) {
        let noinvoice = invoice;
        window.open("/admin/pemesanan/invoice/" + noinvoice, "_blank");
    }
</script>

<?= $this->endSection(); ?>