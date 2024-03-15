<?php
require_once("database.php");
session_start();
$kodeBrg = $_POST['kodeBrg'];
$namaBrg = $_POST['namaBrg'];
$kategori = $_POST['kategori'];
$merk = $_POST['merk'];
$jumlah = $_POST['jumlah'];
$simpan = inputdata("INSERT INTO barang VALUES (null,'$kodeBrg', '$namaBrg', '$kategori', '$merk', '$jumlah');");
if ($simpan) {
  header("location: data_barang.php");
} 
?>