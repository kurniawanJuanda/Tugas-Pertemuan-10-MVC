<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<h2>
    Input
</h2>

<form action="<?php echo URL; ?>/golongan/save" method="post">
    <table>
        <tr>
            <td>KODE</td>
            <td>
                <input type="text" name="gol_kode" required value="<?php echo $data['genKodeGol']; ?>" readonly>
            </td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="gol_nama" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE" class="btn"></td>
        </tr>
    </table>
</form>