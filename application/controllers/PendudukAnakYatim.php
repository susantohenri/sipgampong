<?php defined('BASEPATH') or exit('No direct script access allowed');

class PendudukAnakYatim extends MY_Controller
{

	function __construct()
	{
		$this->model = 'PendudukAnakYatims';
		parent::__construct();
	}

	function subformcreate()
	{
		$model = $this->model;
		$vars = array();
		$vars['form'] = $this->$model->getForm(false, true);
		$vars['subformlabel'] = $this->subformlabel;
		$vars['controller'] = $this->controller;
		$vars['uuid'] = '';
		$this->loadview('subform-anakyatim', $vars);
	}

	function subformread($uuid)
	{
		$data = array();
		$model = $this->model;
		$data['form'] = $this->$model->getForm($uuid, true);
		$data['subformlabel'] = $this->subformlabel;
		$data['controller'] = $this->controller;
		$data['uuid'] = $uuid;
		$data['item'] = $this->{$this->model}->findOne($uuid);
		$this->loadview('subform-anakyatim', $data);
	}
}
