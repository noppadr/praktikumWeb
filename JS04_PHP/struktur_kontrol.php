<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

echo"<br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

echo"<br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i=1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo"<br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";

echo"<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

//SOAL NO 4.6
echo"<br>";
$siswa = 10;
$value = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($value);

$nilaiTertinggi1 = $value[0];
$nilaiTertinggi2 = $value[1];

$nilaiTerRendah1 = $value[count($value) - 1];
$nilaiTerRendah2 = $value[count($value) - 2];

$totalNilai = 0;
for ($i=0; $i < count($value); $i++) { 
    if($value[$i] != $nilaiTerRendah1 && $value[$i] != $nilaiTerRendah2 && 
        $value[$i] != $nilaiTertinggi1 && $value[$i] != $nilaiTertinggi2){
        $totalNilai += $value[$i];
    }
}

$sisaSiswa = count($value) - 4;

$rataValue = $totalNilai / $sisaSiswa;

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: " . $totalNilai . "<br>";
echo "Rata-rata nilai setelah pengabaian: " . $rataValue . "<br>";

//SOAL NO 4.7
echo"<br>";
$hargaAsli = 120000;

$diskon = 20;

if ($hargaAsli > 100000) {
    $jumlahDiskon = ($diskon / 100) * $hargaAsli;

    $hargaSetelahDiskon = $hargaAsli - $jumlahDiskon;
} else {
    $hargaSetelahDiskon = $hargaAsli;
}
echo "Harga setelah diskon adalah Rp " . 
    number_format($hargaSetelahDiskon, 0, ',', '.');

//SOAL NO 4.8
echo"<br><br>";
$poin = 600; 
echo "Total skor pemain adalah: " . $poin . "<br>";

if ($poin > 500) {
    echo "Apakah pemain mendapatkan hadiah tambahan? YA";
} else {
    echo "Apakah pemain mendapatkan hadiah tambahan? TIDAK";
}

?>

