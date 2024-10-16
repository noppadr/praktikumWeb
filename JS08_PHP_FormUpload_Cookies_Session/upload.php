<?php
if(isset($_POST["submit"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["myfile"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowedTypes = array("jpg", "jpeg", "png", "gif");
    
    if(in_array($imageFileType, $allowedTypes) && $_FILES["myfile"]["size"] <= 500000) {
        if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)) {
            echo "File berhasil diunggah.<br><br>";
            
            // Menampilkan thumbnail gambar
            list($width, $height) = getimagesize($target_file);
            $new_width = 200;
            $new_height = ($height / $width) * $new_width;
            
            echo "<img src='$target_file' width='$new_width' height='$new_height' />";
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang disetujui.";
    }
}
?>
