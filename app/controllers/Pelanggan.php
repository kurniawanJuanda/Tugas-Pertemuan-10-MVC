<?php

namespace App\Controllers;

use App\Core\Controller;

class Pelanggan extends Controller
{
     public object $model;
     public object $golonganModel;

     public function __construct()
     {
          parent::cekLogin();

          $this->model = new \App\Models\Pelanggan();
          $this->golonganModel = new \App\Models\Golongan();
     }

     public function index()
     {
          $data["rows"]       = $this->model->show();
          $this->dashboard('pelanggan/index', $data);
     }

     public function input()
     {
          $data["genNoSeri"]  = $this->model->generateNoSeri();
          $data["genMeteran"] = $this->model->generateMeteran();
          $data["genGolKode"] = $this->model->generateKodePel();
          $data["rows"]        = $this->golonganModel->show();
          $this->dashboard('pelanggan/input', $data);
     }

     public function save()
     {
          $this->model->save();
          header('location:' . URL . '/pelanggan');
     }

     public function edit($id)
     {
          $data['row'] = $this->model->edit($id);
          $data["rows"]        = $this->golonganModel->show();
          $this->dashboard('pelanggan/edit', $data);
     }

     public function update()
     {
          $this->model->update();
          header('location:' . URL . '/pelanggan');
     }

     public function delete($id)
     {
          $this->model->delete($id);
          header('location:' . URL . '/pelanggan');
     }
}
