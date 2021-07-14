<?php defined('BASEPATH') or exit('No direct script access allowed');

class PendudukAnakYatims extends MY_Model
{

  function __construct()
  {
    parent::__construct();
    $this->table = 'pendudukanakyatim';
    $this->thead = array(
      (object) array('mData' => 'orders', 'sTitle' => 'No', 'visible' => false),
      (object) array('mData' => 'nama', 'sTitle' => 'Nama'),

    );
    $this->form = array(
      array(
        'name' => 'nama',
        'width' => 4,
        'label' => 'Nama',
      ),
      array(
        'name' => 'nama_ayah',
        'width' => 4,
        'label' => 'Nama Ayah',
      ),
      array(
        'name' => 'tahun_meninggal',
        'width' => 4,
        'label' => 'Tahun Berapa Almarhum',
      ),
      array(
        'name' => 'tempat_meninggal',
        'width' => 4,
        'label' => 'Bertempat',
      ),
      array(
        'name' => 'sebab_meninggal',
        'width' => 8,
        'label' => 'Sebab Meninggal',
      ),
    );
    $this->childs = array();
  }

  function dt()
  {
    $this->datatables
      ->select("{$this->table}.uuid")
      ->select("{$this->table}.orders")
      ->select('pendudukanakyatim.nama');
    return parent::dt();
  }
}
