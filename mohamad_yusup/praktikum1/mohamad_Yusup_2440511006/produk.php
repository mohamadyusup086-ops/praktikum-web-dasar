<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . "/koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM produk");

if (!$query) {
    die("Query error: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Produk</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 30px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #2563eb;
            color: white;
            padding: 12px;
            text-align: left;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background: #f1f5f9;
        }

        .stok-aman {
            color: green;
            font-weight: bold;
        }

        .stok-habis {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>📦 Data Produk Toko 4C</h2>

    <table>
        <tr>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>

        <?php while ($data = mysqli_fetch_assoc($query)) : ?>
            <tr>
                <td><?= htmlspecialchars($data['nama_produk']) ?></td>
                <td>Rp <?= number_format($data['harga'], 0, ',', '.') ?></td>
                <td class="<?= $data['stok'] < 5 ? 'stok-habis' : 'stok-aman' ?>">
                    <?= $data['stok'] ?>
                </td>
            </tr>
        <?php endwhile; ?>

    </table>
</div>

</body>
</html>