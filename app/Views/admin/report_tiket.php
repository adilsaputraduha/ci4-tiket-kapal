<!DOCTYPE html>
<html>

<head>
    <title>Tiket Pemesanan</title>
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/auth/logo.png">
    <style type="text/css">
        .head {
            border-style: double;
            border-width: 3px;
            border-color: white;
        }

        .body {
            border-collapse: collapse;
            border: 1px;
            border-color: black;
        }

        table tr .text2 {
            text-align: right;
            font-size: 13px;
        }

        table tr .text {
            text-align: center;
            font-size: 13px;
        }

        table tr td {
            font-size: 13px;
        }
    </style>
</head>

<body>
    <center>
        <table class="head" width="625">
            <tr>
                <td><img src="{{ asset('assets') }}/images/auth/logo.png" width="90" height="90"></td>
                <td>
                    <center>
                        <!-- <font size="4">TOKO 73</font><br> -->
                        <font size="5"><b>PELABUHAN SIKAKAP MENTAWAI</b></font><br>
                        <font size="2">Alamat : Desa Sikakap, Kec. Pagai Selatan Kab. Kepulauan Mentawai</font><br>
                        <font size="2"><i>Email : sikakapmentawai@gmail.com Telp./Fax 0852-6322-7227</i></font>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <table width="625" class="head">
                <tr>
                    <td class="text2">Kepulauan Mentawai, <?= date("d M Y"); ?></td>
                </tr>
            </table>
        </table>
        <table class="head" style="margin-bottom: 20px;">
            <tr>
                <td>Tiket Pemesanan</td>
            </tr>
        </table>
        <table class="head" style="margin-bottom: 20px;">
            <?php $no = 0;
            foreach ($pemesanan as $row) : $no++ ?>
                <tr>
                    <td width="10%">Invoice</td>
                    <td width="20%"><strong><?= $invoice; ?></strong></td>
                    <td width="10%">Penumpang</td>
                    <td width="20%"><strong><?= $row['penumpangNama']; ?></strong></td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td><strong><?= $row['pemesananTanggal']; ?></strong></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <table border="1" class="body" width="700">
            <thead>
                <tr style="height: 25px;">
                    <th>No.</th>
                    <th>Rute</th>
                    <th>Kapal</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0;
                foreach ($detail as $row) : $no++ ?>
                    <tr style="height: 20px; text-align: center;">
                        <td> <?= $no; ?></td>
                        <td> <?= $row['ruteAsal']; ?> - <?= $row['ruteTujuan']; ?></td>
                        <td> <?= $row['kapalNama']; ?></td>
                        <td> Rp. <?= $row['jadwalHarga']; ?></td>
                        <td> <?= $row['detailQty']; ?></td>
                        <td> Rp. <?= $row['detailHarga']; ?></td>
                    </tr>
                <?php endforeach; ?>

                <?php $no = 0;
                foreach ($pemesanan as $row) : $no++ ?>
                    <tr style="height: 20px; text-align: center;">
                        <td colspan="4">Total</td>
                        <td> <?= $row['pemesananTotalTiket']; ?></td>
                        <td> Rp. <?= $row['pemesananTotalHarga']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </center>
</body>

<script>
    window.print();
</script>

</html>