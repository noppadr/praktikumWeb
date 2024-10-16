<?php
// Lokasi penyimpanan file yang sudah diupload
$targetDirectory = "documents/";

// Periksa apakah direktori penyimpanan ada,
// jika tidak maka buat direktori tersebut.
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES['files']['name']) {
    $totalFiles = count($_FILES['files']['name']);

    for ($i = 0; $i < $totalFiles; $i++) {
        // Loop melalui semua file yang diunggah
        $fileName = $_FILES['files']['name'][$i];
        $fileTmpName = $_FILES['files']['tmp_name'][$i];
        // Pindahkan file ke direktori tujuan
        $targetFile = $targetDirectory . $fileName;

        if (move_uploaded_file($fileTmpName, $targetFile)) {
            echo "File berhasil diunggah: " . basename($fileName) . "<br>";
        } else {
            echo "Gagal mengunggah berkas: " . basename($fileName) . "<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
