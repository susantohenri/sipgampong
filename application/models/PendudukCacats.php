<?php defined('BASEPATH') or exit('No direct script access allowed');

class PendudukCacats extends MY_Model
{

  function __construct()
  {
    parent::__construct();
    $this->table = 'pendudukcacat';
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
        'name' => 'cacat',
        'width' => 5,
        'label' => 'Jelaskan Cacatnya',
      ),
      array(
        'name' => 'sejak_tahun',
        'width' => 2,
        'label' => 'Sejak Tahun',
      ),
    );
    $this->childs = array();
  }

  function dt()
  {
    $this->datatables
      ->select("{$this->table}.uuid")
      ->select("{$this->table}.orders")
      ->select('pendudukcacat.nama');
    return parent::dt();
  }
}
