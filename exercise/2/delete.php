<?php
require 'functions.php';

// Jika tidak ada id di URL
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// Mengambil id dari URL
$id = $_GET['id'];

if (delete($id) > 0) {
  echo "<script>
      alert('Data berhasil dihapus');
      document.location.href = 'index.php';
    </script>";
} else
  echo "Data gagal dihapus";
