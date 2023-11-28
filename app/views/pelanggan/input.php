<?php

$user_id = $_SESSION['user']["user_id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<h2>Input
</h2>

<form action="<?php echo URL; ?>/pelanggan/save" method="post">
    <input type="hidden" name="id_user" value="<?php echo $user_id; ?>">
    <table>
        <tr>
            <td>KODE</td>
            <td><input type="text" name="pel_kode" required value="<?php echo $data['genGolKode']; ?>" readonly></td>
        </tr>
        <tr>
            <td>GOLONGAN</td>
            <td>
                <select name="gol_id" id="gol_id">
                    <?php
                    foreach ($data["rows"] as $row) :
                    ?>
                        <option value="<?php echo $row['gol_id'] ?>">
                            <?php echo $row['gol_nama'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="pel_nama" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="pel_alamat" required></td>
        </tr>
        <tr>
            <td>NO HP</td>
            <td><input type="text" name="pel_hp" required></td>
        </tr>
        <tr>
            <td>KTP</td>
            <td><input type="text" name="pel_ktp" required></td>
        </tr>
        <tr>
            <td>SERI</td>
            <td><input type="text" name="pel_seri" required value="<?php echo $data['genNoSeri']; ?>" readonly></td>
        </tr>
        <tr>
            <td>METERAN</td>
            <td><input type="text" name="pel_meteran" required value="<?php echo $data['genMeteran']; ?>" readonly></td>
        </tr>
        <tr>
            <td>STATUS</td>
            <td>
                <select name="pel_aktif" id="pel_aktif">
                    <option value="Y">Aktif</option>
                    <option value="N">Nonaktif</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE" class="btn"></td>
        </tr>
    </table>
</form>