<?php
// autoloadされないため、継承するクラスはここで定義（この先はTravelerBaseを継承）
class_exists('Base') or require APPPATH.'controllers/Base.php';

// Controller共通の底クラス
class TravelerBase extends Base {

	protected function _init()
	{
		$this->load->helper('url');
	}
}
