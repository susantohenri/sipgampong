<?php defined('BASEPATH') or exit('No direct script access allowed');

class PendudukKendaraan extends MY_Controller
{

	function __construct()
	{
		$this->model = 'PendudukKendaraans';
		parent::__construct();
	}
}
