<?php defined('BASEPATH') or exit('No direct script access allowed');

class Penduduks extends MY_Model
{

	function __construct()
	{
		parent::__construct();
		$this->table = 'penduduk';
		$this->thead = array(
			(object) array('mData' => 'orders', 'sTitle' => 'No', 'visible' => false),
			(object) array('mData' => 'nama_kk', 'sTitle' => 'NAMA KEPALA KELUARGA'),
		);
		$this->form = array(
			array(
				'name' => 'rt',
				'width' => 2,
				'label' => 'RT',
			),
			array(
				'name' => 'jurong',
				'width' => 2,
				'label' => 'JURONG',
			),
			array(
				'name' => 'no_kk',
				'width' => 2,
				'label' => 'NOMOR KK',
			),
			array(
				'name' => 'nama_kk',
				'width' => 2,
				'label' => 'NAMA KEPALA KELUARGA',
			),
			array(
				'name' => 'status_perkawian',
				'label' => 'STATUS PERKAWINAN',
				'width' => 2,
				'options' => array(
					array('text' => 'Kawin', 'value' => 'Kawin'),
					array('text' => 'Belum Kawin', 'value' => 'Belum Kawin'),
					array('text' => 'Pernah Kawin', 'value' => 'Pernah Kawin'),
					array('text' => 'Cerai Mati', 'value' => 'Cerai Mati'),
					array('text' => 'Cerai Hidup', 'value' => 'Cerai Hidup'),
				)
			),
			array(
				'name' => 'jenis_kelamin',
				'label' => 'JENIS KELAMIN',
				'width' => 2,
				'options' => array(
					array('text' => 'L', 'value' => 'L'),
					array('text' => 'P', 'value' => 'P'),
				)
			),
			array(
				'name' => 'jumlah_tanggungan',
				'width' => 2,
				'label' => 'Jumlah Tanggungan',
			),
			array(
				'name' => 'jumlah_tanggungan_laki_laki',
				'width' => 2,
				'label' => 'Laki-laki',
			),
			array(
				'name' => 'jumlah_tanggungan_perempuan',
				'width' => 2,
				'label' => 'Perempuan',
			),
			array(
				'name' => 'jumlah_tanggungan_jiwa',
				'width' => 2,
				'label' => 'Jumlah Jiwa',
			),
			array(
				'name' => 'keadaan_rumah',
				'width' => 2,
				'label' => 'Keadaan Rumah',
			),
			array(
				'name' => 'kepemilikan_rumah',
				'label' => 'Kepemilikan Rumah',
				'width' => 2,
				'options' => array(
					array('text' => 'Rumah Sendiri', 'value' => 'Rumah Sendiri'),
					array('text' => 'Sewa', 'value' => 'Sewa'),
					array('text' => 'Numpang', 'value' => 'Numpang'),
					array('text' => 'Rumah Dinas', 'value' => 'Rumah Dinas'),
				)
			),
			array(
				'name' => 'sejak_tahun',
				'width' => 2,
				'label' => 'Sejak Tahun Berapa Tinggal di Gampong Cot Ba\'u',
			),
			array(
				'name' => 'listrik',
				'label' => 'Penggunaan Lampu, PLN/Lainnya',
				'width' => 2,
				'options' => array(
					array('text' => 'PLN', 'value' => 'PLN'),
					array('text' => 'Yang Lain', 'value' => 'Yang Lain'),
				)
			),
			array(
				'name' => 'air',
				'label' => 'Penggunaan Air, PDAM/Air Hujan/Beli',
				'width' => 2,
				'options' => array(
					array('text' => 'PDAM', 'value' => 'PDAM'),
					array('text' => 'Air Hujan', 'value' => 'Air Hujan'),
					array('text' => 'Beli', 'value' => 'Beli'),
				)
			),
			array(
				'name' => 'jamban',
				'label' => 'Apakah Dirumah ini memiliki Jamban',
				'width' => 2,
				'options' => array(
					array('text' => 'Ada', 'value' => 'Ada'),
					array('text' => 'Tidak', 'value' => 'Tidak'),
					array('text' => 'Bersama', 'value' => 'Bersama'),
				)
			),
		);
		$this->childs = array(
			array(
				'label' => 'SUSUNAN KELUARGA DAN TANGGUNGAN',
				'controller' => 'PendudukKeluarga',
				'model' => 'PendudukKeluargas'
			),
			array(
				'label' => 'Apakah Dirumah ini ada anak yatim',
				'controller' => 'PendudukAnakYatim',
				'model' => 'PendudukAnakYatims'
			),
			array(
				'label' => 'Apakah Pemilik Rumah ada membuka usaha',
				'controller' => 'PendudukUsaha',
				'model' => 'PendudukUsahas'
			),
			array(
				'label' => 'Apakah Pemilik Rumah ada Sapi/Kambing',
				'controller' => 'PendudukTernak',
				'model' => 'PendudukTernaks'
			),
			array(
				'label' => 'Apakah Dirumah ini ada memiliki kendaraan',
				'controller' => 'PendudukKendaraan',
				'model' => 'PendudukKendaraans'
			),
			array(
				'label' => 'Apakah Dirumah ini ada orang yang cacat/lumpuh',
				'controller' => 'PendudukCacat',
				'model' => 'PendudukCacats'
			),
		);
	}

	function dt()
	{
		$this->datatables
			->select("{$this->table}.uuid")
			->select("{$this->table}.orders")
			->select('penduduk.nama_kk');
		return parent::dt();
	}
}
