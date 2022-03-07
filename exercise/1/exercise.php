<?php

// Koneksi ke DataBase dan Memilih DataBase
$conn = mysqli_connect('localhost', 'root', '', 'mahasiswa_db');

// Query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// Ubah data ke dalam bentuk array
$row = mysqli_fetch_row($result);
var_dump($row);

// Tampung ke variabel mahasiswa


// 9.27
// "E:\Saved Pictures\Call of Duty Characters\Ghost 1.jpg"
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

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>Num.</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <tr>
      <td>1</td>
      <td><img src="img/mace_2.jpg" width="100"></td>
      <td>11111111</td>
      <td>Mace</td>
      <td>mace@example.mail</td>
      <td>Operator Jackals</td>
      <td>
        <a href="">Ubah</a> | <a href="">Hapus</a>
      </td>
    </tr>
  </table>

</body>

</html>