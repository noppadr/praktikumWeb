<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Data Anggota</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h2>Tambah Data Anggota</h2>
        <form action="proses.php?aksi=tambah" method="post">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <div class="form-check">
                    <input type="radio" name="jenis_kelamin" value="L" id="laki" class="form-check-input" required>
                    <label for="laki" class="form-check-label">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="jenis_kelamin" value="P" id="perempuan" class="form-check-input" required>
                    <label for="perempuan" class="form-check-label">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" name="alamat" id="alamat" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="no_telp">No. Telp:</label>
                <input type="text" name="no_telp" id="no_telp" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </form>
        <a href="index.php" class="btn btn-secondary mt-2">Kembali</a>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrap.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>