<?php defined('BASEPATH') or exit('No direct script access allowed');

class PendudukUsahas extends MY_Model
{

  function __construct()
  {
    parent::__construct();
    $this->table = 'pendudukusaha';
    $this->thead = array(
      (object) array('mData' => 'orders', 'sTitle' => 'No', 'visible' => false),
      (object) array('mData' => 'rincian', 'sTitle' => 'Rincian'),

    );
    $this->form = array(
      array(
        'name' => 'rincian',
        'width' => 2,
        'label' => 'Rincian',
      ),
    );
    $this->childs = array();
  }

  function dt()
  {
    $this->datatables
      ->select("{$this->table}.uuid")
      ->select("{$this->table}.orders")
      ->select('pendudukusaha.rincian');
    return parent::dt();
  }
}
