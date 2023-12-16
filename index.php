<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja Buku</title>
</head>
<body>
    <h1>Belanja Buku</h1>
    <form action="" method="post">
        <label for="nomorTransaksi">Nomor Transaksi:</label>
        <input type="text" name="nomorTransaksi" required><br>

        <label for="namaPembeli">Nama Pembeli:</label>
        <input type="text" name="namaPembeli" required><br>

        <label for="judulBuku">Judul Buku:</label>
        <input type="text" name="judulBuku" required><br>

        <label for="jumlahBuku">Jumlah Buku:</label>
        <input type="number" name="jumlahBuku" required><br>

        <label for="hargaBuku">Harga Buku:</label>
        <input type="number" name="hargaBuku" required><br>

        <input type="submit" value="Hitung Diskon">
    </form>

    <?php
// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai input dari form
    $nomorTransaksi = $_POST["nomorTransaksi"];
    $namaPembeli = $_POST["namaPembeli"];
    $jumlahBuku = $_POST["jumlahBuku"];
    $hargaBuku = $_POST["hargaBuku"];

    // Menghitung total harga
    $totalHarga = $jumlahBuku * $hargaBuku;

    // Menghitung diskon
    if ($hargaBuku > 150000) {
        $diskon = $totalHarga * 0.1;
    } else {
        $diskon = $totalHarga * 0.05;
    }

    // Jika nomor transaksi di bawah 50, tambahkan diskon tambahan
    if ($nomorTransaksi < 50) {
        $diskon += $totalHarga * 0.05;
    }

    // Menghitung total harga setelah diskon
    $totalHargaSetelahDiskon = $totalHarga - $diskon;

    // Menampilkan hasil
    echo "<h2>nomer Transaksi:$nomerTransaksi " 
    echo "<h2>nama Pembeli: $namaPembeli"
    echo "<h2>jumlah Buku: $jumlahBuku"
    echo "<h2>Total Harga: Rp " . number_format($totalHarga, 0, ",", ".") . "</h2>";
    echo "<h2>Diskon: Rp " . number_format($diskon, 0, ",", ".") . "</h2>";
    echo "<h2>Total Bayar : Rp " . number_format($totalBayar, 0, ",", ".") . "</h2>";
}
?>

</body>
</html>
