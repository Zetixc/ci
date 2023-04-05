<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
</head>
<body>

    <h2>Input Biodata</h2>
    <pre>
    <?php echo form_open('Home/kirim_data') ?>
    Nama    : <input type="text" name="txtnama">
    <?php echo validation_errors('txtnama'); ?>  <br>
    Alamat  : <textarea name="txtalamat"></textarea>  
    <?php echo validation_errors('txtalamat'); ?><br>
    No Telp : <input type="text" name="txtnotelp"> 
    <?php echo validation_errors('txtnotelp'); ?><br>
    <button type="submit">Kirim</button> <button type="reset">Batal</button>
    <?php echo form_close('') ?>
    </pre>
    <a href="<?php echo base_url('Home/kontak') ?>">Halaman Kontak</a> <br>
    <a href="<?php echo base_url('Home/about') ?>">Halaman About</a>
   
</body>
</html>