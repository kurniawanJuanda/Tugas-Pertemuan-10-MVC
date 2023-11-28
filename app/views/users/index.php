<center>
      <h2>USER</h2>
</center>

<center><a href="<?php echo URL; ?>/users/input" class="btn">
            Tambah
      </a></center>

<table id="dtb">
      <thead>
            <tr>
                  <th>NO</th>
                  <th>EMAIL</th>
                  <th>PASSWORD</th>
                  <th>NAMA</th>
                  <th>ALAMAT</th>
                  <th>NO HP</th>
                  <th>KODE POS</th>
                  <th>EDIT</th>
                  <th>DELETE</th>
            </tr>
      </thead>
      <tbody>
            <?php $no = 1;
            foreach ($data['rows'] as $row) { ?>
                  <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['user_email']; ?></td>
                        <td><?php echo $row['user_password']; ?></td>
                        <td><?php echo $row['user_nama']; ?></td>
                        <td><?php echo $row['user_alamat']; ?></td>
                        <td><?php echo $row['user_hp']; ?></td>
                        <td><?php echo $row['user_pos']; ?></td>
                        <td><a href="<?php echo URL; ?>/users/edit/<?php echo $row['user_id']; ?>" class="btn">Edit</a></td>
                        <td><a href="<?php echo URL; ?>/users/delete/<?php echo $row['user_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
                  </tr>
            <?php $no++;
            } ?>
      </tbody>
</table>