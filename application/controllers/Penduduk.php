<?php defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk extends MY_Controller
{

	function __construct()
	{
		$this->model = 'Penduduks';
		parent::__construct();
	}

	function create()
	{
		$model = $this->model;
		$vars = array();
		$vars['page_name'] = 'form';
		$vars['form']     = $this->$model->getForm();
		$vars['subform'] = $this->$model->getFormChild();
		$vars['uuid'] = '';
		$vars['js'] = array(
			'moment.min.js',
			'bootstrap-datepicker.js',
			'daterangepicker.min.js',
			'select2.full.min.js',
			'form.js',
			'penduduk-subform.js'
		);
		$this->loadview('index', $vars);
	}

	function read($id)
	{
		$vars = array();
		$vars['page_name'] = 'form';
		$model = $this->model;
		$vars['form'] = $this->$model->getForm($id);
		$vars['subform'] = $this->$model->getFormChild($id);
		$vars['uuid'] = $id;
		$vars['js'] = array(
			'moment.min.js',
			'bootstrap-datepicker.js',
			'daterangepicker.min.js',
			'select2.full.min.js',
			'form.js',
			'penduduk-subform.js'
		);
		$this->loadview('index', $vars);
	}

	function page1($uuid)
	{
		$this->load->view('page1', $this->{$this->model}->findOne($uuid));
	}

	function page2($uuid)
	{
		$this->load->view('page2');
	}
}
