<?php defined('BASEPATH') or exit('No direct script access allowed');

class PendudukKeluargas extends MY_Model
{

	function __construct()
	{
		parent::__construct();
		$this->table = 'pendudukkeluarga';
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
				'name' => 'ttl',
				'width' => 4,
				'label' => 'Tempat/Tgl. Lahir',
			),
			array(
				'name' => 'hubungan',
				'width' => 4,
				'label' => 'Hubungan dg KK',
			),
			array(
				'name' => 'pekerjaan',
				'width' => 4,
				'label' => 'Pekerjaan',
			),
			array(
				'name' => 'agama',
				'width' => 4,
				'label' => 'Agama',
			),
			array(
				'name' => 'pendidikan_terakhir',
				'width' => 4,
				'label' => 'Pendidikan Terakhir',
			),
			array(
				'name' => 'pendidikan_tamat',
				'label' => 'Tamat/Tidak',
				'width' => 4,
				'options' => array(
					array('text' => 'Tamat', 'value' => 'Tamat'),
					array('text' => 'Tidak', 'value' => 'Tidak'),
				)
			),
			array(
				'name' => 'suku',
				'width' => 4,
				'label' => 'Suku',
			),
			array(
				'name' => 'pendidikan_sekarang',
				'width' => 4,
				'label' => 'Masih Melanjutkan Dimana',
			),
			array(
				'name' => 'pendidikan_sekarang_jurusan',
				'width' => 4,
				'label' => 'Jurusan',
			),
		);
		$this->childs = array();
	}

	function dt()
	{
		$this->datatables
			->select("{$this->table}.uuid")
			->select("{$this->table}.orders")
			->select('pendudukkeluarga.nama');
		return parent::dt();
	}
}
