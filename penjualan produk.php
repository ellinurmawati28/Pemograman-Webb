<?php
// Data penjualan produk
$produk = [
    ['nama' => 'Produk A', 'harga' => 10000, 'jumlah' => 5],
    ['nama' => 'Produk B', 'harga' => 7500, 'jumlah' => 10],
    ['nama' => 'Produk C', 'harga' => 12000, 'jumlah' => 8]
];

// Fungsi untuk menghitung total penjualan per produk
function hitungTotalPenjualan($harga, $jumlah) {
    return $harga * $jumlah;
}

// Menghitung total semua penjualan
$totalSemuaPenjualan = 0;
$totalJumlahTerjual = 0;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Laporan Penjualan</title>
</head>
<body>
    <h1>Sistem Pencatatan Data Penjualan</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>Nama</th>
            <th>Harga Per Produk</th>
            <th>Jumlah Terjual</th>
            <th>Total</th>
        </tr>
        <?php foreach ($produk as $p): ?>
            <tr>
                <td><?php echo $p['nama']; ?></td>
                <td><?php echo number_format($p['harga'], 0, ',', '.'); ?></td>
                <td><?php echo $p['jumlah']; ?></td>
                <td><?php 
                    $total = hitungTotalPenjualan($p['harga'], $p['jumlah']);
                    echo number_format($total, 0, ',', '.'); 
                    $totalSemuaPenjualan += $total;
                    $totalJumlahTerjual += $p['jumlah'];
                ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="2"><strong>Total Penjualan</strong></td>
            <td><strong><?php echo $totalJumlahTerjual; ?></strong></td>
            <td><strong><?php echo number_format($totalSemuaPenjualan, 0, ',', '.'); ?></strong></td>
        </tr>
    </table>
</body>
</html>