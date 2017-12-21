<?php

class_exists('TravelerBase')   or require APPPATH.'controllers/TravelerBase.php';

class TopPage extends TravelerBase {

	public function index()
	{
		parent::_init();
		$this->load->view('top/index');
	}
}