<?php
class GS_Controller_Class{
	public $_controller;
	public function __construct(){
	}
	public function loadView($view){
		$_view = new GS_View_Class($this->_controller);
		$_view->setView($view);
	}
	public function setController($_controller){
		$this->_controller = $_controller;
	}
}
?>