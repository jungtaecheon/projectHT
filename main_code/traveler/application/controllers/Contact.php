<?php

class_exists('TravelerBase')   or require APPPATH.'controllers/TravelerBase.php';

class Contact extends TravelerBase {

	public function index()
	{
		parent::_init();
		$this->load->view('contact/index');
	}
}