<?php defined('BASEPATH') or exit('No direct script access allowed');

class PendudukTernaks extends MY_Model
{

  function __construct()
  {
    parent::__construct();
    $this->table = 'pendudukternak';
    $this->thead = array(
      (object) array('mData' => 'orders', 'sTitle' => 'No', 'visible' => false),
      (object) array('mData' => 'jenis', 'sTitle' => 'Jenis'),

    );
    $this->form = array(
      array(
        'name' => 'jenis',
        'label' => 'Jenis',
        'width' => 2,
        'options' => array(
          array('text' => 'Sapi', 'value' => 'Sapi'),
          array('text' => 'Kambing', 'value' => 'Kambing'),
        )
      ),
      array(
        'name' => 'jumlah',
        'width' => 2,
        'label' => 'Jumlah',
      ),
      array(
        'name' => 'kepemilikan',
        'label' => 'Kepemilikan',
        'width' => 2,
        'options' => array(
          array('text' => 'Sendiri', 'value' => 'Sendiri'),
          array('text' => 'Bantuan', 'value' => 'Bantuan'),
        )
      ),
    );
    $this->childs = array();
  }

  function dt()
  {
    $this->datatables
      ->select("{$this->table}.uuid")
      ->select("{$this->table}.orders")
      ->select('pendudukternak.jenis');
    return parent::dt();
  }
}
