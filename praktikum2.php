<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum 2 - Static Method</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { border: 1px solid #ccc; padding: 20px; max-width: 400px; }
        .result { margin-top: 20px; padding: 10px; background-color: #f0f8ff; border-left: 4px solid #0066cc; }
        input[type="number"] { padding: 5px; margin-bottom: 10px; width: 100%; box-sizing: border-box; }
        button { padding: 10px 15px; background-color: #0066cc; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #0055aa; }
    </style>
</head>
<body>

<div class="container">
    <h2>Kalkulator & Luas Persegi</h2>
    
    <form method="POST" action="">
        <h3>Operasi Aritmatika</h3>
        <label for="angka1">Angka 1:</label>
        <input type="number" id="angka1" name="angka1" value="0" required>
        
        <label for="angka2">Angka 2:</label>
        <input type="number" id="angka2" name="angka2" value="0" required>

        <h3>Luas Persegi</h3>
        <label for="sisi">Panjang Sisi:</label>
        <input type="number" id="sisi" name="sisi" value="0" required>

        <button type="submit" name="hitung">Hitung Hasil</button>
    </form>

    <?php
    class Matematika {
        public static function kali($a, $b) {
            return $a * $b;
        }

        public static function bagi($a, $b) {
            if ($b == 0) return "Error (dibagi 0)"; 
            return $a / $b;
        }

        public static function tambah($a, $b) {
            return $a + $b;
        }

        public static function kurang($a, $b) {
            return $a - $b;
        }

        public static function luasPersegi($sisi) {
            return $sisi * $sisi;
        }
    }

    if (isset($_POST['hitung'])) {
        $a = $_POST['angka1'];
        $b = $_POST['angka2'];
        $sisi = $_POST['sisi'];

        echo "<div class='result'>";
        echo "<h3>Hasil:</h3>";
        echo "<b>Angka yang dimasukkan: $a dan $b</b><br>";
        echo "Tambah ($a + $b) : " . Matematika::tambah($a, $b) . "<br>";
        echo "Kurang ($a - $b) : " . Matematika::kurang($a, $b) . "<br>";
        echo "Kali ($a * $b) : " . Matematika::kali($a, $b) . "<br>";
        echo "Bagi ($a / $b) : " . Matematika::bagi($a, $b) . "<br>";
        
        echo "<br><b>Sisi Persegi: $sisi</b><br>";
        echo "Luas Persegi ($sisi * $sisi) : " . Matematika::luasPersegi($sisi) . "<br>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>