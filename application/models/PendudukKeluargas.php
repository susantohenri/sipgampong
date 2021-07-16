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
				'name' => 'tempat_lahir',
				'width' => 4,
				'label' => 'Tempat Lahir',
			),
			array(
				'name' => 'tanggal_lahir',
				'width' => 4,
				'label' => 'Tgl. Lahir',
				'attributes' => array(
					array('data-date' => 'datepicker')
				)
			),
			array(
				'name' => 'hubungan',
				'width' => 4,
				'label' => 'Hubungan dg KK',
				'options' => array(
					array('text' => 'Anak', 'value' => 'Anak'),
					array('text' => 'Istri', 'value' => 'Istri'),
					array('text' => 'Orang Tua', 'value' => 'Orang Tua'),
				)
			),
			array(
				'name' => 'pekerjaan',
				'width' => 4,
				'label' => 'Pekerjaan',
				'options' => array(
					array('text' => 'Pedagang', 'value' => 'Pedagang'),
					array('text' => 'Pegawai Negeri', 'value' => 'Pegawai Negeri'),
					array('text' => 'Karyawan Swasta', 'value' => 'Karyawan Swasta'),
				)
			),
			array(
				'name' => 'agama',
				'width' => 4,
				'label' => 'Agama',
				'options' => array(
					array('text' => 'Islam', 'value' => 'Islam'),
					array('text' => 'Kristen', 'value' => 'Kristen'),
					array('text' => 'Katolik', 'value' => 'Katolik'),
					array('text' => 'Hindu', 'value' => 'Hindu'),
					array('text' => 'Budha', 'value' => 'Budha'),
				)
			),
			array(
				'name' => 'pendidikan_terakhir',
				'width' => 4,
				'label' => 'Pendidikan Terakhir',
				'options' => array(
					array('text' => 'SD', 'value' => 'SD'),
					array('text' => 'SMP', 'value' => 'SMP'),
					array('text' => 'SMA', 'value' => 'SMA'),
					array('text' => 'S1', 'value' => 'S1'),
					array('text' => 'S2', 'value' => 'S2'),
				)
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
				'options' => array(
					array('text' => 'Jawa', 'value' => 'Jawa'),
					array('text' => 'Sunda', 'value' => 'Sunda'),
					array('text' => 'Minang', 'value' => 'Minang'),
					array('text' => 'Bugis', 'value' => 'Bugis'),
				)
			),
			array(
				'name' => 'masih_melanjutkan',
				'width' => 4,
				'label' => 'Masih Melanjutkan',
				'type' => 'radiobutton',
				'options' => array(
					array('text' => 'Ya', 'value' => 'Ya'),
					array('text' => 'Tidak', 'value' => 'Tidak'),
				)
			),
			array(
				'name' => 'dimana',
				'width' => 4,
				'label' => 'Dimana',
			),
			array(
				'name' => 'jurusan',
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
