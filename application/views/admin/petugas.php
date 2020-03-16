<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petugas</title>
</head>
<body>
    <h1>Data Petugas</h1>
    <a href="<?= base_url('admin/tmbhPtgs') ?>">Tambah Petugas</a>
    <table border="1">
        <tr>
        <th>Id Petugas</th>
        <th>username</th>
        <th>nama petugas</th>
        <th>role</th>
        <th>aksi</th>
        </tr>
        <?php foreach($petugas as $p) : ?>
        <tr>
        <td><?= $p['id_petugas']; ?></td>
        <td><?= $p['username']; ?></td>
        <td><?= $p['nama_petugas']; ?></td>
        <td><?= $p['role']; ?></td>
        <td>
            <a href="<?= base_url('admin/hapusPetugas/') ?><?= $p['id_petugas'] ?>">hapus</a> | <a href="<?= base_url('admin/editPetugas/') ?><?= $p['id_petugas'] ?>">Edit</a>
        </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="<?= base_url('admin') ?>">kembali</a>
</body>
</html>