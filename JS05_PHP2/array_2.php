<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Styled Table</title>
        <style>
            table {
                width: 50%;
                margin: 20px auto;
                border-collapse: collapse;
                text-align: left;
            }
            th, td {
                padding: 12px;
                border: 1px solid #ddd;
            }
            th {
                background-color: #f2f2f2;
            }
            tr:nth-child(even) {
                background-color: #f9f9f9;
            }
        </style>
    </head>
    <body>
        <?php
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan' ];

            echo "<table>";
            echo "<tr><th>Field</th><th>Value</th></tr>";
            echo "<tr><td>Nama</td><td>{$Dosen['nama']}</td></tr>";
            echo "<tr><td>Domisili</td><td>{$Dosen['domisili']}</td></tr>";
            echo "<tr><td>Jenis Kelamin</td><td>{$Dosen['jenis_kelamin']}</td></tr>";
            echo "</table>";
        ?>
    </body>
</html>
