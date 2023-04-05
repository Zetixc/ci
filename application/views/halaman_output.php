<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Output</title>
</head>
<body>
    <pre>
    Nama    : <?php echo $nama ?> <br>
    Alamat  : <?php echo $alamat ?> <br>
    No Telp : <?php echo $notelp ?>
    </pre>
    <a href="<?php echo base_url('Home/index') ?>">Kembali</a>
</body>
</html>