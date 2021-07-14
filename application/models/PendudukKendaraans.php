<?php defined('BASEPATH') or exit('No direct script access allowed');

class PendudukKendaraans extends MY_Model
{

  function __construct()
  {
    parent::__construct();
    $this->table = 'pendudukkendaraan';
    $this->thead = array(
      (object) array('mData' => 'orders', 'sTitle' => 'No', 'visible' => false),
      (object) array('mData' => 'jenis', 'sTitle' => 'Jenis'),

    );
    $this->form = array(
      array(
        'name' => 'jenis',
        'label' => 'Jenis',
        'width' => 4,
        'options' => array(
          array('text' => 'Roda Dua', 'value' => 'Roda Dua'),
          array('text' => 'Roda Tiga', 'value' => 'Roda Tiga'),
          array('text' => 'Roda Empat', 'value' => 'Roda Empat'),
        )
      ),
      array(
        'name' => 'jumlah',
        'width' => 2,
        'label' => 'Jumlah',
      ),
    );
    $this->childs = array();
  }

  function dt()
  {
    $this->datatables
      ->select("{$this->table}.uuid")
      ->select("{$this->table}.orders")
      ->select('pendudukkendaraan.jenis');
    return parent::dt();
  }
}
