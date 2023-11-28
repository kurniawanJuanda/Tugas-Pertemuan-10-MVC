<?php

namespace App\Models;

use App\Core\Model;

class Golongan extends Model
{

     public function show()
     {
          $query = "SELECT * FROM tb_golongan";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $gol_nama = $_POST['gol_nama'];
          $gol_kode = $_POST['gol_kode'];

          $sql = "INSERT INTO tb_golongan
            SET gol_nama=:gol_nama, gol_kode=:gol_kode";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":gol_nama", $gol_nama);
          $stmt->bindParam(":gol_kode", $gol_kode);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_golongan WHERE gol_id=:gol_id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":gol_id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $gol_nama = $_POST['gol_nama'];
          $gol_kode = $_POST['gol_kode'];
          $id = $_POST['id'];

          $sql = "UPDATE tb_golongan
          SET gol_nama=:gol_nama, gol_kode=:gol_kode WHERE gol_id=:gol_id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":gol_nama", $gol_nama);
          $stmt->bindParam(":gol_kode", $gol_kode);
          $stmt->bindParam(":gol_id", $id);

          $stmt->execute();
     }

     public function delete($id)
     {
          $sql = "DELETE FROM tb_golongan WHERE gol_id=:gol_id";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":gol_id", $id);
          $stmt->execute();
     }

     public function generateKodeGol()
     {
          $sql  = "SELECT MAX(gol_kode) as max_id FROM tb_golongan";
          $stmt = $this->db->prepare($sql);
          $stmt->execute();

          $max_id = $stmt->fetchColumn(0);

          if (!$max_id) {
               $max_id = 'GL001';
          } else {
               $explode = explode('GL', $max_id);
               $urut    = (int) $explode[1] + 1;
               $nomor   = 'GL' . sprintf('%03d', $urut);
          }

          return $nomor;
     }
}
