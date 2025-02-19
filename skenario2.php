<?php
$waktu = "";
if (isset($_POST["jam"])) {
    $jam = $_POST["jam"] + 0; // Konversi ke angka tanpa fungsi
    if ($jam >= 0 && $jam < 4) $waktu = "Dini hari";
    else if ($jam >= 4 && $jam < 10) $waktu = "Pagi";
    else if ($jam >= 10 && $jam < 15) $waktu = "Siang";
    else if ($jam >= 15 && $jam < 17.5) $waktu = "Sore";
    else if ($jam >= 17.5 && $jam < 18.5) $waktu = "Petang";
    else if ($jam >= 18.5 && $jam < 24) $waktu = "Malam";
    else $waktu = "Dunia lain";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Waktu ke Keterangan</title>
</head>
<body>
    <form method="post">
        <label for="jam">Masukkan jam (0-24):</label>
        <input type="number" name="jam" id="jam" min="0" max="24" step="0.01" required>
        <button type="submit">Submit</button>
    </form>
    
    <?php if ($waktu !== "") { ?>
        <p>Jam <?php echo $jam; ?> = <?php echo $waktu; ?></p>
    <?php } ?>
</body>
</html>