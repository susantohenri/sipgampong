<?php defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk extends MY_Controller
{

	function __construct()
	{
		$this->model = 'Penduduks';
		parent::__construct();
	}
}
