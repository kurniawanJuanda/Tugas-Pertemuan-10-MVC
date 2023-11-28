<center>
      <h2>PELANGGAN</h2>
</center>

<center><a href="<?php echo URL; ?>/pelanggan/input" class="btn">
            Tambah
      </a></center>

<table id="dtb">
      <thead>
            <tr>
                  <th>NO</th>
                  <th>GOLONGAN</th>
                  <th>NAMA</th>
                  <th>ALAMAT</th>
                  <th>HP</th>
                  <th>KTP</th>
                  <th>SERI</th>
                  <th>METERAN</th>
                  <th>AKTIF</th>
                  <th>EDIT</th>
                  <th>DELETE</th>
            </tr>
      </thead>
      <tbody>

            <?php $no = 1;
            foreach ($data['rows'] as $row) { ?>
                  <tr>
                        <td>
                              <?php echo $no; ?>
                        </td>
                        <td>
                              <?php echo $row['gol_nama']; ?>
                        </td>
                        <td>
                              <?php echo $row['pel_nama']; ?>
                        </td>
                        <td>
                              <?php echo $row['pel_alamat']; ?>
                        </td>
                        <td>
                              <?php echo $row['pel_hp']; ?>
                        </td>
                        <td>
                              <?php echo $row['pel_ktp']; ?>
                        </td>
                        <td>
                              <?php echo $row['pel_seri']; ?>
                        </td>
                        <td>
                              <?php echo $row['pel_meteran']; ?>
                        </td>
                        <?php if ($row['pel_aktif'] == 'Y') : ?>
                              <td><span class="aktif">Aktif</span></td>
                        <?php else : ?>
                              <td><span class="nonaktif">Nonaktif</span></td>
                        <?php endif; ?>
                        <td><a href="<?php echo URL; ?>/pelanggan/edit/<?php echo $row['pel_id']; ?>" class="btn">Edit</a>
                        </td>
                        <td><a href="<?php echo URL; ?>/pelanggan/delete/<?php echo $row['pel_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
                  </tr>
            <?php $no++;
            } ?>

      </tbody>
</table>