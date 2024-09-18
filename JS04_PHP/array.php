<?php
$nilaiSiswa = [85, 92, 78, 64, 98, 55, 88, 79, 70, 96];

$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus);

echo"<br>";
$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . 
implode(', ', $karyawanPengalamanLimaTahun);

echo"<br><br>";

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';
echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

echo"<br>";

$data_siswa = array(
    array("nama" => "Alice", "nilai" => 85),
    array("nama" => "Bob", "nilai" => 92),
    array("nama" => "Charlie", "nilai" => 78),
    array("nama" => "David", "nilai" => 64),
    array("nama" => "Eva", "nilai" => 90)
);
$total_nilai = 0;
$jumlah_siswa = count($data_siswa);

foreach ($data_siswa as $siswa) {
    $total_nilai += $siswa["nilai"];
}

$rata_rata = $total_nilai / $jumlah_siswa;

echo "Daftar Siswa yang Nilainya di Atas Rata-rata:<br>";
foreach ($data_siswa as $siswa) {
    if ($siswa["nilai"] > $rata_rata) {
        echo $siswa["nama"] . ": " . $siswa["nilai"] . "<br>";
    }
}
?>
