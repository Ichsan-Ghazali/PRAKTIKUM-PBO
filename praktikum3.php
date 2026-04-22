<?php

class Produk {
    public static $jumlahProduk = 0;
    
    public $namaProduk;
    public $harga;

    public function __construct($nama, $harga) {
        $this->namaProduk = $nama;
        $this->harga = $harga;
    }

    public function tambahProduk() {
        self::$jumlahProduk++;
    }
    
    public function tampilkanDetail() {
        echo "Produk: " . $this->namaProduk . " | Harga: Rp" . number_format($this->harga, 0, ',', '.') . "<br>";
    }
}

class Transaksi {
    final public function prosesTransaksi($produk) {
        echo "---<br>";
        echo "Memproses transaksi untuk: " . $produk->namaProduk . "<br>";
        echo "Status: <b>Transaksi Berhasil!</b><br>";
        echo "---<br>";
    }
}

$p1 = new Produk("Laptop Lenovo", 15000000);
$p1->tambahProduk();

$p2 = new Produk("Mouse ROBOT", 250000);
$p2->tambahProduk();

$p3 = new Produk("Keyboard Logitech", 850000);
$p3->tambahProduk();

echo "### Daftar Produk ###<br>";
$p1->tampilkanDetail();
$p2->tampilkanDetail();
$p3->tampilkanDetail();
echo "<br>";

echo "<b>Total Produk yang terdaftar: " . Produk::$jumlahProduk . "</b><br><br>";

$transaksi = new Transaksi();
$transaksi->prosesTransaksi($p1);
?>