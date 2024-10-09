<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input</title>
</head>
<body>
    <form method="POST" action="">
        <label for="input">Inputkan text:</label>
        <input type="text" id="input" name="input">
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <br><br>
        <button type="submit">Kirim</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        echo "Input yang Anda masukkan: " . $input . "<br>";

        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email valid: " . htmlspecialchars($email);
        } else {
            echo "Email tidak valid. Silakan coba lagi.";
        }
    }
    ?>
</body>
</html>

