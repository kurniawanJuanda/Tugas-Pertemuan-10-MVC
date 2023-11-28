<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<h2>Edit</h2>

<form action="<?php echo URL; ?>/users/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['user_id']; ?>">
    <table>
        <tr>
            <td>EMAIL</td>
            <td><input type="email" name="email" value="<?php echo $data['row']['user_email']; ?>" required></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td><input type="password" name="password" value="<?php echo $data['row']['user_password']; ?>"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" value="<?php echo $data['row']['user_nama']; ?>" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="alamat" value="<?php echo $data['row']['user_alamat']; ?>" required></td>
        </tr>
        <tr>
            <td>NO HP</td>
            <td><input type="text" name="hp" value="<?php echo $data['row']['user_hp']; ?>" required></td>
        </tr>
        <tr>
            <td>KODE POS</td>
            <td><input type="text" name="pos" value="<?php echo $data['row']['user_pos']; ?>" required></td>
        </tr>
        <tr>
            <td>ROLE</td>
            <td><input type="text" name="role" value="<?php echo $data['row']['user_role']; ?>" required></td>
        </tr>
        <tr>
            <td>AKTIF</td>
            <td><input type="text" name="aktif" value="<?php echo $data['row']['user_aktif']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE" class="btn"></td>
        </tr>
    </table>
</form>