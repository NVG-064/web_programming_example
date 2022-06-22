<?php

require 'functions.php';

// Tampung ke variabel mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa");

// Ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $mahasiswa = search($_POST['keyword']);
}

// 17.47
// "E:\Saved Pictures\Call of Duty Characters\Ghost 1.jpg"
// Fast link: https://www.youtube.com/playlist?list=PLFIM0718LjIUDMaZfzeF6WjurKhRaL0wo
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <a href="create.php">Tambah Data Mahasiswa</a>
  <br><br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="50" placeholder="Masukkan kata kunci pencarian" autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari</button>
  </form>

  <br><br>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>Num.</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>

    <?php if (empty($mahasiswa)) : ?>
      <tr>
        <td colspan="4" style="text-align: center; color: red;">Data tidak ditemukan</td>
      </tr>
    <?php endif; ?>

    <?php $i = 1;
    foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $mhs['gambar']; ?>" width="100"></td>
        <td><?= $mhs['nama']; ?></td>
        <td>
          <a href="detail.php?id=<?= $mhs['id']; ?>">Lihat detail</a>
        </td>
      </tr>
    <?php endforeach; ?>

  </table>

</body>

</html>