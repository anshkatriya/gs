<?php
class GS_Admin_Controller extends GS_Controller_Class
{
	public function __construct(){
		$this->setController('admin');
	}
	public function index(){
		$this->loadView('index');
	}
	public function test(){
		$this->loadView('test');
	}

}
?>