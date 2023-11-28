<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<h2>Edit
</h2>

<form action="<?php echo URL; ?>/pelanggan/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['pel_id']; ?>">
    <table>
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
            <td><input type="text" name="pel_nama" value="<?php echo $data['row']['pel_nama']; ?>" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="pel_alamat" value="<?php echo $data['row']['pel_alamat']; ?>" required></td>
        </tr>
        <tr>
            <td>NO HP</td>
            <td><input type="text" name="pel_hp" value="<?php echo $data['row']['pel_hp']; ?>" required></td>
        </tr>
        <tr>
            <td>AKTIF</td>
            <td>
                <select name="pel_aktif" id="pel_aktif">
                    <option value="Y">Aktif</option>
                    <option value="N">Nonaktif</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE" class="btn"></td>
        </tr>
    </table>
</form>