<?php

namespace App\Models;

use App\Core\Model;

class Pelanggan extends Model
{

     public function show()
     {
          $query = "SELECT * FROM tb_pelanggan
          JOIN tb_golongan ON tb_pelanggan.pel_id_gol=tb_golongan.gol_id";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $pel_gol_id = $_POST['gol_id'];
          $pel_nama = $_POST['pel_nama'];
          $pel_alamat = $_POST['pel_alamat'];
          $pel_hp = $_POST['pel_hp'];
          $pel_ktp = $_POST['pel_ktp'];
          $pel_seri = $_POST['pel_seri'];
          $pel_meteran = $_POST['pel_meteran'];
          $pel_aktif = $_POST['pel_aktif'];
          $pel_kode = $_POST['pel_kode'];
          $id_user = $_POST['id_user'];

          $sql = "INSERT INTO tb_pelanggan
            SET pel_id_gol=:pel_id_gol, pel_no=:pel_no, pel_nama=:pel_nama, pel_alamat=:pel_alamat, pel_hp=:pel_hp, pel_ktp=:pel_ktp, pel_seri=:pel_seri, pel_meteran=:pel_meteran, pel_aktif=:pel_aktif, pel_id_user=:pel_id_user";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":pel_id_gol", $pel_gol_id);
          $stmt->bindParam(":pel_nama", $pel_nama);
          $stmt->bindParam(":pel_alamat", $pel_alamat);
          $stmt->bindParam(":pel_hp", $pel_hp);
          $stmt->bindParam(":pel_ktp", $pel_ktp);
          $stmt->bindParam(":pel_seri", $pel_seri);
          $stmt->bindParam(":pel_meteran", $pel_meteran);
          $stmt->bindParam(":pel_aktif", $pel_aktif);
          $stmt->bindParam(":pel_no", $pel_kode);
          $stmt->bindParam(":pel_id_user", $id_user);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_pelanggan WHERE pel_id=:pel_id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":pel_id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $pel_id_gol = $_POST['gol_id'];
          $pel_nama = $_POST['pel_nama'];
          $pel_alamat = $_POST['pel_alamat'];
          $pel_hp = $_POST['pel_hp'];
          $pel_aktif = $_POST['pel_aktif'];
          $pel_id = $_POST['id'];


          $sql = "UPDATE tb_pelanggan
          SET pel_id_gol=:pel_id_gol, pel_nama=:pel_nama, pel_alamat=:pel_alamat, pel_hp=:pel_hp,  pel_aktif=:pel_aktif WHERE pel_id=:pel_id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":pel_id_gol", $pel_id_gol);
          $stmt->bindParam(":pel_nama", $pel_nama);
          $stmt->bindParam(":pel_alamat", $pel_alamat);
          $stmt->bindParam(":pel_hp", $pel_hp);
          $stmt->bindParam(":pel_aktif", $pel_aktif);
          $stmt->bindParam(":pel_id", $pel_id);

          $stmt->execute();
     }

     public function delete($id)
     {
          $sql = "DELETE FROM tb_pelanggan WHERE pel_id=:pel_id";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":pel_id", $id);
          $stmt->execute();
     }

     public function generateNoSeri()
     {
          $kode = '';
          for ($i = 0; $i <= 16; $i++) {
               $kode .= rand(0, 9);
          }

          return $kode;
     }

     public function generateMeteran()
     {
          $kode = '';
          for ($i = 0; $i <= 10; $i++) {
               $kode .= rand(0, 9);
          }

          return $kode;
     }

     public function generateKodePel()
     {
          $sql  = "SELECT MAX(pel_no) as max_id FROM tb_pelanggan";
          $stmt = $this->db->prepare($sql);
          $stmt->execute();

          $max_id = $stmt->fetchColumn(0);

          if (!$max_id) {
               $max_id = 'PL001';
          } else {
               $explode = explode('PL', $max_id);
               $urut    = (int) $explode[1] + 1;
               $nomor   = 'PL' . sprintf('%03d', $urut);
          }

          return $nomor;
     }
}
