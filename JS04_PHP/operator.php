<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Penjumlahan: $hasilTambah<br>";
echo "Hasil Pengurangan: $hasilKurang<br>";
echo "Hasil Perkalian: $hasilKali<br>";
echo "Hasil Pembagian: $hasilBagi<br>";
echo "Sisa Pembagian: $sisaBagi<br>";
echo "Hasil Pangkat: $pangkat<br>";

echo "<br>";

$hasilSama = $a == $b ? "Benar" : "Salah";
$hasilTidakSama = $a != $b ? "Benar" : "Salah";
$hasilLebihKecil = $a < $b ? "Benar" : "Salah";
$hasilLebihBesar = $a > $b ? "Benar" : "Salah";
$hasilLebihKecilSama = $a <= $b ? "Benar" : "Salah";
$hasilLebihBesarSama = $a >= $b ? "Benar" : "Salah";

echo "Apakah $a sama dengan $b? $hasilSama<br>";
echo "Apakah $a tidak sama dengan $b? $hasilTidakSama<br>";
echo "Apakah $a lebih kecil dari $b? $hasilLebihKecil<br>";
echo "Apakah $a lebih besar dari $b? $hasilLebihBesar<br>";
echo "Apakah $a lebih kecil atau sama dengan $b? $hasilLebihKecilSama<br>";
echo "Apakah $a lebih besar atau sama dengan $b? $hasilLebihBesarSama<br>";

echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil $a && $b (AND): " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "Hasil $a || $b (OR): " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "Hasil !$a (NOT $a): " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "Hasil !$b (NOT $b): " . ($hasilNotB ? 'true' : 'false') . "<br>";

echo "<br>";

$a += $b;
echo "Hasil dari $a + $b = $a<br>";
$a -= $b;
echo "Hasil dari $a - $b = $a<br>";
$a *= $b;
echo "Hasil dari $a * $b = $a<br>";
$a /= $b;
echo "Hasil dari $a / $b = $a<br>";
$a %= $b;
echo "Hasil dari $a % $b = $a<br>";

echo"<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Apakah $a identik dengan $b? " . 
    ($hasilIdentik ? "Ya" : "Tidak") . "<br>";
echo "Apakah $a tidak identik dengan $b? " . 
    ($hasilTidakIdentik ? "Ya" : "Tidak") . "<br>";

echo"<br>";

$total_kursi = 45;
echo "Total kursi yang tersedia : 45<br>";
$kursi_terisi = 28;
echo "Total kursi yang terisi : 28 <br>";

$kursi_kosong = $total_kursi - $kursi_terisi; // hitung kursi kosong
$persentase_kosong = ($kursi_kosong / $total_kursi) * 100; // hitung persentase
echo "Jadi Persentase kursi yang masih kosong: " . $persentase_kosong . "%";

?>
