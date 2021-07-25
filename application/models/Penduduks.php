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
			(object) array('mData' => 'no_kk', 'sTitle' => 'NO. KK'),
			(object) array('mData' => 'jumlah_tanggungan', 'sTitle' => 'Jml. Tanggungan'),
			(object) array('mData' => 'buttons', 'sTitle' => ''),
		);
		$this->form = array(
			array(
				'name' => 'ada_anakyatim',
				'type' => 'hidden'
			),
			array(
				'name' => 'ada_usaha',
				'type' => 'hidden'
			),
			array(
				'name' => 'ada_ternak',
				'type' => 'hidden'
			),
			array(
				'name' => 'ada_kendaraan',
				'type' => 'hidden'
			),
			array(
				'name' => 'ada_cacat',
				'type' => 'hidden'
			),
			array(
				'name' => 'jurong',
				'width' => 2,
				'label' => 'JURONG',
				'options' => array(
					array('text' => 'A', 'value' => 'A'),
					array('text' => 'B', 'value' => 'B'),
					array('text' => 'C', 'value' => 'C'),
					array('text' => 'D', 'value' => 'D'),
					array('text' => 'E', 'value' => 'E'),
				)
			),
			array(
				'name' => 'rt',
				'width' => 2,
				'label' => 'RT',
				'attributes' => array(
					array('data-number' => 'true')
				)
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
				'type' => 'radiobutton',
				'options' => array(
					array('text' => 'Laki-Laki', 'value' => 'L'),
					array('text' => 'Perempuan', 'value' => 'P'),
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
				'label' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Laki-laki',
			),
			array(
				'name' => 'jumlah_tanggungan_perempuan',
				'width' => 2,
				'label' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Perempuan',
			),
			array(
				'name' => 'jumlah_tanggungan_jiwa',
				'width' => 2,
				'label' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jumlah Jiwa',
			),
			array(
				'name' => 'keadaan_rumah',
				'width' => 2,
				'label' => 'Keadaan Rumah',
				'options' => array(
					array('text' => 'Permanen', 'value' => 'Permanen'),
					array('text' => 'Semi Permanen', 'value' => 'Semi Permanen'),
					array('text' => 'Kayu', 'value' => 'Kayu'),
				)
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
				),
				'multiple' => true
			),
			array(
				'name' => 'air',
				'label' => 'Penggunaan Air, PDAM/Air Hujan/Beli',
				'width' => 2,
				'options' => array(
					array('text' => 'PDAM', 'value' => 'PDAM'),
					array('text' => 'Air Hujan', 'value' => 'Air Hujan'),
					array('text' => 'Beli', 'value' => 'Beli'),
				),
				'multiple' => true
			),
			array(
				'name' => 'jamban',
				'label' => 'Apakah Dirumah ini memiliki Jamban',
				'width' => 2,
				'type' => 'radiobutton',
				'options' => array(
					array('text' => 'Ada', 'value' => 'Ada'),
					array('text' => 'Tidak', 'value' => 'Tidak'),
					array('text' => 'Bersama', 'value' => 'Bersama'),
				)
			),
			array(
				'name' => 'penduduk_bukan',
				'label' => 'Penduduk / Bukan Penduduk',
				'width' => 2,
				'type' => 'radiobutton',
				'options' => array(
					array('text' => 'Penduduk', 'value' => 'Penduduk'),
					array('text' => 'Bukan Penduduk', 'value' => 'Bukan Penduduk'),
				)
			)
		);

		$this->form = array_map(function ($field) {
			if ($field['name'] === 'sejak_tahun') {
				$field['options'] = array();
				for ($y = 2000; $y <= date('Y'); $y++) $field['options'][] = array(
					'text' => $y, 'value' => "'$y'"
				);
			}
			return $field;
		}, $this->form);

		$this->childs = array(
			array(
				'label' => 'SUSUNAN KELUARGA DAN TANGGUNGAN',
				'controller' => 'PendudukKeluarga',
				'model' => 'PendudukKeluargas'
			),
			array(
				'label' => 'Apakah Dirumah ini ada anak yatim?',
				'controller' => 'PendudukAnakYatim',
				'model' => 'PendudukAnakYatims'
			),
			array(
				'label' => 'Apakah Pemilik Rumah ada membuka usaha?',
				'controller' => 'PendudukUsaha',
				'model' => 'PendudukUsahas'
			),
			array(
				'label' => 'Apakah Pemilik Rumah ada Sapi/Kambing?',
				'controller' => 'PendudukTernak',
				'model' => 'PendudukTernaks'
			),
			array(
				'label' => 'Apakah Dirumah ini ada memiliki kendaraan?',
				'controller' => 'PendudukKendaraan',
				'model' => 'PendudukKendaraans'
			),
			array(
				'label' => 'Apakah Dirumah ini ada orang yang cacat/lumpuh?',
				'controller' => 'PendudukCacat',
				'model' => 'PendudukCacats'
			),
		);
	}

	function dt()
	{
		$site_url = site_url();

		if ($filter_jurong = $this->input->get('filter_jurong')) {
			$this->db->where('jurong', $filter_jurong);
		}

		if ($filter_rt = $this->input->get('filter_rt')) {
			$this->db->where('rt', $filter_rt);
		}

		$this->datatables
			->select("{$this->table}.uuid")
			->select("{$this->table}.orders")
			->select('penduduk.nama_kk')
			->select('penduduk.no_kk')
			->select('penduduk.jumlah_tanggungan')
			->select("CONCAT(
				'<a class=\"btn btn-sm btn-info\" href=\"{$site_url}/Penduduk/read/', penduduk.uuid,'\">edit</a> ',
				'<a class=\"btn btn-sm btn-danger\" href=\"{$site_url}/Penduduk/delete/', penduduk.uuid,'\">del</a> ',
				'<a target=\"_blank\" class=\"btn btn-sm btn-warning\" href=\"{$site_url}/Penduduk/print/', penduduk.uuid,'\">print</a>'
			) buttons", false);
		return parent::dt();
	}

	function prepareFilter()
	{
		return array(
			'jurong' => array_map(
				function ($pddk) {
					return $pddk->jurong;
				},
				$this
					->db
					->select('DISTINCT jurong AS jurong', false)
					->get($this->table)
					->result()
			),
			'rt' => array_map(
				function ($pddk) {
					return $pddk->rt;
				},
				$this
					->db
					->select('DISTINCT rt AS rt', false)
					->get($this->table)
					->result()
			)
		);
	}
}
