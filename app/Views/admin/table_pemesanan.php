<?php $no = 0;
foreach ($detail as $row) : $no++ ?>
    <tr>
        <td> <?= $row['kapalNama']; ?></td>
        <td> <?= $row['ruteAsal']; ?> - <?= $row['ruteTujuan']; ?></td>
        <td> <?= $row['jadwalTanggal']; ?></td>
        <td> <?= $row['detailQty']; ?></td>
        <td> Rp. <?= $row['detailHarga']; ?></td>
        <td style="text-align: center;">
            <a class="btn-transition btn btn-outline-danger" onclick="ajaxDelete(<?= $row['detailId']; ?>, <?= $row['detailQty']; ?>, <?= $row['detailHarga']; ?>)">
                <i class="fa fa-trash"></i>
            </a>
        </td>
    </tr>
<?php endforeach; ?>

<script>
    function ajaxDelete(id, quantity, harga) {
        $.ajax({
            url: "<?= base_url('admin/pemesanan/apidelete'); ?>",
            type: "POST",
            data: {
                detailid: id,
            },
            success: function(data) {
                reload();
                hitungTotalHapus(quantity, harga);
            },
            error: function(xhr, ajaxOption, thrownError) {
                alert(xhr.status + '\n' + thrownError)
            }
        });
    }
</script>