<?php

class Pengunjung {

    public static $jumlah = 0;

    public function __construct() {
        self::$jumlah++;
    }

    public static function reset() {
        self::$jumlah = 0;
    }
}

$p1 = new Pengunjung();
$p2 = new Pengunjung();
$p3 = new Pengunjung();
$p4 = new Pengunjung();
$p5 = new Pengunjung();

echo "Jumlah Pengunjung Sebelum di-reset: " . Pengunjung::$jumlah . "\n";
echo "<br>";

Pengunjung::reset();

echo "Jumlah Pengunjung Sesudah di-reset: " . Pengunjung::$jumlah . "\n";

?>