<?php
class GS_View_Class
{
	private $view = '';
	public $file_path = '';
	public $_controller = '';
	public function __construct($_controller){
		$this->_controller = $_controller;
	}
	public function setView($view){
		$this->view = $view;
		$_view_path = WEB_DIR.DS.$this->_controller.DS.'layout'.DS.$this->view.'.php';
		if(file_exists($_view_path)){
			include $_view_path;
		}
		else
		{
			echo "View ".$this->view." not found.";
		}
	}
	public function view_exists($view){
		$this->file_path = 'view'.DS.CONTROLLER.DS.$view.'.php';
		if(!file_exists($this->file_path)){
			return false;
		}
		else{
			return true;
		}
	}
	public function loadSection($_section){
		$_loadSection = new GS_Section_Class($this->_controller);
		$_loadSection->setSection($_section);
	}
	public function loadMainSection($_section){
		$_loadSection = new GS_Section_Class($this->_controller);
		$_loadSection->setMainSection($_section);	
	}
}
?>