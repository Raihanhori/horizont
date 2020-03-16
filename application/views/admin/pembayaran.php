<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPP</title>
</head>
<body>
    <h1>Data Pembayran</h1>
    <a href="<?= base_url('admin/tmbhspp') ?>">Bayar SPP</a>
    <table border="1">
        <tr>
        <th>id_pembayaran</th>
        <th>nama_petugas</th>
        <th>nama siswa</th>
        <th>tgl bayar</th>
        <th>bln bayar</th>
        <th>thn bayar</th>
        <th>idspp</th>
        <th>jumlah bayar</th>
        <th>Aksi</th>
        </tr>
        <?php foreach($pembayaran as $p) : ?>
        <tr>
        <td><?= $p['id_pembayaran']; ?></td>
        <td><?= $p['nama_petugas']; ?></td>
        <td><?= $p['nama_siswa']; ?></td>
        <td><?= $p['tgl_bayar']; ?></td>
        <td><?= $p['bulan_bayar']; ?></td>
        <td><?= $p['tahun_bayar']; ?></td>
        <td><?= $p['id_spp']; ?></td>
        <td><?= $p['jumlah_bayar']; ?></td>
        <td>
            <a href="<?= base_url('admin/hapusspp/') ?><?= $p['id_pembayaran'] ?>">hapus</a>
        </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="<?= base_url('admin') ?>">kembali</a>
</body>
</html>