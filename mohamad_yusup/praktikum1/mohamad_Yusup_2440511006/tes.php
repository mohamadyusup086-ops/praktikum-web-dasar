<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/koneksi.php';

if ($conn) {
    echo "Koneksi berhasil!";
} else {
    echo "Koneksi gagal!";
}