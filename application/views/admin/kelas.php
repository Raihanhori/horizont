<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelas</title>
</head>
<body>
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
        <th>id kelas</th>
        <th>nama kelas</th>
        <th>kompetensi keahlian</th>
        </tr>
        <?php foreach($kelas as $p) : ?>
        <tr>
        <td><?= $p['id_kelas']; ?></td>
        <td><?= $p['nama_kelas']; ?></td>
        <td><?= $p['kompetensi_keahlian']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="<?= base_url('admin') ?>">kembali</a>
</body>
</html>
</body>
</html>