<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
</head>
<body>
    <h1>Data Siswa</h1>
    <a href="<?= base_url('admin/tmbhsiswa') ?>">Tambah Siswa</a>
    <table border="1">
        <tr>
        <th>nis</th>
        <th>nama</th>
        <th>id kelas</th>
        <th>alamat</th>
        <th>notelp</th>
        <th>idspp</th>
        <th>aksi</th>
        </tr>
        <?php foreach($siswa as $p) : ?>
        <tr>
        <td><?= $p['nis']; ?></td>
        <td><?= $p['nama']; ?></td>
        <td><?= $p['id_kelas']; ?></td>
        <td><?= $p['alamat']; ?></td>
        <td><?= $p['no_telp']; ?></td>
        <td><?= $p['id_spp']; ?></td>
        <td>
            <a href="<?= base_url('admin/hapussiswa/') ?><?= $p['id'] ?>">hapus</a> | <a href="<?= base_url('admin/editsiswa/') ?><?= $p['id'] ?>">Edit</a>
        </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="<?= base_url('admin') ?>">kembali</a>
</body>
</html>